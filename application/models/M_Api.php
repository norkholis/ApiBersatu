<?php

class M_Api extends CI_Model{
    

    public function getAllCategory()
    {
        $this->db->select('kategori');
        $this->db->distinct();
        $query = $this->db->get('tb_endpoint');
        return $query;
    }

    public function getLoketEndpoint()
    {
        $query = $this->db->query("SELECT endpoint FROM tb_endpoint WHERE kategori='Loket'");
        return $query;
    }

    public function getPerpusEndpoint()
    {
        $query = $this->db->query("SELECT endpoint FROM tb_endpoint WHERE kategori='Perpus'");
        return $query;
    }

    public function getUKMEndpoint()
    {
        $query = $this->db->query("SELECT endpoint FROM tb_endpoint WHERE kategori='UKM'");
        return $query;
    }

    public function getVoteEndpoint()
    {
        $query = $this->db->query("SELECT endpoint FROM tb_endpoint WHERE kategori='Vote'");
        return $query;
    }

    public function getCryptoEndpoint()
    {
        $query = $this->db->query("SELECT endpoint FROM tb_endpoint WHERE kategori='Crypto'");
        return $query;
    }

    public function getBeritaUpnEndpoint()
    {
        $query = $this->db->query("SELECT endpoint FROM tb_endpoint WHERE kategori='Berita UPN'");
        return $query;
    }

    public function getInfoPiaEndpoint()
    {
        $query = $this->db->query("SELECT endpoint FROM tb_endpoint WHERE kategori='Info PIA'");
        return $query;
    }
}