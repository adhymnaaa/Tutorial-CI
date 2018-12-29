<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Anggota_Model extends CI_Model
{
	public function index()
	{
		return $this->db->get('anggota');
	}

	public function create($data)
	{
		if($this->db->insert('anggota', $data))
		{
			return true;
		}else{
			return false;
		}
	}

	public function edit($id)
	{
		$this->db->where('id_anggota',$id);
		return $this->db->get('anggota');
	}

	public function update($data, $id)
	{
		$this->db->set($data);
		$this->db->where('id_anggota',$id);
		$this->db->update('anggota');
	}

	public function delete($id)
	{
		$this->db->where('id_anggota',$id);
		if($this->db->delete('anggota'))
		{
			return true;
		}else{
			return false;
		}
	}
}	