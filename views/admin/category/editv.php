<?php $this->load->view('admin/header');
$this->load->view('admin/sidebar');
$this->load->view('admin/dashboard');
 ?>
<form method="post" action="<?php echo base_url(); ?>index.php/category/editprocess">
  <input type="hidden" name="category_id" value="<?php echo $category['category_id'] ?>"/>
<table>
    <tr>
        <td>Name:</td><td><input type="text" id="name" name="category_name" value="
          <?php echo $user['category_name'];?>"/></td>
    </tr>
    <tr>
        <td>Status:</td><td><input type="text" id="status" name="category_status" value="
          <?php echo $user['category_status'];?>"/></td>
    </tr>

    </tr>
        <td></td><td><input type="submit" name="edit" value="Update" /></td>
    </tr>

</table>

</form>
<?php $this->load->view('admin/footer'); ?>
