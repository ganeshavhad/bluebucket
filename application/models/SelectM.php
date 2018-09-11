<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SelectM extends CI_Model {

	
	public function index()
	{
		$this->db->get('customer');
	}
    public function customer()
	{
		$data=$this->db->get('customer');
        return $data->result();
	}
}
