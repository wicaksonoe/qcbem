<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->helper('form');

		$this->load->model('detail_model');

		$this->load->library('session');
	}

	public function index()
	{
		$this->load->view('detail_view',[
			'all'	=> $this->view()
		]);
	}

	public function view()
	{	
		$all 	= $this->detail_model->load_db()->result();
		$var 	= json_encode($all);
		$dir	= './assets/res/json_data.json';
		file_put_contents($dir, $var);
		return $var;
	}
}
