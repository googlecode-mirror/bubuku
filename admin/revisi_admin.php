<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Profil Admin</title>
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
  <h1><font color="#333333">BUBUKU</h1>
</div>
<!-- memuat menu -->
<div class="navbar navbar">
<div class="navbar-inner">
<a class="brand" href="A_form_admin.html">Admin</a>
<ul class="nav">
  <li class="dropdown"> <a class="dropdown-toggle" data-toggle="disable" href="#">Pengguna </a> </li>
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
      <p>Anda sedang berada di halaman profile</p>
    </div>
    <div class="modal-footer">
      <button class="btn btn-primary" data-dismiss="modal" aria-hidden="true">OK</button>
    </div>
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
<table width="1096" border="0" align="center">
<tr id="1">
  <td width="548"><div class="text-info">
      <h2 align="left"> My Profile</h2>
    </div></td>
  <td></td>
</tr>
<tr id="2">
  <td><div class="img-circle">
    <img src="img/home1.jpg" width="320" height="200"/></td>
  <td><div>
      <table width="350" border="0">
        <tr>
          <td><a>ID Member</a></td>
          <td><input type="text" name="ID Member" size="30"></td>
        </tr>
        <tr>
          <td><a>Nama</a></td>
          <td><input type="text" name="Nama" size="30"></td>
        </tr>
        <tr>
          <td><a>Alamat</a></td>
          <td><input type="text" name="Alamat" size="30"></td>
        </tr>
        <tr>
          <td><a>Telepon</a></td>
          <td><input type="text" name="Telepon" size="30"></td>
        </tr>
        <tr>
          <td><a>Agama</a></td>
          <td><input type="text" name="Agama" size="30"></td>
        </tr>
        <tr>
          <td><a>Jenis Kelamin</a></td>
          <td><input type="text" name="Jenis_Kelamin" size="30"></td>
        </tr>
        <tr>
          <td><a>Tanggal Daftar</a></td>
          <td><input type="date" name="Tanggal_Daftar" size="30"></td>
        </tr>
        <tr>
          <td><a>Password Lama*</a></td>
          <td><input type="password" name="passwordlama" size="30"></td>
        </tr>
        <tr>
          <td><a>Password Baru*</a></td>
          <td><input type="password" name="passwordbaru" size="30"></td>
        </tr>
      </table>
    </div></td>
<tr id="3">
<td></td>
<td><div>
  <table width="350" border="0">
    <td><button class="btn btn-primary" type="button" value="Ubah Profil">Ubah profil</button></td>
      <td><button class="btn btn-primary" type="button" value="cancel">Kembali</button></td>
    </div> 
    </tr>
  </table>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
      <script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script>
      <!-- Bootstrap jQuery plugins compiled and minified -->
      <script src="js/bootstrap.min.js"></script>
</div>
</body>
</html>