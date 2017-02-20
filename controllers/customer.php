<?php
  class Customer extends CI_Controller{
    public function index(){
      $this->load->model('customermodel');
      $data['customer']=$this->customermodel->getAllCustomer();
      $this->load->view("admin/customer/customerv",$data);
    }
    public function delete($id){
      $this->load->model('customermodel');
      $this->customermodel->deleteCategory($id);
      redirect("customer");
    }
  }
 ?>
