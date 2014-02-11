<?php if(!defined('BASEPATH')) exit('Direct Access Script NOt Allowed');

class Pasien extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('pasien_mod');
		$this->load->model('layanan_mod');
		$this->load->model('pegawai_mod');
		$this->load->library('pagination');
	}
	
	function index()
	{
		$config['base_url'] = base_url().'index.php/pasien/index';
		$config['total_rows'] = $this->pasien_mod->jmldata();
		//$config['page_query_string'] = TRUE;
		$config['per_page'] = 10;
		$config['uri_segment'] = 3;
		$choice = $config['total_rows'] / $config['per_page'];
		$config['num_links'] = round($choice);
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$this->pagination->initialize($config);
		$data['links'] = $this->pagination->create_links();
		$data['pasien'] = $this->pasien_mod->index_limit($config['per_page'],$page);
		$data['nomor'] = $page;
		$this->template
			->title('DATA PASIEN')
			->set_layout('default-in')
			->build('pages/index_pasien',$data);		

	}
	function view($id)
	{
		$data['pasien'] = $this->pasien_mod->index($id);
		$this->template
			->title('DATA PASIEN ')
			->set_layout('default-in')
			->build('pages/view_pasien',$data);
		
	}
	public function input()
	{
		$config = array (
			array ('field' => 'nama','label' => 'Nama Pasien','rules' => 'required'),
			array ('field' => 'alamat','label' =>'Alamat Pasien','rules'=>'required'),
			array ('field' => 'tgl_lahir','label' => 'Tgl Lahir Pasien','rules'=>'required'),
			array ('field'=>'notelp','label'=>'Nomor Telpon','rules'=>'required'),
			array ('field'=>'nohp','label'=>'Nomor Handphone','rules'=>'required'),
			array ('field'=>'riw_sakit','label'=>'Riwayat Penyakit Pasien','requied'),
			array ('field'=>'riw_alergi','label'=>'Riwayat Alergi Pasien','requied')
		);
		$this->form_validation->set_rules($config);
		if($this->form_validation->run() == FALSE)
		{
			$data['judul'] = "Input Data Pasien";
			$data['category'] = $this->layanan_mod->index_category();
			$this->template
				->title('Input Data Pasien')
				->set_layout('default-in')
				->build('forms/input_pasien',$data); 
		}else{
			
			$this->pasien_mod->save();
			$pesan['simpan_msg'] = 'SIMPAN DATA';
			$this->template
				->title('DATA PASIEN TELAH DISIMPAN')
				->set_layout('default-in')
				->build('pages/success',$pesan);
		}
	}
	
	public function checkup()
	{
		$config = array( 
			array('field'=>'keluhan','label'=>'keluhan pasien','rules'=>'required'),
			array('field'=>'analisa','label'=>'Analisa Dokter','rules'=>'rrequired'),
			array('field'=>'tindakan','label'=>'Tindakan Medis','rules'=>'required')
		);
		$this->form_validation->set_rules($config);
		if(!$this->form_validation->run()== FALSE)
		{
			//$this->pasien_mod->save_ceckup();
		 
		}
		$data['pasien'] = $this->pasien_mod->index();
		$data['pegawai'] = $this->pegawai_mod->index();
		$data['judul'] = 'Check up Pasien';
		
		$this->template
			->title('Check Up Pasien')
			->set_layout('default-in')
			->build('forms/checkup',$data);
	}
	
	// Cari Data Dari No KArtu 
	function caridata()
	{
		if(isset($_GET['term'])){
			$q = strtolower($_GET['term']);
			$this->pasien_mod->caridata($q);
		}		
	}
			
}
// End Of File Pasien.php
// Location : Application/Controllers/pasien.php
// copyright : @emanisof - 2014