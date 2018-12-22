<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Submit extends CI_Controller {

	
	public function index()
	{
		$this->load->view('Admin/dashboard');
	}
    public function offer()
	{   
	
		$post = $this->input->post();

		  $config['upload_path']          = './assets/upload/offer/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 10000;
                $config['max_width']            = 10024;
                $config['max_height']           = 7608;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('PATH'))
                {
                        $error = array('error' => $this->upload->display_errors());

                      redirect('Admin/offer');
                }
                else
                {     


			        $upload_data = $this->upload->data();

			        //resize:

			        $config['image_library'] = 'gd2';
			        $config['source_image'] = $upload_data['full_path'];
			        $config['maintain_ratio'] = TRUE;
			        $config['width']     = 160;
			        $config['height']   = 140;
					$new_name = $_FILES["PATH"]['name'];
					$config['file_name'] = $new_name;
			        $this->load->library('image_lib', $config); 

			        $this->image_lib->resize();
			        
			        $post['PATH'] = '/assets/upload/offer/ '.$config['file_name'];
			        $post['ACTIVENESS'] = 1;
			        //add to the DB
			        $this->load->model('InsertM');
			       $data = $this->InsertM->offer($post);
			       if($data){
			       	redirect('Admin/offer');
			       }
			       else{
			       		redirect('Admin/offer');
			       }
	        }

       /* $this->load->model('SelectM');
        $data['customer']=$this->SelectM->customer();
		$this->load->view('Admin/customer',$data);*/
	}

 public function Drink()
	{   
	
		$post = $this->input->post();
		
		  $config['upload_path']          = './assets/upload/drink/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 10000;
                $config['max_width']            = 10024;
                $config['max_height']           = 7608;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('DRINK_IMG'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        	redirect('Admin/offer');
                }
                else
                {     


			        $upload_data = $this->upload->data();

			        //resize:

			        $config['image_library'] = 'gd2';
			        $config['source_image'] = $upload_data['full_path'];
			        $config['maintain_ratio'] = TRUE;
			        $config['width']     = 160;
			        $config['height']   = 140;
					$new_name = $_FILES["DRINK_IMG"]['name'];
					$config['file_name'] = $new_name;
			        $this->load->library('image_lib', $config); 

			        $this->image_lib->resize();
			        
			        $post['DRINK_IMG'] = '/assets/upload/drink/ '.$config['file_name'];
			      //  $post['ACTIVENESS'] = 1;
			        //add to the DB
			        $this->load->model('InsertM');
			        $table="DIM_DRINKS";// print_r($post);die();
			       $data = $this->InsertM->index($table,$post);
			       if($data){
			       	redirect('Admin/offer');
			       }
			       else{
			       		redirect('Admin/offer');
			       }
	        }
	        

       /* $this->load->model('SelectM');
        $data['customer']=$this->SelectM->customer();
		$this->load->view('Admin/customer',$data);*/
	}

 public function DrinkType()
	{   
	
		$post = $this->input->post();
//$post['DRINK_ID']=uniqid();
		  $config['upload_path']          = './assets/upload/drinktype/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 10000;
                $config['max_width']            = 10024;
                $config['max_height']           = 7608;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('DRINK_TYPE_IMG'))
                {
                        $error = array('error' => $this->upload->display_errors());

                    	redirect('Admin/drinktype');
                }
                else
                {     


			        $upload_data = $this->upload->data();

			        //resize:

			        $config['image_library'] = 'gd2';
			        $config['source_image'] = $upload_data['full_path'];
			        $config['maintain_ratio'] = TRUE;
			        $config['width']     = 160;
			        $config['height']   = 140;
					$new_name = $_FILES["DRINK_TYPE_IMG"]['name'];
					$config['file_name'] = $new_name;
			        $this->load->library('image_lib', $config); 

			        $this->image_lib->resize();
			        
			        $post['DRINK_TYPE_IMG'] = '/assets/upload/drinktype/ '.$config['file_name'];
			      //  $post['ACTIVENESS'] = 1;
			        //add to the DB
			        $this->load->model('InsertM');
			        $table="DIM_DRINK_TYPES";// print_r($post);die();
			       $data = $this->InsertM->index($table,$post);
			       if($data){
			       	redirect('Admin/drinktype');
			       }
			       else{
			       		redirect('Admin/drinktype');
			       }
	        }

       /* $this->load->model('SelectM');
        $data['customer']=$this->SelectM->customer();
		$this->load->view('Admin/customer',$data);*/
	}

 public function Bar()
	{   
		
		
//$post['DRINK_ID']=uniqid();

		  $config['upload_path']          = './assets/upload/bar/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 10000;
                $config['max_width']            = 10024;
                $config['max_height']           = 7608;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('IMAGE_PATH'))
                {
                        $error = array('error' => $this->upload->display_errors());

                     	redirect('Admin/offer');
                }
                else
                {     


			        $upload_data = $this->upload->data();

			        //resize:

			        $config['image_library'] = 'gd2';
			        $config['source_image'] = $upload_data['full_path'];
			        $config['maintain_ratio'] = TRUE;
			        $config['width']     = 160;
			        $config['height']   = 140;
					$new_name = $_FILES["IMAGE_PATH"]['name'];
					$config['file_name'] = $new_name;
			        $this->load->library('image_lib', $config); 

			        $this->image_lib->resize();
			        
			        $post['IMAGE_PATH'] = '/assets/upload/bar/ '.$config['file_name'];
			      //  $post['ACTIVENESS'] = 1;
			        //add to the DB

			        	$ADDERSS= array(
					"ADDRESS1"=>$this->input->post('BAR_ADDRESS'),
					"ADDRESS2"=>$this->input->post('BAR_ADDRESS'),
					"ADDRESS_TYPE"=>"PARTNER",
					"STATE"=>$this->input->post('STATE_NAME'),
					"CITY"=>$this->input->post('CITY_NAME'),
					"STREET"=>$this->input->post('STREET'),
					"LANDMARK"=>$this->input->post('LANDMARK'),
					"PINCODE"=>$this->input->post('PINCODE'),
					);
 					$this->load->model('InsertM');
			         $table="DIM_ADDRESS";
			       $data = $this->InsertM->index($table,$ADDERSS);
			          $ID= $this->db->insert_id();

			          $BAR= array(
						"BAR_ADDRESS"=>$ID,
						"PARTNER_NAME"=>$this->input->post('PARTNER_NAME'),
						"PARTNER_SURNAME"=>$this->input->post('PARTNER_SURNAME'),
						"BAR_NAME"=>$this->input->post('BAR_NAME'),
						"PARTNER_MOBILE_NUMBER"=>$this->input->post('PARTNER_MOBILE_NUMBER'),
						"PARTNER_EMAIL_ID"=>$this->input->post('PARTNER_EMAIL_ID'),
		);

			        $table="DIM_PARTNER";
			       $data = $this->InsertM->index($table,$BAR);
			        $ID= $this->db->insert_id();

				

					$IMAGE= array(
					"BAR_ID"=>$ID,
					"IMAGE_PATH"=>$this->input->post('PARTNER_NAME'),
					"ACTIVENESS_FLAG"=>'A',
					);

			         $table="DIM_BAR_IMAGE";
			       $data = $this->InsertM->index($table,$IMAGE);
			     //   return $this->db->insert_id();
			       if($data){
			       	redirect('Admin/offer');
			       }
			       else{
			       		redirect('Admin/offer');
			       }
	        }

       /* $this->load->model('SelectM');
        $data['customer']=$this->SelectM->customer();
		$this->load->view('Admin/customer',$data);*/
	}
	public function title()
	{   
        $this->load->model('SelectM');
        $data['customer']=$this->SelectM->customer();
		$this->load->view('Admin/offer',$data);
	}

}
