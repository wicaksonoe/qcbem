<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->helper('form');

		$this->load->database();

		$this->load->library('session');
	}

	public function index()
	{
		$this->load->view('detail_view');

		// function to import dBase & convert to JSON for Chart.Js
		//$que = $this->db->get('suara')->result();
		
		//echo json_encode($que);
	}
}
