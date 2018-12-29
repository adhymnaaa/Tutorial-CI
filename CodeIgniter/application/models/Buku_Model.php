<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Buku_Model extends CI_Model
{
	public function index()
	{
		//return $this->db->get('buku');
		$this->db->select('*');
		$this->db->from('buku');
		$this->db->join('kategori', 'buku.id_kategori = kategori.id_kategori');
		$this->db->order_by('buku.id_buku');
		return $this->db->get();
	}
	public function create($data)
	{
		if($this->db->insert('buku', $data)){
			return true;
		} else{
			return false;
		}
	}
public function edit($id)
	{
		$this->db->where('id_buku',$id);
		return $this->db->get('buku');
	}
	public function update($data, $id)
	{
		$this->db->set($data);
		$this->db->where('id_buku', $id);
		$this->db->update('buku');
	}
	public function delete($id)
	{
		$this->db->where('id_buku', $id);
		if ($this->db->delete('buku'))
		{
			return true;
		}else 
		{
			return false;
		}
	}
}
?>