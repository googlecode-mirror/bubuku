<?php
include '../koneksi.php';
include '../dao/auth.php';
include '../dao/jual_buku.php';

$koneksi=new koneksi();
$koneksi->konek();
$koneksi->konekDb();
$auth=new auth();
$auth->cek_sesi();


if(isset($_POST['batal']))
{
	header("Location: home_user.php");	
}

if(isset($_POST['kembali']))
{
	header("Location: home_user.php");	
}

if (isset($_POST['simpan_jual']) ){

	if(empty($erjudul)) { 
		$erjudul = "Field judul.";
		}
	if(empty($erpenerbit)) { 
		$erpenerbit = "Field penerbit.";
		}		
	if(empty($ertahun)) { 
		$ertahun = "Field tahun.";
		}
	if(empty($erharga)) { 
		$erharga = "Field harga.";
		}		
	if(empty($erfoto)) { 
		$erfoto = "Field foto.";
		}
	
	if ($_POST['simpan_jual']==""){
		print "<script type=\"text/javascript\">alert('Belum diisi :\\n\\n$erjudul\n$erpenerbit\n$ertahun\n$erharga\n$erfoto');</script>";
	}
	
	$jual_buku = new Jual_buku();
	$jual_buku_dao = new Jual_buku_Dao();
	$jual_buku->judul_buku = $_POST['judul'];
	$jual_buku->penerbit_buku = $_POST['penerbit'];
	$jual_buku->tahun_cetak_buku = $_POST['tahun'];
	$jual_buku->harga_buku = $_POST['harga'];
	$jual_buku->foto_buku = $_POST['foto'];
	$jual_buku->id = $_SESSION['MM_Id'];
	$jual_buku_dao->add($jual_buku);
	echo "<script>alert('Terima kasih atas Penawaran anda!');
	</script>";	
}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Menawarkan Buku</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
     <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
         padding-bottom: 40px;
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    
  </head>

  <body background="img/slidedoorp.jpg">
  <!--membuat top menu -->
  <div class="navbar">
  	<div class="navbar-inner">
    	<div class="span0">
        </div>
    	<a class="brand" href="#">Bubuku</a>
        
    </div>
   </div>


  	<!-- membuat conten tengah -->

          		<div class="span12 offset2" align="center">
           		<form action="#" method="POST">
                  <center><b><h2><font color="#000099">Menawarkan Buku</font></h2></b><br></center>
                  <table width="700" height="200" border="0" align="center" background="img/admin.jpg">
                       <tr>
                         <td height="26">&nbsp;</td>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                       </tr>
                       <tr>
                         <td width="200" height="35">Judul Buku</td>
                         <td width="4">:</td>
                         <td width="400"><input type="text" name="judul" size="50"></td>
                       </tr>
                       <tr>
                         <td height="31">Penerbit</td>
                         <td>:</td>
                         <td><input type="text" name="penerbit" size="30"></td>
                       </tr>
                       <tr>
                         <td height="31">Tahun Cetak</td>
                         <td>:</td>
                         <td><input type="text" name="tahun" size="4"></td>
                       </tr>
                       <tr>
                         <td height="31">Harga</td>
                         <td>:</td>
                         <td><input type="text" name="harga" size="10"></td>
                       </tr>
                       <tr>
                         <td height="31">Foto</td>
                         <td>:</td>
                         <td><input type="file" size="30px" name="foto"></td>
                       </tr>
                       <tr>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                         <td><button class="btn btn-primary" type="submit" name="simpan_jual">Simpan</button>
                           <button class="btn btn-primary" type="reset" name="batal">Batal</button></td>
                       </tr>
                       <tr>
                         <td height="54">&nbsp;</td>
                         <td>&nbsp;</td>
                         <td><button class="btn btn-primary" type="submit" name="kembali">Kembali ke Menu Utama</button></td>
                       </tr>
                     </table>
           		</form>
          		</div>
    <!-- membuat conten tengah -->
    
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script>
    <!-- Bootstrap jQuery plugins compiled and minified -->
    <script src="js/bootstrap.min.js"></script>             
    
  </body>
</html>