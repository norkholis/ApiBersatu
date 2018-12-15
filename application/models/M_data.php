<?php
 
class M_data extends CI_Model{
	function tampil_data($table){
		return $this->db->get($table);
	}
 
	function input_data($data,$table){
		$this->db->insert($table,$data);
		if( $this->db->affected_rows() != 1)
    		return false;
    	else
    		return true;
	}
 
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
		if( $this->db->affected_rows() != 1)
    		return false;
    	else
    		return true;
	}
 
	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
 
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
		if(!$this->db->error())
    		return false;
    	else
    		return true;
	}

	public function jumlah($table)
	{
		$hasil=$this->db->get($table);
		return $hasil->num_rows();
	}

	public function isExist($table,$where)
	{
		$query=$this->db->get_where($table,$where);
		$row=$query->num_rows();
		if($row>0) return true;
		else return false;
	}

	function tampil_data_join($table,$join,$row){
		$this->db->select('*');
		$this->db->from($table);
		$this->db->join($join, $join.'.'.$row.' = '.$table.'.'.$row);
		return $this->db->get();
	}
	
	function get_nama_pgw($table, $where){
		$query=$this->edit_data($where,$table)->result();
		return $query[0]->NAMA;
	}

	function get_notif($status, $task){
		if($status)
			return '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Sukses!</strong> Data berhasil di'.$task.'.</div>';
		else
			return '<div class="alert alert-warning alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Gagal!</strong> Data gagal di'.$task.'.</div>';
	}
}