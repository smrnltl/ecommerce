<?php
  class Order extends CI_Controller{
    public function index(){
      $this->load->model('ordermodel');
      $data['order']=$this->ordermodel->getAllOrder();
      $this->load->view("admin/order/orderv",$data);
    }
  }
 ?>
