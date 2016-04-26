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
	public function halaman_utama_pengguna()
	{
		$this->load->view('pengguna/header')->view('pengguna/halaman_utama')->view('pengguna/footer');
	}

	public function daftar_pengguna()
	{
		$this->load->view('pengguna/header')->view('pengguna/daftar')->view('pengguna/footer');
	}

	public function masuk_pengguna()
	{
		$this->load->view('pengguna/header')->view('pengguna/masuk')->view('pengguna/footer');
	}

	public function daftarkan_buku()
	{
		$this->load->view('pengguna/akun/header')->view('pengguna/akun/buku/daftarkan buku')->view('pengguna/akun/footer');
	}

	public function lihat_daftar_buku()
	{
		$this->load->view('pengguna/akun/header')->view('pengguna/akun/buku/lihat daftar buku')->view('pengguna/akun/footer');
	}

	public function lihat_semua_buku()
	{
		$this->load->view('pengguna/akun/header')->view('pengguna/akun/cari buku/lihat semua buku')->view('pengguna/akun/footer');
	}
	public function halaman_profil()
	{
		$this->load->view('pengguna/akun/header')->view('pengguna/akun/profil/halaman_profil')->view('pengguna/akun/footer');
	}
	public function ubah_profil()
	{
		$this->load->view('pengguna/akun/header')->view('pengguna/akun/profil/ubah profil')->view('pengguna/akun/footer');
	}
}
