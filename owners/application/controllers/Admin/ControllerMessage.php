<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerMessage extends MY_Controller {
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

//For place order email
        
    }

public function view_send_message(){
/* $all_details = $this->session->userdata();
$data['role'] = $all_details['useradmin']['role'];
$data['user_id'] = $all_details['useradmin']['id'];
$user_id = $data['user_id'];
if (empty($data['user_id']) && $data['user_id']='') {*/
        $data['get_message'] = $this->Admin_model->get_result(MESSAGE,array('is_active' => 1, ));  
/*}else{
        $data['get_message'] = $this->Admin_model->get_result(MESSAGE,array('is_active' => 1,'received_by' =>$user_id));  

}
*/        //$arrayName = array('is_active' => 1, );

    $this->renderAdmin('admin/pages/view_message',$data);
}


public function add_message(){
    $data['user_list'] = $this->Admin_model->get_result(REGISTERUSER,array('is_active' => 1, ));
    //echo"<pre>";print_r($data['user_list']);die;
    $this->renderAdmin('admin/pages/add_message',$data);
}


  public function add_messageInsert(){
    @$user_id=$this->input->post('user');
    @$message=$this->input->post('message');
    //print_r($user_id[0]);die;
    @$count= count($this->input->post('user'));
      $result ='';
    for ($i=0; $i < $count ; $i++) { 
    $user_details = get_user_name($user_id[$i]);

        $data = array(  
                            'message'  => $message,  
                            'send_by' => '1',
                            'received_by' => @$user_id[$i],
                            'user_name' => $user_details['user_name'],
                            );
        @$result = $this->Admin_model->insert(MESSAGE,$data);
    }
    if (isset($_POST['broadcast'])) {
        $get_allUser = $this->Admin_model->get_result(REGISTERUSER,array('is_active' => 1, ));  
    //echo "<pre>";print_r($get_allUser[0]->id);die;
    //echo "<pre>";print_r(count($get_allUser));die;
        for ($j=0; $j < count($get_allUser) ; $j++) { 
        $data = array(  
                            'message'  => $message,  
                            'send_by' => '1',
                            'received_by' => @$get_allUser[$j]->id,
                            'user_name' => @$get_allUser[$j]->user_name,
                            );
        @$result = $this->Admin_model->insert(MESSAGE,$data);
          
        }
    }
        if($result){
            $this->session->set_flashdata('success_msg', '<p class="alert alert-success">Message Successfully Sent !</p>');
            redirect(base_url().'View-Message','refresh');
        }

  }
	

	


 function delete_message($id){
  //echo $id;die;
    $inserting_data['is_active'] = 0;
    $where_data['id'] = $id;
    $result = $this->Admin_model->update_message(MESSAGE ,$inserting_data, $where_data);
    if($result){
      $this->session->set_flashdata('succ_msg','<p class="alert alert-success">Successfully Deleted Message!</p>');
    }else{
      $this->session->set_flashdata("err_msg","Error in Deleting the post.");
    }
    redirect(base_url().'View-Message');
  }

}?>