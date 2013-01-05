<?php

class Jual_buku_Dao
{

	function __construct()
	{
	}
	
	function get_all()
	{
		$sql="
		select *
		from
		jual_buku
		";
		
		$list_jual_buku = array();
		
		$data = mysql_query($sql);
		if($data){
			while($row = mysql_fetch_assoc($data))
			{
			
				$jual_buku = new Jual_buku();
				
				$jual_buku->id_jual_buku=$row['ID_JUAL_BUKU'];
				$jual_buku->id=$row['ID'];
				$jual_buku->judul_buku=$row['JUDUL_BUKU'];
				$jual_buku->tahun_cetak_buku=$row['TAHUN_CETAK_BUKU'];
				$jual_buku->penerbit_buku=$row['PENERBIT_BUKU'];
				$jual_buku->harga_buku=$row['HARGA_BUKU'];
				$jual_buku->foto_buku=$row['FOTO_BUKU'];
				$list_jual_buku[] = $jual_buku;
			}
		}	
		return $list_jual_buku;
	}
	
	
	function get_id($id)
	{
		$sql="
		select *
		from
		jual_buku
		WHERE
		ID_JUAL_BUKU = '".$id."'
		";
		
		$jual_buku=false;		
		$data = mysql_query($sql);
		if($data)
		{
			while($row = mysql_fetch_assoc($data))
			{
			
				$jual_buku = new Jual_buku();
				
				$jual_buku->id_jual_buku=$row['ID_JUAL_BUKU'];
				$jual_buku->id=$row['ID'];
				$jual_buku->judul_buku=$row['JUDUL_BUKU'];
				$jual_buku->tahun_cetak_buku=$row['TAHUN_CETAK_BUKU'];
				$jual_buku->penerbit_buku=$row['PENERBIT_BUKU'];
				$jual_buku->harga_buku=$row['HARGA_BUKU'];
				$jual_buku->foto_buku=$row['FOTO_BUKU'];
			}
		}	
		return $jual_buku;
	}
	
	function get_idmember($id)
	{
		$sql="
		select *
		from
		jual_buku
		WHERE
		ID = '".$id."'
		";
		
		$list_jual_buku = array();
		
		$data = mysql_query($sql);
		if($data)
		{
			while($row = mysql_fetch_assoc($data))
			{
			
				$jual_buku = new Jual_buku();
				
				$jual_buku->id_jual_buku=$row['ID_JUAL_BUKU'];
				$jual_buku->id=$row['ID'];
				$jual_buku->judul_buku=$row['JUDUL_BUKU'];
				$jual_buku->tahun_cetak_buku=$row['TAHUN_CETAK_BUKU'];
				$jual_buku->penerbit_buku=$row['PENERBIT_BUKU'];
				$jual_buku->harga_buku=$row['HARGA_BUKU'];
				$jual_buku->foto_buku=$row['FOTO_BUKU'];
				$list_jual_buku[] = $jual_buku;
			}
		}	
		return $list_jual_buku;
	}
	
	function add(Jual_buku $jual_buku)
	{
		$sql="insert 
		into 
		jual_buku(ID, JUDUL_BUKU, PENERBIT_BUKU, TAHUN_CETAK_BUKU, HARGA_BUKU, FOTO_BUKU)
		values(
		'$jual_buku->id',
		'$jual_buku->judul_buku',
		'$jual_buku->penerbit_buku',
		'$jual_buku->tahun_cetak_buku',
		'$jual_buku->harga_buku',
		'$jual_buku->foto_buku')
		";
		$query=mysql_query($sql);
	}
	
	function delete(Jual_buku $jual_buku)
	{
		$sql="drop 
		into 
		jual_buku
		values(
		'$jual_buku->id_jual_buku')
		";
		$query=mysql_query($sql);
		
	}

}


class Jual_buku{
	var $id_jual_buku;
	var $id;
	var $judul_buku;
	var $penerbit_buku;
	var $tahun_cetak_buku;
	var $harga_buku;
	var $foto_buku;
}