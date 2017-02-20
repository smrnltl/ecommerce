<?php $this->load->view('admin/header');
$this->load->view('admin/sidebar');
$this->load->view('admin/dashboard');
?>
<button type="button" class="btn btn-info"><a href="">Add Customer</a></button>
<table border="1" class="table table-bordered">
 <tr>
   <td>SN</td>
   <td>Name</td>
   <td>Billing Address</td>
   <td>Shipping Address</td>
   <td>Phone</td>
   <td>Email</td>
   <td>Username</td>
   <td>Password</td>
   <td>Status</td>
   <td>Edit</td>
   <td>Delete</td>
 </tr>
 <?php
  if($customer){
    $i=0;
    foreach($customer as $c){
        $i++;

  ?>
  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $c['customer_name']; ?></td>
    <td><?php echo $c['billing_address']; ?></td>
    <td><?php echo $c['shipping_address']; ?></td>
    <td><?php echo $c['customer_phone']; ?></td>
    <td><?php echo $c['customer_email']; ?></td>
    <td><?php echo $c['customer_username']; ?></td>
    <td><?php echo $c['customer_password']; ?></td>
    <td><?php echo $c['customer_status']; ?></td>
    <td><button type="button" class="btn btn-success"><a href="">Edit</a></button></td>
    <td><a href="<?php echo base_url(); ?>"index.php/customer/delete/<?php echo $c['customer_id'];?>>Delete</a></td>
  </tr>
  <?php
    }
  }
   ?>
</table>
<?php $this->load->view('admin/footer'); ?>
