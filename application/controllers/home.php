<?php if(!defined('BASEPATH')) exit('No Direct Script Access Allowed');

class Home extends CI_Controller{
	
	public function index()
	{
		$this->template
			->title('Aplikasi Kecantikan')
			->set_layout('default-in')
			->build('pages/home');
	}
	
}
/* End OF File home.php */
/* Location Application/Controllers/home.php */
/* Copy Right */
/* @emanisof - 2014 */
