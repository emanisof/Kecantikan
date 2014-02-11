<?php if(!defined('BASEPATH')) exit('No Script Direct Access Allowed');

class Pasien_Mod extends CI_Model {

	function __construct()
	{
		parent::__construct();
		
	}
	
	function index($id = FALSE)
	{
		if(!$id === FALSE){
			$this->db->where('pasien.id',$id);
			$this->db->select('*,pasien.nama as nama_pasien, pasien.id as idpasien');
			$this->db->from('pasien');
			$this->db->join('cat_layanan','cat_layanan.id = pasien.id_cat');
			$query = $this->db->get();
			return $query->row_array();
		}else{
		$this->db->order_by('pasien.id','DESC');
		$this->db->select('*,pasien.nama as nama_pasien,pasien.id as idpasien');
		$this->db->from('pasien');
		$this->db->join('cat_layanan', 'cat_layanan.id = pasien.id_cat','left');
		$query = $this->db->get();
		return $query->result_array();
		}
		
	}
	function index_limit($limit,$start)
	{
		$this->db->limit($limit,$start);	
		$this->db->order_by('pasien.id','DESC');
		$this->db->select('*,pasien.nama as nama_pasien,pasien.id as idpasien');
		$this->db->from('pasien');
		$this->db->join('cat_layanan', 'cat_layanan.id = pasien.id_cat','left');
		$query = $this->db->get();
		if($query->result_array() > 0) {
			return $query->result_array();
		}
		return false;
	}

	// Save New Data Pasien 
	function save()
	{
		//$tahun = date('y');
		//$bulan = date('m');
		$hari=date('ymd');
		$data = array (
			// NO Kartu Diisi dengan Random Formula 
			'no_kartu' => '',
			'id_cat' => $this->input->post('category'),
			'nama' => $this->input->post('nama'),
			'tmp_lahir' => $this->input->post('tmp_lahir'),
			'tgl_lahir' => $this->input->post('tgl_lahir'),
			'kelamin' => $this->input->post('jnskelamin'),
			'kawin' => $this->input->post('nikah'),
			'alamat' => $this->input->post('alamat'),
			'kota' => $this->input->post('kota'),
			'notelp' => $this->input->post('notelp'),
			'nohp' => $this->input->post('nohp'),
			'pekerjaan' => $this->input->post('pekerjaan'),
			'riw_sakit' => $this->input->post('rsakit'),
			'alergi' => $this->input->post('ralergi'),
			'note' => $this->input->post('note')		
		);
		$this->db->insert('pasien',$data);
		$lastid = $this->db->insert_id();
		$pjg = 8 - strlen($lastid);
		$strid = str_pad($lastid,$pjg,"0",STR_PAD_LEFT);
		$curid = $hari.''.$strid;
		
		$data = array ('no_kartu' => $curid);
		$this->db->where('id',$lastid);
		$this->db->update('pasien',$data);
		
	}
	// Cari Data Pasien 
	function caridata($q)
	{
		$this->db->select('*');
		$this->db->like('no_kartu',$q);
		$query = $this->db->get('pasien');
		if($query->num_rows() > 0)
		{
			foreach($query->result_array() as $rows)
			{
				$new_row['label'] = htmlentities(stripcslashes($rows['nama']));
				$new_row['value'] = htmlentities(stripcslashes($rows['no_kartu']));
				$new_row['sakit'] = htmlentities(stripcslashes($rows['riw_sakit']));
				$new_row['alergi'] = htmlentities(stripcslashes($rows['alergi']));
				$row_set[] = $new_row;
			}
			echo json_encode($row_set);
			return $row_set;
		}
	}
	// Jumlah Data 
	function jmldata()
	{
		return $this->db->count_all('pasien'); 
	}

	
}
// end of file : Application/Models/pasien_mod.php
// copyroght : @emanisof - 2014 