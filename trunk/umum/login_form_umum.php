<?php
include '../dao/user.php';
include '../dao/member.php';
include '../dao/auth.php';
include '../koneksi.php';

$koneksi=new koneksi();
$koneksi->konek();
$koneksi->konekDb();

if(isset($_POST['batal']))
{
	header("Location:home_guest.php");	
}
if(isset($_POST['MM_login'])){
		if($_POST['email']=="" || $_POST['password']=="" ){
			echo "<script>alert('Silahkan isikan Email dan Password terlebih dahulu!');</script>";
		}else{
				$user = new User();
				$user->email=$_POST['email'];
				$user->password=$_POST['password'];
				//$User_Dao=new User_Dao();
				
				/**if(empty($_POST["email"]) || empty($_POST["password"])){
					echo"<script>alert('Email dan Password tidak boleh kosong!');</script>";
				}else
				{**/
					//$user_login=$User_Dao->get_akses($user);
					/**if($user_login->akses=="user"){
						$Member_Dao=new Member_Dao();
						$member=$Member_Dao->get_id($nama->id);
						echo $user->id;
						session_start();
						$_SESSION['MM_Username'] = $member->nama;
						$_SESSION['MM_Id'] = $user->id;
						$_SESSION['MM_Email'] = $email;
						header("Location: home_user.php");
					}**/
					
					$auth2=new auth();
					$auth2->login_member($_POST['email'],$_POST['password']);
				//}
		}
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="file:///H|/assets/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>
    <link href="file:///H|/assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="file:///H|/assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="file:///H|/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="file:///H|/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="file:///H|/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="file:///H|/assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body>

    <div class="container">

      <form class="form-signin" method="post" action="login_form_umum.php">
        <h2 class="form-signin-heading">LOGIN</h2>
        <p>
	      <input type="hidden" name="login_terakhir" value=<?php echo date("Y-m-d"); ?>>
          <input type="text" name="email" class="input-block-level" placeholder="Email address">
          <input type="password" name="password"  class="input-block-level" placeholder="Password">
        </p>
        <button class="btn btn-large btn-primary" name="MM_login" type="submit">Masuk</button>
        <button class="btn btn-large btn-primary" name="batal" type="submit">Batal</button>
         <div class="controls">
                                        <a href="registrasi.php">daftar&nbsp;&nbsp;&nbsp;</a>
                                        <a href="lupa_password.php" >lupa password ? </a>
                        </div>
      </form>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="file:///H|/assets/js/jquery.js"></script>
    <script src="file:///H|/assets/js/bootstrap-transition.js"></script>
    <script src="file:///H|/assets/js/bootstrap-alert.js"></script>
    <script src="file:///H|/assets/js/bootstrap-modal.js"></script>
    <script src="file:///H|/assets/js/bootstrap-dropdown.js"></script>
    <script src="file:///H|/assets/js/bootstrap-scrollspy.js"></script>
    <script src="file:///H|/assets/js/bootstrap-tab.js"></script>
    <script src="file:///H|/assets/js/bootstrap-tooltip.js"></script>
    <script src="file:///H|/assets/js/bootstrap-popover.js"></script>
    <script src="file:///H|/assets/js/bootstrap-button.js"></script>
    <script src="file:///H|/assets/js/bootstrap-collapse.js"></script>
    <script src="file:///H|/assets/js/bootstrap-carousel.js"></script>
    <script src="file:///H|/assets/js/bootstrap-typeahead.js"></script>

  </body>
</html>
