<?php
class Ordermodel extends CI_Model{
  public function getAllOrder(){
    $this->db->select("*");
    $this->db->from("tbl_order");
    $query=$this->db->get();
    if($query->num_rows()>0){
      return $query->result_array();
    }
    else{
      return false;
    }
  }
  public function getRequiredOrder($id){
    $this->db->select("*");
    $this->db->from("tbl_order");
    $this->db->where("order_id",$id);
    $this->db->limit(1);
    $query=$this->db->get();
    if($query->num_rows()>0){
      return $query->result_array();
    }
    else{
      return false;
    }
  }
  public function addOrder($data){
    if($this->db->insert("tbl_order",$data)){
      return true;
    }
    else{
      return false;
    }
  }
  public function editOrder($data,$id){
    $this->db->where("order_id",$id);
    if($this->db->update("tbl_order",$data)){
      return true;
    }
    else {
      return false;
    }
  }
  public function deleteOrder($id){
    $this->db->where("order_id",$id);
    if($this->db->delete("tbl_order")){
      return true;
    }
    else{
      return false;
    }
  }
}
 ?>
