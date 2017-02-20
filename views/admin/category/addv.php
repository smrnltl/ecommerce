<?php $this->load->view('admin/header');
$this->load->view('admin/sidebar');
$this->load->view('admin/dashboard');
 ?>
<form role="form"  method="post" action="<?php echo base_url(); ?>index.php/category/addprocess">

<table>
  <div class="form-group">
    <tr>
        <td>Name:</td><td><input type="text" id="name" name="category_name"></td>
    </tr>

    <tr>
        <td>Status:</td><td><input type="text" id="status" name="category_status"></td>
    </tr>
    </tr>
        <td></td><td><input type="submit" name="add" value="Add" ></td>
    </tr>

</table>
</div>
</form>
<?php $this->load->view('admin/footer'); ?>
