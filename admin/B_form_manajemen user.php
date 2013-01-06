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
$member_dao = new Member_Dao();
$data=$member_dao->get_all();

if(isset($_POST['logout']))
{
	$auth->logout();
}
?>

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
<a class="brand" href="A_form_admin.php">Admin</a>
<ul class="nav">
  <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#">Pengguna </a>
    <ul class="dropdown-menu">
      <li><a href="#">Manajemen User</a></li>
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
      <button class="btn btn-primary" name="logout">Iya</button>
      </a></div>
  </div>
</div>
</div>
<div class="topbox">
                  <h2><p align="center" class="style1 style5">Daftar Member</p></h2>
<p><span class="style6"><font color="#FF0000">Jumlah Member:<?php echo count($data);?> </span><br></font>    
                                  </p>
<table width="" border="1" cellpadding="5" cellspacing="0" bgcolor="#FFFFFF">
                    <tr>
                    <th width="20"><span class="style4">No</span></th>
                      <th width="150"><span class="style4">Nama</span></th>
                      <th width="400"><span class="style4">Alamat</span></th>
                      <th width="200"><span class="style4">E-mail</span></th>
                      <th width="100"><span class="style4">Telepon</span></th>
                      <th width="94"><span class="style4">Agama</span></th>
                      <th width="94"><span class="style4">Jenis Kelamin</span></th>
                      <th width="100"><span class="style4">Hak Akses</span></th>                  
                      <th width="98">&nbsp;</th>
                    </tr>
                    
                  <?php
				  $i=1;
				  foreach ($data as $member) {
				  $User_Dao=new User_Dao();
				  $user=$User_Dao->get_id($member->id_member);
				  
				  ?>
             
                    <tr>
                    <td><span class="style3"><?php echo $i;?></span></td>
                      <td><span class="style3"><?php echo $member->nama;?></span></td>
                      <td><span class="style3"><?php echo $member->alamat;?></span></td>
                      <td><span class="style3"><?php echo $user->email;?></span></td>
                      <td><span class="style3"><?php echo $member->telepon;?></span></td>
                      <td><span class="style3"><?php echo $member->agama;?></span></td>
                      <td><span class="style3"><?php echo $member->jenis_kelamin;?></span></td>
                      <td><span class="style3"><?php echo $user->akses;?></span></td>
                      <td><?php echo "<a href=\"B2_form_manajemen user_edit.php?id=$member->id_member\">";
					  echo "Edit Member</a> ";?></td>
                      
                    </tr>
                    <?php $i++;}?>
    </table>

                  <p><br> 				  
    </p>
</div> 
</div>
          
<div class="clear"></div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script>
<!-- Bootstrap jQuery plugins compiled and minified -->
<script src="js/bootstrap.min.js"></script>
</div>
</body>
</html>