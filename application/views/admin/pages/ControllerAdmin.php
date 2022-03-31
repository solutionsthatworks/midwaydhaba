<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerAdmin extends MY_Controller {
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


    public function index(){
    	extract($this->input->post());
    	if(isset($_POST['login'])){
            extract($this->input->post());
            $this->form_validation->set_rules('user_email', 'Email:', 'required|trim');  
            $this->form_validation->set_rules('user_password', 'Password:', 'required|trim'); 
            if ($this->form_validation->run())   
            {
                $username = $_POST['user_email'];
                $password = $_POST['user_password'];
                
                 $data = array(  
                        'user_email' => $username,  
                        'password' => $password
                        );  
                $getResult = $this->Admin_model->auth_check_admin($data);  
                if($getResult){
                    
                    $query = $this->Admin_model->get_row('admin',array('user_email'=>$username));
                    $userdata = array(
                                    'id' =>$query->id,
                                    'user_email' =>$query->user_email,
                                    'user_name' =>$query->user_name,
                                    'logged_in' => true
                                    );
                    $this->session->set_userdata('useradmin',$userdata); 
                    //echo "Your are Login In";die;
                    $this->session->set_flashdata('success_msg', '<p class="alert alert-success">Login Successful !</p>');
                    redirect(base_url()."AdminController/dashboard");
                    //print_r($query);die;
                }else{
                    $this->session->set_flashdata('success_msg', '<p class="alert alert-danger">username password not match !</p>');
                    redirect(base_url()."LgAdmin");
                }
            }
           // 
        }
		$this->load->view('admin/pages/login','');

    }

	public function dashboard()
	{
		$this->renderAdmin('admin/pages/dashboard','');
	}

	public function view_user(){

		$data['get_users'] = $this->Admin_model->get_result(REGISTERUSER); //,array('is_active'=>1)

		$this->renderAdmin('admin/pages/view_users',$data);

	}

	public function update_user($user_id,$is_active){
		$action =	$is_active==1?'0':'1';
		$result = $this->Admin_model->update(REGISTERUSER,array('is_active'=>$action),array('id'=>$user_id));
		($action==1)?
			$this->session->set_flashdata('success_msg', '<p class="alert alert-success">User Successfully Active !</p>'):
			$this->session->set_flashdata('success_msg', '<p class="alert alert-danger">USer Successfully Block !</p>'); 
		$result==TRUE?redirect(base_url().'/ViewUser','refresh'):FALSE;
	}

	public function view_contact_user(){
		$data['get_users'] = $this->Admin_model->get_result(CONTACTUS,array('is_active'=>1)); 

		$this->renderAdmin('admin/pages/view_contact_users',$data);
	}
	public function view_feedback_user(){
		$data['get_users'] = $this->Admin_model->get_result(FEEDBACKUSERS,array('is_active'=>1));
		
		$this->renderAdmin('admin/pages/view_feedback_users',$data);
	}
}
