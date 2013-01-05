<?php

class Detail_order_Dao
{

	function __construct()
	{
	}
	
	function get_all()
	{
		$sql="
		select *
		from
		detail_order
		";
		
		$list_detail_order = array();
		
		$data = mysql_query($sql);
		if($data){
			while($row = mysql_fetch_assoc($data))
			{
			
				$detail_order = new Detail_order();
				
				$detail_order->id_detail_order = $row['ID_DETAIL_ORDER'];
				$detail_order->id_order = $row['ID_ORDER'];
				$detail_order->id_produk = $row['ID_PRODUK'];
				$detail_order->jumlah_beli = $row['JUMLAH_BELI'];
				$detail_order->total_harga = $row['TOTAL_HARGA'];
				$list_detail_order[] = $detail_order;
			}
		}	
		return $list_detail_order;
	}
	
	
	function get_id($id)
	{
		$sql="
		select *
		from
		detail_order
		WHERE
		ID_DETAIL_ORDER = '".$id."'
		";
		
		$detail_order = false;		
		$data = mysql_query($sql);
		if($data)
		{
			while($row = mysql_fetch_assoc($data))
			{
			
				$detail_order = new Detail_order();
				
				$detail_order->id_detail_order = $row['ID_DETAIL_ORDER'];
				$detail_order->id_order = $row['ID_ORDER'];
				$detail_order->id_produk = $row['ID_PRODUK'];
				$detail_order->jumlah_beli = $row['JUMLAH_BELI'];
				$detail_order->total_harga = $row['TOTAL_HARGA'];
				$list_detail_order[] = $detail_order;

			}
		}	
		return $list_detail_order;
	}
	
	function get_idmember($id)
	{
		$sql="
		select *
		from
		detail_order
		WHERE
		ID = '".$id."'
		";
		
		$list_orders = array();
		
		$data = mysql_query($sql);
		if($data)
		{
			while($row = mysql_fetch_assoc($data))
			{
			
				$detail_order = new Detail_order();
				
				$detail_order->id_detail_order = $row['ID_DETAIL_ORDER'];
				$detail_order->id_order = $row['ID_ORDER'];
				$detail_order->id_produk = $row['ID_PRODUK'];
				$detail_order->jumlah_beli = $row['JUMLAH_BELI'];
				$detail_order->total_harga = $row['TOTAL_HARGA'];
				$list_detail_order[] = $detail_order;

			}
		}	
		return $list_detail_order;
	}
	
	function edit(Detail_order $detail_order)
	{
		$sql="
		update 
		detail_order
		set 
		ID_PRODUK='$detail_order->id_produk',
		JUMLAH_BELI='$detail_order->jumlah_beli',
		where ID_DETAIL_ORDER='$detail_order->id_detail_order'
		";
		$query=mysql_query($sql);
	}
	 
	function add(Detail_order $detail_order)
	{
		$sql="insert 
		into 
		detail_order(ID_PRODUK, JUMLAH_BELI, TOTAL_HARGA)
		values(
		'$detail_order->id_produk',
		'$detail_order->jumlah_beli',
		'$detail_order->total_harga'
		";
		$query=mysql_query($sql);
	}
}


class Detail_order
{
	var $id_detail_order;
	var $id_produk;
	var $id_order;
	var $jumlah_beli;
	var $total_harga;
}