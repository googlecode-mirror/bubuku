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
  <div class="tabel">
			<table class="table table-hover">
				<pre class="prettyPrint"><h2>Daftar Member</h2></pre>
				<?php
include 'auth.php';

$auth = new Auth();
$auth->logout();
header('location:login.php');
?>
				<?php
					if(isset($success))
					{
						echo '<div class="alert alert-block alert-success fade in">
						<button type="button" class="close" data-dismiss="alert">&times;</button>'
						.$success.'</div>';
					}
				?>
				<div class="form">
					<form class="form-inline" method="post" action="index.php">
						<tr>
							<td>&nbsp;</td>
							<td><input class="span2" type="text" id="inputEmail" placeholder="Nama" name="nama" ></td> 
							<td><input class="span2" type="text" id="inputEmail" placeholder="Alamat" name="alamat"></td>
							<td><input type="text" class="span2" placeholder="Tanggal Lahir" data-date-format="yyyy/mm/dd" id="dp2" name="tanggal_lahir_teman" ></td>
							<td><input class="span2" type="text" id="inputEmail" placeholder="Telepon Rumah" name="telepon_rumah_teman"></td>						
							<td><input class="span2" type="text" id="inputEmail" placeholder="Handphone" name="telepon_ponsel_teman"></td>
							<td><input class="span2" type="text" id="inputEmail" placeholder="Email" name="alamat_email_teman"></td>
							<td><button type="submit" name="submit" class="btn btn-info" rel="tooltip" title="Tambah Kontak"><i class="icon-plus-sign"></i></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>
							<?php
							if(isset($namakosong))
							{
								echo '<div class="alert alert-error" >'.$namakosong.'</div>';
							}
							?>
							</td>
							<td>
							<?php
							if(isset($alamatkosong))
							{
								echo '<div class="alert alert-error">'.$alamatkosong.'</div>';
							}
							?>
							</td>
							<td>
							<?php
							if(isset($tanggallahirkosong))
							{
								echo '<div class="alert alert-error">'.$tanggallahirkosong.'</div>';
							}
							?>
							</td>
							<td>
							<?php
							if(isset($teleponrumahkosong))
							{
								echo '<div class="alert alert-error">'.$teleponrumahkosong.'</div>';
							}
							?>
							</td>
							<td>
							<?php
							if(isset($teleponponselkosong))
							{
								echo '<div class="alert alert-error">'.$teleponponselkosong.'</div>';
							}
							?>
							</td>
							<td>
							<?php
							if(isset($alamatemailkosong))
							{
								echo '<div class="alert alert-error">'.$alamatemailkosong.'</div>';
							}
							?>
							</td>
							<td>&nbsp;</td>
						</tr>
					</form>
				</div>
				<th>&nbsp;</th>
				<th>Nama Teman</th>
				<th>Alamat Teman</th>
				<th>Tanggal Lahir</th>
				<th>Nomor Telepon Rumah</th>
				<th>Nomor Ponsel</th>
				<th>Alamat Email</th>
				<th>&nbsp;</th></tr>
				<?php 
				
					if (!empty($teman))
					{
						foreach ($teman as $kode_teman => $teman)
						{
							echo 
							'<tr>
								<td><a href="index.php?tugas='.$teman->kode_teman.'" class="btn" rel="tooltip" title="Detail"><i class="icon-arrow-right"></i></a></td>
								<td>'.$teman->nama_teman.'</td>
								<td>'.$teman->alamat_teman.'</td>
								<td>'.$teman->tanggal_lahir_teman.'</td>
								<td>'.$teman->telepon_rumah_teman.'</td>
								<td>'.$teman->telepon_ponsel_teman.'</td>
								<td>'.$teman->alamat_email_teman.'</td>
								<td><a href="index.php?edit='.$teman->kode_teman.'" class="btn" rel="tooltip" title="Edit"><i class="icon-edit" ></i></a>   
								<a href="index.php?hapus='.$teman->kode_teman.'" class="btn" rel="tooltip" title="Hapus"><i class="icon-trash" ></i></a></td>
							</tr>';
						}
					}
				?>
			</table>
		</div>
</body>
   </head>
</html>