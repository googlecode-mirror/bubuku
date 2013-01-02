<?php
include '../koneksi.php';
include '../dao/jual_buku.php';
include '../dao/user.php';
include '../dao/auth.php';

$koneksi=new koneksi();
$koneksi->konek();

if (ISSET($_POST["menawarkan_buku"]) ){

	$erjudul = $erpenerbit = $erfoto = $erharga = "";
	if($_POST['judul']=="") { 
		$erjudul = "Field judul.";
		}
	if($_POST['penerbit']=="") { 
		$erpenerbit = "Field penerbit.";
		}
	if($_POST['harga']=="") { 
		$erharga = "Field harga.";
		}
	if($_POST['foto']=="") { 
		$erfoto = "Field foto.";
		}
	
	if ($_POST['judul']=="" || $_POST['penerbit']=="" || $_POST['harga']=="" || $_POST['foto']=="" ){
		print "<script type=\"text/javascript\">alert('Belum diisi :\\n\\n$erjudul \\n$erpenerbit \\n$erharga \\n$erfoto ');</script>";
	}
	
		$jual_buku_dao = new Jual_buku_Dao();
		$jual_buku = new Jual_buku();
		$jual_buku->judul_buku = $_POST['judul_buku'];
		$jual_buku->penerbit_buku = $_POST['penerbit_buku'];
		$jual_buku->tahun_cetak_buku = $_POST['tahun_cetak_buku'];
		$jual_buku->harga_buku = $_POST['harga_buku'];
		$jual_buku->foto_buku = $_POST['foto_buku'];
		$jual_buku_dao->add($jual_buku);
		$koneksi->close();

		echo "<script>alert('Data buku anda berhasil disimpan. Kami akan menghubungi anda!');
		location.href='login_form_umum.php';
		</script>";		

}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Menawarkan Buku</title>
    <meta name="viewport" content="width=device-width, initial-scale=2.0">
   
     <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
         padding-bottom: 30px;
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
<body background="img/blue.jpg">
<div class="User">
<h1><font color="#FF0000">BUBUKU</h1></div></font>
<!-- memuat menu -->
   <div class="navbar navbar">
    <div class="navbar-inner">
    <a class="brand" href="#"></a>
    <ul class="nav">
<li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="home_user.php">Beranda
      </a>
    </li>
<li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Buku Per Kategori
  </a>
        <ul class="dropdown-menu">
            <li><a href="#">Agama & Filsafat</a></li>
            <li><a href="#">Bahasa</a></li>
            <li><a href="#">Buku Anak & Remaja</a></li>
            <li><a href="#">Buku Impor</a></li>
            <li><a href="#">Buku Sekolah</a></li>
            <li><a href="#">Ekonomi</a></li>
            <li><a href="#">Hobi & Interest</a></li>
            <li><a href="#">Hukum</a></li>
            <li><a href="#">Kedokteran</a></li>
            <li><a href="#">Kesehatan</a></li>
            <li><a href="#">Kesekretariatan</a></li>
            <li><a href="#">Wanita</a></li>
            <li><a href="#">Komputer</a></li>
            <li><a href="#">Majalah</a></li>
            <li><a href="#">Manajemen & Bisnis</a></li>
            <li><a href="#">Pariwisata & Peta</a></li>
            <li><a href="#">Pengembangan Diri & Karir</a></li>
            <li><a href="#">Pertanian</a></li>
            <li><a href="#">Psikologi & Pendidikan</a></li>
            <li><a href="#">Referensi & Kamus</a></li>
            <li><a href="#">Sastra & Novel</a></li>
            <li><a href="#">Sosial Politik</a></li>
            <li><a href="#">Teknik</a></li>
  </ul>
    </li>
<li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="cara_pemesanan.php">Cara Pemesanan
      </a>
    </li>
<li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">lainnya
      </a>
        <ul class="dropdown-menu">
            <li><a href="kritik_saran.php">Kritik dan Saran</a></li>
            <li><a href="testi.php">Testimonial</a></li>
            <li><a href="wishlist.php">Wishlist</a></li>
            <li><a href="menawarkan_buku.php">Menawarkan Buku</a></li>
            <li><a href="hubungi.php">Hubungi Kami</a></li>        </ul>
    </li>
  <div class="span4 offset4" align="right">
    <ul class="nav">
    <li><a href="#">My Profile</a></li>
	<li><a href="#">Daftar Belanja</a></li>
    <li><a href="logout.php">Logout</a></li>
          <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
      <script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script>
    <!-- Bootstrap jQuery plugins compiled and minified -->
    <script src="js/bootstrap.min.js"></script>
</li>
</ul>
</div>
</ul>
</div>
</div>
<![endif]--></head>

<body>

<div class="container">
<div class="header">
  <table align=center border=1 cellpadding=0 cellspacing=0 width=100%><tr><td align=center height=31>
<table width=880><tr><td>
<marquee><font face=tahoma size=2 color=#FFFFFF>Selamat Datang di <span class="style29">Website Kami!</span> 
Kami berusaha untuk memberikan informasi dan pelayanan yang terbaik bagi anda! <span class="style29">SELAMAT BERBELANJA</span></marquee>
</td></tr></table>
</td></tr></table></ul>

    <!-- end .header --></div>
  <div class="container">
  <div class="sidebar1">
    <div class="intro">
    <p><font face=tahoma size=2><span id="date"></span> <span id="clock"></span></font></p>
    <form method="POST" action="?menu=tcari"> 
      <!-- form pencarian -->
      <div>
        <input type="text" name="kata" maxlength="50" value="Pencarian..." onBlur="if(this.value=='') this.value='Pencarian...';" onFocus="if(this.value=='Pencarian...') this.value='';" />
        <input type="submit" value="Go" />
      </div>
    </form>
  	
        <a href="#"><img src="img/logo.jpg" alt="aaa" name="Insert_logo" width="220x" height="90px" id="Insert_logo" style="background-color: #8090AB; display:block;" /></a> 

        <div class="row-fluid">
        <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
<li class="navbar">Kategori</li>
              
        <li class="active"><a href="#">Agama & filsafat</a></li>

        <li class="active"><a href="#">Bahasa</a></li>
        <li class="active"><a href="#">Buku Anak &amp; Remaja</a></li>
        <li class="active"><a href="#">Buku Impor</a></li>
        <li class="active"><a href="#">Buku Sekolah</a></li>
        <li class="active"><a href="#">Ekonomi</a></li>

        <li class="active"><a href="#">Hobi &amp; Interest</a></li>
        <li class="active"><a href="#">Hukum</a></li>
        <li class="active"><a href="#">Kedokteran</a></li>
        <li class="active"><a href="#">Kesehatan</a></li>
        <li class="active"><a href="#">Kesekretariatan</a></li>

        <li class="active"><a href="#">Wanita</a></li>
        <li class="active"><a href="#">Komputer</a></li>
        <li class="active"><a href="#">Majalah</a></li>
        <li class="active"><a href="#">Manajemen &amp; Bisnis</a></li>
        <li class="active"><a href="#">Pariwisata &amp; Peta</a></li>

        <li class="active"><a href="#">Pengembangan Diri dan Karir</a></li>
        <li class="active"><a href="#">Pertanian</a></li>
        <li class="active"><a href="#">Psikologi &amp; Pendidikan</a></li>
        <li class="active"><a href="#">Referensi &amp; Kamus</a></li>
        <li class="active"><a href="#">Sastra &amp; Novel</a></li>

        <li class="active"><a href="#">Sosial Politik</a></li>
        <li class="active"><a href="#">Teknik</a></li>
</div>
    <!-- end .sidebar1 --></div>
          <div class="container">
 			 <div class="content">
				<center>
           		<form action="#" method="POST">
                   <center><b><h2><font color="#000099">Menawarkan Buku</font></h2></b><br></center>
                     <table width="650" border="0" bordercolor="#FFFFFF" bgcolor="#FFFFFF">
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
                          <td>&nbsp;</td>
                         </tr>
                         <tr>
                          <td width="73" height="35">Judul Buku</td>
                          <td width="4">:</td>
                          <td width="400"><input type="text" name="judul_buku" size="50"></td>
                         </tr>
                         <tr>
                          <td height="31">Penerbit</td>
                          <td>:</td>
                          <td><input type="text" name="penerbit" size="30"></td>
                         </tr>
                         <tr>
                          <td height="31">Tahun Cetak</td>
                          <td>:</td>
                          <td><input type="text" name="tahun_cetak" size="4"></td>
                         </tr>
                          <tr>
                          <td height="31">Harga</td>
                          <td>:</td>
                          <td><input type="text" name="harga" size="10"></td>
                         </tr>
                          <tr>
                          <td height="31">Foto</td>
                          <td>:</td>
                          <td>    
                          <div class="controls">
					      <input type="text" id="inputFoto"><button type="submit" class="btn">UPLOAD</button>
					     </div></td>
                         </tr>

                              <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td><button class="btn btn-primary" type="submit" value="simpan"<a href="home_user.php"</a>Simpan</button>
                            		<button class="btn btn-primary" type="reset" value="cancel"<a href="menawarkan_buku.php"</a>Batal</button>
                                </td>
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
                    </center>
                </div>
</div>
</div>
</div>
    <!-- end .content --></div>
  <div class="sidebar2">
    <!-- end .sidebar2 --></div>
  <div class="footer">
    <table align=center border=1 cellpadding=0 cellspacing=0 width=100%><tr><td align=center height=31>
	<table width=880><tr><td>
	<marquee><font face=tahoma size=2 color=#FFFFFF><span class="style29">@Kelompok 5-RBPL A</span> 
	</marquee>
	</td></tr></table>
	</td></tr></table>
    <!-- end .footer --></div>
  <!-- end .container --></div>
</body>
</html>