<?php
include '../koneksi.php';
include '../dao/member.php';
include '../dao/user.php';

$koneksi=new koneksi();
$koneksi->konek();

if (ISSET($_POST["registrasi_member"]) ){

	$ernama = $eremail = $erpass1 = $erpass2 = "";
	if($_POST['nama']=="") { 
		$ernama = "Field nama.";
		}
	if($_POST['email']=="") { 
		$eremail = "Field email.";
		}
	if($_POST['password1']=="") { 
		$erpass1 = "Field password.";
		}
	if($_POST['password2']=="") { 
		$erpass2 = "Field password(retype).";
		}
	
	if ($_POST['nama']=="" || $_POST['email']=="" || $_POST['password1']=="" || $_POST['password2']=="" ){
		print "<script type=\"text/javascript\">alert('Belum diisi :\\n\\n$ernama \\n$eremail \\n$erpass1 \\n$erpass2 ');</script>";
	}

	if ($_POST['nama']!="" && $_POST['email']!="" && $_POST['password1']!="" && $_POST['password2']!="" ){
	
		if ($_POST['password1'] == $_POST['password2'] ){
	
			$User_Dao = new User_Dao();
			if($User_Dao->cek_email($_POST['email'])==true){
	
				$user=new User();
				$user->email = $_POST['email'];
				$user->password = $_POST['password1'];
				$user->akses = "user";
				//echo $user->email;
				$User_Dao->add($user);
				
				$user2 = $User_Dao->get_email($_POST['email']);
			
				$Member_Dao=new Member_Dao();
				$member = new Member();
				$member->id = $user2->id;
				//echo $member->id;
				$member->nama = $_POST['nama'];
				//echo $member->nama;
				$member->alamat = $_POST['alamat'];
				$member->telepon = $_POST['telepon'];
				$member->tanggal_daftar = $_POST['tanggal_daftar'];
				$member->agama = $_POST['agama'];
				$member->jenis_kelamin = $_POST['jenis_kelamin'];
				$Member_Dao->add($member);
				$koneksi->close();
				echo "<script>alert('Registrasi berhasil. Silahkan login menggunakan email dan password yang Anda daftarkan.!');
				</script>";
				
						
		} else { echo "<script>alert('Peringatan : Email tidak tersedia. Silahkan pilih email yang lain');</script>";}
	} else { echo "<script>alert('Peringatan : Kedua password tidak cocok!');</script>";}
			
	} 
	
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bubuku</title>
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
        		<div class="span8 offset2">
            		<form action="#" method="POST">
                        <b><h2><font color="#000099">Sign up</font></h2></b><br>
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
                                <td width="73" height="35">Nama Lengkap</td>
                                <td width="4">:</td>
                                <td width="212"><input type="text" name="nama" size="50"></td>
                                <td width="4">&nbsp;</td>
                                <td width="149">Email</td>
                                <td width="8">:</td>
                                <td width="212"><input type="text" name="email" size="30"></td>
                              </tr>
                              <tr>
                                <td height="31">Password</td>
                                <td>:</td>
                                <td><input type="password" name="password" size="30"></td>
                                <td>&nbsp;</td>
                                <td>Confirm Password</td>
                                <td>:</td>
                                <td><input type="password" name="confpass" size="30"></td>
                              </tr>
                              <tr>
                                <td height="31">Alamat</td>
                                <td>:</td>
                                <td><input type="text" name="alamat" size="200"></td>
                                <td>&nbsp;</td>
                                <td>Telepon</td>
                                <td>:</td>
                                <td><input type="text" name="telepon" size="15"></td>
                              </tr>
                              <tr>
                                <td height="31">Agama</td>
                                <td>:</td>
                                <td><input type="text" name="Agama" size="20"></td>
                                <td>&nbsp;</td>
                                <td>Jenis Kelamin</td>
                                <td>:</td>
                                <td><input type="text" name="Jenis Kelamin" size="10"></td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>                                	
                                	<button class="btn btn-primary" type="submit" value="Simpan member">Daftar</button>
                            		<button class="btn btn-primary" type="reset">Reset</button>
                                    <button class="btn btn-primary" type="submit">Cancel<a href="home_guest.php"</a></button>
								</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
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
    
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script>
    <!-- Bootstrap jQuery plugins compiled and minified -->
    <script src="js/bootstrap.min.js"></script>             
    
  </body>
</html>