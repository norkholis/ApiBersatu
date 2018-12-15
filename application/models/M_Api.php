<?php

class M_Api extends CI_Model{
    

    public function getAllCategory()
    {
        $query = $this->db->query('SELECT kategori FROM tb_endpoint');
        return $query->reuslt_array();
    }
}