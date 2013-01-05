<?php
include '../koneksi.php';
include '../dao/auth.php';
include '../dao/kritik_dao.php';

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

if (isset($_POST['simpan_kritik']) ){

	$erkritik = $_POST['simpan_kritik'];
	if(empty($erkritik)) { 
		$erkritik = "Field kritik.";
		}
	
	if ($_POST['kritik']==""){
		print "<script type=\"text/javascript\">alert('Belum diisi :\\n\\n$erkritik ');</script>";
	}
	
	$kritik = new Kritik();
	$kritik_dao = new Kritik_Dao();
	$kritik->kritik = $_POST['kritik'];
	$kritik->tanggal_kritik = $_POST['tanggal_kritik'];
	$kritik->id = $_SESSION['MM_Id'];
	$kritik_dao->add($kritik);
	echo "<script>alert('Terima kasih atas Kritik anda!');
	</script>";	
}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Kritik</title>
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
           <!--membuat top menu -->

  	<!-- membuat conten tengah yaitu sign up -->
    
    	<div class="container">
        	<div class="row">
            	<!--side bar -->
            	<div class="span3" >
                    
				</div>
                <!--side bar -->
                
                <!--konten utama -->
            		<div class="span4 offset2">
            		<form action="#" method="POST">
                    <input type="hidden" name="tanggal_kritik" value=<?php echo date("Y-m-d"); ?>>                    
                        <center><b><h2><font color="#000099">Kritik</font></h2></b><br></center>
                        <table width="400" border="0" bordercolor="#FFFFFF" bgcolor="#FFFFFF">
                          <tr>
                            <td width="140" bgcolor="#FFFFFF">
                            <table width="400" height="200" border="0" align="center">
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
                                <td width="100" height="200">Kritik</td>
                                <td width="4">:</td>
                                <td width="250"><textarea name="kritik" rows="5"></textarea></td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>                                	
                                	<button class="btn btn-primary" type="submit" name="simpan_kritik">Simpan</button>
                            		<button class="btn btn-primary" type="submit" name="batal">Batal</button>
                                 </td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                              </tr>
                              <tr>
                                <td height="54">&nbsp;</td>
                                <td>&nbsp;</td>
                                <td><button class="btn btn-primary" type="submit" name="kembali">Kembali ke Menu Utama</button></td>
                               
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
    
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script>
    <!-- Bootstrap jQuery plugins compiled and minified -->
    <script src="js/bootstrap.min.js"></script>             
    
  </body>
</html>