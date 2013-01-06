<?php
include '../koneksi.php';
include '../dao/member.php';
include '../dao/user.php';
include '../dao/auth.php';

$koneksi=new koneksi();
$koneksi->konek();
$koneksi->konekDb();
$auth = new auth();
$auth->cek_sesi();
$member_sesi = new Member();
$member = new Member();
$user=new User();

if(ISSET($_POST['rubah_profil'])){
echo $user->email($_POST['email']);
echo $user->akses($_POST['akses']);
echo $member->nama($_POST['nama']);
echo $member->alamat($_POST['alamat']);
echo $member->telepon($_POST['telepon']);
echo $member->agama($_POST['agama']);
echo $member->jenis_kelamin($_POST['jenis_kelamin']);
echo $user->password($_POST['password']);

$member_dao = new Member_Dao();
$user_dao = new User_Dao();
$user_dao->edit_email();
$user_dao->edit_pass();
$user_dao->edit_akses();
$member_dao->edit();

echo "<meta http-equiv=\"refresh\" content=\"0;url=B_form_manajemen user.php\">";
exit(1);
}

if(ISSET($_GET['id'])){
$Member_Dao=new Member_Dao();
$data=$Member_Dao->get_id($_GET['id']);
}

if(isset($_POST['logout']))
{
	$auth->logout();
}
?>

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
<a class="brand" href="form_admin.php">Admin</a>
<ul class="nav">
<li class="dropdown"> <a class="dropdown-toggle" data-toggle="disable" href="#">Pengguna </a>
  <ul class="dropdown-menu">
    <li><a href="B_form_manajemen user.php">Manajemen User</a></li>
    <li><a href="#">Laporan User</a></li>
  </ul>
</li>
<li class="dropdown"> <a class="dropdown-toggle" data-toggle="disable" href="#">Buku </a>
  <ul class="dropdown-menu">
    <li><a href="#">Tambah Buku</a></li>
    <li><a href="#">Ubah Data Buku</a></li>
    <li><a href="#">Hapus Buku</a></li>
    <li><a href="#">Stock Buku</a></li>
  </ul>
</li>
<li class="dropdown"> <a class="dropdown-toggle" data-toggle="disable" href="#">Keuangan </a>
  <ul class="dropdown-menu">
    <li><a href="#">Lihat laporan</a></li>
    <li><a href="#">tambah laporan</a></li>
  </ul>
</li>
<li class="dropdown"> <a class="dropdown-toggle" data-toggle="disable" href="#">lainnya </a>
  <ul class="dropdown-menu">
    <li><a href="#">Verifikasi Kritik dan Saran</a></li>
    <li><a href="#">Validasi Testimonial</a></li>
    <li><a href="#">Pendataan Wishlist</a></li>
  </ul>
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
          <button class="btn btn-primary" name="logout">Iya</button>
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
                        <b><h2><font color="#000099">Edit Member</font></h2></b><br>
                        <table width="1000" border="0" bordercolor="#FFFFFF" bgcolor="#FFFFFF">
                          <tr>
                            <td width="140" bgcolor="#FFFFFF">
                            <table width="700" height="200" border="0" align="center">
                              <tr>
                                <td height="26">&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td width="20px" height="10px">><div class="hero-unit"><center><img src="img/home1.jpg"></center></td>
                              </tr>
                              <tr>
                                <td width="73" height="35">Nama</td>
                                <td width="4">:</td>
                                <td width="212"><input type="text" name="nama" size="30"></td>
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
                                <td height="31">Agama</td>
                                <td>:</td>
                                <td><input type="text" name="agama" size="30"></td>
                                <td>&nbsp;</td>
                                <td>Jenis Kelamin</td>
                                <td>:</td>
                                <td><input type="text" name="jenis_kelamin" size="60"></td>
                              </tr>                              
                              <tr>
                                <td height="31">Hak Akses</td>
                                <td>:</td>
                                <td><input type="text" name="akses" size="30"></td>
                                <td>&nbsp;</td>
                                <td>Password</td>
                                <td>:</td>
                                <td><input type="text" name="password" size="60"></td>
                              </tr>                                                            
                              <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td><button class="btn btn-primary" type="button" value="Ubah profil" name="rubah_profil">Ubah Profil</button></td>
                              </tr>
                              <tr>
                                <td height="54">&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                               
                              </tr>
                            </table>

                            </td>
                          </tr>
                        </table>

                    </form>
                </div>
                
                
            </div>
        </div>
    <!-- membuat conten tengah yaitu sign up -->

</head>
</html>