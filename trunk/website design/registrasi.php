<?php
include 'koneksi.php';
include 'dao/member.php';
include 'dao/user.php';

$koneksi=new Koneksi();
$koneksi->konek();
$koneksi->konekDb();

if (ISSET($_POST["registrasi_member"]) ){

	if ($_POST['nama']!="" && $_POST['email']!="" && $_POST['password1']!="" && $_POST['password2']!=""){
	
		if ($_POST['password1'] == $_POST['password2'] ){
	
			$User_Dao = new User_Dao();
			if($User_Dao->cek_email($_POST['email'])==true){
	
				$user=new User();
				$user->email = $_POST['email'];
				$user->password = $_POST['password1'];
				$user->role = "member";
				//echo $user->email;
				$User_Dao->add($user);
				
				$user2 = $User_Dao->get_email($_POST['email']);
			
				$Member_Dao=new Member_Dao();
				$member = new Member();
				$member->id = $user2->id;
				echo $member->id;
				$member->nama = $_POST['nama'];
				echo $member->nama;
				$member->alamat = $_POST['alamat'];
				$member->no_telp = $_POST['no_telp'];
				$member->tgl_daftar = $_POST['tgl_daftar'];
				$Member_Dao->add($member);
				$koneksi->close();
				header("Location:login.php");
				echo "Silahkan login"; 		
		} else { echo "Peringatan : Email sudah terdaftar. Silahkan ganti dengan menggunakan email yang lain";}
	} else { echo "Peringatan : Kedua password tidak cocok!";}
			
	} else { echo "Peringatan : Data anda tidak lengkap!";}
		

}

?>
<?php include("header.php") ?>

<div id="body">
<div class="topbox">
		Registrasi Member:
                  <br>
				  <br>
				  <form method="post" action="registrasi.php">
				  <input type="hidden" name="registrasi_member">
				  <input type="hidden" name="tgl_daftar" value=<?php echo date("Y-m-d"); ?>>
                  <table border=1 cellspacing=0>
				   <tr>
					<td width="89">Nama Lengkap*</td>
					<td width="3">:</td>
					<td width="218"><input type="text" name="nama" size=64></td>
				    </tr>
				  <tr>
					<td>Email*</td>
					<td>:</td>
					<td><input type="text" name="email" size=64></td>
				    </tr>
				  <tr>
				  <tr>
					<td>Password*</td>
					<td>:</td>
					<td><input type="password" name="password1" size=32></td>
				    </tr>
				  <tr>
				  <tr>
					<td>Password(retype)*</td>
					<td>:</td>
					<td><input type="password" name="password2" size=32></td>
				    </tr>
				  <tr>
					<td>Alamat</td>
					<td>:</td>
					<td><input type="text" name="alamat" size=64></td>
				    </tr>
				  <tr>
					<td>No Telp</td>
					<td>:</td>
					<td><input type="text" name="no_telp"></td>
				  </tr>
				  </table>
				  <br>
				  <input type="submit" name="submit" value="submit">
				  </form>               
</div>  
<div class="topbox">
* Data harus diisi.
</div>           
</div>
          
         <div class="clear"></div>
         <?php include("footer.php") ?>
		