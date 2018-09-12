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
    public function login($data)
	{ 
		$data=$this->db->query("SELECT * FROM partner INNER JOIN partner_credentials ON partner.partner_id = partner_credentials.partner_id WHERE PASSWORD='".$data['password']."' AND email_id='".$data['username']."'");
       return $data->num_rows();
	}
}
