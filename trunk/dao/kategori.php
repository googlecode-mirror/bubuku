<?php


class Kategori_Dao{

	function __construct()
	{
	}
	
	function get_all()
	{
		$sql="
		select *
		from
		kategori
		";
		
		$list_kategori = array();
		
		$data = mysql_query($sql);
		if($data){
			while($row = mysql_fetch_assoc($data))
			{
			
				$kategori = new Kategori();
				$kategori->id_kategori = $row['ID_KATEGORI'];
				$kategori->kategori= $row['KATEGORI'];				
				$list_kategori[] = $kategori;
			}
		}	
		return $list_kategori;
	}
	
	function get_id($id_kategori)
	{
		$sql="
		select *
		from
		kategori
		WHERE
		ID_KATEGORI = '".$id_kategori."'
		";
		
		$kategori=false;		
		$data = mysql_query($sql);
		if($data)
		{
			while($row = mysql_fetch_assoc($data))
			{
				
				$kategori = new Kategori();
				$kategori->id_kateogri = $row['ID_KATEGORI'];
				$kategori->kategori = $row['KATEGORI'];
			}
		}	
		return $kategori;
	}
	

}

class Kategori{
	var $id_kategori;
	var $kategori;

}