<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {

	
	public function index()
	{	
		$this->load->model('SelectM');
        $data['offer']=$this->SelectM->offer();
        $data['drinks_types']=$this->SelectM->all('DIM_DRINK_TYPES');
        $data['shop']=$this->SelectM->barimg();
		$this->load->view('client/index',$data);
	}
    public function checkout()
	{   
        $this->load->model('SelectM');
        $data['customer']=$this->SelectM->customer();
		$this->load->view('client/checkout',$data);
	}

	public function cart()
	{
		$this->load->view('client/cart');
	}

	public function product_detail()
	{
		$this->load->view('client/product_detail');
	}

	public function drinks()
	{

        $this->load->model('SelectM');
        $data['drinks_types']=$this->SelectM->all('DIM_DRINK_TYPES');
        $data['dim_drinks']=$this->SelectM->all('DIM_DRINKS');
        $data['shop']=$this->SelectM->all('DIM_PARTNER');
		$this->load->view('client/drinks',$data);
	}



}
