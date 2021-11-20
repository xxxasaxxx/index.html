<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_1461800094 extends CI_Model {
	public function read(){
		$this->db->select('*');
		$this->db->from('barang');
		$this->db->join('kategori', 'kategori.kd_kat = barang.kd_kat');
		$query=$this->db->get();
		return $query;
	}
	public function create($data){
		$query=$this->db->insert('barang', $data);
		if($query){
			return true;
		}else{
			return false;
		}
	}
	public function delete($id){
		$query=$this->db->delete('barang',$id);
		if ($query) {
			return true;
		} else{
			return false;
		}
	}
	public function edit($id){
		$query=$this->db->where('kd_brg', $id)
				->get('barang');
		if($query){
			return $query->row();
		} else{
			return false;
		}
	}
	public function update($data,$id){
		$query=$this->db->update('barang',$data,$id);
		if($query){
			return true;
		}else{
			return false;
		}
	}
}

/* End of file m_1461800094.php */
/* Location: ./application/models/m_1461800094.php */