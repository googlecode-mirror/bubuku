<?php
include '../koneksi.php';
include '../dao/member.php';
include '../dao/user.php';
include '../dao/auth.php';


if(isset($_POST['kembali']))
{
	header("Location:home_user.php");	
}

$koneksi=new koneksi();
$koneksi->konek();
$koneksi->konekDb();
$auth = new auth();
$auth->cek_sesi();
$id_user=$_SESSION['MM_Id'];
$member_sesi = new Member();
$member = new Member();
$member_dao = new Member_Dao();
$member_sesi=$member_dao->get_id_member($id_user);
$member=$member_dao->get_id($member_sesi->id_member);
$user = new User();
$user_dao = new User_Dao();
$user=$user_dao->get_id($member->id_user)

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

  <body background="img/admin.jpg">
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
	<div id="wrapper">
		<div id="content">
		<pre><h4>Profil</h4></pre>
			<div class="dl-horizontal">
				<dt>Nama Lengkap :</dt>
				<dd><?php  echo $member->nama; ?></dd>
			</div>
			<div class="dl-horizontal">
				<dt>Email :</dt>
				<dd><?php  echo $user->email; ?></dd>
			</div>
			<div class="dl-horizontal">
				<dt>Password :</dt>
				<dd><?php  echo $user->password; ?></dd>
			</div>            
			<div class="dl-horizontal">
				<dt>Alamat :</dt>
				<dd><?php  echo $member->alamat; ?></dd>
			</div>
			<div class="dl-horizontal">
				<dt>Telepon :</dt>
				<dd><?php  echo $member->telepon; ?></dd>
			</div>
			<div class="dl-horizontal">
				<dt>Agama :</dt>
				<dd><?php  echo $member->agama; ?></dd>
			</div>
            <br>
            <br>
		</div><!--end of cid content-->	
        <button class="btn btn-primary" type="submit" name="kembali">Kembali ke Menu Utama<a href="home_user.php"></a></button>
	</div><!--end of id wrapper-->
    <!-- membuat conten tengah yaitu sign up -->
    
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script>
    <!-- Bootstrap jQuery plugins compiled and minified -->
    <script src="js/bootstrap.min.js"></script>             
    
  </body>
</html>