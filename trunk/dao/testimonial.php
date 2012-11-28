<?php


class Testi_Dao{

	function __construct()
	{
	}
	
	function get_all()
	{
		$sql="
		select *
		from
		testimonial
		";
		
		$list_testimonial = array();
		
		$data = mysql_query($sql);
		if($data){
			while($row = mysql_fetch_assoc($data))
			{
			
				$testimonial = new Testimonial();
				$testimonial->id_testi = $row['ID_TESTI'];
				$testimonial->id = $row['ID'];				
				$testimonial->testi = $row['TESTI'];
				$testimonial->tanggal_testi = $row['TANGGAL_TESTI'];
				$testimonial->status_testi = $row['STATUS_TESTI'];
				$list_testimonial[] = $testimonial;
			}
		}	
		return $list_testimonial;
	}
	
	function get_id($id_testi)
	{
		$sql="
		select *
		from
		testimonial
		WHERE
		ID_TESTI = '".$id_testi."'
		";
		
		$testimonial = false;		
		$data = mysql_query($sql);
		if($data)
		{
			while($row = mysql_fetch_assoc($data))
			{
				
				$testimonial = new Testimonial();
				$testimonial->id_testi = $row['ID_TESTI'];
				$testimonial->id = $row['ID'];
				$testimonial->status_testi = $row['STATUS_TESTI'];
				$testimonial->tanggal_testi = $row['TANGGAL_TESTI'];
				$testimonial->testi = $row['TESTI'];
			}
		}	
		return $testimonial;
	}

		function add(Testimonial $testimonial)
	{
		$sql="insert 
		into 
		testimonial
		values(
		'$testimonial->id_testi',
		'$testimonial->status_testi',
		'$testimonial->tanggal_testi',
		'$testimonial->testi')
		";
		$query=mysql_query($sql);
	}

	function edit(Testimonial $testimonial)
	{
		$sql="
		update 
		testimonial
		set 
		TESTI='$testimonial->testi',
		TANGGAL_TESTI='$testimonial->status_testi',
		STATUS_TESTI='$testimonial->status_testi'
		where ID_TESTI='$testimonial->id_testi'
		";
		$query=mysql_query($sql);
	}

}

class Testimonial
{
	var $id_testi;
	var $id;
	var $testi;
	var $tanggal_testi;
	var $status_testi;

}