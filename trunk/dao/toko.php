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
		NAMA_PRODUK='$produk->nama_produk',
		JUMLAH='$produk->jumlah',
		HARGA='$produk->harga',
		ID_KATEGORI='$produk->id_kategori',
		ID_TOKO='$produk->id_toko',
		GRADE='$produk->grade',
		FOTO='$produk->foto',
		PENERBIT='$produk->penerbit',
		TAHUN_CETAK='$produk->tahun_cetak'
		where ID_PRODUK='$produk->id_produk'
		";
		$query=mysql_query($sql);
	}
	
	function add(Produk $produk)
	{
		$sql="insert 
		into 
		produk
		values(
		'$produk->foto',
		'$produk->grade',
		'$produk->harga', 
		'$produk->id_kategori',
		'$produk->id_toko',
		'$produk->jumlah',
		'$produk->nama_produk',
		'$produk->penerbit',
		'$produk->tahun_cetak')
		";
		$query=mysql_query($sql);
	}
	
	function delete(Produk $produk)
	{
		$sql="drop 
		into 
		produk
		values(
		'$produk->id_produk)
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