<?php
include 'Core/init.php';
if(!isset($_SESSION['username']) ){
   header('Location: login.php ');
}
 if (isset($_POST['submit'])) {
	  	$id = $_POST['id_teruci'];
	  	$nama_lengkap = $_POST['nama_lengkap'];
	  	$panggilan = $_POST['nama_panggilan'];
	  	$tempat_lahir = $_POST['tempatlahir'];
	  	$no_hp = $_POST['no_hp'];
	  	$email = $_POST['email'];
	  	$alamat_rumah = $_POST['alamat_rumah'];
	  	$kab_kota = $_POST['kab_kota'];
	  	$plat = $_POST['plat'];
	  	$type_kendaraan = $_POST['type_kendaraan'];
	  	$tgl_stnk = $_POST['tgl_stnk'];
	  	$warna_kendaraan = $_POST['warna'];


    $result = mysqli_query($config, "UPDATE tb_member SET nama_lengkap='$nama_lengkap',panggilan='$panggilan',tempat_lahir='$tempat_lahir',no_hp='$no_hp',email='$email',alamat_rumah='$alamat_rumah',kab_kota='$kab_kota' WHERE id_teruci='$id'");
        header("Location: ?hal=report");
	  }
  $id = $_GET['ID'];

  $result = mysqli_query($config, "SELECT * FROM detail_teruci WHERE id_teruci='$id'");
foreach($result as $key) {
} 

?>
<form method="POST">
	<label>Nama Lengkap</label><br>
	<input type="text" name="nama_lengkap" value="<?php echo $key['nama_lengkap'];?>"><br>
	<label>Nama Panggilan</label><br>
	<input type="text" name="nama_panggilan" value="<?php echo $key['panggilan'];?>"><br>
	<label>Tempat Lahir</label><br>
	<input type="text" name="tempatlahir" value="<?php echo $key['tempat_lahir'];?>"><br>
	<label>Nomor Handphone</label><br>
	<input type="number" name="no_hp" value="<?php echo $key['no_hp'];?>"><br>
	<label>Email</label><br>
	<input type="email" name="email" value="<?php echo $key['email'];?>"><br>
	<label>Alamat rumah</label><br>
	<input type="text" name="alamat_rumah" value="<?php echo $key['alamat_rumah'];?>"><br>
	<label>Kabupaten/Kota</label><br>
	<input type="text" name="kab_kota" value="<?php echo $key['kab_kota'];?>"><br>
	<input type="hidden" name="id_teruci" value=<?php echo $_GET['ID'];?>>

 <input type="submit" name="submit"  value="update">
</form>
