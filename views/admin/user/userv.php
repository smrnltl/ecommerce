<?php $this->load->view('admin/header');
$this->load->view('admin/sidebar');
$this->load->view('admin/dashboard');
 ?>
<a href="<?php echo base_url(); ?>index.php/user/add"><button type="button" class="btn btn-info">Add User</button></a>
<table border="1" class="table table-bordered">
 <tr>
   <td>SN</td>
   <td>Name</td>
   <td>Email</td>
   <td>Username</td>
   <td>Password</td>
   <td>Address</td>
   <td>Phone</td>
   <td>Edit</td>
   <td>Delete</td>
 </tr>
 <?php
  if($user){
    $i=0;
    foreach($user as $u){
        $i++;

  ?>
  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $u['Name']; ?></td>
    <td><?php echo $u['Email']; ?></td>
    <td><?php echo $u['Username']; ?></td>
    <td><?php echo $u['Password'];?></td>
    <td><?php echo $u['Address'];?></td>
    <td><?php echo $u['Phone']; ?></td>
    <td><a href="<?php echo base_url();?>index.php/user/edit/<?php echo $u['ID'];?>"><button type="button" class="btn btn-success">Edit</button></a></td>
    <td><a href="<?php echo base_url(); ?>index.php/user/delete/<?php echo $u['ID']; ?>"><button type="button" class="btn btn-warning">Delete</button></a></td>
  </tr>
  <?php
    }
  }
   ?>
</table>
<?php $this->load->view('admin/footer'); ?>
