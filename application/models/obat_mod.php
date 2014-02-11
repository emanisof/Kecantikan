<?php if(!defined('BASEPATH')) exit('No Direct Access Allowed');

class Obat_Mod extends CI_Model {
	
	function __construct()
	{
		parent::__construct();
	}
	
	// Get Data 
	function get($id=FALSE)
	{
		if($id==NULL){
			$query = $this->db->get('obat');
			return $query->result_array();
		}else{
			$this->db->where('id',$id);
			$query = $this->db->get('obat');
			return $query->row_array();
		}
	}
	// Saving New Data 
	function save()
	{
		$data = array (
			'nama' => $this->input->post('nama'),
			'keterangan' => $this->input->post('keterangan'),
			'harga_beli' => $this->input->post('harga_beli'),
			'harga_jual' => $this->input->post('harga_jual'),
			'jumlah' => $this->input->post('jumlah')
		);
		
		$query = $this->db->insert('obat',$data);
		$pesan['simpan_msg'] = 'SIMPAN DATA';
		$this->template 
			->title('DATA OBAT DISIMPAN')
			->set_layout('default-in')
			->build('pages/success',$pesan);
	}
	// Update Edited Data 
	function update($id)
	{
		$data = array (
			'nama' => $this->input->post('nama'),
			'keterangan' => $this->input->post('keterangan'),
			'harga_beli' => $this->input->post('harga_beli'),
			'harga_jual' => $this->input->post('harga_jual'),
			'jumlah' => $this->input->post('jumlah')
		);
		
		$this->db->where('id',$id);
		$this->db->update('obat',$data);
	}
	// Delete Data 
	function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('obat');
	}
}
// End OF Obat_Mod.php 
// File : Application/Models/obat_mod.php 
// copyright : @emanisof - 2014