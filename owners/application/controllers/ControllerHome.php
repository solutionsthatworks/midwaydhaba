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

	public function user_register()
	{
            $this->form_validation->set_rules('user_name','User First Name','required|alpha|trim');
            $this->form_validation->set_rules('user_lname','User Last Name','required|alpha|trim');
            $this->form_validation->set_rules('user_email','User Email','required|trim|is_unique[tbl_register_user.user_email]');
//            $this->form_validation->set_rules('user_phone','User Contact Number','alpha_numeric|trim');
            $this->form_validation->set_rules('user_password','User Password','required|alpha_numeric|trim');
            $this->form_validation->set_rules('user_cpassword','Confirm Password','required|trim|alpha_numeric|matches[user_password]');
            $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
            if($this->form_validation->run()){
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
        $data = array(  
                        'user_name'     => $this->input->post('user_name').' '.$this->input->post('user_lname'),
                        'unique_id  ' => $unique_id,//$this->input->post('unique_id'),$unique_id,
                        'user_email'  => $this->input->post('user_email'),  
                        'password' => $this->input->post('user_password'),  
                        'phone'   => $this->input->post('user_phone'),
                        'user_image' => $image   
                        );
        //echo"<pre>";print_r($data);die;
        $result = $this->Admin_model->insert(REGISTERUSER,$data);

        ($result==TRUE)?
            $this->session->set_flashdata('success_msg', '<p class="alert alert-success">Your Registration Successfully Please Check Your Email !</p>'):
            $this->session->set_flashdata('success_msg', '<p class="alert alert-danger">User Successfully Block !</p>');
//Send Email


//             if($result==TRUE){
//                         $link = base_url('ControllerHome/activate_link/'.$unique_id);
//                        $msg = '<p>Registration email update:</p><p>Confirm your email address</p><p>Thanks for signing up for MHO Hotel</p><p>Your Unique User ID : '.$unique_id.' </p><p>Please take a second to confirm '.$email.' your email address : '.$link.' </p>';
//
//                        $config = Array(
//                            'protocol' => 'smtp',
//                            'smtp_host' => 'ssl://smtp.googlemail.com',
//                            'smtp_port' => 465,
//                            'smtp_user' => 'hotelmho@gmail.com',
//                            'smtp_pass' => 'MHOHotel!15',
//                            'mailtype'  => 'html', 
//                            'charset'   => 'iso-8859-1'
//                        );
//				 
//				 
//                        $this->load->library('email', $config);
//                        $this->email->set_newline("\r\n");
//
//                        $this->email->from('hotelmho@gmail.com', 'Hotel MHO');
//                        $this->email->to($email); 
//
//                        $this->email->subject('MHO Hotel Registration');
//                        $this->email->message($msg);  
//				 //echo"<pre>";print_r($data);die;
//                        @$result = $this->email->send();
				 
            
/*


                        $link = base_url('ControllerHome/activate_link/'.$unique_id);
                        $msg = '<p>Registration email update:</p><p>Confirm your email address</p><p>Thanks for signing up for MHO Hotel</p><p>Please take a second to confirm '.$email.' your email address : '.$link.' </p>';
                

                    $this->load->library('email');
                    $this->email->from('info@shresthinfosec.com');
                    $this->email->to($email);
                    $this->email->bcc('hotelmho@gmail.com,keyurmca27@gmail.com'); 
                    $this->email->subject('Thank For MHO Hotel Registration');
                    $this->email->message($msg);
                    //$this->email->message($message);
                    @$check = $this->email->send();*/

//                }
				

//Send Email


//Users-Register
        $result==TRUE?redirect(base_url().'Users-Login','refresh'):TRUE;

            }
            else{
                $this->render_second('front/pages/user_register','');

            }
		//$this->render_second('front/pages/user_register','');
	}

    public function activate_link(){
        $unique_id = $this->uri->segment('3');
        $where = array('id'=>$unique_id);
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
                        'user_name'  =>  $this->input->post('name_contact').' '.$this->input->post('lastname_contact'),  
                        'user_email'  =>  $this->input->post('email_contact'), 
						'user_phone'  =>  $this->input->post('phone_contact'), 
                        'property_name'  =>  $this->input->post('property_name'), 
						'property_address'  =>  $this->input->post('property_address'), 
						'message' => $this->input->post('message_contact')   

		);

		//echo "<pre>"; print_r($data);die;

		$result = $this->Admin_model->insert(FEEDBACKUSERS,$data);

		if($result==TRUE){
			$this->session->set_flashdata('success_msg', '<p class="alert alert-success">Thank You For Your Feedback !</p>');
			$result==TRUE?redirect(base_url().'Feedback','refresh'):FALSE;
		}else{
			$this->session->set_flashdata('error_msg', '<p class="alert alert-danger">Something Error Please Try again !</p>');
			$result!=TRUE?redirect(base_url().'Feedback',''):FALSE;
		}

		

	}

	
	public function enquire_membership(){
		$data = array(
//                        'id'     => $this->input->post('uid'),  
			'first_name'  =>  $this->input->post('name_contact'),
			'last_name'  =>  $this->input->post('lastname_contact'),
			'email'  =>  $this->input->post('email_contact'),
			
			'phone'  =>  $this->input->post('phone_contact'), 
			'cell'  =>  $this->input->post('cell_number'), 
			'buy_exiting'  =>  $this->input->post('buy_existing'), 
			
			'own_exiting' => $this->input->post('own_existing'), 
			'legal_name'  =>  $this->input->post('legal_name'), 
			'name_of_existing'  =>  $this->input->post('existing_hotel_name'), 
			
			'new_Development'  =>  $this->input->post('new_development'), 
			'address'  =>  $this->input->post('address'), 
			'street_address' => $this->input->post('street_address'),
			
			'state'  =>  $this->input->post('state'), 
			'zip_code'  =>  $this->input->post('zip'), 
			'country'  =>  $this->input->post('country'),
			
			'how_find'  =>  $this->input->post('findmho'),
			'Comments' => $this->input->post('message_contact')

		);

		//echo "<pre>"; print_r($data);die;

		$result = $this->Admin_model->insert(ENQUIRE,$data);

		if($result==TRUE){
			$this->session->set_flashdata('success_msg', '<p class="alert alert-success">Thank you for Enquiry, We will get back to you soon !</p>');
			$result==TRUE?redirect(base_url().'Enquire','refresh'):FALSE;
		}else{
			$this->session->set_flashdata('error_msg', '<p class="alert alert-danger">Error, Please Try again !</p>');
			$result!=TRUE?redirect(base_url().'Enquire',''):FALSE;
		}

		

	}
	
	
public function insert_join_sponsors_program(){
		$data = array(
//                        'id'     => $this->input->post('uid'),  
			'first_name'  =>  $this->input->post('name_contact'),
			'last_name'  =>  $this->input->post('lastname_contact'),

			'company'  =>  $this->input->post('company_name'), 
			'comp_type'  =>  $this->input->post('company_type'), 
			'website'  =>  $this->input->post('website'), 
			
			'email'  =>  $this->input->post('email_contact'),
			'phone'  =>  $this->input->post('phone_contact'), 
			'fax'  =>  $this->input->post('fax'), 
			
			'state'  =>  $this->input->post('state'), 
			'zip_code'  =>  $this->input->post('zip'), 
			'city'  =>  $this->input->post('city'), 
			
			'level_interested'  =>  $this->input->post('level_interested'), 
			'message' => $this->input->post('message_contact')

		);

		//echo "<pre>"; print_r($data);die;

		$result = $this->Admin_model->insert(SPONSORS_PROGRAM,$data);

		if($result==TRUE){
			$this->session->set_flashdata('success_msg', '<p class="alert alert-success">Thank you for Enquiry, We will get back to you soon !</p>');
			$result==TRUE?redirect(base_url().'Join-Sponsors-Program','refresh'):FALSE;
		}else{
			$this->session->set_flashdata('error_msg', '<p class="alert alert-danger">Error, Please Try again !</p>');
			$result!=TRUE?redirect(base_url().'Join-Sponsors-Program',''):FALSE;
		}

		

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

	public function owner_dashboard(){
        $this->render_second('front/pages/owner_dashboard','');
    }
	
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
	
	public function about_us(){
            $this->render_second('front/pages/about','');
    }
	public function executive_team(){
            $this->render_second('front/pages/executive-team','');
    }
	
	public function management_team(){
            $this->render_second('front/pages/management-team','');
    }
	
	public function mho_friends(){
            $this->render_second('front/pages/friends','');
    }	
	
	public function industry_leaders(){
            $this->render_second('front/pages/industry-leaders','');
    }	
	public function franchisee_advisory_board(){
            $this->render_second('front/pages/franchisee-advisory-board','');
    }	
	
	public function our_brands(){
		$this->render_second('front/pages/our_brands','');
    }
	
	public function fees(){
		$this->render_second('front/pages/pricing','');
    }
	
	public function independent_hotels(){
		$this->render_second('front/pages/independent_hotels','');
    }
	
	public function testimonials(){
		$this->render_second('front/pages/Testimonials','');
    }
	
	public function news(){
		$this->render_second('front/pages/news','');
    }

	public function enquire(){
		$this->render_second('front/pages/enquire','');
    }
	
	public function current_sponsors(){
		$this->render_second('front/pages/current_sponsors','');
    }
	
	public function join_sponsors_program(){
		$this->render_second('front/pages/join_sponsors_program','');
    }	
	
		public function events(){
		$this->render_second('front/pages/event','');
    }
	
//	Executive Team
	public function chandu_patel_cha(){
            $this->render_second('front/pages/chandu-patel-cha','');
    }
	
	public function mahendra_m_z_patel_cha(){
            $this->render_second('front/pages/mahendra_m_z_patel_cha','');
    }
	
	public function keshin_patel_CHO(){
            $this->render_second('front/pages/keshin_patel_CHO','');
    }
	
	public function priya_patel(){
            $this->render_second('front/pages/priya_patel','');
    }
	
	public function karishma_patel(){
            $this->render_second('front/pages/karishma_patel','');
    }	
	
	public function panna_patel(){
            $this->render_second('front/pages/panna_patel','');
    }	
	
    public function hirna_patel(){
            $this->render_second('front/pages/hirna_patel','');
    }
	
	public function piyush_patel_cho(){
            $this->render_second('front/pages/piyush_patel_CHO','');
    }
	
	public function elliot_ginsburg(){
            $this->render_second('front/pages/elliot_ginsburg','');
    }
	
	public function jay_patel(){
            $this->render_second('front/pages/jay_patel','');
    }
	
//	Management Team 
	public function brandi_connor(){
            $this->render_second('front/pages/brandi_connor','');
    }
	
	public function tushar_patel(){
            $this->render_second('front/pages/tushar_patel','');
    }

	public function hetal_patel(){
            $this->render_second('front/pages/hetal_patel','');
    }	
	
	public function manish_desai(){
            $this->render_second('front/pages/manish_desai','');
    }	
	
		public function sanjay_patel(){
            $this->render_second('front/pages/sanjay_patel','');
    }	
	
		public function katen_patel(){
            $this->render_second('front/pages/katen_patel','');
    }	
	
		public function mike_riverside_patel(){
            $this->render_second('front/pages/mike_riverside_patel','');
    }	
	
		public function amrish_patel(){
            $this->render_second('front/pages/amrish_patel','');
    }	
	
		public function dharmendra_desai(){
            $this->render_second('front/pages/dharmendra_desai','');
    }	
	
		public function gary_sheth(){
            $this->render_second('front/pages/gary_sheth','');
    }	
	
		public function kamlesh_patel(){
            $this->render_second('front/pages/kamlesh_patel','');
    }	
	
	
	public function natubhai_patel(){
            $this->render_second('front/pages/natubhai_patel','');
    }	
	
	public function raj_patel(){
            $this->render_second('front/pages/raj_patel','');
    }	
	
	public function john_bereznak(){
            $this->render_second('front/pages/john_bereznak','');
    }
	
	public function dipal_patel(){
            $this->render_second('front/pages/dipal_patel','');
    }
	
	public function ajay_patel(){
            $this->render_second('front/pages/ajay_patel','');
    }
	
	public function bharat_patel(){
            $this->render_second('front/pages/bharat_patel','');
    }
	
	public function jayeshbhai_patel(){
            $this->render_second('front/pages/jayeshbhai_patel','');
    }
	
	public function purnima_patel(){
            $this->render_second('front/pages/purnima_patel','');
    }
	
	public function kenish_patel(){
            $this->render_second('front/pages/kenish_patel','');
    }
	
	public function kushalpal_kaur(){
            $this->render_second('front/pages/kushalpal_kaur','');
    }
	
	
//	Freinds
	public function shailesh_patel(){
            $this->render_second('front/pages/shailesh_patel','');
    }
	
	public function pk_patel(){
            $this->render_second('front/pages/pk_patel','');
    }
	
	public function raj_bhagia(){
            $this->render_second('front/pages/raj_bhagia','');
    }
	
	public function dd_patel(){
            $this->render_second('front/pages/dd_patel','');
    }
	
//	Industry Leaders
	public function padama_shri_hr_shah(){
            $this->render_second('front/pages/padama_shri_hr_shah','');
    }
	
	public function bhaveshbhai_patel(){
            $this->render_second('front/pages/bhaveshbhai_patel','');
    }
	
	public function anilbhai_patel(){
            $this->render_second('front/pages/anilbhai_patel','');
    }
	
	public function albert_jasani(){
            $this->render_second('front/pages/albert_jasani','');
    }
	
	public function c_k_patel(){
            $this->render_second('front/pages/c_k_patel','');
    }
	
	
	
//	footer links
	public function partners(){
            $this->render_second('front/pages/partners','');
    }
	public function blogs(){
            $this->render_second('front/pages/blogs','');
    }
	public function careers(){
            $this->render_second('front/pages/careers','');
    }
	public function csr(){
            $this->render_second('front/pages/csr','');
    }
	public function privacy(){
            $this->render_second('front/pages/privacy','');
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
