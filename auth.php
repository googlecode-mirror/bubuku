<?php
	include "list_user.php";

class auth{

	public function __construct(){
		session_start();
	}

	public function login($nama_user,$pass_user){	
			$usr=new list_user();
			if ($nama_user=="" and $pass_user==""){
				header ("Location:login_form.php");
			}

			if($usr->user_cek($nama_user,$pass_user)==false){
				header ("Location:login_form.php");
			}

			if($usr->user_cek($nama_user,$pass_user)==true){
				$_SESSION['MM_Nama_user'] = $nama_user;
				header ("Location:index.php");
			}
	}
	
	public function logout(){
		session_destroy();
		header ("Location:Login_form.php");
	
	}
	
	public function cek_sesi(){
		if (!isset($_SESSION['MM_Nama_user'])){
			header("Location:login_form.php");
		}
	}

}