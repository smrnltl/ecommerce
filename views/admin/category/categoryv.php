<?php $this->load->view('admin/header');
$this->load->view('admin/sidebar');
$this->load->view('admin/dashboard');
 ?>
<a href="<?php echo base_url(); ?>index.php/category/add"><button type="button" class="btn btn-info">Add Category</button></a>
<table border="1" class="table table-bordered">
 <tr>
   <td>SN</td>
   <td>Name</td>
   <td>Status</td>
   <td>Edit</td>
   <td>Delete</td>
 </tr>
 <?php
  if($category){
    $i=0;
    foreach($category as $c){
        $i++;

  ?>
  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $c['category_name']; ?></td>
    <td><?php echo $c['category_status']; ?></td>
    <td><a href="<?php echo base_url(); ?>index.php/category/edit/<?php echo $c['category_id'];?>"><button type="button" class="btn btn-success">Edit</button></a></td>
    <td><a href="<?php echo base_url(); ?>index.php/category/delete/<?php echo $c['category_id'];?>"><button type="button" class="btn btn-danger">Delete</button></a></td>
  </tr>
  <?php
    }
  }
   ?>
</table>
<?php $this->load->view('admin/footer'); ?>
