<?php

class User_Dao
{

	function __construct()
	{
	}
	
	function get_all()
	{
		$sql="
		select *
		from
		user
		";
		
		$list_user = array();
		
		$data = mysql_query($sql);
		if($data)
		{
			while($row = mysql_fetch_assoc($data))
			{
			
				$user = new User();
				
				$user->id = $row['ID'];
				$user->email = $row['EMAIL'];
				$user->password = $row['PASSWORD'];
				$user->akses = $row['AKSES'];
				$user->login_terakhir = $row['LOGIN_TERAKHIR'];
				
				$list_user[] = $user;
			}
		}	
		return $list_user;
	}
	
	function get_id($id)
	{
		$sql="
		select *
		from
		user
		WHERE
		ID = '".$id."'
		";
		
		$user=false;		
		$data = mysql_query($sql);
		if($data){
			while($row = mysql_fetch_assoc($data))
			{
				
				$user = new User();
				
				$user->id = $row['ID'];
				$user->email = $row['EMAIL'];
				$user->password = $row['PASSWORD'];
				$user->akses = $row['AKSES'];
				$user->login_terakhir = $row['LOGIN_TERAKHIR'];
				
			}
		}	
		return $user;
	}
	
	function get_akses(User $user)
	{
		
		$password = $user->password;
		$email=$user->email;
		$sql="
		select *
		from user where email='$email' and password='$password'
		";
		
		$user=false;		
		$data = mysql_query($sql);
		if($data){
			while($row = mysql_fetch_assoc($data))
			{
				
				$user = new User();
				
				$user->id = $row['ID'];
				$user->email = $row['EMAIL'];
				$user->password = $row['PASSWORD'];
				$user->akses = $row['AKSES'];
				$user->login_terakhir = $row['LOGIN_TERAKHIR'];
				
			}
		}	
		return $user;
	}
	
	function add(User $user)
	{
		$sql="
		insert 
		into 
		user(ID, EMAIL, PASSWORD, AKSES)
		values(
		'$user->id',
		'$user->email',
		'$user->password',
		'$user->akses')
		";
		$query=mysql_query($sql);
	}
	
	function edit_pass(User $user)
	{
		$sql="
		update 
		user 
		set 
		PASSWORD='$user->password'
		where ID='$user->id'
		";
		$query=mysql_query($sql);
	}
	
	function edit_email(User $user)
	{
		$sql="
		update 
		user 
		set 
		EMAIL='$user->email'
		where ID='$user->id'
		";
		$query=mysql_query($sql);
	}
	
	function cek_user(User $user)
	{
		$password = $user->password;
		$email=$user->email;
		$result=mysql_query("select id from user where email='$email' and password='$password'");
		$user_data=mysql_fetch_array($result);
		$no_rows=mysql_num_rows($result);

		if ($no_rows == 1)
		{
			//$_SESSION['login'] = true;
            //$_SESSION['id'] = $user_data['id'];
            return TRUE;		
			}
		else
		{
			FALSE;
		}
	}
	
	function cek_email($email)
	{
		$sql="select count(*) as jml from user where EMAIL='$email'";
		$query=mysql_query($sql);
		$data=mysql_fetch_assoc($query);
		$cek=false;

		if ($data['jml']=="0")
		{
			$cek=true;
		}
		return $cek;
	}
	
	function get_email($email)
	{
		$sql="
		select *
		from
		user
		WHERE
		EMAIL = '".$email."'
		";
		
		$user=false;		
		$data = mysql_query($sql);
		if($data)
		{
			while($row = mysql_fetch_assoc($data)){
				$user = new User();
				
				$user->id = $row['ID'];
				$user->email = $row['EMAIL'];
				$user->password = $row['PASSWORD'];
				$user->akses = $row['AKSES'];
				$user->login_terakhir = $row['LOGIN_TERAKHIR'];
			}
		}	
		return $user;
	}
	

}

class User
{
	var $id;
	var $email;
	var $password;
	var $akses;
	var $login_terakhir;
	

}