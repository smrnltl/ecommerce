<?php
class Home extends CI_Controller{
  public function index(){
    $this->load->model('categorymodel');
    $data['category']=$this->categorymodel->getAllCategory();
  $this->load->view('homeview',$data);
}
}

 ?>
