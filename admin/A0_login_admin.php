<?php
include '../dao/user.php';
include '../dao/member.php';
include '../dao/auth.php';
include '../koneksi.php';

$koneksi=new koneksi();
$koneksi->konek();
$koneksi->konekDb();

if(isset($_POST['batal']))
{
	header("Location:A0_login_admin.php");	
}

if(isset($_POST['MM_login'])){
		if($_POST['email']=="" || $_POST['password']=="" ){
			echo "<script>alert('Silahkan isikan Email dan Password terlebih dahulu!');</script>";
		}else{
				$user = new User();
				$user->email=$_POST['email'];
				$user->password=$_POST['password'];
					
					$auth2=new auth();
					$auth2->login_member($_POST['email'],$_POST['password']);
					//header("Location:/bubuku/admin/A_form_admin.php");
		}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>bubuku</title>
<meta name="viewport" content="width=device-width, initial-scale=1.5">
<!-- Le styles -->
<link href="css/bootstrap.css" rel="stylesheet">
<style type="text/css">
body {
	padding-bottom: 50px;
}
</style>
<link href="css/bootstrap-responsive.css" rel="stylesheet">
</head>
<body background="img/slidedoorp.jpg">
<!--membuat top menu -->
<div class="navbar">
  <div class="navbar-inner">
    <div class="span1"> </div>
    <a class="brand" href="index.php">Bubuku Login</a> </div>
</div>
<!--membuat top menu -->
<!-- membuat conten tengah yaitu sign up -->
<div class="container">
  <div class="row">
    <!--side bar -->
    <div class="span3" > </div>
    <!--side bar -->
    <!--konten utama -->
    <div class="span4 offset8">
      <form action="A0_login_admin.php" method="POST">
        <p>
        <font color="#000000">
        <h2>Selamat Datang di bubuku</h2>
        </font>
        </p>
        <p> 
        <font color="#FF3366">
        <h4>
        dunia segudang buku segudang ilmu
        <table width="380" height="149" border="0" bordercolor="#FFFFFF" bgcolor="#FFFFFF">
          <tr>
            <td bgcolor="#FFFFFF"></td>
            <td height="19" bgcolor="#FFFFFF"></td>
            <td bgcolor="#FFFFFF"></td>
            <td bgcolor="#FFFFFF"></td>
            <td bgcolor="#FFFFFF"></td>
          <tr>
            <td bgcolor="#FFFFFF"></td>
            <td width="83" height="35" bgcolor="#FFFFFF">Email</td>
            <td width="8" bgcolor="#FFFFFF">:</td>
            <td width="87" bgcolor="#FFFFFF"><input type="text" name="email" size="30"></td>
            <td bgcolor="#FFFFFF"></td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF"></td>
            <td height="32" bgcolor="#FFFFFF">Password</td>
            <td bgcolor="#FFFFFF">:</td>
            <td bgcolor="#FFFFFF"><input type="password" name="password" size="30"></td>
            <td bgcolor="#FFFFFF"></td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF"></td>
            <td height="32" bgcolor="#FFFFFF"></td>
            <td bgcolor="#FFFFFF"></td>
            <td bgcolor="#FFFFFF"><a href="lupa_password:#">lupa password</a></td>
            <td bgcolor="#FFFFFF"></td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF"></td>
            <td bgcolor="#FFFFFF">&nbsp;</td>
            <td bgcolor="#FFFFFF">&nbsp;</td>
            <td bgcolor="#FFFFFF"><a href="form_admin.php">
              <button class="btn btn-primary" name="MM_login">Login</button>
              </a>
              <button class="btn btn-warning" type="button" name="batal">Batal</button></td>
            <td bgcolor="#FFFFFF"></td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF"></td>
            <td height="19" bgcolor="#FFFFFF"></td>
            <td bgcolor="#FFFFFF"></td>
            <td bgcolor="#FFFFFF"></td>
            <td bgcolor="#FFFFFF"></td>
          <tr>
        </table>
      </form>
    </div>
  </div>
</div>
<!-- membuat conten tengah yaitu sign up -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script>
<!-- Bootstrap jQuery plugins compiled and minified -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>
