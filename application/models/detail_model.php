<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class detail_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
	}

	public function load_db()
	{
		return $this->db->get('suara2');
	}
}
