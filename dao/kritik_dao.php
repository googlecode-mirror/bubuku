<?php


class Kritik_Dao{

	function __construct()
	{
	}
	
	function get_all()
	{
		$sql="
		select *
		from
		kritik
		";
		
		$list_kritik = array();
		
		$data = mysql_query($sql);
		if($data){
			while($row = mysql_fetch_assoc($data))
			{
			
				$kritik = new Saran();
				$kritik->id_kritik = $row['ID_KRITIK'];
				$kritik->id = $row['ID'];				
				$kritik->kritik = $row['KRITIK'];
				$kritik->tanggal_kritik = $row['TANGGAL_KRITIK'];
				$list_kritik[] = $kritik;
			}
		}	
		return $list_kritik;
	}
	
	function get_id($id_kritik)
	{
		$sql="
		select *
		from
		kritik
		WHERE
		ID_KRITIK = '".$id_kritik."'
		";
		
		$saran = false;		
		$data = mysql_query($sql);
		if($data)
		{
			while($row = mysql_fetch_assoc($data))
			{
				
				$kritik = new Kritik();
				$kritik->id_kritik = $row['ID_KRITIK'];
				$kritik->id = $row['ID'];
				$kritik->kritik = $row['KRITIK'];
				$kritik->tanggal_kritik = $row['TANGGAL_KRITIK'];
			}
		}	
		return $kritik;
	}

		function add(Kritik $kritik)
	{
		$sql="insert 
		into 
		kritik(ID_KRITIK, KRITIK, TANGGAL_KRITIK)
		values(
		'$kritik->id_kritik',
		'$kritik->kritik',
		'$kritik->tanggal_kritik')
		";
		$query=mysql_query($sql);
	}
}

class Kritik
{
	var $id_kritik;
	var $id;
	var $kritik;
	var $tanggal_kritik;

}