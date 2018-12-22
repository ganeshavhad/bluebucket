<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

    
    
    public function index()
    {   
        $post['CUSTOMER_MOBILE_NUMBER']="7208299790";
        $post['PASSWORD']="ganesh";
        $post['CUSTOMER_NAME']="admin2";
        $post['CUSTOMER_SURNAME']="avhad";

        $this->load->model('ApiModel');
        $data['customer']=$this->ApiModel->sign($post['CUSTOMER_MOBILE_NUMBER'],$post['PASSWORD'],$post['CUSTOMER_NAME'],$post['CUSTOMER_SURNAME']);
        $this->load->view('Admin/customer',$data);
    }

    public function customer(){
        $this->load->model('SelectM');
        $data['customer']=$this->SelectM->customer();
        print_r($data);//$this->load->view('Admin/customer',$data);
    } 

}

