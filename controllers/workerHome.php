<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class workerHome extends CI_Controller {

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
			$this->load->helper('url');
			$this->load->library('session');
			$this->load->model('m_workerHome');
	}

	public function index()
	{
		$this->load->view('layout/header_worker');
		$this->load->view('pages/v_workerHome');
	}

	public function inputOrder()
	{
		$stat = "On Proccess";		
		$item = array
		(
			'Name' => $this->input->post('sel1'),
			'Amount' => $this->input->post('amount'),
			'Date' => date('Y-m-d'),
			'Status' => $stat
		);
		$this->m_workerHome->insert_order($item);
		redirect('workerHome/index');	
	}

	public function OrderPage()
	{
		$this->load->helper('string');
		$data['order']=$this->m_workerHome->getOrders();
		$this->load->view('layout/header_worker');
		$this->load->view('pages/v_workerOrder',$data);
	}

	public function StockPage()
	{
		$this->load->helper('string');
		$data['stocks']=$this->m_workerHome->getStocks();
		$data['book']=$this->m_workerHome->getBook();
		$this->load->view('layout/header_worker');
		$this->load->view('pages/v_workerStock',$data);
	}

	public function ReportPage()
	{
		$this->load->helper('string');
		$this->load->view('layout/header_worker');
		$this->load->view('pages/v_workerReport');
	}

	public function cancelOrder()
	{
		$this->load->helper('string');
		$this->m_workerHome->cancelOrders($_GET['user']);
		redirect('workerHome/OrderPage');
	}

	public function updateStock()
	{
		$this->load->helper('string');
		$this->m_workerHome->updateStock($_GET['user'],$_POST['amount']);
		redirect('workerHome/StockPage');
	}

	public function actionReport()
	{		
		$item = array
		(
			'name' => $this->input->post('name'),
			'tgl' => date('Y-m-d'),
			'db' => $this->input->post('DB'),
			'sb' => $this->input->post('SB'),
			'wb' => $this->input->post('WB'),
			'jb' => $this->input->post('JB'),
		);
		$this->m_workerHome->insertReport($item);
		redirect('workerHome/ReportPage');	
	}
}
