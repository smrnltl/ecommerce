<?php $this->load->view('admin/header');
$this->load->view('admin/sidebar');
$this->load->view('admin/dashboard');
 ?>
<form method="post" action="<?php echo base_url(); ?>index.php/user/addprocess">

<table>
    <tr>
        <td>Name:</td><td><input type="text" id="name" name="Name"></td>
    </tr>
    <tr>
        <td>Email:</td><td><input type="text" id="email" name="Email"></td>
    </tr>
    <tr>
        <td>Username:</td><td><input type="text" id="username" name="Username"></td>
    </tr>
    <tr>
        <td>Password:</td><td><input type="password" id="password" name="Password"></td>
    </tr>
    <tr>
        <td>Address:</td><td><input type="text" id="address" name="Address"></td>
    </tr>
    <tr>
        <td>Phone:</td><td><input type="text" id="phone" name="Phone"></td>
    </tr>
        <td></td><td><input type="submit" name="add" value="Add" onclick="validate();"></td>
    </tr>

</table>

</form>
<script type="text/javascript">
  function validate(){
    var name=document.getElementById('name').value;
    var email=document.getElementById('email').value;
		var username=document.getElementById('username').value;
		var password=document.getElementById('password').value;
    var address=document.getElementById('address').value;
    var phone=document.getElementById('phone').value;
    if(!name){
      alert("Name is empty!");
      document.getElementById('name').focus();
      return false;
    }
    if(!email){
      alert("Email is empty!");
      document.getElementById('email').focus();
      return false;
    }
		if(!username){
			alert("Username is empty!");
			document.getElementById('username').focus();
			return false;
		})
		if(!password){
			alert("Password is empty!");
			document.getElementById('password').focus();
			return false;
		}
    if(!address){
      alert("Address is empty!");
      document.getElementById('address').focus();
      return false;
    }
    if(!phone){
      alert("Phone is empty!");
      document.getElementById('phone').focus();
      return false;
    }
  }
</script>

<?php $this->load->view('admin/footer'); ?>
