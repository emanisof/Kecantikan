<?php if( ! defined('BASEPATH')) exit('No Direct Script Access Allowed');

class Pegawai_Mod extends CI_Model {
	
	public function __construct(){
		parent::__construct();
		
	}
	
	// Save Data Input Pegawai 
	public function save()
	{
		$data = array (
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'kota' => $this->input->post('kota'),
			'tmp_lahir' => $this->input->post('tempatlahir'),
			'tgl_lahir' => $this->input->post('tgllahir'),
			'kelamin' => $this->input->post('kelamin'),
			'notelp' => $this->input->post('nohp')
		);
		$this->db->insert('pegawai',$data);
		$pesan['simpan_msg'] = " DATA PEGAWAI TELAH TERSIMPAN";
		$this->template
			->title('SIMPAN DATA')
			->set_layout('default-in')
			->build('pages/success',$pesan);
	}
	// LIST DATA PEGAWAI
	public function index($id = FALSE)
	{
		if($id==FALSE)
		{
			$query = $this->db->get('pegawai');
			return $query->result_array();
		}
		$this->db->where('id',$id);
		$query = $this->db->get('pegawai');
		return $query->row_array();
	}
	
	// Edit Data Pegawai 
	public function get($id)
	{
		$this->db->where('id',$id);
		$query = $this->db->get('pegawai');
		return $query->row_array();
	}
	
	public function update($id)
	{
		$data = array (
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'kota' => $this->input->post('kota'),
			'tmp_lahir' => $this->input->post('tempatlahir'),
			'tgl_lahir' => $this->input->post('tgllahir'),
			'kelamin' => $this->input->post('kelamin'),
			'notelp' => $this->input->post('nohp')
		);
		$this->db->where('id',$id);
		$this->db->update('pegawai',$data);
	}
}
/* Model Of Pegawai_mod */
/* Files Applicatiion/Models/pegawai_model.php */