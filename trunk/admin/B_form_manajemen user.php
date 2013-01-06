<html lang="en">
<head>
<meta charset="utf-8">
<title>Manajemen User</title>
<meta name="viewport" content="width=device-width, initial-scale=2.0">
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
<link href="css/bootstrap-responsive.css" rel="stylesheet" type="text/css" />
<title>Untitled Document</title>
</head>
<body background="img/white.jpg">
<body>
<div class="admin">
  <h1><font color="#333333">BUBUKU - <font color="#0000FF">Manajemen User</h1>
</div>
<!-- memuat menu -->
<div class="navbar navbar">
<div class="navbar-inner">
<a class="brand" href="A_form_admin.html">Admin</a>
<ul class="nav">
  <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#">Pengguna </a>
    <ul class="dropdown-menu">
      <li><a href="#">Validasi User</a></li>
      <li><a href="#">Laporan User</a></li>
    </ul>
  </li>
  <li class="dropdown"> <a class="dropdown-toggle" data-toggle="disable" href="#">Toko</a> </li>
  <li class="dropdown"> <a class="dropdown-toggle" data-toggle="disable" href="#">Produk</a> </li>
  <li class="dropdown"> <a class="dropdown-toggle" data-toggle="disable" href="#">lainnya </a> </li>
  <br />
</ul>
<div class="offset10" align="right">
<ul class="nav">
<li><a href="#myprofile"role="button" class="nav" data-toggle="modal">my profile</a>
  <!-- Modal -->
  <div id="myprofile" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      <h3 id="myModalLabel">Konfirmasi Halaman</h3>
    </div>
    <div class="modal-body">
      <p>Apakah anda yakin akan meninggalkan halaman validasi user</p>
    </div>
    <div class="modal-footer">
      <button class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Tidak</button>
      <a href="revisi_admin.php">
      <button class="btn btn-primary">Iya</button>
      </a> </div>
  </div>
</li>
<!-- Button to trigger modal -->
<li><a href="#mylogout" role="button" class="nav" data-toggle="modal">Logout</a>
  <!-- Modal -->
  <div id="mylogout" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      <h3 id="myModalLabel">Konfirmasi Logout</h3>
    </div>
    <div class="modal-body">
      <p>Apakah anda yakin akan meninggalkan halaman akses admin?</p>
    </div>
    <div class="modal-footer">
      <button class="btn" data-dismiss="modal" aria-hidden="true">Tidak</button>
      <a href="A3_logout.php">
      <button class="btn btn-primary">Iya</button>
      </a></div>
  </div>
</div>
</div>
<div class="container-fluid" align="left">
<table width="1096" border="1" align="center">
  <tr id="1">
    <td width="100"><div class="text-info">
        <h2 align="left">ID User</h2>
      </div></td>
    <td width="100"><div class="text-info">
      <h2 align="left"> Email User</h2></td>
    <td width="100"><div class="text-info">
      <h2 align="left">Password</h2></td>
    <td width="100"><div class="text-info">
      <h2 align="left">Hak Akses</h2></td>
    <td width="100"><div class="text-info">
      <h2 align="left">Login Terakhir</h2></td>
    <td width="200"></td>
  </tr>
  </div>
  
</table>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script>
<!-- Bootstrap jQuery plugins compiled and minified -->
<script src="js/bootstrap.min.js"></script>
</div>
</body>
</html>