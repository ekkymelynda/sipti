<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sipti_controller extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function home_pengguna()
	{
		$this->load->view('pengguna/header')->view('pengguna/home')->view('pengguna/footer');
	}

	public function daftar_pengguna()
	{
		$this->load->view('pengguna/header')->view('pengguna/daftar')->view('pengguna/footer');
	}

	public function masuk_pengguna()
	{
		$this->load->view('pengguna/header')->view('pengguna/masuk')->view('pengguna/footer');
	}
}
