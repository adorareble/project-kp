<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('header');
		$this->load->view('halamanutama');
		$this->load->view('footer');
	}

	public function masuk()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$this->load->model('User');

		$result = $this->User->get_user_info($username);

		if (count($result) > 0) {
			$password = md5($password);

			if ($password == $result[0]['password']) {
				redirect('sistem');
			} else {
				$this->session->set_flashdata('msg', '<p class="text-light">Password salah!</p>');
				redirect('Welcome/login');
			}
		} else {
			$this->session->set_flashdata('msg', '<p class="text-light">Username tidak ditemukan!</p>');
			redirect('Welcome/login');
		}
	}

	public function sistem()
	{
		// $sesi = $this->input->post('sesi');

		// if ($this->session->userdata('nomorSesi')) {
		// 	$sesi = $this->session->userdata('nomorSesi');
		// 	$this->session->unset_userdata('nomorSesi');
		// }

		// $this->load->model('Tiket');
		// $tiketpersesi = $this->Tiket->get_tiket_sesi($sesi);
		// $data['tiketpersesi'] = $tiketpersesi;
		// $data['nomorSesi'] = $sesi;

		// if (empty($data['tiketpersesi'])) {
		// 	$sesi = 1;
		// 	$tiketpersesi = $this->Tiket->get_tiket_sesi($sesi);
		// 	$data['tiketpersesi'] = $tiketpersesi;
		// 	$data['nomorSesi'] = $sesi;
		// }

		$this->load->view('header');
		$this->load->view('sistem');
		$this->load->view('footer');
	}

	public function login()
	{
		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');
	}

	public function laporan()
	{
		$this->load->model('Lapor');
		$reportlapor = $this->Lapor->get_lapor();
		$data['reportlapor'] = $reportlapor;

		$this->load->view('header');
		$this->load->view('laporan', $data);
		$this->load->view('footer');
	}

	public function beli()
	{
		$pembelianKelinci = $this->input->post('jumlahKelinci');
		$pembelianBunga = $this->input->post('jumlahBunga');
		// $sesiPembelian = $this->input->post('sesi');

		$this->load->model('Tiket');
		$this->Tiket->pembelian($pembelianKelinci*10000, $pembelianKelinci);
		$this->Tiket->pembelian($pembelianBunga*200, $pembelianBunga);
		// $this->session->set_userdata('nomorSesi', $sesiPembelian);
		redirect('sistem');
	}

	public function reset()
	{
		$resetTiket = 100;
		$resetLaporan = 0;

		$this->load->model('Tiket');
		$this->Tiket->reset($resetLaporan, $resetTiket);

		redirect('sistem');
	}
}
