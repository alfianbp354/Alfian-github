<?php 
include 'database.php';
$db = new database();
 
$aksi = $_GET['aksi'];
 if($aksi == "tambah"){
 	$db->input($_POST['prodi'], $_POST['nama'], $_POST['email']);
 	header("location:tampil.php");
 }else if($aksi == "hapus"){ 	
 	$db->hapus($_GET['id']);
	header("location:tampil.php");
 }else if($aksi == "update"){
 	$db->update($_POST['id'],$_POST['prodi'],$_POST['nama'],$_POST['email']);
 	header("location:tampil.php");
 }
?>