<?php
  class Category extends CI_Controller{
    public function index(){
      $this->load->model('categorymodel');
      $data['category']=$this->categorymodel->getAllCategory();
      $this->load->view("admin/category/categoryv",$data);
    }
    public function delete($id){
      $this->load->model('categorymodel');
      $this->categorymodel->deleteCategory($id);
      redirect('category');
    }

    public function add(){
      $this->load->view("admin/category/addv");
    //  $this->load->model('usermodel');
    //  $this->usermodel->addUser();

    }
    public function addprocess(){
      //print_r($POST['add']);
      //die();
      $name=$this->input->post('category_name');
      $status=$this->input->post('category_status');
      $this->load->model('categorymodel');
      $data=array(
        'category_name'=>$name,
        'category_status'=>$status,
      );
      $result=$this->categorymodel->addCategory($data);
      if($result){
      redirect('category');
      }
      else {
        redirect('category');
      }
    }

    public function edit($id){
      $this->load->model("categorymodel");
      $data['category']=$this->categorymodel->getRequiredCategory($id);
      $this->load->view('admin/category/editv',$data);
    }

    public function editprocess(){
      $category_id=$this->input->post('category_id');
      $name=$this->input->post('category_name');
      $status=$this->input->post('category_status');
      $this->load->model('categorymodel');
      $data=array(
        'category_name'=>$name,
        'category_status'=>$status,
      );
      $result=$this->categorymodel->editCategory($data,$cateogry_id);
      if($result){
        redirect('category');
      }
      else {
        redirect('category');
      }
  }
}
 ?>
