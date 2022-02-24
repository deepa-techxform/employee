<?php

class Employee_model extends MY_Model {

  public function __construct() {
    parent::__construct();
    $this->table_name = "employee_details";
   
  }
  function get_value()  
  {  
       $this->db->select('employee_details.*');  
       $this->db->from('employee_details');  
       if(isset($_POST["search"]["value"]))  
       {  
            $this->db->like("name", $_POST["search"]["value"]);  
            $this->db->or_like("email", $_POST["search"]["value"]);  
       }  
       if(isset($_POST["order"]))  
       {  
            $this->db->order_by($this->order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
       }  
       else  
       {  
            $this->db->order_by('id', 'DESC');  
       }  
  }  
  function make_datatables(){  
    $this->get_value();  
    if($_POST["length"] != -1)  
    {  
         $this->db->limit($_POST['length'], $_POST['start']);  
    }  
    $query = $this->db->get();  
    return $query->result();  
}  
function get_filtered_data(){  
  $this->get_value();  
  $query = $this->db->get();  
  return $query->num_rows();  
}
function get_all_data()  
{  
     $this->db->select("employee_details.*");  
     $this->db->from('employee_details');  
     return $this->db->count_all_results();  
} 
public function getdesigination()
{

  $query = $this->db->get("desigination");
  return $query->result();
}
public function fetch_employ($employid)
{

  $this->db->where('employee_details.id', $employid);
  $this->db->select('employee_details.*');

  return $this->db->get('employee_details')->result();
}
}