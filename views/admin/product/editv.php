<?php $this->load->view('admin/header');
$this->load->view('admin/sidebar');
$this->load->view('admin/dashboard');
 ?>
<form method="post" action="<?php echo base_url(); ?>index.php/product/editprocess">
  <input type="hidden" name="product_id" value="<?php echo $product['product_id'] ?>"/>
<table>
    <tr>
        <td>Code:</td><td><input type="text" id="name" name="product_code" value="
          <?php echo $product['product_code'];?>"/></td>
    </tr>
    <tr>
        <td>Name:</td><td><input type="text" id="name" name="product_name" value="
          <?php echo $product['product_name'];?>"/></td>
    </tr>
    <tr>
        <td>Category:</td><td><input type="text" id="name" name="product_category" value="
          <?php echo $product['product_category'];?>"/></td>
    </tr>
    <tr>
        <td>Price:</td><td><input type="text" id="name" name="product_price" value="
          <?php echo $product['product_price'];?>"/></td>
    </tr>
    <tr>
        <td>Image:</td><td><input type="text" id="name" name="product_image" value="
          <?php echo $product['product_image'];?>"/></td>
    </tr>
    <tr>
        <td>Description:</td><td><input type="text" id="name" name="product_description" value="
          <?php echo $product['product_description'];?>"/></td>
    </tr>
    <tr>
        <td>Status:</td><td><input type="text" id="name" name="product_status" value="
          <?php echo $product['product_status'];?>"/></td>
    </tr>

    </tr>
        <td></td><td><input type="submit" name="edit" value="Update" /></td>
    </tr>

</table>

</form>
<?php $this->load->view('admin/footer'); ?>
