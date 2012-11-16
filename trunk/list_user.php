<?php
	require_once "koneksi.php";
	require_once "user.php";
	
class list_user{
	
	public function __construct(){
		$kon= new db();
		$kon->konek();
		$kon->konekDb();	
	}
	
	public function user_list(){
		$sql="select * from user";
		$query=mysql_query($sql);
		while($data=mysql_fetch_array($query)){
			$id_user=$data[0];
			$nama_user=$data[1];
			$pass_user=$data[2];
			$usr= new user($id_user,$nama_user, $pass_user);
		}
		return $usr;
	}
	
	public function user_cari($user_id){
		$sql="select * from user where id_user='$id_user'";
		$query=mysql_query($sql);
		$data=mysql_fetch_array($query);
		$id_user=$data[0];
		$nama_user=$data[1];
		$pass_user=$data[2];
		$usr=new user($id_user,$nama_user,$pass_user);
		return $usr;
	}
	
	public function user_cek($nama_user,$pass_user){
		$sql="select count(*) as jml from user where nama_user='$nama_user' and passw_user='$pass_user'";
		$query=mysql_query($sql);
		$data=mysql_fetch_array($query);
		$cek=false;
		echo $data[0];
		if ($data[0]=="1"){
			$cek=true;
		}
		return $cek;
		
		/*
		//echo $username;
		//echo $pass;		
		//echo count($data);
		$id_user=$data[0];
		$nama_user1=$data[1];
		$pass_user1=$data[2];
		//echo $nama_user1;
		//echo $pass_user1;
		$usr=new user($id_user,$nama_user1, $pass_user1);
		if($usr->getNama_user()==$nama_user and $usr->getPass_user()==$pass_user){
			$cek=true;
		}
		//echo $cek;
		return $cek;
		*/
	}
	
	
}