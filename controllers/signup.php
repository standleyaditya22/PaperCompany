<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SignUp extends CI_Controller {

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
			$this->load->model('m_login');
	}

	public function index()
	{
		$this->load->view('pages/v_signup');
	}

	
	public function action_signup(){
		$user = array(
			'nama' => $this->input->post('name'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('pass'),
			'jabatan' => $this->input->post('sel2')
		);
		$this->m_login->register_acc($user);
		redirect('login/index');
	}

	public function logout(){
        $this->session->sess_destroy();
        $url=base_url('');
        redirect($url);
    }
}
