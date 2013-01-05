<?php

class Orders_Dao
{

	function __construct()
	{
	}
	
	function get_all()
	{
		$sql="
		select *
		from
		orders
		";
		
		$list_orders = array();
		
		$data = mysql_query($sql);
		if($data){
			while($row = mysql_fetch_assoc($data))
			{
			
				$orders = new Orders();
				
				$orders->id = $row['ID'];
				$orders->id_order = $row['ID_ORDER'];
				$orders->status_order = $row['STATUS_ORDER'];
				$orders->tanggal_order = $row['TANGGAL_ORDER'];
				$list_orders[] = $orders;
			}
		}	
		return $list_orders;
	}
	
	
	function get_id($id)
	{
		$sql="
		select *
		from
		orders
		WHERE
		ID_ORDER = '".$id."'
		";
		
		$orders = false;		
		$data = mysql_query($sql);
		if($data)
		{
			while($row = mysql_fetch_assoc($data))
			{
			
				$orders = new Orders();
				
				$orders->id_order = $row['ID_ORDER'];
				$orders->status_order = $row['STATUS_ORDER'];
				$orders->tanggal_order = $row['TANGGAL_ORDER'];
				$list_orders[] = $orders;

			}
		}	
		return $list_orders;
	}
	
	function get_idmember($id)
	{
		$sql="
		select *
		from
		orders
		WHERE
		ID = '".$id."'
		";
		
		$list_orders = array();
		
		$data = mysql_query($sql);
		if($data)
		{
			while($row = mysql_fetch_assoc($data))
			{
			
				$orders = new Orders();
				
				$orders->id = $row['ID'];
				$orders->id_order = $row['ID_ORDER'];
				$orders->status_order = $row['STATUS_ORDER'];
				$orders->tanggal_order = $row['TANGGAL_ORDER'];
				$list_orders[] = $orders;
			}
		}	
		return $list_orders;
	}
	
	function edit(Orders $orders)
	{
		$sql="
		update 
		orders
		set 
		STATUS_ORDER='$orders->status_order',
		TANGGAL_ORDER='$orders->tanggal_order'
		where ID_ORDER='$orders->id_order'
		";
		$query=mysql_query($sql);
	}
	 
	function add(Orders $orders)
	{
		$sql="insert 
		into 
		orders(STATUS_ORDER, TANGGAL_ORDER)
		values(
		'$orders->status_order',
		'$orders->tanggal_order')
		";
		$query=mysql_query($sql);
	}
}


class Orders
{
	var $id_order;
	var $id;
	var $tanggal_order;
	var $status_order;
}