<?php $this->load->view('admin/header');
$this->load->view('admin/sidebar');
$this->load->view('admin/dashboard');?>
<a href="<?php echo base_url();?>index.php/product/add"><button type="button" class="btn btn-info">Add Product</button></a>
<table border="1" class="table table-bordered">
 <tr>
   <td>SN</td>
   <td>Code</td>
   <td>Name</td>
   <td>Category</td>
   <td>Price</td>
   <td>Image</td>
   <td>Description</td>
   <td>Status</td>
   <td>Edit</td>
   <td>Delete</td>
 </tr>
 <?php
  if($product){
    $i=0;
    foreach($product as $p){
        $i++;

  ?>
  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $p['product_code']; ?></td>
    <td><?php echo $p['product_name']; ?></td>
    <td><?php echo $p['category_name']; ?></td>
    <td><?php echo $p['product_price']; ?></td>
    <td><?php echo $p['product_image']; ?></td>
    <td><?php echo $p['product_description']; ?></td>
    <td><?php echo $p['product_status']; ?></td>

    <td><a href="<?php echo base_url();?>index.php/product/edit/<?php echo $p['product_id'];?>"><button type="button" class="btn btn-success">Edit</button></a></td>
    <td><a href="<?php echo base_url();?>index.php/product/delete/<?php echo $p['product_id'];?>"><button type="button" class="btn btn-danger">Delete</button></a></td>
  </tr>
  <?php
    }
  }
   ?>
</table>
<?php $this->load->view('admin/footer'); ?>
