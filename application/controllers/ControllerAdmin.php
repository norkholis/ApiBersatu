<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerAdmin extends CI_Controller {

	var $table="tb_endpoint";
	 
	 	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
	}
	
	public function index()
	{
	    $this->load->view('header');
		$this->load->view('admin/input');
		$this->load->view('footer');
	}
	
	function insert(){
		$endPoint = $this->input->post('endPoint');
		$request = $this->input->post('request');
 
		$data = array(
			'endpoint' => $endPoint,
			'request' => $request
		);

		$this->session->set_flashdata(
			'notif',
			$this->m_data->get_notif(
				$this->m_data->input_data($data,$this->table),
				'simpan'
			)
		);
		
		redirect('ControllerAdmin');
	}
}
