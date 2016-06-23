<?php

/**
* 
*/
class Test extends CI_Controller
{
	
	public function index($info ='') {
		$data = array('title' => 'Test',
		'message' => 'Hola mundo test 1234',
		'info' => $info);
		//$this->load->view("test", $data);
		$this->load->view("sections/head",$data);
		$this->load->view("sections/header");
		$this->load->view("sections/nav");

		//$result = $this->db->get("tbl_test");
		$this->load->model('status');
		$result = $this->status->getStatus();
		$data = array('consulta' => $result );
		$this->load->view("sections/content", $data);
		$this->load->view("sections/footer");



	}

}