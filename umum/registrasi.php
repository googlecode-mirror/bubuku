<?php
include '../koneksi.php';
include '../dao/member.php';
include '../dao/user.php';

$koneksi=new koneksi();
$koneksi->konek();
$koneksi->konekDb();

if(isset($_POST['batal']))
{
	header("Location: home_guest.php");	
}

if(isset($_POST['login']))
{
	header("Location: login_form_umum.php");	
}

if (isset($_POST["registrasi"]) ){

	$ernama = $eremail = $erpass1 = $erpass2 = "";
	if(empty($ernama)) { 
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
				
				$member_dao = new Member_Dao();
				$member = new Member();
				$member->id_user = $user2->id;
				//echo $member->id;
				$member->nama = $_POST['nama'];
				//echo $member->nama;
				$member->alamat = $_POST['alamat'];
				$member->telepon = $_POST['telepon'];
				$member->tanggal_daftar = $_POST['tanggal_daftar'];
				$member->agama = $_POST['agama'];
				$member->jenis_kelamin = $_POST['jenis_kelamin'];
				$member_dao->add($member);
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
            		<input type="hidden" name="registrasi_member">
				    <input type="hidden" name="tanggal_daftar" value=<?php echo date("Y-m-d"); ?>>
                    <input type="hidden" name="akses" value=<?php echo "user"; ?>>

                        <b><h2><font color="#000099">Form Pendaftaran</font></h2></b><br>
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
                                <td width="149" height="35">Nama Lengkap</td>
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
                                <td><input type="password" name="password1" size="30"></td>
                                <td>&nbsp;</td>
                                <td>Confirm Password</td>
                                <td>:</td>
                                <td><input type="password" name="password2" size="30"></td>
                              </tr>
                              <tr>
                                <td height="31">Alamat</td>
                                <td>:</td>
                                <td><textarea name="alamat" rows="3"></textarea></td>
                                <td>&nbsp;</td>
                                <td>Telepon</td>
                                <td>:</td>
                                <td><input type="text" name="telepon" size="15"></td>
                              </tr>
                              <tr>
                                <td height="31">Agama</td>
                                <td>:</td>
                                <td><select name="agama">
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen Protestan">Kristen Protestan</option>
                                    <option value="Katholik">Katholik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                                </td>
                                <td>&nbsp;</td>
                                <td>Jenis Kelamin</td>
                                <td>:</td>
                                <td><select name="jenis_kelamin">
                                	<option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                                </td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>                                	
                                	<button class="btn btn-primary" name="registrasi" type="submit" value="submit">Daftar</button>
                            		<button class="btn btn-primary" type="submit" name="batal">Batal</button>
                                    <button class="btn btn-primary" type="submit" name="login">Login</button>
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