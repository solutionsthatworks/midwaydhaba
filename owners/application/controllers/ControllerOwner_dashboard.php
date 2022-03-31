<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerOwner_dashboard extends MY_Controller {
	 function __construct(){

        parent::__construct();

        $this->load->model('Admin_model');
        $this->load->helper('admin_helper');
        
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
	
	public
	function update_discount() {
		
		@$id_property = $this->input->post( 'id_property' );
		@$discount = $this->input->post( 'discount' );
		
		//$unique_id = 'MHO'.rand(0,999);

		//$count= count($this->input->post('user'));
		$result = '';
		//
		//$t=$_SERVER['REQUEST_TIME'];
		
		//$currenttime = date("m/d/Y h:i:sa",$t);
		
		//print_r($currenttime);die;
		if (!empty($id_property)){
						$inserting_data[ 'discount' ] = $discount;
						$inserting_data[ 'updated_by' ] = $_SESSION[ 'userdata' ][ 'user_email' ];
						$where_data[ 'id_property' ] = @$id_property;
			//print_r($inserting_data);die;
						$result = $this->Admin_model->update_message( HOTELLIST, $inserting_data, $where_data );
		}
		//}

		if ( $result ) {
			$this->session->set_flashdata( 'success_msg', '<p class="alert alert-success">Discount updated successfully !</p>' );
			redirect( base_url() . 'Owner-Dashboard/'.$_SESSION[ 'userdata' ][ 'id' ], 'refresh' );
		}

	}
	

    public function view_ownerDashboard($id){
        //die($id);
        $data['get_message'] = $this->Admin_model->get_result(MESSAGE,array('is_active' => 1,'received_by' =>$id));  

        $data['user_id'] = $id;
    
            /*if (!empty($message) && !$message='') {
    echo"<pre>"; print_r($message);die;
                $data['get_message'] = $message;
            }else{
                echo"else";die;
                $data['get_message'] = "No Message Available !";
            }*/

    $hotelAssign = get_user_hotelAssign($id);

//print_r($hotelAssign);die();
$data['error'] = '';
    if(isset($hotelAssign) && !empty($hotelAssign)){
    $hotel_na = $hotelAssign['hotel_name'];
      if ($hotel_na = 'MHO Hotel, Bordentown, NJ') {
        $ho_id = 1;# code...
      }elseif ($hotel_na = 'Green Acres Motel, Atco, NJ') {
        $ho_id = 2;
      }elseif ($hotel_na = 'La Mirage Motor Inn, South Brunswick, NJ') {
        $ho_id = 3;
      }else {
        $ho_id = 4;
      }
      $get_list = $this->Admin_model->get_result('documents',array('hotel'=>$ho_id));  
      if(isset($get_list) && !empty($get_list)){
        $data['get_list'] = $get_list;
      }else{
        $data['error'] = "No Documents available";  
      }
    }else{
      $data['error'] = "No Hotel available";
    }

    $data['hotelAssign'] = $this->Admin_model->get_result(HOTELASSIGN,array('user_id' => $id,'is_active' => 1));
		
//	$data['hotelId'] = $this->Admin_model->get_result(HOTELLIST,array('tbl_property_name1' => $hotelAssign["hotel_name"],'is_active1' => 1));
		
//		$sql = "SELECT * FROM `tbl_property` WHERE `tbl_property_name` = '".$hotelAssign["hotel_name"]."' AND `is_active` = 1";
//		
//		$query = $this->db->query($sql);
//		$data['hotelId'] = $query->result_array();
		
		//echo"<pre>"; print_r($data['hotelId'] );die;

		
	 $data['hotelData'] = $this->Admin_model->get_result(HOTELLIST,array('tbl_property_name' => $hotelAssign["hotel_name"],'is_active' => 1));	

		//echo"<pre>"; print_r($data);die;
        $this->render_second('front/pages/view_message_doc',$data);
    }


/*upload User documents*/

public function insertDocument(){
  $uId = $this->input->post('user_id');
  $HotelId = $this->input->post('hotels_id');
  $session_data = $this->session->userdata('useradmin');
  $count = count($_FILES['files']['name']);
  $result='';
  if (!empty($HotelId) && (!$HotelId=='')) {
      for($i=0;$i<$count;$i++){
        if(!empty($_FILES['files']['name'][$i])){
            
          $_FILES['file']['name'] = $_FILES['files']['name'][$i];
          $_FILES['file']['type'] = $_FILES['files']['type'][$i];
          $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
          $_FILES['file']['error'] = $_FILES['files']['error'][$i];
          $_FILES['file']['size'] = $_FILES['files']['size'][$i];

          $config['upload_path'] = 'asset/document/'; 
          $config['allowed_types'] = 'jpg|jpeg|png|gif|pdf|doc|docx';
          $config['max_size'] = '0';
          $config['file_name'] = $_FILES['files']['name'][$i];

          $this->load->library('upload',$config);
          if($this->upload->do_upload('file')){
            $uploadData = $this->upload->data();
            $filename = $uploadData['file_name'];

            $data['totalFiles'][] = $filename;
            $insert_array = array(
                            'category' =>$this->input->post('category'),
                            'hotel' =>$this->input->post('hotels_id'),
                            'docs' =>$filename,
                            'created_by' =>'user',//$this->input->post('hotels_id'),
                            'created_at' =>date('Y-m-d H:i:s'),
                            'status' =>1,
                            );
            $result = $this->db->insert('documents',$insert_array);
          }else{
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
          }
        }
      }
    }else{
      //echo $uId;die;
    $this->session->set_flashdata("success_msg",'<p class="alert alert-danger">You cannot upload documents until you are assigned to a Hotel by Administrator');
      redirect(base_url().'Owner-Dashboard/'.$uId);

  }
  if($result){
    $this->session->set_flashdata("success_msg",'<p class="alert alert-success">Documents Successfully upload.');
  }/*else{
    $this->session->set_flashdata("success_msg","Error in uploading.");
  }*/
  redirect(base_url().'Owner-Dashboard/'.$uId);

}

/*//upload User documents*/



}?>