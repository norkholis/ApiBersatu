<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ApiController extends CI_Controller{


    function __construct(){
    parent::__construct();
    $this->load->model('m_api');
    }		

    public function index()
    {
        $this->load->view('header');
        $dataKategori;
        $dataFromModel = $this->m_api->getAllCategory();
        // $dataLength = count(dataFromModel);

        // for ($i=0; $i < dataLength ; $i++) { 
        //     for ($k=dataLength; $k > 0; $k--) { 
        //         if (strcasecmp(dataFromModel[i], dataFromModel[k])==0) {
                    
        //         }
        //     }
        // }
        
		$this->load->view('main/kelompoksatu', $dataFromModel);
		$this->load->view('footer');
    }

}