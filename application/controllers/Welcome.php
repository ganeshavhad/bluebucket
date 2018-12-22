<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$this->load->view('Admin/login');
	}
    
    public function login()
	{   
        $data=$this->input->post();
        $out=$this->load->model('SelectM');
        $datab=$this->SelectM->login($data);
    if($datab==1){
        $this->session->set_userdata('user',$data['username']);
        $this->session->set_flashdata('success','login successful');
        redirect('Admin/index');
    }else{
          $this->session->set_flashdata('error','Please Entre correct email and password');
           $this->load->view('Admin/login');
        }
	}
    
    public function logout()
	{  
        $this->session->sess_destroy();
		$this->load->view('Admin/login');
	}
}
