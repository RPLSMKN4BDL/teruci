<?php
include 'Core/init.php';
if(!isset($_SESSION['username']) ){
   header('Location: login.php ');
}
$id = $_GET['ID'];
	$cek = mysqli_query($config, "SELECT * FROM tb_member WHERE id_teruci='$id'");
	if(mysqli_num_rows($cek) == 1){
	$fetch = mysqli_fetch_array($cek);
	echo "ID Member : ".$fetch['id_teruci'].'<br>';
	echo "Nama : ".$fetch['nama_lengkap'];
	 }else{ 
  	echo "tidak ditemukan";
  }
