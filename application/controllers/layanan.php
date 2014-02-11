<?php if(!defined('BASEPATH')) exit('Direct Access Not Allowed');

class Layanan extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('layanan_mod');
	}	
	
	/* Input Layanan */
	public function input()
	{
		$this->form_validation->set_rules('nama','Nama Layanan','required');
		$this->form_validation->set_rules('keterangan','Keterangan Layanan','required');
		$this->form_validation->set_rules('harga','Harga Harus Numeric','required|numeric');
		
		if($this->form_validation->run() == FALSE)
		{
			$data['judul'] = 'Input Data Layanan';
		
			$this->template
				->title('Input Data Layanan')
				->set_layout('default-in')
				->build('forms/input_layanan',$data);
		}else{
			
			$this->load->model('layanan_mod');
			$this->layanan_mod->save_data();
		}
	}
	
		/* Edit Layanan */
	public function edit($id)
	{
		$data['layanan'] = $this->layanan_mod->get_layanan($id);
		$this->template
			->title('UPDATE DATA LAYANAN')
			->set_layout('default-in')
			->build('forms/input_layanan',$data);
	}
	
	/* Update Layanan */
	public function update($id)
	{
		if(!empty($id))
		{
			$this->layanan_mod->update($id);
			
		}
		return;
	}
	
	/** Display Layanan **/
	public function get_layanan()
	{
		$this->load->model('layanan_mod');
		$data['all_layanan'] = $this->layanan_mod->get_layanan();
		
		$this->template
			->title('Data Layanan Klinik')
			->set_layout('default-in')
			->build('pages/layanan',$data);
	}

	/* Delete Data Layana  */
	
	public function del_layanan($id)
	{
		$this->layanan_mod->del_layanan($id);
	}

	/* Input Data Category Layanan */
	public function category()
	{
	
		$this->form_validation->set_rules('nama','Nama Kategori Harus Ada','rewuired');
		$this->form_validation->set_rules('keterangan','Keterangan','required');
		$this->form_validation->set_rules('diskon','Nilai Diskon','required|numeric');
		if($this->form_validation->run() === FALSE) {
		
			$data['judul'] = 'Kategori Layanan';
			$this->template
				->title('Kategori Layanan')
				->set_layout('default-in')
				->build('forms/input_category',$data);
		}else{
			
			$this->load->model('layanan_mod');
			$this->layanan_mod->save_cat();
		}
	}
	
	public function index_category()
	{
		$data['all_layanan']  = $this->layanan_mod->index_category();
		$this->template
			->title('Data Kategori Layanan')
			->set_layout('default-in')
			->build('pages/cat_layanan',$data);
		
	}
	
	public function edit_cat($id)
	{
		if($this->input->post('nama') == NULL ) 
		{
			$data['layanan'] = $this->layanan_mod->index_category($id);
			$this->template
				->title('Edit Kategory Layanan')
				->set_layout('default-in')
				->build('forms/input_category',$data);
		}else{
			$this->layanan_mod->update_cat($id);
		}
	}
	
	public function del_category($id)
	{
		$this->layanan_mod->del_category($id);
	}
	
	/* Success Page To Save Data */
	public function success($pesan = NULL)
	{
		$this->template
			->title('DATA TERSEIMPAN')
			->set_layout('default-in')
			->build('pages/success.php',$pesan);
	}
	
}