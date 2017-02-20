<?php
class Productmodel extends CI_Model{
  public function getAllProduct(){
    $this->db->select("*");
    $this->db->from("tbl_product");
    $this->db->join("tbl_category","tbl_product.product_category=tbl_category.category_id");
    $query=$this->db->get();
    if($query->num_rows()>0){
      return $query->result_array();
    }
    else{
      return false;
    }
  }
  public function getRequiredProduct($id){
    $this->db->select("*");
    $this->db->from("tbl_product");
    $this->db->where("product_id",$id);
    $this->db->limit(1);
    $query=$this->db->get();
    if($query->num_rows()>0){

      $result= $query->result_array();
      return $result[0];
    }
    else{
      return false;
    }
  }
  public function addProduct($data){
    if($this->db->insert("tbl_product",$data)){
      return true;
    }
    else{
      return false;
    }
  }
  public function editProduct($data,$id){
    $this->db->where("product_id",$id);
    if($this->db->update("tbl_product",$data)){
      return true;
    }
    else {
      return false;
    }
  }
  public function deleteProduct($id){
    $this->db->where("product_id",$id);
    if($this->db->delete("tbl_product")){
      return true;
    }
    else{
      return false;
    }
  }
}
 ?>
