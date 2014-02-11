<?php if(!defined('BASEPATH')) exit('No Direct Script Access Allowed');

class Laporan extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
	}
	
	public function nota()
	{
		
		$this->form_validation->set_rules('nokartu','Nomor Kartu Pasien','required');		
		
		if($this->form_validation->run() === FALSE) {
		
			$data['judul'] = 'Nota Pelanggan';
			$this->template
				->title('Nota Pelanggan')
				->set_layout('default-in')
				->build('forms/input_nonota',$data);
		}else{
		
			$data['judul'] = "Nota Pasien - Nomor Kartu ";
			$this->template
				->title('Nota Pasien - Nomor Kartu - '.strtoupper($this->input->post('nokartu')))
				->set_layout('default-in')
				->build('forms/input_nonota',$data);
		}
	}
}