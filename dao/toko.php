<?php

class Toko_Dao
{

	function __construct()
	{
	}
	
	function get_all()
	{
		$sql="
		select *
		from
		toko
		";
		
		$list_toko = array();
		
		$data = mysql_query($sql);
		if($data){
			while($row = mysql_fetch_assoc($data))
			{
			
				$toko = new Toko();
				
				$toko->id_toko=$row['ID_TOKO'];
				$toko->nama_toko=$row['NAMA_TOKO'];
				$toko->alamat_toko=$row['ALAMAT_TOKO'];
				$toko->telepon_toko=$row['TELEPON_TOKO'];
				$toko->email_toko=$row['EMAIL_TOKO'];
				$list_toko[] = $toko;
			}
		}	
		return $list_toko;
	}
	
	
	function get_id($id)
	{
		$sql="
		select *
		from
		toko
		WHERE
		ID_TOKO = '".$id."'
		";
		
		$toko =false;		
		$data = mysql_query($sql);
		if($data)
		{
			while($row = mysql_fetch_assoc($data))
			{
			
				$toko = new Toko();
				
				$toko->id_toko=$row['ID_TOKO'];
				$toko->nama_toko=$row['NAMA_TOKO'];
				$toko->alamat_toko=$row['ALAMAT_TOKO'];
				$toko->telepon_toko=$row['TELEPON_TOKO'];
				$toko->email_toko=$row['EMAIL_TOKO'];
			}
		}	
		return $toko;
	}
	
	function get_idmember($id)
	{
		$sql="
		select *
		from
		toko
		WHERE
		ID = '".$id."'
		";
		
		$list_toko = array();
		
		$data = mysql_query($sql);
		if($data)
		{
			while($row = mysql_fetch_assoc($data))
			{
			
				$toko = new Toko();
				
				$toko->id_toko=$row['ID_TOKO'];
				$toko->nama_toko=$row['NAMA_TOKO'];
				$toko->alamat_toko=$row['ALAMAT_TOKO'];
				$toko->telepon_toko=$row['TELEPON_TOKO'];
				$toko->email_toko=$row['EMAIL_TOKO'];
				$list_toko[] = $toko;
			}
		}	
		return $list_toko;
	}
	
	function edit(Toko $toko)
	{
		$sql="
		update 
		toko
		set 
		NAMA_TOKO='$toko->nama_toko',
		ALAMAT_TOKO='$toko->alamat_toko',
		TELEPON_TOKO='$toko->telepon_toko',
		EMAIL_TOKO='$toko->email_toko'
		where ID_TOKO='$toko->id_toko'
		";
		$query=mysql_query($sql);
	}
	
	function add(Toko $toko)
	{
		$sql="insert 
		into 
		toko
		values(
		'$toko->nama_toko',
		'$toko->alamat_toko',
		'$toko->telepon_toko', 
		'$toko->email_toko')
		";
		$query=mysql_query($sql);
	}
	
	function delete(Toko $toko)
	{
		$sql="drop 
		into 
		toko
		values(
		'$toko->id_toko')
		";
		$query=mysql_query($sql);
		
	}

}


class Toko{
	var $nama_toko;
	var $id_toko;
	var $alamat_toko;
	var $telepon_toko;
	var $email_toko;
}