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
	
	function edit(Produk $produk){
	}
	
	function add(Produk $produk){
	}
	
	function delete(Produk $produk){
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
	var $foto;
}