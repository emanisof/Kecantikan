<?php if(!defined('BASEPATH')) exit('Direct Script Access Not Allowed');

class Obat extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('obat_mod');
	}
	
	// Index Data Obat 
	function index()
	{
		$data['obat'] = $this->obat_mod->get();
		$this->template
			->title('DATA OBAT')
			->set_layout('default-in')
			->build('pages/index_obat',$data);
	}
	// Input Data Obat
	public function input()
	{
		$config = array (
			array ('field' => 'nama','label' => 'Nama Obat','rules' => 'required'),
			array ('field' => 'keterangan','label' => 'Keterangan Obat','rules' => 'required'),
			array ('field' => 'harga_beli','label' => 'Harga Dasar Obat','rules' => 'reequired|numeric'),
			array ('field' => 'harga_jual','label' => 'Harga Jual Obat','rules'=> 'reequired|numeric'),
			array ('field' => 'jumlah','Jumlah Obat / Stock Obat','required|numeric')
		);
		$this->form_validation->set_rules($config);
		
		if($this->form_validation->run() == FALSE)
		{
			$data['judul'] = "Input Data Obat";
			$this->template
				->title('Input Data Obat')
				->set_layout('default-in')
				->build('forms/input_obat');
		}else{
			$this->obat_mod->save();
		}	
		
	}
	// Edit Data Obat 
	function edit($id)
	{
		if($this->input->post('nama') == NULL)
		{
			$data['obat'] = $this->obat_mod->get($id);
			$this->template
				->title('EDIT DATA OBAT')
				->set_layout('default-in')
				->build('forms/input_obat',$data);
		}else{
			
			$this->obat_mod->update($id);
			$pesan['simpan_msg'] = "DATA DISIMPAN";
			$this->template 
				->title('PERUBAHAN DATA OBAT' )
				->set_layout('default-in')
				->build('pages/success',$pesan);

		}
	}
	// Hapus Data 
	function delete($id)
	{
		$this->obat_mod->delete($id);
		$pesan['simpan_msg'] = "DATA DIHAPUS";
			$this->template 
				->title('DATA OBAT SUDAH DIHAPUS' )
				->set_layout('default-in')
				->build('pages/success',$pesan);
	}
}
// End Of File obat.php
// Location : .Application/Controllers/obat.php
// CopyRight : @emanisof - 2014 