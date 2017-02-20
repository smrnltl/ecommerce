<?php $this->load->view('admin/header');
$this->load->view('admin/sidebar');
$this->load->view('admin/dashboard');
 ?>
<table border="1" class="table table-bordered">
 <tr>
   <td>Order ID</td>
   <td>Customer ID</td>
   <td>Product ID</td>
   <td>Purchase Status</td>
   <td>Payment Status</td>
   <td>Edit</td>
   <td>Delete</td>
 </tr>
 <?php
  if($order){
    $i=0;
    foreach($order as $o){
        $i++;

  ?>
  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $o['customer_id']; ?></td>
    <td><?php echo $o['product_id']; ?></td>
    <td><?php echo $o['purchase_status']; ?></td>
    <td><?php echo $o['payment_staus']; ?></td>
    <td><button type="button" class="btn btn-success"><a href="">Edit</a></button></td>
    <td><button><a href="">Delete</a></button></td>
  </tr>
  <?php
    }
  }
   ?>
</table>
<?php $this->load->view('admin/footer'); ?>
