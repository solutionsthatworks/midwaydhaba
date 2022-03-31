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
                                    'role' => 'admin',
                                    'logged_in' => true
                                    );
                    $this->session->set_userdata('useradmin',$userdata); 
                    //echo "Your are Login In";die;
                    $this->session->set_flashdata('success_msg', '<p class="alert alert-success">Login Successful !</p>');
                    redirect(base_url()."Dashboard");
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
		if(empty($this->session->userdata('useradmin'))){
  			redirect(base_url()."LgAdmin");
  		}
		
		$sql = "SELECT 
		  SUM(CASE WHEN status = 'In the system' THEN 1 ELSE 0 END) AS in_system,
		  SUM(CASE WHEN status = 'Lead' THEN 1 ELSE 0 END) AS in_lead,
		  SUM(CASE WHEN status = 'Lead' OR status = 'In the system' THEN 1 ELSE 0 END) AS total
		FROM tbl_property";
		
		$sql1 = "SELECT 
		  SUM(CASE WHEN is_active = '1' THEN 1 ELSE 0 END) AS active_users,
		  SUM(CASE WHEN is_active = '0' THEN 1 ELSE 0 END) AS inactive_users,
		  SUM(CASE WHEN is_active = '1' OR is_active = '0' THEN 1 ELSE 0 END) AS total
		FROM tbl_register_user";
		
		$sql2 = "SELECT count(DISTINCT(hotel_name)) as Assigned FROM mho_howners.tbl_hotel_assign;";
		
        
		$query = $this->db->query($sql);
		$data['hotels'] = $query->result_array();
		
		$query = $this->db->query($sql1);
		$data['users'] = $query->result_array();
		
		$query = $this->db->query($sql2);
		$data['assigned'] = $query->result_array();
		
		
		//$data['get_users'] = $this->Admin_model->get_result(REGISTERUSER);
		
		//$data['get_hotels'] = $this->Admin_model->get_result(HOTELLIST);
		
		//echo"<pre>";print_r($data);die;
		
		$this->renderAdmin('admin/pages/dashboard',$data);
	}
	
	public
	function add_user() {
		$this->renderAdmin( 'admin/pages/add_users', '' );
	}
	
	public
	function edit_users( $id ) {
		$data[ 'edit_user' ] = $this->Admin_model->get_row( REGISTERUSER, array( 'id' => $id ) );
//		$data[ 'list' ] = $this->Admin_model->get_result( HOTELLIST, array( 'is_active' => 1, ) );
		//echo"<pre>";print_r($data);die;
		$this->renderAdmin( 'admin/pages/edit_users', $data );

		//	      $data['get_hotelAssign'] = $this->Admin_model->get_result(HOTELASSIGN,array('is_active' => 1,'user_id' => $user_id));  
		//
		//    $this->renderAdmin('admin/pages/view_user_hotelAssign',$data);
	}
	
	public
	function edit_profile( $id ) {
		$data[ 'edit_profile' ] = $this->Admin_model->get_row( ADMIN, array( 'id' => $id ) );
//		$data[ 'list' ] = $this->Admin_model->get_result( HOTELLIST, array( 'is_active' => 1, ) );
		//echo"<pre>";print_r($data);die;
		$this->renderAdmin( 'admin/pages/edit_profile', $data );

		//	      $data['get_hotelAssign'] = $this->Admin_model->get_result(HOTELASSIGN,array('is_active' => 1,'user_id' => $user_id));  
		//
		//    $this->renderAdmin('admin/pages/view_user_hotelAssign',$data);
	}

	public
	function in_profile() {
		
		@$id = $this->input->post( 'user_id' );
		@$user_email = $this->input->post( 'user_email' );
		@$user_password = $this->input->post( 'new_password' );
		//@$user_id = $this->input->post( 'user_id' );
		
		//$unique_id = 'MHO'.rand(0,999);

		//$count= count($this->input->post('user'));
		$result = '';
		//

		//for ($i=0; $i < $count ; $i++) { 
		//$user_details = get_user_name($user_id[$i]);


		$data = array(
			'id' => $id,
			'user_email' => $user_email,
			'password' => $user_password,
			//'send_by' => '1',
			'tbl_createdby' => $_SESSION[ 'useradmin' ][ 'user_email' ],
			//'received_by' => @$user_id[$i],
			//'user_name' => $user_details['user_name'],
		);
		
		if (!empty($id)){
						$inserting_data[ 'password' ] = $user_password;
						$inserting_data[ 'updated_by' ] = $_SESSION[ 'useradmin' ][ 'user_email' ];
						$where_data[ 'id' ] = @$id;
			//print_r($inserting_data);die;
						$result = $this->Admin_model->update_message( ADMIN, $inserting_data, $where_data );
		}else{
		//print_r($_SESSION['useradmin']['user_email']);

		//print_r($data);die;
		@$result = $this->Admin_model->insert( ADMIN, $data );
		}
		//}

		if ( $result ) {
			$this->session->set_flashdata( 'success_msg', '<p class="alert alert-success">Password changed successfully !</p>' );
			redirect( base_url() . 'Dashboard', 'refresh' );
		}

	}
	
	
	public
	function insert_user() {
		
		@$user_name = $this->input->post( 'user_name' );
		@$user_lname = $this->input->post( 'user_lname' );
		@$user_email = $this->input->post( 'user_email' );
		@$user_phone = $this->input->post( 'user_phone' );
		@$user_password = $this->input->post( 'user_password' );
		@$user_id = $this->input->post( 'user_id' );
		
		$unique_id = 'MHO'.rand(0,999);

		//$count= count($this->input->post('user'));
		$result = '';
		//

		//for ($i=0; $i < $count ; $i++) { 
		//$user_details = get_user_name($user_id[$i]);


		$data = array(
			'user_name' => $user_name .' '. $user_lname,
			'unique_id' => $unique_id,
			'user_email' => $user_email,
			'password' => $user_password,
			'phone' => $user_phone,
			//'send_by' => '1',
			'tbl_createdby' => $_SESSION[ 'useradmin' ][ 'user_email' ],
			//'received_by' => @$user_id[$i],
			//'user_name' => $user_details['user_name'],
		);
		
		if (!empty($user_id)){
						$inserting_data[ 'user_name' ] = $user_name .' '. $user_lname;
						$inserting_data[ 'unique_id' ] = $unique_id;
						$inserting_data[ 'user_email' ] = $user_email;
						$inserting_data[ 'phone' ] = $user_phone;
						$inserting_data[ 'password' ] = $user_password;
						$inserting_data[ 'tbl_updatedby' ] = $_SESSION[ 'useradmin' ][ 'user_email' ];
						$where_data[ 'id' ] = @$user_id;
			//print_r($inserting_data);die;
						$result = $this->Admin_model->update_message( REGISTERUSER, $inserting_data, $where_data );
		}else{
		//print_r($_SESSION['useradmin']['user_email']);

		//print_r($data);die;
		@$result = $this->Admin_model->insert( REGISTERUSER, $data );
		}
		//}

		if ( $result ) {
			$this->session->set_flashdata( 'success_msg', '<p class="alert alert-success">User Successfully added !</p>' );
			redirect( base_url() . 'ViewUser', 'refresh' );
		}

	}
	
//	public
//	function edit_users( $id ) {
//		$data[ 'edit_assigned_hotel' ] = $this->Admin_model->get_row( HOTELASSIGN, array( 'id' => $id ) );
//		$data[ 'list' ] = $this->Admin_model->get_result( HOTELLIST, array( 'is_active' => 1, ) );
//		//echo"<pre>";print_r($data);die;
//		$this->renderAdmin( 'admin/pages/edit_assigned_hotel', $data );
//
//		//	      $data['get_hotelAssign'] = $this->Admin_model->get_result(HOTELASSIGN,array('is_active' => 1,'user_id' => $user_id));  
//		//
//		//    $this->renderAdmin('admin/pages/view_user_hotelAssign',$data);
//	}

	public function view_user(){
		if(empty($this->session->userdata('useradmin'))){
  			redirect(base_url()."LgAdmin");
  		}
		$data['get_users'] = $this->Admin_model->get_result(REGISTERUSER); //,array('is_active'=>1)

     /*$sql = "select tbl_register_user.id,tbl_register_user.user_name,tbl_register_user.user_email,tbl_hotel_assign.hotel_name from tbl_register_user LEFT JOIN tbl_hotel_assign ON tbl_register_user.`id` = tbl_hotel_assign.`user_id` WHERE tbl_register_user.`is_active`='1' ";
                $query = $this->db->query($sql);
                $result = $query->result_array();

                echo"<pre>";print_r($result);die;*/

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
		if(empty($this->session->userdata('useradmin'))){
  			redirect(base_url()."LgAdmin");
  		}
		$data['get_users'] = $this->Admin_model->get_result(CONTACTUS,array('is_active'=>1)); 

		$this->renderAdmin('admin/pages/view_contact_users',$data);
	}
	public function view_feedback_user(){
		if(empty($this->session->userdata('useradmin'))){
  			redirect(base_url()."LgAdmin");
  		}
		$data['get_users'] = $this->Admin_model->get_result(FEEDBACKUSERS,array('is_active'=>1));
		
		$this->renderAdmin('admin/pages/view_feedback_users',$data);
	}
	public function check_feedback_user($id,$user_id){
			$data['check_user'] = $this->Admin_model->get_row(FEEDBACKUSERS,array('id' =>$id ,'user_id' => $user_id ));
		//echo"<pre>";print_r($data);die;
		$this->renderAdmin('admin/pages/check_feedback_user',$data);
	}
	public function logout(){
        $newdata = array(
                'user_email' => '',
                'logged_in' => FALSE
               );

     $this->session->unset_userdata($newdata);
     $this->session->sess_destroy();

     redirect(base_url()."LgAdmin");
    }

    public function view_user_track(){
    if(empty($this->session->userdata('useradmin'))){
  			redirect(base_url()."LgAdmin");
  		}
   			$data['get_users'] = $this->Admin_model->get_result(BTNHISTORY); 	
  		
       $this->renderAdmin('admin/pages/view_user_track',$data);     
    }
    
    
}
