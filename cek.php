<?php
include 'admin/core/db.php';
if (isset($_POST['submit'])) {
	$tgl_lahir = mysqli_real_escape_string($config,$_POST['tgl_lahir']);
	$no_hp = mysqli_real_escape_string($config,$_POST['no_hp']);
	$cek = mysqli_query($config, "SELECT * FROM tb_member WHERE tgl_lahir = '$tgl_lahir' AND no_hp='$no_hp'");
	if(mysqli_num_rows($cek) == 1){
	$fetch = mysqli_fetch_array($cek);
	echo "ID Member : ".$fetch['id_teruci'].'<br>';
	echo "Nama : ".$fetch['nama_lengkap'];
	 }else{ 
  	echo "tidak ditemukan";
  }
}