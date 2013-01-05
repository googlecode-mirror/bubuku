<?php


class Member_Dao
{

	function __construct()
	{
	}
	
	function get_all()
	{
		$sql="
		select *
		from
		member
		";
		
		$list_member = array();
		
		$data = mysql_query($sql);
		if($data)
		{
			while($row = mysql_fetch_assoc($data))
			{
			
				$member = new Member();
				$member->id_member = $row['ID_MEMBER'];
				$member->id_user = $row['ID_USER'];
				$member->nama= $row['NAMA'];
				$member->alamat = $row['ALAMAT'];
				$member->telepon = $row['TELEPON'];
				$member->agama = $row['AGAMA'];
				$member->jenis_kelamin = $row['JENIS_KELAMIN'];
				$member->tanggal_daftar = $row['TANGGAL_DAFTAR'];
				
				$list_member[] = $member;
			}
		}	
		return $list_member;
	}
	
	function get_id($id)
	{
		$sql="
		select *
		from
		member
		WHERE
		ID = '".$id."'
		";
		
		$member=false;		
		$data = mysql_query($sql);
		if($data)
		{
			while($row = mysql_fetch_assoc($data))
			{
				
				$member = new Member();
				$member->id_member = $row['ID_MEMBER'];
				$member->id_user = $row['ID_USER'];
				$member->nama= $row['NAMA'];
				$member->alamat = $row['ALAMAT'];
				$member->telepon = $row['TELEPON'];
				$member->agama = $row['AGAMA'];
				$member->jenis_kelamin = $row['JENIS_KELAMIN'];
				$member->tanggal_daftar = $row['TANGGAL_DAFTAR'];
			}
		}	
		return $member;
	}
	
	function add(Member $member)
	{
		$sql="insert 
		into 
		member(ID_USER,NAMA,ALAMAT,TELEPON,AGAMA,JENIS_KELAMIN,TANGGAL_DAFTAR)
		values(
		'$member->id_user',
		'$member->nama',
		'$member->alamat', 
		'$member->telepon', 
		'$member->agama',
		'$member->jenis_kelamin',
		'$member->tanggal_daftar')
		";
		$query=mysql_query($sql);
	}
	
	function edit(Member $member)
	{
		$sql="
		update 
		member 
		set 
		NAMA='$member->nama',
		ALAMAT='$member->alamat',
		TELEPON='$member->telepon',
		AGAMA='$member->agama',
		JENIS_KELAMIN='$member->jenis_kelamin'
		where ID_MEMBER='$member->id_member'
		";
		$query=mysql_query($sql);
	}
	
	function delete(Member $member)
	{
		$sql="drop 
		into 
		member
		values(
		'$member->id_member')
		";
		$query=mysql_query($sql);
	}
	
}

class Member
{
	var $id_member;
	var $id_user;
	var $nama;
	var $alamat;
	var $telepon;
	var $agama;
	var $jenis_kelamin;
	var $tanggal_daftar;

}