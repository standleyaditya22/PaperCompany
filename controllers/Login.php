<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
		$this->load->view('pages/v_homepage');
	}

	public function action_login()
	{
		$username= $this->input->post('username');
		$password= $this->input->post('password');

		$hasil = $this->m_login->is_user_login_ok($username, $password);
		if($hasil->num_rows()>0)
		{
			$data=$hasil->row_array();
			$this->session->set_userdata('masuk',TRUE);
			if($data['jabatan']=='Staff'){
				$this->session->set_userdata('sess_name',$data['nama']);
				$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					</button>
                    <h4>Login Berhasil</h4>
                    <p>Selamat datang</p>
                </div>');
                redirect('workerHome');
				// Input your code here
			}
			elseif($data['jabatan']=='Distributor'){
				$this->session->set_userdata('sess_name',$data['nama']);
				$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					</button>
                    <h4>Login Berhasil</h4>
                    <p>Selamat datang</p>
                </div>');
				redirect('pages/home_distributor');
			}
			elseif($data['jabatan']=='Supplier'){
				$this->session->set_userdata('sess_name',$data['nama']);
				$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					</button>
                    <h4>Login Berhasil</h4>
                    <p>Selamat datang</p>
                </div>');
				// Input your code here
			}
			else{
				$this->session->set_userdata('sess_name',$data['nama']);
				$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					</button>
                    <h4>Login Berhasil</h4>
                    <p>Selamat datang</p>
                </div>');
                redirect('pages/pimpinan');
				// Input your code here
			}
		}
		else{
			$this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible" role="alert" style="width:200px; float:right;">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Login Failed!</strong>
                </div>');
			redirect(base_url());
		}
	}
	public function action_register(){
		$user = array(
			'nama' => $this->input->post('nama'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'jabatan' => $this->input->post('pilihan')
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
