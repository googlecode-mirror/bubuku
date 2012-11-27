<?php
	require_once "user.php";
	require_once "member.php";

class auth
{

	public function __construct()
	{
		session_start();
	}

	public function login_member($email,$password)
	{	
			$User_Dao=new User_Dao();
			
			if ($email=="" and $password=="")
			{
			//echo '1';
				header ("Location: login_form.php");
			}

			if($User_Dao->cek_user($email,$password)==false)
			{
			//echo '2';
				header ("Location: login_form.php");
			}

			if($User_Dao->cek_user($email,$password)==true)
			{
				$nama=$User_Dao->get_email($email);   
				if($nama->akses=="admin")
				{
					//echo '1';
					$_SESSION['MM_Username'] = "admin";
					header ("Location:admin/admin.php");
				}
				
				if($nama->akses=="member")
				{
					//echo '2';
					$Member_Dao=new Member_Dao();
					$member=$Member_Dao->get_id($nama->id);
					$_SESSION['MM_Username'] = $member->nama;
					$_SESSION['MM_Id'] = $member->id;
					$_SESSION['MM_Email'] = $email;
					header ("Location:member/member.php");
				}
				
			}
	}
	
	public function cek_sesi()
	{
		if (!isset($_SESSION['MM_Nama_user'])){
			header("Location:login_form.php");
		}
	}
	
	public function logout()
	{
		session_destroy();
		header ("Location:login.php");
	
	}
	
}