<?php
defined('BASEPATH') OR exit('no direct script access allowed');
class Buku extends CI_Controller {

	public function __construct()
	{ 
		parent::__construct();
		$this->load->model('Buku_Model');
		$this->load->model('Kategori_Model');
	}

	public function index()
	{
		$data=
		[   
			'title' => 'Buku',
			'sub_title' => 'Daftar Buku',
			'content' => 'buku/index',
			'show' => $this->Buku_Model->index()->result()
		];
	$this->load->view('template/my_template', $data);	
	}
	/*fungsi add digunakan untuk memanggil data form buku*/
	public function add()
	{
		$data=
		[   
			'title' => 'Buku',
			'sub_title' => 'Tambah Buku',
			'content' => 'buku/add',
			'show_kategori' => $this->Kategori_Model->index()->result()
		];
	$this->load->view('template/my_template', $data);	
	}
	/*fungsi create digunakan untuk menyimpan data ke dalam database melalui model*/
	public function create()
	{
	
		$judul_buku = $this->input->post('judul_buku');
		$id_kategori = $this->input->post('id_kategori');
		$pengarang = $this->input->post('pengarang');
		$thn_terbit = $this->input->post('thn_terbit');
		$penerbit = $this->input->post('penerbit');
		$isbn = $this->input->post('isbn');
		$jumlah_buku = $this->input->post('jumlah_buku');
		$lokasi = $this->input->post('lokasi');

		$data = array(
			'judul_buku' => $judul_buku,
			'id_kategori' => $id_kategori,
			'pengarang' => $pengarang,
			'thn_terbit' => $thn_terbit,
			'penerbit' => $penerbit,
			'isbn' => $isbn,
			'jumlah_buku' => $jumlah_buku,
			'lokasi' => $lokasi,
		);

		$create = $this->Buku_Model->create($data);
		if($create){
			$this->session->set_flashdata('pesan_create', true);
			redirect('buku');
		}else{
			$this->session->set_flashdata('pesan_create', false);
			redirect('buku');
		}
}
public function edit($id)
{
	$data=
		[   
			'title' => 'Buku',
			'sub_title' => 'Edit Buku',
			'content' => 'buku/edit',
			'show' => $this->Buku_Model->edit($id)->row()
		];
	$this->load->view('template/my_template', $data);	
}
public function update()
	{
		$id_buku =$this->input->post('id_buku');
		$judul_buku = $this->input->post('judul_buku');
		$data = array(
			'judul_buku' => $judul_buku,
		);
	
	$update = $this->Buku_Model->update($data, $id_buku);
		if($update){
			$this->session->set_flashdata('pesan_create', true);
			redirect('buku');
		}else{
			$this->session->set_flashdata('pesan_create', false);
			redirect('buku');
		}
}	
	public function delete($id)
	{
		$delete = $this->Buku_Model->delete($id);
		if($delete){
			redirect('buku');
		}else{
			redirect('buku');
	}
}
}
?>