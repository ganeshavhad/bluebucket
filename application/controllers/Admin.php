<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	
	public function index()
	{
		$this->load->view('index');
	}
    public function customer()
	{   
        $this->load->model('SelectM');
        $data['customer']=$this->SelectM->customer();
		$this->load->view('customer',$data);
	}
}
