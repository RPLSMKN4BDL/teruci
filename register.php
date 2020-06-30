<form method="POST">
	<label>Nama Lengkap</label><br>
	<input type="text" name="nama_lengkap" placeholder="Nama Lengkap" required><br>
	<label>Nama Panggilan</label><br>
	<input type="text" name="nama_panggilan" placeholder="Nama Panggilan" required><br>
	<label>Tempat Lahir</label><br>
	<input type="text" name="tempatlahir" placeholder="Tempat Lahir" required><br>
	<label>Tanggal Lahir</label><br>
	<input type="date" name="tgl_lahir" placeholder="Tanggal Lahir" required><br>
	<label>Jenis Kelamin</label><br>
	<select name="jenis_kelamin" placeholder="Jenis Kelamin" required>
		<option value="L">Laki-Laki</option>
		<option value="P">Perempuan</option>
	</select><Br>
	<label>Nomor Handphone</label><br>
	<input type="number" name="no_hp" placeholder="08xx" required><br>
	<label>Email</label><br>
	<input type="email" name="Email" placeholder="example@gmail.com" required><br>
	<label>Alamat rumah</label><br>
	<input type="text" name="alamat_rumah" placeholder="Alamat" required><br>
	<label>Kabupaten/Kota</label><br>
	<input type="text" name="kab_kota" placeholder="Kabupaten/kota" required><br>
	<label>Plat Nomor</label><br>
	<input type="text" name="plat" placeholder="plat nomor" required><br>
	<input type="submit" name="submit">
</form>

<?php
include 'admin/core/db.php';
if (isset($_POST['submit'])) {
	$nama_lengkap = mysqli_real_escape_string($config,$_POST['nama_lengkap']);
	$nama_panggilan = mysqli_real_escape_string($config,$_POST['nama_panggilan']);
	$tempatlahir = mysqli_real_escape_string($config,$_POST['tempatlahir']);
	$tgl_lahir = mysqli_real_escape_string($config,$_POST['tgl_lahir']);
	$jenis_kelamin = mysqli_real_escape_string($config,$_POST['jenis_kelamin']);
	$no_hp = mysqli_real_escape_string($config,$_POST['no_hp']);
	$Email = mysqli_real_escape_string($config,$_POST['Email']);
	$alamat_rumah = mysqli_real_escape_string($config,$_POST['alamat_rumah']);
	$kab_kota = mysqli_real_escape_string($config,$_POST['kab_kota']);
	$plat = mysqli_real_escape_string($config,$_POST['plat']);
	$id = '1'.rand(000,999);
	$query = "INSERT INTO tb_member(id_teruci,nama_lengkap,panggilan,tempat_lahir,tgl_lahir,jenis_kelamin,no_hp,email,alamat_rumah,kab_kota,no_pol) VALUES ('$id','$nama_lengkap','$nama_panggilan','$tempatlahir','$tgl_lahir','$jenis_kelamin','$no_hp','$Email','$alamat_rumah','$kab_kota','$plat')";
  if(mysqli_query($config, $query) ) {
  	echo "Berhasil Registrasi";
  }else{ 
  	echo "Gagal Registrasi";
  }
}


