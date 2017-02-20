<?php
class Admin extends CI_Controller{
  public function __construct(){
    parent::__construct();
    //session_start();
  }
  public function index(){
    $this->load->view('admin/loginv');
  }
  public function loginCheck(){
    $username=$this->input->post('username');
    $password=$this->input->post('password');
    $this->load->model('loginmodel');
    $checkResult=$this->loginmodel->checkSpecificQuery($username,$password);
    if($checkResult){
        redirect('user');
    }
    else {
      $this->session->set_userdata('error_msg','Invalid Username or Password!');
      redirect('admin');
    }
  }
  public function logout(){
    //  if (isset($_SESSION)){
      //$_SESSION['login']=null;
      //session_destroy();
      redirect('admin');
  //  }
}
}
 ?>
