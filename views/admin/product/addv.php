<?php $this->load->view('admin/header');
$this->load->view('admin/sidebar');
$this->load->view('admin/dashboard');
 ?>
<form method="post" action="<?php echo base_url(); ?>index.php/product/addprocess">

<table>
    <tr>
        <td>Code:</td><td><input type="text" id="name" name="product_code"></td>
    </tr>
    <tr>
        <td>Name:</td><td><input type="text" id="email" name="product_name"></td>
    </tr>
    <tr>
      <td>Category:</td><td>
        <select name="product_category">
          <option>Choose Category</option>
          <?php
          foreach($category as $c){
           ?>
          <option value="<?php echo $c['category_id']; ?>"><?php echo $c['category_name']; ?></option>
            <?php
          }
            ?>

        </select>
    </td>
    </tr>
    <tr>
        <td>Price:</td><td><input type="text" id="password" name="product_price"></td>
    </tr>
    <tr>
        <td>Image:</td><td><input type="text" id="address" name="product_image"></td>
    </tr>
    <tr>
        <td>Description:</td><td><input type="text" id="phone" name="product_description"></td>
    </tr>
    <tr>
        <td>Status:</td><td><input type="text" id="phone" name="product_status"></td>
    </tr>
    <tr>
        <td></td><td><input type="submit" name="add" value="Add" ></td>
    </tr>

</table>

</form>
<?php $this->load->view('admin/footer'); ?>
