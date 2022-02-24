<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {

 public function __construct()
 {
  parent::__construct();
  $this->load->model('Employee_model');
  $this->load->library('form_validation');
//   $this->load->library('encryption');

 }
	
 public function index()
 {
  $desigination = $this->Employee_model->getdesigination();
  $this->data['desigination'] = $desigination;
  $this->load->view( 'header');
     $this->load->view('employee_details',$this->data);
     $this->load->view('footer');
 }


 public function create_employee()
 {
  $this->load->library(array('form_validation'));
  $this->form_validation->set_rules('name', 'Name', 'trim');
  $this->form_validation->set_rules('email', 'Email', 'trim|required');
  $this->form_validation->set_rules('desigination', 'Designation', 'trim|required');


  if ($this->form_validation->run() === TRUE) {

    $fileData = [];
    $fileName = 'nofile';
    if (!empty($_FILES['empoly_image']['name'])) {
    $this->load->helper(array('form', 'url'));
    $config['upload_path']          = './uploads/images/';
    $config['allowed_types']        = 'gif|jpg|png|pdf';

    $this->load->library('upload', $config);
      if ( ! $this->upload->do_upload('empoly_image'))
      {
          $fileData = array('error' => $this->upload->display_errors());
          echo json_encode(["status" => false, "error" => $fileData]);
          exit();
      }
      else
      {
          $fileData = array('upload_data' => $this->upload->data());
      }
      if (!array_key_exists('error', $fileData)) {
        $fileName = $fileData['upload_data']['file_name'];
      }
    }

    $post_data = array(
      
                
      'name' => $this->input->post('name'),
      'email' => $this->input->post('email'),
      'desigination' => $this->input->post('desigination'),
      'photo' => $fileName,

  );
  // print_r($post_data);
  // exit();

$id = $this->Employee_model->create($post_data);
  }
  $this->load->view( 'header');
     $this->load->view('employee_list');
     $this->load->view('footer');
 }
 public function employee_list()
 {
    $this->load->view( 'header');
  $this->load->view('employee_list', array());
   $this->load->view('footer');
 
 }
 public function ajaxlist()
 {

  $fetch_data = $this->Employee_model->make_datatables();  
  $data = array();  
  foreach($fetch_data as $row)  
  {  
       $sub_array = array();  
       $sub_array[] = '<img src="'.base_url().'upload/images/'.$row->photo.'" class="img-thumbnail" width="50" height="35" />';  
       $sub_array[] = $row->name;  
       $sub_array[] = $row->email;  
       $sub_array[] = $row->desigination;
       $sub_array[] = '<a href="'.base_url().'employee/edit_employee/'.$row->id.'"><button type="button" name="update" id="'.$row->id.'" class="btn btn-warning btn-xs update">Update</button></a>';  
       $sub_array[] = '<button type="button" name="delete" id="'.$row->id.'" class="btn btn-danger btn-xs delete">Delete</button>';  
       $data[] = $sub_array;  
  }  
  $output = array(  
       "draw"                    =>     intval($_POST["draw"]),  
       "recordsTotal"          =>      $this->Employee_model->get_all_data(),  
       "recordsFiltered"     =>     $this->Employee_model->get_filtered_data(),  
       "data"                    =>     $data  
  );  
  echo json_encode($output); 
 }

 function edit_employee($id)  
 {  
 
   $employid = $id;
 
   $this->data['employ'] = $this->Employee_model->fetch_employ($employid);  
      
      $this->load->view( 'header');
      $this->load->view('edit_employee', $this->data);
       $this->load->view('footer');
     
 } 
}
