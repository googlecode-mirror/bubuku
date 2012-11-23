<<<<<<< .mine
<?php

if(isset($_POST["MM_login"])){
	include "auth.php";
	$aut=new auth();
	$aut->login($_POST["nama_user"],$_POST["passw_user"]);
}
	
?>
<!DOCTYPE html>
<html>
<head>
<title>MyAssistant</title>
<!-- Bootstrap -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" >
<script src="js/bootstrap.js"></script>
</head>
<body >
	
	<div align="center">
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
                          Login
    </div></td>

	<div align="center">
		<form id="form_login" class="form-horizontal" name="form_login" method="post" action="login_form.php">
		<table align="center" >
		<tr>
		<td>Username </td>
		<td> : </td>
		<td><input type="text" name="nama_user" value=""  /></td>
	  </td>
	</tr>
	
	<tr>
		<td>Password </td>
		<td> : </td>
		<td><input type="password" name="pass_user" value=""/></td>
	</tr>
	
	<tr>
		<td></td>
		<td></td>
		<td><div class="control-group">
        <div align="right"><input type="submit" name="Login" value="Login" id="Login">
          <input type="Cancel" name="Cancel" value="Cancel" id="Cancel">
        </div>
        <div align="Right"></div>
        <div class="control-group">
                        <div class="controls">
                                        <a href="register.php" >register &nbsp;&nbsp;&nbsp;</a>
                                        <a href="lupa_password.php" >lupa password ? </a>
                        </div></td>
	</tr>
</table>
<input type="hidden" name="MM_login" value="form_login">
</form>
</div>
</body>
=======
<?php

if(isset($_POST["MM_login"])){
	include "auth.php";
	$aut=new auth();
	$aut->login($_POST["nama_user"],$_POST["pass_user"]);
}
	
?>
<!DOCTYPE html>
<html>
<head>
<title>MyAssistant</title>
<!-- Bootstrap -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" >
<script src="js/bootstrap.js"></script>
</head>
<body >
	
	<div align="center">
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
                          Login
    </div></td>

	<div align="center">
		<form id="form_login" class="form-horizontal" name="form_login" method="post" action="login_form.php">
		<table align="center" >
		<tr>
		<td>Username </td>
		<td> : </td>
		<td><input type="text" name="nama_user" value=""  /></td>
	  </td>
	</tr>
	
	<tr>
		<td>Password </td>
		<td> : </td>
		<td><input type="password" name="pass_user" value=""/></td>
	</tr>
	
	<tr>
		<td></td>
		<td></td>
		<td><div align="right"><input type="submit" name="Login" value="Login" id="Login"></div></td>
	</tr>
</table>
<input type="hidden" name="MM_login" value="form_login">
</form>
</div>
</body>
>>>>>>> .r16
</html>