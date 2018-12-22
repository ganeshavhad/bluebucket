<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	
	public function index()
	{	 
		//$data['page']="dashboard.php";
		
		$this->load->view('Admin/dashboard');
	}
    public function customer()
	{   
        $this->load->model('SelectM');
        $data['customer']=$this->SelectM->customer();
         $data['page']="customer.php";
		$this->load->view('Admin/customer',$data);
	}

	public function offer()
	{   
        $this->load->model('SelectM');
        $data['customer']=$this->SelectM->customer();
         $data['page']="offer.php";
		$this->load->view('Admin/index',$data);
	}

	public function drink()
	{   
        $this->load->model('SelectM');
        $data['DIM_DRINK_TYPES']=$this->SelectM->all('DIM_DRINK_TYPES');
         $data['page']="drink.php";
		$this->load->view('Admin/index',$data);

	}

	public function bar()
	{   
        $this->load->model('SelectM');
        $data['DIM_STATES']=$this->SelectM->all("DIM_STATES");        
        $data['DIM_CITIES']=$this->SelectM->all("DIM_CITIES");
         $data['page']="bar.php";
		$this->load->view('Admin/index',$data);
	}


	public function drinktype()
	{   
        $this->load->model('SelectM');
        $data['customer']=$this->SelectM->customer();
        $data['page']="drinktype.php";
		$this->load->view('Admin/index',$data);
	}
}

