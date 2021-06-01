<?php

class database{
	
	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "bpwl";
	var $con;

	function __construct(){
	$this->con= mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
	}

	function tampil_data(){
	$data = mysqli_query($this->con,"select * from registrasi");
	while($d = mysqli_fetch_array($data)){
	$hasil[] = $d;
	}
	return $hasil;
	}
	function input($prodi,$nama,$email){
	mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db),"insert into registrasi values('','$prodi','$nama','$email')");
	}
	function hapus($id){
	mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db), "delete from registrasi where id='$id'");
	}
	function edit($id){
	$data = mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db), "select * from registrasi where id='$id'");
	while($d = mysqli_fetch_array($data)){
	$hasil[] = $d;
	}
	return $hasil;
	}
	function update($id,$prodi,$nama,$email){
	mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db), "update registrasi set prodi='$prodi', nama='$nama', email='$email' where id='$id'");
	}
}
?>