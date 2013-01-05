<?php
include '../koneksi.php';
include '../dao/auth.php';
include '../dao/wishlist_dao.php';

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

if (isset($_POST['simpan_wishlist']) ){

	if(empty($erjudul)) { 
		$erjudul = "Field judul.";
		}
	if(empty($erpenerbit)) { 
		$erpenerbit = "Field penerbit.";
		}		
	if(empty($ertahun)) { 
		$ertahun = "Field tahun.";
		}
	if(empty($erdeskripsi)) { 
		$erdeskripsi = "Field deskripsi.";
		}		
	if(empty($erbatas)) { 
		$erbatas = "Field batas.";
		}
	
	if ($_POST['simpan_wishlist']==""){
		print "<script type=\"text/javascript\">alert('Belum diisi :\\n\\n$erjudul\n$erpenerbit\n$ertahun\n$erbatas');</script>";
	}
	
	$wishlist = new Wishlist();
	$wishlist_dao = new Wishlist_Dao();
	$wishlist->nama_wishlist = $_POST['judul'];
	$wishlist->penerbit_wishlist = $_POST['penerbit'];
	$wishlist->tahun_cetak_wishlist = $_POST['tahun'];
	$wishlist->deskripsi_wishlist = $_POST['deskripsi'];
	$wishlist->batas_waktu = $_POST['batas'];
	$wishlist->id = $_SESSION['MM_Id'];
	$wishlist_dao->add($wishlist);
	echo "<script>alert('Kami akan segera menghubungi anda apabila tersedia buku idaman anda!');
	</script>";	
}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Wishlist</title>
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
                  <center><b><h2><font color="#000099">Wishlist</font></h2></b><br></center>
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
                         <td height="31">Deskripsi</td>
                         <td>:</td>
                         <td><textarea name="deskripsi" rows="5"></textarea></td>
                       </tr>
                       <tr>
                         <td height="31">Batas Waktu Wishlist</td>
                         <td>:</td>
                         <td><input type="text" data-date-format="yyyy/mm/dd" id="dp2" name="batas" ></td>
                       </tr>
                       <tr>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                         <td><button class="btn btn-primary" type="submit" name="simpan_wishlist">Simpan</button>
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
    <script src="js/bootstrap-datepicker.js"></script>
    	<script>
		$(function(){
		window.prettyPrint && prettyPrint();
			$('#dp2').datepicker();
		});
	</script>
    <!-- Bootstrap jQuery plugins compiled and minified -->
    <script src="js/bootstrap.min.js"></script>             
    
  </body>
</html>