<?php $this->load->view('admin/header');
$this->load->view('admin/sidebar');
$this->load->view('admin/dashboard');
 ?>
<form method="post" action="<?php echo base_url(); ?>index.php/user/editprocess">
  <input type="hidden" name="user_id" value="<?php echo $user['ID'] ?>"/>
<table>
    <tr>
        <td>Name:</td><td><input type="text" id="name" name="Name" value="
          <?php echo $user['Name'];?>"/></td>
    </tr>
    <tr>
        <td>Email:</td><td><input type="text" id="email" name="Email" value="
          <?php echo $user['Email'];?>"/></td>
    </tr>
    <tr>
        <td>Username:</td><td><input type="text" id="username" name="Username" value="
          <?php echo $user['Username'];?>"/></td>
    </tr>
    <tr>
        <td>Password:</td><td><input type="password" id="password" name="Password" value="
          <?php echo $user['Password'];?>"/></td>
    </tr>
    <tr>
        <td>Address:</td><td><input type="text" id="address" name="Address" value="
          <?php echo $user['Address'];?>"/></td>
    </tr>
    <tr>
        <td>Phone:</td><td><input type="text" id="phone" name="Phone" value="
          <?php echo $user['Phone'];?>"/></td>
    </tr>
        <td></td><td><input type="submit" name="edit" value="Update" /></td>
    </tr>

</table>

</form>
<?php $this->load->view('admin/footer'); ?>
