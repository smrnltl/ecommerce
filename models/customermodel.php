<?php
class Customermodel extends CI_Model{
  public function getAllCustomer(){
    $this->db->select("*");
    $this->db->from("tbl_customer");
    $query=$this->db->get();
    if($query->num_rows()>0){
      return $query->result_array();
    }
    else{
      return false;
    }
  }
  public function getRequiredCustomer($id){
    $this->db->select("*");
    $this->db->from("tbl_customer");
    $this->db->where("customer_id",$id);
    $this->db->limit(1);
    $query=$this->db->get();
    if($query->num_rows()>0){
      return $query->result_array();
    }
    else{
      return false;
    }
  }
  public function addCustomer($data){
    if($this->db->insert("tbl_customer",$data)){
      return true;
    }
    else{
      return false;
    }
  }
  public function editCustomer($data,$id){
    $this->db->where("customer_id",$id);
    if($this->db->update("tbl_customer",$data)){
      return true;
    }
    else {
      return false;
    }
  }
  public function deleteCustomer($id){
    $this->db->where("customer_id",$id);
    if($this->db->delete("tbl_customer")){
      return true;
    }
    else{
      return false;
    }
  }
}
 ?>
