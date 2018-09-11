<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$this->load->view('login');
	}
    public function customer()
	{   
        $this->load->model('SelectM');
        $data['customer']=$this->SelectM->customer();
		$this->load->view('customer',$data);
	}
}
