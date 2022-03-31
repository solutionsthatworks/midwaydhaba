<?php

class MY_Controller extends CI_Controller
{
	

	 function __construct(){

        parent::__construct();
    }


	function render($view,$data)
	{
		$this->load->view('front/common/header',$data);
		$this->load->view($view);
		$this->load->view('front/common/footer');
	}

	function render_second($view,$data)
	{
		$this->load->view('front/common/header_second',$data);
		$this->load->view($view);
		$this->load->view('front/common/footer');
	}
	
	function renderAdmin($view,$data)
	{
		$this->load->view('admin/common/header_admin',$data);
		$this->load->view('admin/common/sidebar');
		$this->load->view($view);
		$this->load->view('admin/common/footer_admin');
	}


}