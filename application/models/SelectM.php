<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SelectM extends CI_Model {

	
	public function index()
	{
		$this->db->get('DIM_CUSTOMER');
	}
	public function All($table)
	{
		$data= $this->db->get($table);
		  return $data->result();
	}
    public function customer()
	{
		$data=$this->db->get('DIM_CUSTOMER');
        return $data->result();
	}
	 public function offer()
	{
		$data=$this->db->get('DIM_OFFERS');
        return $data->result();
	}
    public function login($data)
	{ 
		$data=$this->db->query("SELECT * FROM DIM_PARTNER INNER JOIN DIM_PARTNER_CREDENTIALS ON DIM_PARTNER.partner_id = DIM_PARTNER_CREDENTIALS.partner_id WHERE PASSWORD='".$data['password']."' AND PARTNER_EMAIL_ID='".$data['username']."'");
       return $data->num_rows();
       
	}

	 public function barimg()
	{ 
		$data=$this->db->query("SELECT * FROM `DIM_PARTNER` INNER JOIN DIM_BAR_IMAGE ON DIM_BAR_IMAGE.BAR_ID=DIM_PARTNER.PARTNER_ID");
       return $data->result();
       
	}
}
