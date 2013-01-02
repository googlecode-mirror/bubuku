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
      <form action="cek_login.php" method="POST">
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
            <td width="83" height="35" bgcolor="#FFFFFF">Username</td>
            <td width="8" bgcolor="#FFFFFF">:</td>
            <td width="87" bgcolor="#FFFFFF"><input type="text" name="username" size="30"></td>
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
              <button class="btn btn-primary">Login</button>
              </a>
              <button class="btn btn-warning" type="button" value="Cancel" onClick="window.location.href='#homeutama.php'">Cancel</button></td>
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
