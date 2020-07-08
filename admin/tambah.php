<?php
include 'Core/init.php';
if(!isset($_SESSION['username']) ){
   header('Location: login.php ');
}
?>

<form method="POST">
	<label>ID Teruci</label><br>
	<input type="text" name="id" placeholder="ID Teruci" required><br>
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
	<input type="text" name="alamat_rumah" placeholder="Alamat" required style="height: 145px;width: 245px;"><br>
	<label>Kabupaten/Kota</label><br>
	<input type="text" name="kab_kota" placeholder="Kabupaten/kota" required><br>
	<label>Jenis Kendaraan</label><br>
	<select name="type_mobil" size="10">

<option value="Daihatsu - Terios TS">Daihatsu - Terios TS</option>

<option value="Daihatsu - Terios TS Xtra">Daihatsu - Terios TS Xtra</option>

<option value="Daihatsu - Terios TX/MT">Daihatsu - Terios TX/MT</option>

<option value="Daihatsu - Terios TX/AT">Daihatsu - Terios TX/AT</option>

<option value="Daihatsu - Terios TX Elegant/MT">Daihatsu - Terios TX Elegant/MT</option>

<option value="Daihatsu - Terios TX Elegant/AT">Daihatsu - Terios TX Elegant/AT</option>

<option value="Daihatsu - Terios TX Advendture/MT">Daihatsu - Terios TX Advendture/MT</option>

<option value="Daihatsu - Terios TX Advendture/AT">Daihatsu - Terios TX Advendture/AT</option>

<option value="Daihatsu - Terios TX Limited">Daihatsu - Terios TX Limited</option>

<option value="Daihatsu - Terios X MT">Daihatsu - Terios X MT</option>

<option value="Daihatsu - Terios X MT EXTRA">Daihatsu - Terios X MT EXTRA</option>

<option value="Daihatsu - Terios X AT EXTRA">Daihatsu - Terios X AT EXTRA</option>

<option value="Daihatsu - Terios R MT">Daihatsu - Terios R MT</option>

<option value="Daihatsu - Terios R MT CUSTOM">Daihatsu - Terios R MT CUSTOM</option>

<option value="Daihatsu - Terios R MT ADVENTURE">Daihatsu - Terios R MT ADVENTURE</option>

<option value="Daihatsu - Terios R AT">Daihatsu - Terios R AT</option>

<option value="Daihatsu - Terios R AT CUSTOM">Daihatsu - Terios R AT CUSTOM</option>

<option value="Daihatsu - Terios R AT ADVENTURE">Daihatsu - Terios R AT ADVENTURE</option>

<option value="Daihatsu - All New Terios X">Daihatsu - All New Terios X</option>

<option value="Daihatsu - All New Terios X Deluxe">Daihatsu - All New Terios X Deluxe</option>

<option value="Daihatsu - All New Terios R">Daihatsu - All New Terios R</option>

<option value="Daihatsu - All New Terios R Deluxe">Daihatsu - All New Terios R Deluxe</option>

<option value="Toyota - Rush E">Toyota - Rush E</option>

<option value="Toyota - Rush G">Toyota - Rush G</option>

<option value="Toyota - Rush S/MT">Toyota - Rush S/MT</option>

<option value="Toyota - Rush S/AT">Toyota - Rush S/AT</option>

<option value="Toyota - Rush G M/T">Toyota - Rush G M/T</option>

<option value="Toyota - Rush G A/T">Toyota - Rush G A/T</option>

<option value="Toyota - Rush S M/T TRD SPORTIVO">Toyota - Rush S M/T TRD SPORTIVO</option>

<option value="Toyota - Rush S M/T TRD SPORTIVO ULTIMO">Toyota - Rush S M/T TRD SPORTIVO ULTIMO</option>

<option value="Toyota - Rush S A/T TRD SPORTIVO">Toyota - Rush S A/T TRD SPORTIVO</option>

<option value="Toyota - Rush S A/T TRD SPORTIVO ULTIMO">Toyota - Rush S A/T TRD SPORTIVO ULTIMO</option>

<option value="Toyota - All New Rush G M/T">Toyota - All New Rush G M/T</option>

<option value="Toyota - All New Rush G A/T">Toyota - All New Rush G A/T</option>

<option value="Toyota - All New Rush TRD SPORTIVO M/T">Toyota - All New Rush TRD SPORTIVO M/T</option>

<option value="Toyota - All New Rush TRD SPORTIVO A/T">Toyota - All New Rush TRD SPORTIVO A/T</option>

</select><Br>
	<label>Plat Nomor</label><br>
	<input type="text" name="plat" placeholder="plat nomor" required><br>
	<label>Tanggal Berlaku Stnk Hingga</label><br>
	<input type="date" name="tgl_stnk" required><br>
	<label>Warna Kendaraan</label><br>
	<input type="text" name="warna" placeholder="Warna" required><br>
	<input type="submit" name="submit">
</form>

<?php
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
	$type_mobil = mysqli_real_escape_string($config,$_POST['type_mobil']);
	$tgl_stnk = mysqli_real_escape_string($config,$_POST['tgl_stnk']);
	$warna = mysqli_real_escape_string($config,$_POST['warna']);
	$id = mysqli_real_escape_string($config,$_POST['id']);
	$query1 ="INSERT INTO tb_mobil(no_pol,tgl_stnk,type_kendaraan,warna_kendaraan) VALUES ('$plat','$tgl_stnk','$type_mobil','$warna')";
	$query2 = "INSERT INTO tb_member(id_teruci,nama_lengkap,panggilan,tempat_lahir,tgl_lahir,jenis_kelamin,no_hp,email,alamat_rumah,kab_kota,no_pol) VALUES ('$id','$nama_lengkap','$nama_panggilan','$tempatlahir','$tgl_lahir','$jenis_kelamin','$no_hp','$Email','$alamat_rumah','$kab_kota','$plat')";

  if(mysqli_query($config, $query1) ) {
  	if (mysqli_query($config, $query2)) {
  		echo "Berhasil Input Data";
  	}else{
  		echo "Gagal Input Data";
  	}
  }else{ 
  	echo "Gagal INput Data";
  }
}


