<?php
session_start();
include_once '/dao/user.php';
$user = new User();
 
if ($user->get_session())
{
    header("location:home.php");
}
 
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $login = $user->check_login($_POST['emailusername'], $_POST['password']);
    if ($login)
    {
        // Login Success
        header("location:login.php");
    }
    else
    {
        // Login Failed
        $msg= 'Username / password wrong';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sign in &middot; Twitter Bootstrap</title>
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

      <form class="form-signin">
        <h2 class="form-signin-heading">LOGIN</h2>
        <input type="text" class="input-block-level" placeholder="Email address">
        <input type="password" class="input-block-level" placeholder="Password">
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        <button class="btn btn-large btn-primary" type="submit">Masuk</button>
        <button class="btn btn-large btn-primary" type="submit">Batal</button>
         <div class="controls">
                                        <a href="file:///H|/php/register.php" >daftar&nbsp;&nbsp;&nbsp;</a>
                                        <a href="file:///H|/php/lupa_password.php" >lupa password ? </a>
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
