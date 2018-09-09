<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SelectM extends CI_Model {

	
	public function index()
	{
		$this->load->view('index');
	}
}
