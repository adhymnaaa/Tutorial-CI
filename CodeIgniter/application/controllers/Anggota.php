<?php
defined('BASEPATH') OR exit('no direct script access allowed');
class Anggota extends CI_Controller {

	public function __construct()
	{ 
		parent::__construct();
		$this->load->model('Anggota_Model');
	}


	public function index()
	{
		$data=
		[   
			'title' => 'anggota',
			'sub_title' => 'Daftar Anggota',
			'content' => 'Anggota/index',
			'show' => $this->Anggota_Model->index()->result()
		];
	$this->load->view('template/my_template', $data);	
	}

	public function add()
	{
		$data=
		[   
			'title' => 'anggota',
			'sub_title' => 'Tambah Anggota',
			'content' => 'Anggota/add',
		];
	$this->load->view('template/my_template', $data);	
	}

	public function create()
	{
			$data = array(
				'nama_anggota' => $this->input->post('nama_anggota'),
				'gender' => $this->input->post('gender'),
				'no_telp' => $this->input->post('no_telp'),
				'alamat' => $this->input->post('alamat'),
				'email' => $this->input->post('email')
			);

			$create = $this->Anggota_Model->create($data);

			if($create){
				$this->session->set_flashdata('pesan_create', true);
				redirect('anggota');
			}else{
				$this->session->set_flashdata('pesan_create', false);
				redirect('anggota');
			}
	}

	public function edit($id)
	{
		$data =
		[
			'title' => 'Anggota',
			'sub_title' => 'Edit Anggota',
			'content' => 'anggota/edit',
			'show' => $this->Anggota_Model->edit($id)->row()
		];
		$this->load->view('template/my_template', $data);
	}

	public function update()
	{

		$id_anggota = $this->input->post('id_anggota');
		$data=array(
			'nama_anggota' => $this->input->post('nama_anggota'));


		$update = $this->Anggota_Model->update($data,$id_anggota);

		if($update){
			$this->session->set_flashdata('pesan_create', true);
			redirect('anggota');
		}else{
			$this->session->set_flashdata('pesan_create', false);
			redirect('anggota');
		}
	}

	public function delete($id)
	{
		$delete = $this->Anggota_Model->delete($id);

		if($delete){
			redirect('anggota');
		}else{
			redirect('anggota');
	    }


	}
}