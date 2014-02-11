<?php if(!defined('BASEPATH')) exit('No Direct Access Not Allowed');
class Pegawai extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('pegawai_mod');
	}
	// INPUT DATA PEGAWAI
	public function input()
	{
		$this->form_validation->set_rules('nama','Nama Pegawai','required');
		$this->form_validation->set_rules('alamat','Alamat Pegawai','reuired');
		$this->form_validation->set_rules('tempatlahir','Tempat Lahir','required');
		$this->form_validation->set_rules('tgllahir','Tanggal lahir','required');
		$this->form_validation->set_rules('kelamin','Jenis Kelamin','required');
		
		if(!$this->form_validation->run())
		{
			$data['judul'] = "Input Data Pegawai";		
			$this->template
				->title('Input Data Pegawai')
				->set_layout('default-in')
				->build('forms/input_pegawai',$data);
		}else{
			
			$data['simpan'] = "DATA PEGAWAI TELAH TERSIMPAN";
			$this->pegawai_mod->save();
		}
	}
	// LIST DATA PEGAWAI 
	public function index()
	{
		$data['pegawai'] = $this->pegawai_mod->index();
		$this->template
			->title('DATA PEGAWAI')
			->set_layout('default-in')
			->build('pages/pegawai',$data);	
	}
	// EDIT DATA PEGAWAI 
	public function edit($id){
		if($this->input->post('nama') == NULL){
			$data['pegawai'] = $this->pegawai_mod->get($id);
			$this->template
				->title('EDIT DATA PEGAWAI')
				->set_layout('default-in')
				->build('forms/input_pegawai',$data);
		}else{
			$this->pegawai_mod->update($id);
			$pesan['simpan_msg'] = "DATA TERUPDATE";
			$this->template
				->title('DATA TERUPDATE')
				->set_layout('default-in')
				->build('pages/success',$pesan);
		}
	}
	
}
// Enf Of File pegawai.php
// Location : .Application/Controllers/pegawai.php 
// copyright : @emanisof - 2014 