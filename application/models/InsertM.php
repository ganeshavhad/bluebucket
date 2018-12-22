<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InsertM extends CI_Model {

	
	public function index($table,$data)
	{
			$data = $this->db->insert($table,$data);
    if($data > 0) 
        return true;
    else
        return false;
	}
    public function offer($data)
	{
		$data = $this->db->insert('DIM_OFFERS',$data);
    if($data > 0) 
        return true;
    else
        return false;
	
	}
    public function login($data)
	{ 
		$data=$this->db->query("SELECT * FROM partner INNER JOIN partner_credentials ON partner.partner_id = partner_credentials.partner_id WHERE PASSWORD='".$data['password']."' AND email_id='".$data['username']."'");
     } 
}
