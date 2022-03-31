<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerLogin extends MY_Controller {
	 function __construct(){

        parent::__construct();

        $this->load->model('Admin_model');
        
//For place order email

        $config['protocol'] = 'mail';

        $config['mailtype'] = 'html';

        $this->load->library('email',$config);
      $this->email->initialize(array(

                 'crlf' => "\r\n",

                 'newline' => "\r\n",

                 'mailtype'  => 'html', 

                 'charset'   => 'utf8'

              ));


//For place order email

    }
    public function user_login()
    {
        //echo"HI";die;
        extract($this->input->post());
        if(isset($_POST['signin'])){
            extract($this->input->post());
            $this->form_validation->set_rules('user_email', 'Email:', 'required|trim');  
            $this->form_validation->set_rules('user_password', 'Password:', 'required|trim'); 
            if ($this->form_validation->run())   
            {
                $username = $_POST['user_email'];
                $password = $_POST['user_password'];
                
				
                 $data = array(  
                        'user_email' => $username,  
                        'password' => md5($password),
                        'is_active'=>1 
                        );  
//				echo($username);
//				echo(' - ');
//				echo(md5($password));
				
                $getResult = $this->Admin_model->auth_check($data);  
				
                if($getResult){
                    
                    $query = $this->Admin_model->get_row(REGISTERUSER,array('user_email'=>$username));
                    $userdata = array(
                                    'id' =>$query->id,
                                    'user_email' =>$query->user_email,
                                    'user_name' =>$query->user_name,
                                    'logged_in' => true
                                    );
                    $this->session->set_userdata('userdata',$userdata); 
                    //echo "Your are Login In";die;
                    $this->session->set_flashdata('success_msg', '<p class="alert alert-success">Email/Password is Incorrect!</p>');
                    redirect(base_url());
                    //print_r($query);die;
                }else{
                    $this->session->set_flashdata('success_msg', '<p class="alert alert-danger">Email/Password is Incorrect!!</p>');
                }
            }
           // redirect(base_url()."AdminController/dashboard");
        }
        $this->render_second('front/pages/login','');
    }
    

    	public function insertUser(){

			/*$this->load->library('form_validation');
			$this->form_validation->set_rules('user_name','User Name','required|alpha');
			$this->form_validation->set_rules('user_email','User Email','required');
			$this->form_validation->set_rules('user_phone','User Contact Number','numeric');
			$this->form_validation->set_rules('user_password','User Password','required|alpha_numeric');
			$this->form_validation->set_rules('user_cpassword','User Password','required|alpha_numeric|matches[user_password]');*/

			if(!empty($_FILES['user_photo']['name'])){
                $config['upload_path'] = './upload/users';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['user_photo']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('user_photo')){
                    $uploadData = $this->upload->data();
                    $image = $uploadData['file_name'];
                }else{
                    $image = '';
                }
            }else{
                $image = 'default_auth.png';
            }

		$data = array(  
                        'user_name'     => $this->input->post('user_name'),  
                        'user_email'  => $this->input->post('user_email'),  
                        'password' => md5($this->input->post('user_password')),  
                        'phone'   => $this->input->post('user_phone'),
                        'user_image' => $image   
                        );
		//echo"<pre>";print_r($data);die;
		$result = $this->Admin_model->insert(REGISTERUSER,$data);

		($result==TRUE)?
			$this->session->set_flashdata('success_msg', '<p class="alert alert-success">Your Registration Successfully Please Check Your Email !</p>'):
			$this->session->set_flashdata('success_msg', '<p class="alert alert-danger">USer Successfully Block !</p>');

		$result==TRUE?redirect(base_url().'/Users-Register',''):FALSE;

	}
    
    public function user_profile($uid){
        //$data['user_id'] = $uid;
       $data['user_details'] = $this->Admin_model->get_row(REGISTERUSER,array('id'=>$uid));

        $this->render_second('front/pages/user_profile',$data);
    }

  public function update_user_profile(){
               // $id = @$_POST['id'];
                //echo$uid;die;
            if(!empty($_FILES['user_photo']['name'])){
                $config['upload_path'] = './upload/users';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['user_photo']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('user_photo')){
                    $uploadData = $this->upload->data();
                    $image = $uploadData['file_name'];
                }else{
                    $image = '';
                }
            }else{
                $image = 'default_auth.png';
            }

        $data = array(  
                        'id'=> $this->input->post('id'),
                        'user_name'     => $this->input->post('user_name').' '.$this->input->post('user_lname'),  
                        'user_email'  => $this->input->post('user_email'),  
                        'password' => md5($this->input->post('user_password')),  
                        'phone'   => $this->input->post('user_phone'),
                        'user_image' => $image   
                        );
       //echo"<pre>";print_r($data['id']);die;
        $result = $this->Admin_model->update(REGISTERUSER,$data,array('id'=>$data['id']));

        ($result==TRUE)?
            $this->session->set_flashdata('succe_msg', '<p class="alert alert-success">Your Profile Updated Successfully !</p>'):
            $this->session->set_flashdata('success_msg', '<p class="alert alert-danger">Your Profile Updated Have error Please Try again !</p>');

        $result==TRUE?redirect(base_url().'Users-Profile/'.$data['id'],'refresh'):FALSE;



    }
    public function forgot_password(){
       if(isset($_POST['send'])){
        extract($this->input->post());
        $email = $_POST['user_email'];
        $checkemail = $this->Admin_model->get_row(REGISTERUSER,array('user_email'=>$email));
       /* echo "<pre/>";
        print_r($checkemail->id);die;*/
        if(!empty($checkemail)){



            $link = base_url('ControllerLogin/change_password/'.$checkemail->id);
            $name = $checkemail->user_name;
            $msg = '<p>Hi '.$name.' !</p><p>Somebody (hopefully you) requested a new password for your account.</p><p>No changes have been made to your account yet. 
You can reset your password by click this link:</p><p>'.$link.' </p><p>If you did not request a password reset, no further action is required. </p><p>Thanks and Best Regards!</p>';


                        $config = Array(
                            'protocol' => 'smtp',
                            'smtp_host' => 'ssl://smtp.googlemail.com',
                            'smtp_port' => 587,
                            'smtp_user' => 'hotelmho@gmail.com',
                            'smtp_pass' => 'MHOHotel!15',
                            'mailtype'  => 'html', 
                            'charset'   => 'iso-8859-1'
                        );
                        $this->load->library('email', $config);
                        $this->email->set_newline("\r\n");

                        $this->email->from('hotelmho@gmail.com', 'Hotel MHO');
                        $this->email->to($email); 

                        $this->email->subject('MHO Hotel Reset Password');
                        $this->email->message($msg);  
                        @$check = $this->email->send();


                

                    /*$this->load->library('email');
                    $this->email->from('info@shresthinfosec.com');
                   // $this->email->to('rupesh.atweshsolutions@gmail.com');
                    $this->email->to($checkemail->user_email);
                    $this->email->bcc('hotelmho@gmail.com,keyurmca27@gmail.com'); 
                    $this->email->subject('MHO Hotel Reset Password');
                    $this->email->message($msg);
                    //$this->email->message($message);
                    $check = $this->email->send();*/
                    if($check){
                        $this->session->set_flashdata('success_msg', '<p class="alert alert-success">change password link send on your email !</p>');
                        redirect(base_url().'ForgotPassword','refresh');
                    }
        }else{
            $this->session->set_flashdata('success_msg', '<p class="alert alert-danger">Sorry! Looks like this email is not registered with us yet.</p>');
            redirect(base_url().'ForgotPassword','refresh');
        }
        
       }   
       $this->render_second('front/pages/forgot_password',''); 
    }
    public function change_password(){
        $data['id'] =  $this->uri->segment('3');
        if(isset($_POST['reset_password'])){
            $id = $_POST['id'];
            $newpass = $_POST['password'];
            $where = array('id'=>$id);
            $update_pass = array('password'=>md5($newpass));
            $result = $this->Admin_model->update(REGISTERUSER,$update_pass,$where);
            if($result){
                $this->session->set_flashdata('success_msg', '<p class="alert alert-success">password Successfully Updated !</p>');
                redirect(base_url().'Users-Login','refresh');
            }else{
            $this->session->set_flashdata('success_msg', '<p class="alert alert-danger">Password bot change !</p>');
                redirect(base_url().'Change-Password','refresh');
            }
            echo "<pre/>";
            print_r($where);
            print_r($update_pass);die;
        }
        // $email_id = $this->input->post('user_email');
        // echo$email_id;

        $this->render_second('front/pages/change_password',$data); 
    }
    public function logout(){
        $newdata = array(
                'id' => '',
                'user_name'  =>'',
                'user_email' => '',
               );

     $this->session->unset_userdata($newdata);
     $this->session->sess_destroy();

     redirect(base_url());
    }

}
