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
<h1><font color="#333333">BUBUKU</h1></div></font>
<!-- memuat menu -->
   <div class="navbar navbar">
    <div class="navbar-inner">
    <a class="brand" href="#">Admin</a>
    <ul class="nav">
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Pengguna
      </a>
        <ul class="dropdown-menu">
            <li><a href="#">Validasi User</a></li>
            <li><a href="#">Hapus User</a></li>
            <li><a href="#">Laporan User</a></li>
        </ul>
  </li>
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Buku
        </a>
        <ul class="dropdown-menu">
            <li><a href="#">Tambah Buku</a></li>
            <li><a href="#">Ubah Data Buku</a></li>
            <li><a href="#">Hapus Buku</a></li>
            <li><a href="#">Stock Buku</a></li>
        </ul>
    </li>
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Keuangan
        </a>
        <ul class="dropdown-menu">
            <li><a href="#">Lihat laporan</a></li>
            <li><a href="#">tambah laporan</a></li>
        </ul>
    </li>
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">lainnya
      </a>
        <ul class="dropdown-menu">
            <li><a href="#">Verifikasi Kritik dan Saran</a></li>
            <li><a href="#">Validasi Testimonial</a></li>
            <li><a href="#">Pendataan Wishlist</a></li>
        </ul>
    </li>
  <div class="span4 offset4" align="right">
    <ul class="nav">
    <li><a href="#">My Profile</a></li>
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
    <a href="logout.php"><button class="btn btn-primary">Iya</button></a>
  </div>
</div>
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
      <script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script>
    <!-- Bootstrap jQuery plugins compiled and minified -->
    <script src="js/bootstrap.min.js"></script>
    </li>
    </ul>
  </div>
</body>
   </head>
</html>