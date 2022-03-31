<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerHome extends MY_Controller {
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

	public function index()
	{
		$this->render('front/pages/home','');
	}
	
	public function user_register(){
        $this->render_second('front/pages/user_register','');
    }

	public function user_registeri()
	{
        //echo "string";die;
//            $this->form_validation->set_rules('user_name','User First Name','required|alpha|trim');
//            $this->form_validation->set_rules('user_lname','User Last Name','required|alpha|trim');
//            $this->form_validation->set_rules('user_email','User Email','required|trim|is_unique[tbl_register_user.user_email]');
//            $this->form_validation->set_rules('user_phone','User Contact Number','numeric|trim');
//            $this->form_validation->set_rules('user_password','User Password','required|alpha_numeric|trim');
//            $this->form_validation->set_rules('user_cpassword','Confirm Password','required|trim|alpha_numeric|matches[user_password]');
//            $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
//            if($this->form_validation->run()){
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
$email = @$_POST['user_email'];
$unique_id = 'MHO'.rand(0,999);
       $check_email =  $this->Admin_model->get_row(REGISTERUSER, array('user_email' => $email,'is_active' =>1));
       //print_r($check_email);die;
       if (empty($check_email) && $check_email== '') {
       $data = array(  
                        'user_name'     => $this->input->post('user_name').' '.$this->input->post('user_lname'),
                        'unique_id  ' => $unique_id,//$this->input->post('unique_id'),$unique_id,
                        'user_email'  => $this->input->post('user_email'),  
                        'password' => $this->input->post('user_password'),  
                        'phone'   => $this->input->post('user_phone'),
                        'is_active' => '1',
                        'user_image' => $image   
                        );
        //echo"<pre>";print_r($data);die;
        $result = $this->Admin_model->insert(REGISTERUSER,$data);

        /*if($result==TRUE){
            $this->session->set_flashdata('success_msg', '<p class="alert alert-success">Your Registration Successfully. Please login !</p>');
        }else{
            $this->session->set_flashdata('error_msg', '<p class="alert alert-danger">Error, Please contact Administrator !</p>');
        }*/
//Send Email


            if($result==TRUE){

                //echo "In Email";die;
                        $link = base_url('ControllerHome/activate_link/'.$unique_id);
                        $msg = '<p>Registration email update:</p><p>Confirm your email address</p><p>Thanks for signing up for MHO Hotel</p><p>Your Unique User ID : '.$unique_id.' </p><p>Please take a second to confirm '.$email.' your email address : '.$link.'</p>';

                        $config = Array(
                            'protocol' => 'smtp',
                            'smtp_host' => 'ssl://smtp.googlemail.com',
                            'smtp_port' => 465,
                            'smtp_user' => 'info@mhohotels.com',
                            'smtp_pass' => 'R<jyC262',
                            'mailtype'  => 'html', 
                            'charset'   => 'iso-8859-1'
                        );
//               
//               
                        $this->load->library('email', $config);
                        $this->email->set_newline("\r\n");
//
                        $this->email->from('info@mhohotels.com', 'Hotel MHO');
                        $this->email->to($email); 

                        $this->email->subject('MHO Hotel Registration');
                        $this->email->message($msg);  
//               echo"<pre>";print_r($data);die;
                        @$result = $this->email->send();
                 
            



                        // $link = base_url('ControllerHome/activate_link/'.$unique_id);
                        // $msg = '<p>Registration email update:</p><p>Confirm your email address</p><p>Thanks for signing up for MHO Hotel</p><p>Please take a second to confirm '.$email.' your email address : '.$link.' </p>';
                

                    /*$this->load->library('email');
                    $this->email->from('info@aasthacollegeofeducation.com'); //info@shresthinfosec.com
                    $this->email->to($email);
                    $this->email->subject('Thank For MHO Hotel Registration');
                    $this->email->message($msg);
                    //$this->email->message($message);
                    @$check = $this->email->send();*/

                }
                

//Send Email
                /*if ($result==TRUE) {
                   redirect(base_url().'Users-Login','refresh');
                }*/

//Users-Register
		   redirect(base_url().'Users-Login','refresh');
//        $result==TRUE?redirect(base_url().'Users-Login','refresh'):FALSE;
          
       }else{
        redirect(base_url().'Users-Register','refresh');
        //$this->render_second('front/pages/user_register','');
         $this->session->set_flashdata('success_msg', '<p class="alert alert-danger">Email Id Already  Registration. Please Use Another Email Id !</p>');

       }
 
//            }
//            else{
//                $this->render_second('front/pages/user_register','');
//
//            }

        //$this->render_second('front/pages/user_register','');
	}

    public function activate_link(){
        $unique_id = $this->uri->segment('3');
        $where = array('unique_id'=>$unique_id);
        $update_data = array('is_active'=>1);
        $result = $this->Admin_model->update(REGISTERUSER,$update_data,$where);
        if($result){
            $this->session->set_flashdata('success_msg', '<p class="alert alert-success">Thank you! Your Email has been successfully verified, please login to continue.</p>');
            redirect(base_url().'Users-Login','refresh');
        }else{
        $this->session->set_flashdata('success_msg', '<p class="alert alert-danger">Your account not verified !</p>');
            redirect(base_url().'Users-Login','refresh');
        }
    }

	public function contact_us(){
		$this->render_second('front/pages/contacts','');
	}

	public function contact_usUser(){

		$data = array(  
                        'first_name'     => $this->input->post('name_contact'),  
                        'last_name'  => $this->input->post('lastname_contact'),  
                        'email' => $this->input->post('email_contact'),  
                        'phone'   => $this->input->post('phone_contact'),
                        'message' => $this->input->post('message_contact')   
                        );
		//echo"<pre>";print_r($data);die;
		@$result = $this->Admin_model->insert(CONTACTUS,$data);
        
        if($result){
            $this->session->set_flashdata('success_msg', '<p class="alert alert-success">Thank You For Contact Us !</p>');
            redirect(base_url().'Contact-Us','refresh');
        }
		/*($result==TRUE)?
			$this->session->set_flashdata('success_msg', '<p class="alert alert-success">Thank You For Contact Us !</p>'):
			$this->session->set_flashdata('error_msg', '<p class="alert alert-danger">Something Error Please Try again !</p>');

		($result==TRUE)?redirect(base_url().'Contact-Us','refresh'):FALSE;*/

	}
	public function user_feedback(){
		$this->render_second('front/pages/feedback','');
	}
	public function insert_feedback(){
		$data = array(
                        'user_id'     => $this->input->post('uid'),  
                        'user_name'  =>  $this->input->post('uname'),  
                        'user_email'  =>  $this->input->post('uemail'),  
                        'hotel_name'  =>  $this->input->post('hotel_name'),  
                        'check_in'  =>  $this->input->post('check_in'),  
                        'check_out'  =>  $this->input->post('check_out'),  
                        'qus_first' => $this->input->post('qus_first'),  
                        'qus_two'   => $this->input->post('qus_two'),
                        'qus_three' => $this->input->post('qus_three'),   
                        'qus_four'  => $this->input->post('qus_four'),  
                        'qus_five' => $this->input->post('qus_five'),  
                        'qus_six'   => $this->input->post('qus_six'),
                        'qus_seven' => $this->input->post('qus_seven'),   
                        'qus_eight'  => $this->input->post('qus_eight'),  
                        'qus_nine' => $this->input->post('qus_nine'),  
                        'qus_ten'   => $this->input->post('qus_ten'),
                        'qus_eleven' => $this->input->post('qus_eleven'),   
                        'qus_twevel'  => $this->input->post('qus_twevel'),  
                        'qus_thirteen' => $this->input->post('qus_thirteen'),  
                        'qus_fourteen'   => $this->input->post('qus_fourteen'),
                        'qus_fifteen' => $this->input->post('qus_fifteen'),   
                        'qus_sixteen' => $this->input->post('qus_sixteen'),   
                        'qus_seventeen'  => $this->input->post('qus_seventeen'),  
                        'qus_eighteen' => $this->input->post('star-rating-id'),  
                        'qus_ninteen'   => $this->input->post('qus_ninteen'),
                        'qus_twentey' => $this->input->post('qus_twentey')   

		);

		//echo "<pre>"; print_r($data);die;

		$result = $this->Admin_model->insert(FEEDBACKUSERS,$data);

		($result==TRUE)?
			$this->session->set_flashdata('success_msg', '<p class="alert alert-success">Thank You For Your Feedback !</p>'):
			$this->session->set_flashdata('error_msg', '<p class="alert alert-danger">Something Error Please Try again !</p>');

		$result==TRUE?redirect(base_url().'Feedback','refresh'):FALSE;

	}

/*    public function bordentown(){
        $this->render_second('front/pages/bordentown','');
    }

    public function la_mirage_motor_inn(){
        $this->render_second('front/pages/la_mirage_motor_inn','');
    }
    public function prince_hotel(){
        $this->render_second('front/pages/prince_hotel','');
    }
    public function plaza_motels(){
        $this->render_second('front/pages/plaza_motels','');
    }
    public function Green_Acres_Motel(){
        $this->render_second('front/pages/Green_Acres_Motel','');
    }

    public function ousr_brand(){
            $this->render_second('front/pages/our_brands','');
    }*/

    public function bordentown(){
        $this->render_second('front/pages/bordentown','');
    }

    public function mirage_motor(){
        $this->render_second('front/pages/la_mirage_motor_inn','');
    }
    public function prince_hotel(){
        $this->render_second('front/pages/prince_hotel','');
    }
    public function plaza_motels(){
        $this->render_second('front/pages/plaza_motels','');
    }
    public function Green_Acres_Motel(){
        $this->render_second('front/pages/Green_Acres_Motel','');
    }

    public function ousr_brand(){
            $this->render_second('front/pages/our_brands','');
    }
    
	

//	public function bordentown(){
//            $this->render_second('front/pages/bordentown','');
//    }
    
    public function getCountClick(){
        //$url = $this->uri->segment(3);
        $btn_name = $_POST['hotel'];
        $url = $_POST['url'];
        $sessionDetail = $this->session->userdata('userdata');
        $uname = $sessionDetail['user_name'];
        $add_data = array(
                        'user_name' =>isset($uname)?$uname:'Anonymous',
                        'btn_value' =>$btn_name,
                        'btn_name' =>'Check availability',
                        'url' =>$url,
                        'countclick' =>1,
                        'created_at' =>date('Y-m-d H:i:s'),
                        );
        $result = $this->Admin_model->insert('btn_history',$add_data); 
        if($result){
            return true;
        }else{
            return false;
        }
    }

    public function getCountClickBook(){
        //$url = $this->uri->segment(3);
        $btn_name = $_POST['hotel'];
        $url = $_POST['url'];
        $sessionDetail = $this->session->userdata('userdata');
        $uname = $sessionDetail['user_name'];
        $add_data = array(
                        'user_name' =>isset($uname)?$uname:'Anonymous',
                        'btn_value' =>$btn_name,
                        'btn_name' =>'Book now',
                        'url' =>$url,
                        'countclick' =>1,
                        'created_at' =>date('Y-m-d H:i:s'),
                        );
        $result = $this->Admin_model->insert('btn_history',$add_data); 
        if($result){
            return true;
        }else{
            return false;
        }
    }
    public function hotel_list(){
            $this->render_second('front/pages/hotel_list','');
    }
}
