<?php if(!defined('BASEPATH')) exit('Direct Access Not Allowed');

class Layanan_mod extends CI_Model {
	
	/* Save New Data Layanan */
	public function save_data()
	{
		$data = array (
			'nama' => $this->input->post('nama'),
			'keterangan' => $this->input->post('keterangan'),
			'harga' => $this->input->post('harga')
		);
		
		$this->db->insert('layanan',$data);
		$pesan['simpan_msg'] = "Data Layanan Telah Tersimpan";
		$this->template
			->title('SIMPAN DATA')
			->set_layout('default-in')
			->build('pages/success',$pesan);
	}
	
	/* Update Edit Layanan */
	public function update($id)
	{
		$data = array(
			'nama' => $this->input->post('nama'),
			'keterangan' => $this->input->post('keterangan'),
			'harga' => $this->input->post('harga')
		);
		
		$this->db->where('id',$id);
		$this->db->update('layanan',$data);
		$pesan['simpan_msg'] = 'Data Layanan Terupdate';
		$this->template
			->title('Data Layanan Terupdate')
			->set_layout('default-in')
			->build('pages/success',$pesan);
	}
	
	public function all_layanan()
	{
		$query = $this->db->get('layanan');
		return $query->result_array();
	}
	
	public function get_layanan($id = FALSE)
	{
		if($id === FALSE)
		{
			$query = $this->db->get('layanan');
			return $query->result_array();
		}else {
			$this->db->where('id',$id);
			$query = $this->db->get('layanan');
			return $query->row_array();
	
		}
	}
	
	/* Delete Data Layanan */
	public function del_layanan($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('layanan');
		$pesan['simpan_msg'] = "Data Layanan Dihapus";
		$this->template
			->title('Hapus Data')
			->set_layout('default-in')
			->build('pages/success',$pesan);
	}
	
	/* Save New Data Layanan Category */
	public function save_cat()
	{
		$data = array (
			'nama' => $this->input->post('nama'),
			'keterangan' => $this->input->post('keterangan'),
			'disc' => $this->input->post('diskon')/100
		);
		
		$this->db->insert('cat_layanan',$data);
		$pesan['simpan_msg'] = " Data Kategori Layanan Telah Tersimpan";
		$this->template
			->title('SIMPAN DATA')
			->set_layout('default-in')
			->build('pages/success',$pesan);
	}
	
	public function index_category($id = FALSE)
	{
		if(!$id === FALSE ){
			$this->db->where('id',$id);
			$query = $this->db->get('cat_layanan');
			return $query->row_array();	
		}
		$query = $this->db->get('cat_layanan');
		return $query->result_array();
	}
	
	/* Update Edit Category */
	public function update_cat($id)
	{
		$data = array(
			'nama' => $this->input->post('nama'),
			'keterangan' => $this->input->post('keterangan'),
			'disc' => $this->input->post('diskon')/100
		);
		$pesan['simpan_msg'] =" Telah Tersimpan";
		$this->db->where('id',$id);
		$this->db->update('cat_layanan',$data);
		$this->template
			->title('Kategori Layanan Terupdate')
			->set_layout('default-in')
			->build('pages/success',$pesan);
	}
	
	public function del_category($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('cat_layanan');
		$pesan['simpan_msg'] = " HAPUS DATA";
		$this->template
			->title('Data Telah Terhapus')
			->set_layout('default-in')
			->build('pages/success',$pesan);
	}
}
/* 
 => End Of File : Layanan_mod.php
 => Location : Application/Models/layanan_mod.php
 => @emanisof - 2014
*/
