<?php

class Wishlist_Dao
{

	function __construct()
	{
	}
	
	function get_all()
	{
		$sql="
		select *
		from
		wishlist
		";
		
		$list_wishlist = array();
		
		$data = mysql_query($sql);
		if($data){
			while($row = mysql_fetch_assoc($data))
			{
			
				$wishlist = new Wishlist();
				
				$wishlist->id_wishlist = $row['ID_WISHLIST'];
				$wishlist->batas_waktu = $row['BATAS_WAKTU'];
				$wishlist->deskripsi_wishlist = $row['DESKRIPSI_WISHLIST'];
				$wishlist->id = $row['ID'];
				$wishlist->nama_wishlist = $row['NAMA_WISHLIST'];
				$wishlist->penerbit_wishlist = $row['PENERBIT_WISHLIST'];
				$wishlist->tahun_cetak_wishlist = $row['TAHUN_CETAK_WISHLIST'];
				$list_wishlist[] = $wishlist;
			}
		}	
		return $list_wishlist;
	}
	
	
	function get_id($id)
	{
		$sql="
		select *
		from
		wishlist
		WHERE
		ID_WISHLIST = '".$id."'
		";
		
		$wishlist = false;		
		$data = mysql_query($sql);
		if($data)
		{
			while($row = mysql_fetch_assoc($data))
			{
			
				$wishlist = new Wishlist();
				
				$wishlist->id_wishlist = $row['ID_WISHLIST'];
				$wishlist->batas_waktu = $row['BATAS_WAKTU'];
				$wishlist->deskripsi_wishlist = $row['DESKRIPSI_WISHLIST'];
				$wishlist->nama_wishlist = $row['NAMA_WISHLIST'];
				$wishlist->penerbit_wishlist = $row['PENERBIT_WISHLIST'];
				$wishlist->tahun_cetak_wishlist = $row['TAHUN_CETAK_WISHLIST'];

			}
		}	
		return $wishlist;
	}
	
	function get_idmember($id)
	{
		$sql="
		select *
		from
		wishlist
		WHERE
		ID = '".$id."'
		";
		
		$list_wishlist = array();
		
		$data = mysql_query($sql);
		if($data)
		{
			while($row = mysql_fetch_assoc($data))
			{
			
				$wishlist = new Wishlist();
				
				$wishlist->id_wishlist = $row['ID_WISHLIST'];
				$wishlist->batas_waktu = $row['BATAS_WAKTU'];
				$wishlist->deskripsi_wishlist = $row['DESKRIPSI_WISHLIST'];
				$wishlist->id = $row['ID'];
				$wishlist->nama_wishlist = $row['NAMA_WISHLIST'];
				$wishlist->penerbit_wishlist = $row['PENERBIT_WISHLIST'];
				$wishlist->tahun_cetak_wishlist = $row['TAHUN_CETAK_WISHLIST'];
				$list_wishlist[] = $wishlist;
			}
		}	
		return $list_wishlist;
	}
	
	function edit(Wishlist $wishlist)
	{
		$sql="
		update 
		wishlist
		set 
		NAMA_WISHLIST='$wishlist->nama_wishlist',
		BATAS_WAKTU='$wishlist->batas_waktu',
		DESKRIPSI_WISHLIST='$wishlist->deskripsi_wishlist',
		PENERBIT_WISHLIST='$wishlist->penerbit_wishlist',
		TAHUN_CETAK_WISHLIST='$wishlist->tahun_cetak_wishlist'
		where ID_WISHLIST='$wishlist->id_wishlist'
		";
		$query=mysql_query($sql);
	}
	 
	function add(Wishlist $wishlist)
	{
		$sql="insert 
		into 
		wishlist(ID, NAMA_WISHLIST, PENERBIT_WISHLIST, TAHUN_CETAK_WISHLIST, DESKRIPSI_WISHLIST, BATAS_WAKTU)
		values(
		'$wishlist->id',
		'$wishlist->nama_wishlist',
		'$wishlist->penerbit_wishlist',
		'$wishlist->tahun_cetak_wishlist',
		'$wishlist->deskripsi_wishlist',
		'$wishlist->batas_waktu')
		";
		$query=mysql_query($sql);
	}
	
	function delete(Wishlist $wishlist)
	{
		$sql="drop 
		into 
		wishlist
		values(
		'$wishlist->id_wishlist)
		";
		$query=mysql_query($sql);
		
	}

}


class Wishlist{
	var $id_wishlist;
	var $id;
	var $nama_wishlist;
	var $penerbit_wishlist;
	var $tahun_cetak_wishlist;
	var $deskripsi_wishlist;
	var $batas_waktu;
}