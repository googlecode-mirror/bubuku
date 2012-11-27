<?php

class Produk_Dao
{

	function __construct()
	{
	}
	
	function get_all()
	{
		$sql="
		select *
		from
		produk
		";
		
		$list_produk = array();
		
		$data = mysql_query($sql);
		if($data){
			while($row = mysql_fetch_assoc($data))
			{
			
				$produk = new Produk();
				
				$produk->id_produk=$row['ID_PRODUK'];
				$produk->id_kategori=$row['ID_KATEGORI'];
				$produk->jumlah=$row['JUMLAH'];
				$produk->nama_produk=$row['NAMA_PRODUK'];
				$produk->harga=$row['HARGA'];
				$produk->foto=$row['FOTO'];
				$produk->penerbit=$row['PENERBIT'];
				$produk->grade=$row['GRADE'];
				$produk->tahun_cetak=$row['TAHUN_CETAK'];
				$list_produk[] = $produk;
			}
		}	
		return $list_produk;
	}
	
	
	function get_id($id)
	{
		$sql="
		select *
		from
		produk
		WHERE
		ID_PRODUK = '".$id."'
		";
		
		$produk=false;		
		$data = mysql_query($sql);
		if($data)
		{
			while($row = mysql_fetch_assoc($data))
			{
			
				$produk = new Produk();
				
				$produk->id_produk=$row['ID_PRODUK'];
				$produk->id_kategori=$row['ID_KATEGORI'];
				$produk->jumlah=$row['JUMLAH'];
				$produk->nama_produk=$row['NAMA_PRODUK'];
				$produk->harga=$row['HARGA'];
				$produk->foto=$row['FOTO'];
				$produk->penerbit=$row['PENERBIT'];
				$produk->grade=$row['GRADE'];
				$produk->tahun_cetak=$row['TAHUN_CETAK'];
			}
		}	
		return $produk;
	}
	
	function get_idmember($id)
	{
		$sql="
		select *
		from
		produk
		WHERE
		ID = '".$id."'
		";
		
		$list_produk = array();
		
		$data = mysql_query($sql);
		if($data)
		{
			while($row = mysql_fetch_assoc($data))
			{
			
				$produk = new Produk();
				
				$produk->id_produk=$row['ID_PRODUK'];
				$produk->id_kategori=$row['ID_KATEGORI'];
				$produk->jumlah=$row['JUMLAH'];
				$produk->nama_produk=$row['NAMA_PRODUK'];
				$produk->harga=$row['HARGA'];
				$produk->foto=$row['FOTO'];
				$produk->penerbit=$row['PENERBIT'];
				$produk->grade=$row['GRADE'];
				$produk->tahun_cetak=$row['TAHUN_CETAK'];
				$produk->id=$row['ID'];
				$list_produk[] = $produk;
			}
		}	
		return $list_produk;
	}
	
	function edit(Produk $produk)
	{
		$sql="
		update 
		produk
		set 
		NAMA_PRODUK='$produk->nama_produk',
		JUMLAH='$produk->jumlah',
		HARGA='$produk->harga',
		ID_KATEGORI='$produk->id_kategori',
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


class Produk{
	var $id_produk;
	var $nama_produk;
	var $id_kategori;
	var $penerbit;
	var $grade;
	var $tahun_cetak;
	var $harga;
	var $jumlah;
	var $foto;
}