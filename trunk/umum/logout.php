<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Logout</title>
</head>
<body>
    <div id="mylogout" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Konfirmasi Logout</h3>
  </div>
  <div class="modal-body">
    <p>Apakah anda yakin akan keluar?</p>
  </div>
  <div class="modal-footer">
    <a href="home_guest.php"><button class="btn btn-primary">Iya</button></a>
    <button class="btn" data-dismiss="modal" aria-hidden="true">Tidak</button>
  </div>
</div>
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
      <script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script>
    <!-- Bootstrap jQuery plugins compiled and minified -->
    <script src="js/bootstrap.min.js"></script>
    </li>
    </ul>
  </div>
</body>
</html>
<?php
include "../dao/auth.php";
$auth=new Auth();
$auth->logout();
