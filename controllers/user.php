<?php
  class User extends CI_Controller{
    public function __construct(){
      parent::__construct();
      $this->load->model('usermodel');
    }
    public function index(){
      //$this->load->model('usermodel');

      $data['user']=$this->usermodel->getAllUser();
      $this->load->view("admin/user/userv",$data);
    }
    public function delete($id){

      $result=$this->usermodel->deleteUser($id);
      if($result){
        redirect('user');
      }
      else{
        redirect('user');
      }
    }
    public function add(){
      $this->load->view("admin/user/addv");
    //  $this->load->model('usermodel');
    //  $this->usermodel->addUser();

    }
    public function addprocess(){
      //print_r($POST['add']);
      //die();
      $name=$this->input->post('Name');
      $email=$this->input->post('Email');
      $username=$this->input->post('Username');
      $password=$this->input->post('Password');
      $address=$this->input->post('Address');
      $phone=$this->input->post('Phone');

      $data=array(
        'Name'=>$username,
        'Email'=>$email,
        'Username'=>$username,
        'Password'=>$password,
        'Address'=>$address,
        'Phone'=>$phone
      );
      $result=$this->usermodel->addUser($data);
      if($result){
      redirect('user');
      }
      else {
        redirect('user');
      }
    }

    public function edit($id){

      $data['user']=$this->usermodel->getRequiredUser($id);
      $this->load->view('admin/user/editv',$data);
    }

    public function editprocess(){
      $user_id=$this->input->post('user_id');
      $name=$this->input->post('Name');
      $email=$this->input->post('Email');
      $username=$this->input->post('Username');
      $password=$this->input->post('Password');
      $address=$this->input->post('Address');
      $phone=$this->input->post('Phone');
      $this->load->model('usermodel');
      $data=array(
        'Name'=>$username,
        'Email'=>$email,
        'Username'=>$username,
        'Password'=>$password,
        'Address'=>$address,
        'Phone'=>$phone
      );
      $result=$this->usermodel->editUser($data,$user_id);
      if($result){
        redirect('user');
      }
      else {
        redirect('user');
      }
    }
  }
 ?>
