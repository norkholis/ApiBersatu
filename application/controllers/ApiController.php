<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ApiController extends CI_Controller{


    function __construct()
    {
        parent::__construct();
        $this->load->model('m_api');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
    }		

    public function index()
    {
        $this->load->view('header');
        $dataFromModel['data'] = $this->m_api->getAllCategory();
		$this->load->view('main/kelompoksatu', $dataFromModel);
		$this->load->view('footer');
    }

    public function pilihanUser($kategorine)
    {
        $data['pilKategori'] = $kategorine;
        $this->load->view('header');
        $this->load->view('main/kelompokdua', $data);
        $this->load->view('footer');
    }

    public function hasilSearchUser($pilKategori)
    {
        $data['pilkategori'] = $pilKategori;
        $katakunci = $this->input->post("katakunci");
        if (strcasecmp($pilKategori, 'Info PIA')) {
            
        }
    }

}