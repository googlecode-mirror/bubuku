<?php
	require_once "user.php";
	require_once "member.php";

class auth
{

	public function __construct()
	{
		//session_start();
	}

	public function login_member($email,$password)
	{	
			$User_Dao=new User_Dao();
			$user = new User();
			$user->email=$email;
			$user->password=$password;
			if ($User_Dao->cek_user($user)==FALSE)
			{
			//echo '1';
				echo "<script>alert(\"email dan password salah dab!\");</script>";
				//header ("Location: login_form_umum.php");
			//}elseif($User_Dao->cek_user($email,$password)==false)
			//{
			//echo '2';
			//	header ("Location: login_form_umum.php");
			}else{
				//($User_Dao->cek_user($email,$password)==true)
			//{
				session_start();
				$nama=new User();
				$nama=$User_Dao->get_email($user->email);  
				if($nama->akses=="admin")
				{
					//echo '1';
					$_SESSION['MM_Username'] = "admin";
					$Member_Dao=new Member_Dao();
					$member=$Member_Dao->get_id($nama->id);
					$_SESSION['MM_Username'] = "admin";
					$_SESSION['MM_Id'] = $nama->id;
					$_SESSION['MM_Email'] = $nama->email;
					header("Location:admin/admin.php");
				}
				
				if($nama->akses=="user")
				{
					//echo '2';
					
					$Member_Dao=new Member_Dao();
					$member=new Member();
					$member=$Member_Dao->get_id($nama->id);
					$_SESSION['MM_Username'] = $member->nama;
					$_SESSION['MM_Id'] = $nama->id;
					$_SESSION['MM_Email'] = $nama->email;
					
					header("Location:/bubuku/umum/home_user.php");
				}
				if($nama->akses=="toko")
				{
					//echo '2';
					$Member_Dao=new Member_Dao();
					$member=new Member();
					$member=$Member_Dao->get_id($nama->id);
					$_SESSION['MM_Username'] = $member->nama;
					$_SESSION['MM_Id'] = $nama->id;
					$_SESSION['MM_Email'] = $nama->email;
					header("Location:home_toko.php");
				}
				
			}
	}
	
	public function cek_sesi()
	{
		session_start();
		if (!isset($_SESSION['MM_Username'])){
			header("Location:home_guest.php");
		}
	}
	
	public function logout()
	{
		session_unset();
		session_destroy();
		header("Location: home_guest.php");
	
	}
	
}