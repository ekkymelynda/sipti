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


	/*Menu Cari Buku*/
	public function lihat_semua_buku()
	{
		$this->load->view('pengguna/akun/header')->view('pengguna/akun/cari buku/lihat semua buku')->view('pengguna/akun/footer');
	}
	
	public function form_peminjaman()
	{
		$this->load->view('pengguna/akun/header')->view('pengguna/akun/cari buku/form peminjaman')->view('pengguna/akun/footer');
	}
	public function notifikasi_form()
	{
		$this->load->view('pengguna/akun/header')->view('pengguna/akun/cari buku/notifikasi form')->view('pengguna/akun/footer');
	}

	/*Menu Profil*/
	public function halaman_profil()
	{
		$this->load->view('pengguna/akun/header')->view('pengguna/akun/profil/halaman_profil')->view('pengguna/akun/footer');
	}
	public function ubah_profil()
	{
		$this->load->view('pengguna/akun/header')->view('pengguna/akun/profil/ubah profil')->view('pengguna/akun/footer');
	}
	public function contoh_profil(){
		$this->load->view('pengguna/akun/header')->view('pengguna/akun/profil/contoh profil')->view('pengguna/akun/footer');
	}
	public function contoh_profil_2(){
		$this->load->view('pengguna/akun/header')->view('pengguna/akun/profil/contoh profil 2')->view('pengguna/akun/footer');
	}
	public function contoh_profil_3(){
		$this->load->view('pengguna/akun/header')->view('pengguna/akun/profil/contoh profil 3')->view('pengguna/akun/footer');
	}



	/*Menu Peminjaman*/

	/*Kelola Buku Pinjaman*/
	
	public function koleksi_buku_pinjaman()
	{
		$this->load->view('pengguna/akun/header')->view('pengguna/akun/peminjaman/kelola buku pinjaman/koleksi buku pinjaman')->view('pengguna/akun/footer');
	}
	public function koleksi_buku_pinjaman1()
	{
		$this->load->view('pengguna/akun/header')->view('pengguna/akun/peminjaman/kelola buku pinjaman/koleksi buku pinjaman1')->view('pengguna/akun/footer');
	}
	public function verifikasi_peminjaman()
	{
		$this->load->view('pengguna/akun/header')->view('pengguna/akun/peminjaman/kelola buku pinjaman/verifikasi peminjaman')->view('pengguna/akun/footer');
	}
	

	/*Kelola Buku Saya*/

	public function daftarkan_buku()
	{
		$this->load->view('pengguna/akun/header')->view('pengguna/akun/peminjaman/kelola buku saya/daftarkan buku')->view('pengguna/akun/footer');
	}

	public function koleksi_buku_saya()
	{
		$this->load->view('pengguna/akun/header')->view('pengguna/akun/peminjaman/kelola buku saya/koleksi buku saya')->view('pengguna/akun/footer');
	}

	public function lihat_calon_peminjam()
	{
		$this->load->view('pengguna/akun/header')->view('pengguna/akun/peminjaman/kelola buku saya/lihat calon peminjam')->view('pengguna/akun/footer');
	}

	public function lihat_calon_peminjam_2()
	{
		$this->load->view('pengguna/akun/header')->view('pengguna/akun/peminjaman/kelola buku saya/lihat calon peminjam 2')->view('pengguna/akun/footer');
	}

	public function lihat_calon_peminjam_3()
	{
		$this->load->view('pengguna/akun/header')->view('pengguna/akun/peminjaman/kelola buku saya/lihat calon peminjam 3')->view('pengguna/akun/footer');
	}

	public function lihat_calon_peminjam_4()
	{
		$this->load->view('pengguna/akun/header')->view('pengguna/akun/peminjaman/kelola buku saya/lihat calon peminjam 4')->view('pengguna/akun/footer');
	}

	public function lihat_calon_peminjam_5()
	{
		$this->load->view('pengguna/akun/header')->view('pengguna/akun/peminjaman/kelola buku saya/lihat calon peminjam 5')->view('pengguna/akun/footer');
	}

	public function lihat_calon_peminjam_6()
	{
		$this->load->view('pengguna/akun/header')->view('pengguna/akun/peminjaman/kelola buku saya/lihat calon peminjam 6')->view('pengguna/akun/footer');
	}

	public function lihat_calon_peminjam_7()
	{
		$this->load->view('pengguna/akun/header')->view('pengguna/akun/peminjaman/kelola buku saya/lihat calon peminjam 7')->view('pengguna/akun/footer');
	}

	public function lihat_calon_peminjam_8()
	{
		$this->load->view('pengguna/akun/header')->view('pengguna/akun/peminjaman/kelola buku saya/lihat calon peminjam 8')->view('pengguna/akun/footer');
	}

	public function ubah_buku()
	{
		$this->load->view('pengguna/akun/header')->view('pengguna/akun/peminjaman/kelola buku saya/ubah buku')->view('pengguna/akun/footer');
	}

	public function ubah_buku_2()
	{
		$this->load->view('pengguna/akun/header')->view('pengguna/akun/peminjaman/kelola buku saya/ubah buku 2')->view('pengguna/akun/footer');
	}

	/*Admin*/
	public function login_admin()
	{
		$this->load->view('admin/masuk');
	}

	public function profil_lihat()
	{
		$this->load->view('admin/header')->view('admin/profil/lihat')->view('admin/footer');
	}

	public function buku_lihat()
	{
		$this->load->view('admin/header')->view('admin/buku/lihat')->view('admin/footer');
	}

	public function pengguna_lihat()
	{
		$this->load->view('admin/header')->view('admin/pengguna/lihat')->view('admin/footer');
	}

	public function transaksi_lihat()
	{
		$this->load->view('admin/header')->view('admin/transaksi/lihat')->view('admin/footer');
	}
}
