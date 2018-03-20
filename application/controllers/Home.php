<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		//$data = array(
			//'nama' => 'Kukuh setiawan',
			//'status' => 'Pelajar'
			//);

			$data['nama'] = 'Eji';
			$data['status'] = 'ice';
				
		$this->header();
		$this->load->view('index',$data);
		$this->footer();
	} 
    public function controllerprofil()
	{
		echo "Halaman Profil";
	}
	public function controllercontact($value='')
	{
		echo "Halaman Contact";
	}
	public function nama($value='', $value1='')
	{
		echo "Nama Saya ".$value. " dan ".$value1;
	}
	// --------Views----------
	public function header()
	{
		$this->load->view('header');
	}
	public function footer()
	{
		$this->load->view('footer');
	}
}
