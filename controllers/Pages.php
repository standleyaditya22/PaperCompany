<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

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

	public function __construct(){
			parent::__construct();
			$this->load->model('m_pages');
	}

	public function home_distributor()
	{
		$this->load->helper('string');
		$data['token'] = random_string('basic',9);
		$data['status']=$this->m_pages->show_status($_SESSION['sess_name']);
		$this->load->view('layout/header_login');
		$this->load->view('pages/v_home_distributor',$data);
		$this->load->view('layout/footer');
	}
	public function pimpinan(){
		$data['laporan']=$this->m_pages->show_laporan();
		$this->load->view('layout/header_login');
		$this->load->view('pages/laporan',$data);
		$this->load->view('layout/footer');

	}

	public function SignUp()
	{
		$this->load->helper('string');
		$this->load->view('pages/V_signup');
	}

	public function insert()
	{
		$data_pesanan=array(
			'id_pesanan'=> $this->input->post('id_pesanan'),
			'nama_pemesan'=> $_SESSION['sess_name'],
			'nama_buku'=> $this->input->post('pilihan'),
			'jumlah'=> $this->input->post('jumlah'),
			'status'=>'Menunggu'
		);
		$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					</button>
                    <h4>Input Pesanan</h4>
                    <p>Berhasil</p>
                </div>');
		$this->m_pages->insert_pesanan($data_pesanan);
		redirect('pages/home_distributor');
	}

	public function laporan()
	{
		$data_laporan=array(
			'nama_pengirim'=> $_SESSION['sess_name'],
			'nama_buku'=> $this->input->post('pilihan'),
			'tanggal'=> $this->input->post('tanggal'),
			'jumlah'=> $this->input->post('jumlah')
		);
		$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					</button>
                    <h4>Input Laporan</h4>
                    <p>Berhasil</p>
                </div>');
		$this->m_pages->insert_laporan($data_laporan);
		redirect('pages/home_distributor');
	}
}