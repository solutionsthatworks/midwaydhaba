<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerUploadDocument extends MY_Controller {
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

      if(empty($this->session->userdata('useradmin'))){
        redirect(base_url()."LgAdmin");
      }
    }


public function view_document(){

$all_details = $this->session->userdata();
$data['role'] = $all_details['useradmin']['role'];
$data['user_id'] = $all_details['useradmin']['id'];
$user_id = $data['user_id'];

if ($data['role']=='admin') {

    if(isset($_POST['view'])){
      $hotel = $this->input->post('hotel');
      $data['h_name'] = $hotel;
      $data['get_list'] = $this->Admin_model->get_result('documents',array('hotel'=>$hotel,'status'=>1));  
    }
    $data['list'] = $this->Admin_model->get_result('tbl_property');
    $this->renderAdmin('admin/pages/view_document',$data);

        //$data['get_message'] = $this->Admin_model->get_result(MESSAGE,array('is_active' => 1, ));  
}else{
        //$data['get_message'] = $this->Admin_model->get_result(MESSAGE,array('is_active' => 1,'received_by' =>$user_id));  
    $hotelAssign = get_user_hotelAssign($user_id);

/*     print_r($data['hotelAssign']);
     die();*/
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
      $get_list = $this->Admin_model->get_result('documents',array('hotel'=>$ho_id,'status'=>1));  
      if(isset($get_list) && !empty($get_list)){
        $data['get_list'] = $get_list;
      }else{
        $data['error'] = "No Documents available";  
      }
    }else{
      $data['error'] = "No Hotel available";
    }

    $this->renderAdmin('admin/pages/viewUser_document',$data);


}



}

public function add_document(){
    $data['list'] = $this->Admin_model->get_result('tbl_property');
    $this->renderAdmin('admin/pages/add_document',$data);
}

public function insertDocument(){
  $session_data = $this->session->userdata('useradmin');
  $count = count($_FILES['files']['name']);
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
                        'hotel' =>$this->input->post('hotel'),
                        'docs' =>$filename,
                        'created_by' =>'admin',
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
  if($result){
    $this->session->set_flashdata("success_msg",'<p class="alert alert-success">Documents Successfully upload.,/p>');
  }else{
    $this->session->set_flashdata("success_msg","Error in uploading.");
  }
  redirect(base_url().'AddDocument');

}

 function delete_document($id){
  //echo $id;die;
    $inserting_data['status'] = 0;
    $where_data['id'] = $id;
    $result = $this->Admin_model->update_message('documents' ,$inserting_data, $where_data);
    if($result){
      $this->session->set_flashdata('success_msg','<p class="alert alert-success">Successfully Deleted Document.</p>');
    }else{
      $this->session->set_flashdata("err_msg","Error in Deleting Document.");
    }
    redirect(base_url().'View-Document');
  }



}
?>