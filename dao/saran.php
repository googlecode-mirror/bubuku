<?php


class Saran_Dao{

	function __construct()
	{
	}
	
	function get_all()
	{
		$sql="
		select *
		from
		saran
		";
		
		$list_saran = array();
		
		$data = mysql_query($sql);
		if($data){
			while($row = mysql_fetch_assoc($data))
			{
			
				$saran = new Saran();
				$saran->id_saran = $row['ID_SARAN'];
				$saran->id = $row['ID'];				
				$saran->saran = $row['SARAN'];
				$saran->tanggal_saran = $row['TANGGAL_SARAN'];
				$list_saran[] = $saran;
			}
		}	
		return $list_saran;
	}
	
	function get_id($id_saran)
	{
		$sql="
		select *
		from
		saran
		WHERE
		ID_SARAN = '".$id_saran."'
		";
		
		$saran = false;		
		$data = mysql_query($sql);
		if($data)
		{
			while($row = mysql_fetch_assoc($data))
			{
				
				$saran = new Saran();
				$saran->id_saran = $row['ID_SARAN'];
				$saran->id = $row['ID'];
				$saran->saran = $row['SARAN'];
				$saran->tanggal_saran = $row['TANGGAL_SARAN'];
			}
		}	
		return $saran;
	}

		function add(Saran $saran)
	{
		$sql="insert 
		into 
		saran
		values(
		'$saran->id_saran',
		'$saran->saran',
		'$saran->tanggal_saran')
		";
		$query=mysql_query($sql);
	}
}

class Saran
{
	var $id_saran;
	var $id;
	var $saran;
	var $tanggal_saran;

}