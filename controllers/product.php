<?php
  class product extends CI_Controller{
    public function __construct(){
      parent::__construct();
      $this->load->model('productmodel');
    }
    public function index(){
      //$this->load->model('productmodel');

      $data['product']=$this->productmodel->getAllProduct();
      $this->load->view("admin/product/productv",$data);
    }
    public function delete($id){

      $result=$this->productmodel->deleteProduct($id);
      if($result){
        redirect('product');
      }
      else{
        redirect('product');
      }
    }
    public function add(){
      $this->load->model('categorymodel');
      $data['category'] = $this->categorymodel->getAllCategory();
      $this->load->view("admin/product/addv",$data);
    //  $this->load->model('productmodel');
    //  $this->productmodel->addproduct();

    }
    public function addprocess(){
      //print_r($POST['add']);
      //die();
      $product_code=$this->input->post('product_code');
      $product_name=$this->input->post('product_name');
      $product_category=$this->input->post('product_category');
      $product_price=$this->input->post('product_price');
      $product_image=$this->input->post('product_image');
      $product_description=$this->input->post('product_description');
      $product_status=$this->input->post('product_status');


      $data=array(
        'product_code'=>$product_code,
        'product_name'=>$product_name,
        'product_category'=>$product_category,
        'product_price'=>$product_price,
        'product_image'=>$product_image,
        'product_description'=>$product_description,
        'product_status'=>$product_status
      );
      $result=$this->productmodel->addproduct($data);
      if($result){
      redirect('product');
      }
      else {
        redirect('product');
      }
    }

    public function edit($id){

      $data['product']=$this->productmodel->getRequiredProduct($id);
      $this->load->view('admin/product/editv',$data);
    }

    public function editprocess(){
      $product_id=$this->input->post('product_id');
      $product_code=$this->input->post('product_code');
      $product_name=$this->input->post('product_name');
      $product_category=$this->input->post('product_category');
      $product_price=$this->input->post('product_price');
      $product_image=$this->input->post('product_image');
      $product_description=$this->input->post('product_description');
      $product_status=$this->input->post('product_status');
      $this->load->model('productmodel');
      $data=array(
        'product_code'=>$product_code,
        'product_name'=>$product_name,
        'product_category'=>$product_category,
        'product_price'=>$product_price,
        'product_image'=>$product_image,
        'product_description'=>$product_description,
        'product_status'=>$product_status
      );
      $result=$this->productmodel->editProduct($data,$product_id);
      if($result){
        redirect('product');
      }
      else {
        redirect('product');
      }
    }
  }
 ?>
