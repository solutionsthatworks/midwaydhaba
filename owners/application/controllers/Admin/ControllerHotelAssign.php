<?php
defined( 'BASEPATH' )OR exit( 'No direct script access allowed' );

class ControllerHotelAssign extends MY_Controller {
	function __construct() {

		parent::__construct();

		$this->load->model( 'Admin_model' );
		$this->load->helper( 'admin_helper' );

		//For place order email

		$config[ 'protocol' ] = 'mail';

		$config[ 'mailtype' ] = 'html';

		$this->load->library( 'email', $config );
		$this->email->initialize( array(

			'crlf' => "\r\n",

			'newline' => "\r\n",

			'mailtype' => 'html',

			'charset' => 'utf8'

		) );

		if ( empty( $this->session->userdata( 'useradmin' ) ) ) {
			redirect( base_url() . "LgAdmin" );
		}

		//For place order email

	}

	public
	function view_hotelAssign() {
		$all_details = $this->session->userdata();
		$data[ 'role' ] = $all_details[ 'useradmin' ][ 'role' ];
		$data[ 'user_id' ] = $all_details[ 'useradmin' ][ 'id' ];
		$user_id = $data[ 'user_id' ];



		if ( empty( $data[ 'user_id' ] ) && $data[ 'user_id' ] = '' ) {
			$data[ 'get_hotelAssign' ] = $this->Admin_model->get_result( HOTELASSIGN, array( 'is_active' => 1, ) );
		} else {
			$data[ 'get_hotelAssign' ] = $this->Admin_model->get_result( HOTELASSIGN, array( 'is_active' => 1 ) );

		}
		//$arrayName = array('is_active' => 1, );
		//print_r($data['get_hotelAssign']);die;
		$this->renderAdmin( 'admin/pages/view_hotelAssign', $data );
	}




	public
	function view_hotels() {

		$data[ 'get_hotels' ] = $this->Admin_model->get_result( HOTELLIST, array( 'is_active' => 1, ) );


		$this->renderAdmin( 'admin/pages/view_hotel', $data );
	}


	public
	function add_hotelAssign() {
		$data[ 'user_list' ] = $this->Admin_model->get_result( REGISTERUSER, array( 'is_active' => 1, ) );
		$data[ 'list' ] = $this->Admin_model->get_result( HOTELLIST, array( 'is_active' => 1, ) );

		$this->renderAdmin( 'admin/pages/add_hotelAssign', $data );
	}

	public
	function add_hotel() {
		$this->renderAdmin( 'admin/pages/add_hotel', '' );
	}

	public
	function edit_assigned_hotel( $id ) {
		$data[ 'edit_assigned_hotel' ] = $this->Admin_model->get_row( HOTELASSIGN, array( 'id' => $id ) );
		$data[ 'list' ] = $this->Admin_model->get_result( HOTELLIST, array( 'is_active' => 1, ) );
		//echo"<pre>";print_r($data);die;
		$this->renderAdmin( 'admin/pages/edit_assigned_hotel', $data );

		//	      $data['get_hotelAssign'] = $this->Admin_model->get_result(HOTELASSIGN,array('is_active' => 1,'user_id' => $user_id));  
		//
		//    $this->renderAdmin('admin/pages/view_user_hotelAssign',$data);
	}
	
	public
	function edit_hotel( $id ) {
		$data[ 'edit_hotel' ] = $this->Admin_model->get_row( HOTELLIST, array( 'id_property' => $id ) );
//		$data[ 'list' ] = $this->Admin_model->get_result( HOTELLIST, array( 'is_active' => 1, ) );
		//echo"<pre>";print_r($data);die;
		$this->renderAdmin( 'admin/pages/edit_hotels', $data );

		//	      $data['get_hotelAssign'] = $this->Admin_model->get_result(HOTELASSIGN,array('is_active' => 1,'user_id' => $user_id));  
		//
		//    $this->renderAdmin('admin/pages/view_user_hotelAssign',$data);
	}



	public
	function insert_Hotel() {
		@$hotel_id = $this->input->post( 'hotel_id' );
		@$hotel_name = $this->input->post( 'hotel_name' );
		@$hotel_address = $this->input->post( 'hotel_address' );
		@$brand = $this->input->post( 'brand' );
		@$status = $this->input->post( 'status' );
		@$discount = $this->input->post( 'discount' );
		@$createdate = $this->input->post( 'createdate' );	

		//$count= count($this->input->post('user'));
		$result = '';
		//

		//for ($i=0; $i < $count ; $i++) { 
		//$user_details = get_user_name($user_id[$i]);


		$data = array(
			'tbl_property_name' => $hotel_name,
			'tbl_address' => $hotel_address,
			'brand' => $brand,
			'status' => $status,
			'discount' => $discount,
			//'send_by' => '1',
			'tbl_createdby' => $_SESSION[ 'useradmin' ][ 'user_email' ],
			//'received_by' => @$user_id[$i],
			//'user_name' => $user_details['user_name'],
		);
		
		if (!empty($hotel_id)){
						$inserting_data[ 'tbl_property_name' ] = $hotel_name;
						$inserting_data[ 'tbl_address' ] = $hotel_address;
						$inserting_data[ 'brand' ] = $brand;
						$inserting_data[ 'status' ] = $status;
						$inserting_data[ 'discount' ] = $discount;
						$inserting_data[ 'tb_property_createtime' ] = $createdate;
						$where_data[ 'id_property' ] = @$hotel_id;
			//print_r($inserting_data);die;
						$result = $this->Admin_model->update_message( HOTELLIST, $inserting_data, $where_data );
		}else{
		//print_r($_SESSION['useradmin']['user_email']);

		//print_r($data);die;
		@$result = $this->Admin_model->insert( HOTELLIST, $data );
		}
		//}

		if ( $result ) {
			$this->session->set_flashdata( 'success_msg', '<p class="alert alert-success">Hotel Successfully Sent !</p>' );
			redirect( base_url() . 'View-Hotels', 'refresh' );
		}

	}

	function delete_hotel( $id ) {
		//echo $id;die;
		$inserting_data[ 'is_active' ] = 0;
		$where_data[ 'id_property' ] = $id;
		$result = $this->Admin_model->update_message( HOTELLIST, $inserting_data, $where_data );
		if ( $result ) {
			$this->session->set_flashdata( 'succ_msg', '<p class="alert alert-success">Successfully Deleted Message!</p>' );
		} else {
			$this->session->set_flashdata( "err_msg", "Error in Deleting the post." );
		}
		redirect( base_url() . 'View-Hotels' );
	}



	public
	function hotelAssignInsert() {
		@$user_id = $this->input->post( 'user' );
		@$hotel_name = $this->input->post( 'hotel' );
		@$old_hotel_name = $this->input->post( 'old_assigned_hotel' );
		
		$count = count( $this->input->post( 'user' ) );
		//print_r($count);die;

		for ( $i = 0; $i < $count; $i++ ) {


			if (!empty( $old_hotel_name)){
						$inserting_data[ 'hotel_name' ] = $hotel_name;
						$where_data[ 'user_id' ] = @$user_id[ $i ];
						$result = $this->Admin_model->update_message( HOTELASSIGN, $inserting_data, $where_data );
			}else{
			
			$sql = $this->Admin_model->myQuery( "SELECT *  FROM `tbl_hotel_assign` 
			WHERE is_active=1 AND `user_id` = '" . @$user_id[ $i ] . "' " ); 
			
			//print_r($sql);die;
			$user_details = get_user_name( $user_id[ $i ] );
			//print_r($user_details);die;
			if ( empty( $sql ) ) {
				//echo"<pre>"; print_r($user_details['user_name']);die;

				if ( !empty( $user_details )  ) {
					$data = array(
						'user_id' => @$user_id[ $i ],
						'user_name' => $user_details[ 'user_name' ],
						'hotel_name' => $hotel_name,
					);
					
					
					//print_r($result);die;
					@$result = $this->Admin_model->insert( HOTELASSIGN, $data );
				}
			} else {
				$this->session->set_flashdata( 'success_msg', '<p class="alert alert-danger">Hotel Assign Aredy to user ' . $user_details[ 'user_name' ] . '  !</p>' );
				redirect( base_url() . 'View-HotelAssign', 'refresh' );

			}
		}

		}
		//echo"<pre>";print_r($data);die;
		//  print_r($result);die;  
		if ( $result ) {
			$this->session->set_flashdata( 'success_msg', '<p class="alert alert-success">Hotel Assign Successfully !</p>' );
			redirect( base_url() . 'View-HotelAssign', 'refresh' );
		}

	}
	
	

	function delete_message( $id ) {
		//echo $id;die;
		$inserting_data[ 'is_active' ] = 0;
		$where_data[ 'id' ] = $id;
		$result = $this->Admin_model->update_message( HOTELASSIGN, $inserting_data, $where_data );
		if ( $result ) {
			$this->session->set_userdata( "succ_msg", "Successfully Deleted." );
		} else {
			$this->session->set_userdata( "err_msg", "Error in Deleting the post." );
		}
		redirect( base_url() . 'View-HotelAssign' );
	}

	function view_userhotel_assign( $user_id ) {

		$data[ 'get_hotelAssign' ] = $this->Admin_model->get_result( HOTELASSIGN, array( 'is_active' => 1, 'user_id' => $user_id ) );

		$this->renderAdmin( 'admin/pages/view_user_hotelAssign', $data );


	}

}
?>