<?php

class user{

private $id_user;
private $nama_user;
private $pass_user;


	public function __construct($id_user,$nama_user,$pass_user){
		$this->user_id=$id_user;
		$this->username=$nama_user;
		$this->password=$pass_user;
	}
	
	public function setId_user($id_user){
		$this->user_id=$id_user;
	}
	
	public function setNama_user($nama_user){
		$this->username=$nama_user;
	}
	
	public function setPassw_user($Pass_user){
		$this->password=$pass_user;
	}
	
	public function getId_user(){
		return $this->id_user;
	}
	
	public function getNama_user(){
		return $this->nama_user;
	}
	public function getPass_user(){
		return $this->pass_user;
	}
	}