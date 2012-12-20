<html lang="en">
<head>
<meta charset="utf-8">
<title>Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=2.0">
<!-- Le styles -->
<link href="css/bootstrap.css" rel="stylesheet">
<style type="text/css">
body {
	padding-bottom: 30px;
}
</style>
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<body background="img/white.jpg">
<div class="admin">
  <h1><font color="#333333">BUBUKU</h1>
</div>
</font>
<!-- memuat menu -->
<div class="navbar navbar">
<div class="navbar-inner">
<a class="brand" href="form_admin.html">Admin</a>
<ul class="nav">
<li class="dropdown"> <a class="dropdown-toggle" data-toggle="disable" href="#">Pengguna </a>
</li>
<li class="dropdown"> <a class="dropdown-toggle" data-toggle="disable" href="#">Toko</a>
 </li>
<li class="dropdown"> <a class="dropdown-toggle" data-toggle="disable" href="#">Produk</a>
</li>
<li class="dropdown"> <a class="dropdown-toggle" data-toggle="disable" href="#">lainnya </a>
  </li>
<!-- memuat form Profile -->
<body>
<div class="container-fluid">
  <div class="span10">
    <!--Body content-->
  </div>
</div>
</div>
</body>
<div class="span4 offset10" align="right">
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
          <a href="logout.php">
          <button class="btn btn-primary">Iya</button>
          </a></div>
      </div>
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
      <script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script>
      <!-- Bootstrap jQuery plugins compiled and minified -->
      <script src="js/bootstrap.min.js"></script>
    </li>
  </ul>
</div>
<!--konten utama -->
<div class="span8 offset1">
  <form action="#" method="POST">
    <b>
    <h2><font color="#000099">Profil Admin</font></h2>
    </b><br>
    <table width="1000" border="0" bordercolor="#FFFFFF" bgcolor="#FFFFFF">
      <tr>
        <td width="140" bgcolor="#FFFFFF"><table width="300" height="100" border="0" align="center">
            <tr>
              <td height="26">&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td width="20px" height="10px">>
                <div class="hero-unit">
                <center><a><img src="img/home1.jpg" width=\"10\" height=\"10\" alt=\"\" /></a></center></td>
            </tr>
            <tr>
              <td width="30" height="30">Username</td>
              <td width="4">:</td>
              <td width="212"><input type="text" name="username" size="30"></td>
              <td width="4">&nbsp;</td>
              <td width="149">Email</td>
              <td width="8">:</td>
              <td width="212"><input type="text" name="email" size="30"></td>
            </tr>
            <tr>
              <td height="31">Telepon</td>
              <td>:</td>
              <td><input type="text" name="telepon" size="30"></td>
              <td>&nbsp;</td>
              <td>Alamat</td>
              <td>:</td>
              <td><input type="text" name="Alamat" size="60"></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td><button class="btn btn-primary" type="button" value="Ubah profil">Ubah Password</button></td>
              <td><button class="btn btn-primary" type="button" value="Ubah profil">Ubah Profil</button></td>
            </tr>
            <tr>
              <td height="54">&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
          </table></td>
      </tr>
    </table>
  </form>
</div>
</div>
</div>
<!-- membuat conten tengah yaitu sign up -->
</head>
</html>