<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
<link href="css/bootstrap-responsive.css" rel="stylesheet" type="text/css" />
<title></title>
</head>
<body background="img/white.jpg">
<body>
<div class="admin">
  <h1><font color="#333333">BUBUKU</h1>
</div>
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
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">lainnya
      </a>
        <ul class="dropdown-menu">
            <li><a href="kritik.php">Kritik</a></li>
            <li><a href="saran.php">Saran</a></li>
            <li><a href="testi.php">Testimonial</a></li>
            <li><a href="wishlist.php">Wishlist</a></li>
            <li><a href="menawarkan_buku.php">Menawarkan Buku</a></li>
        </ul>
    </li>
<li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Tentang Kami
      </a>
        <ul class="dropdown-menu">
            <li><a href="tentang.php">Tentang Bubuku</a></li>
            <li><a href="cara_pemesanan.php">Cara Pemesanan</a></li>
            <li><a href="hubungi.php">Hubungi Kami</a></li>
        </ul>
    </li>    
<!-- Menu Login dan Daftar -->
<div class="offset8" align="right">
<ul class="nav">
<li><form method="POST" action="?menu=tcari"> 
   <div>
        <input type="text" name="kata" maxlength="50" value="Pencarian..." onBlur="if(this.value=='') this.value='Pencarian...';" onFocus="if(this.value=='Pencarian...') this.value='';" />
        <input type="submit" value="Go" />
      </div>
    </form>
    </li>
<li class="button"> <a class="button" href="login_form_umum.php">Login</a> </li>
<li class="button"> <a class="button" href="registrasi.php">Daftar</a> </li>
  </ul>
  </div>
  </div>
  </div>
    <!-- awal form pencarian -->
  <div class="container">
<div class="header">
  <table align=center cellpadding=0 cellspacing=0 width=100%><tr><td align=center height=31>
<table width=880><tr><td>
<marquee><font face=tahoma size=2 color="#FF0000">Selamat Datang di <span class="style29">Website Kami!</span> 
Kami berusaha untuk memberikan informasi dan pelayanan yang terbaik bagi anda! <span class="style29">SELAMAT BERBELANJA</span></marquee>
</td></tr></table>
</td></tr></table></ul>
    <!-- end .header --></div>
  <div class="container">
  <div class="sidebar1">
  <div class="intro">
    <p><font face=tahoma size=2><span id="date"></span> <span id="clock"></span></font></p>
     <!-- done form pencarian -->
<!-- Isi dari Home Guest -->
<div class="container-fluid" align="left">
  <table width="1096" border="0" align="center">
    <tr id="1">
      <td width="275"><div class="dropdown-toggle">
        <h2 align="left">Buku Per Kategori</h2>
        <div>
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
        </div></td>
      <td><div>
      <table width="545" border="0">
      <tr>
      <h2 align="center"><a>RECOMMENDED BOOK</a></h2>
      </tr>
      <tr>
          <td><div class="img-circle">
    <img src="img/home1.jpg" width="150" height="175"/></td>
          <td><div><table width="300" border="0">
          <tr><a>JUDUL BUKU </a></tr>
          <td>Harga</td>
          <td><input name="Harga" size="30"></td>
        </tr>
        <tr>
          <td>Penerbit</td>
          <td><input name="Penerbit" size="30"></td>
        </tr>
        </table>
              <tr>
          <td><div class="img-circle">
    <img src="img/home1.jpg" width="150" height="175"/></td>
          <td><div><table width="300" border="0">
          <tr><a>JUDUL BUKU </a></tr>
          <td>Harga</td>
          <td><input name="Harga" size="30"></td>
        </tr>
        <tr>
          <td>Penerbit</td>
          <td><input name="Penerbit" size="30"></td>
        </tr>
      </table>
      <tr>
          <td><div class="img-circle">
    <img src="img/home1.jpg" width="150" height="175"/></td>
          <td><div><table width="300" border="0">
          <tr><a>JUDUL BUKU </a></tr>
          <td>Harga</td>
          <td><input name="Harga" size="30"></td>
        </tr>
        <tr>
          <td>Penerbit</td>
          <td><input name="Penerbit" size="30"></td>
        </tr>
        </table>
        <tr>
          <td><div class="img-circle">
    <img src="img/home1.jpg" width="150" height="175"/></td>
          <td><div><table width="300" border="0">
          <tr><a>JUDUL BUKU </a></tr>
          <td>Harga</td>
          <td><input name="Harga" size="30"></td>
        </tr>
        <tr>
          <td>Penerbit</td>
          <td><input name="Penerbit" size="30"></td>
        </tr>
        </table>
      </div>
      </td>
      </table>
     
      <td><div>
        <table width="175" border="0">
          <tr>
          <td> <td id="tabelputus" width="350"><div align="center">
            <iframe title="Shoutbox" width="200" height="200"
              src="http://shoutbox.widget.me/window.html?uid=36rnn"
              frameborder="0" scrolling="auto"></iframe>
                      <script src="http://shoutbox.widget.me/v1.js"
            type="text/javascript" xml:space="preserve"></script>
            <br /></div>
            <a
            href="http://shoutbox.widget.me" title="Shoutbox Widget"></a>
            <a href="http://shoutbox-tutorials.blogspot.com"
            title="Shoutbox Tutorials"></a><br />
            <!--  End --></td>
        </tr>
        <tr>
          <td><div align="center">
          </div></td>
          <td><table>
            <tr></tr>
          </table></td></td>
            <td><div align="center">
                <p>
                  <!--  Skype 'My status' button http://www.skype.com/go/skypebuttons -->
                  <script
            type="text/javascript"
            src="http://download.skype.com/share/skypebuttons/js/skypeCheck.js"
            xml:space="preserve"></script>
                  <a
            href="skype:farrohmulyadi?call"><img
            src="http://mystatus.skype.com/balloon/farrohmulyadi"
            style="border: none;" width="150" height="60" alt="My status" /></a> <br />
                  <br />
                  <script
            charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"
            type="text/javascript" xml:space="preserve"></script>
                  <script
            type="text/javascript" xml:space="preserve">//<![CDATA[
new TWTR.Widget({
  version: 2,
  type: 'profile',
  rpp: 4,
  interval: 30000,
  width: 100,
  height: 100,
  theme: {
    shell: {
      background: '#225710',
      color: '#ffffff'
    },
    tweets: {
      background: '#000000',
      color: '#ffffff',
      links: '#4aed05'
    }
  },
  features: {
    scrollbar: true,
    loop: true,
    live: true,
    behavior: 'default'
  }
}).render().setUser('farrohmulyadi').start();
//]]></script>
                  &lt; <a href="http://en-gb.facebook.com/farrohmulyadi" target="_TOP"
              style="font-family: &quot;lucida grande&quot;,tahoma,verdana,arial,sans-serif;     font-size: 11px; font-variant: normal; font-style: normal; font-weight: normal; color: #3B5998; text-decoration: none;"
              title="Farroh S. Mulyadi">Farroh Mulyadi</a><br />
                  <a
              href="http://en-gb.facebook.com/farrohmulyadi" target="_TOP"
              title="Farroh Mulyadi"> <img src="https://www.facebook.com/photo.php?fbid=4355193192723&set=a.1553772118947.81692.1074506229&type=1&theater"
              style="border: 0px;" alt="" /></a><br />
                  <a
              href="http://en-gb.facebook.com/badges/" target="_TOP"
              style="font-family: &quot;lucida grande&quot;,tahoma,verdana,arial,sans-serif; font-size: 11px; font-variant: normal; font-style: normal; font-weight: normal; color: #3B5998; text-decoration: none;"
              title="Make your own badge!"></a></p>
              </div></td>
        </table>
    </tr>
  </table>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script>
  <!-- Bootstrap jQuery plugins compiled and minified -->
  <script src="js/bootstrap.min.js"></script>
</div>
</body>
</html>