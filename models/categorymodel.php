<?php
class Categorymodel extends CI_Model{
  public function getAllCategory(){
    $this->db->select("*");
    $this->db->from("tbl_category");
    $query=$this->db->get();
    if($query->num_rows()>0){
      return $query->result_array();
    }
    else{
      return false;
    }
  }
  public function getRequiredCategory($id){
    $this->db->select("*");
    $this->db->from("tbl_user");
    $this->db->where("category_id",$id);
    $this->db->limit(1);
    $query=$this->db->get();
    if($query->num_rows()>0){
      return $query->result_array();
    }
    else{
      return false;
    }
  }
  public function addCategory($data){
    if($this->db->insert("tbl_category",$data)){
      return true;
    }
    else{
      return false;
    }
  }
  public function editCategory($data,$id){
    $this->db->where("category_id",$id);
    if($this->db->update("tbl_category",$data)){
      return true;
    }
    else {
      return false;
    }
  }
  public function deleteCategory($id){
    $this->db->where("category_id",$id);
    if($this->db->delete("tbl_category")){
      return true;
    }
    else{
      return false;
    }
  }
}
 ?>
