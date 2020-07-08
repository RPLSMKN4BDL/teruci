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
	$type_mobil = mysqli_real_escape_string($config,$_POST['type_mobil']);
	$tgl_stnk = mysqli_real_escape_string($config,$_POST['tgl_stnk']);
	$warna = mysqli_real_escape_string($config,$_POST['warna']);
	$id = mysqli_real_escape_string($config,$_POST['id']);
	$query1 ="INSERT INTO tb_mobil(no_pol,tgl_stnk,type_kendaraan,warna_kendaraan) VALUES ('$plat','$tgl_stnk','$type_mobil','$warna')";
	$query2 = "INSERT INTO tb_member(id_teruci,nama_lengkap,panggilan,tempat_lahir,tgl_lahir,jenis_kelamin,no_hp,email,alamat_rumah,kab_kota,no_pol) VALUES ('$id','$nama_lengkap','$nama_panggilan','$tempatlahir','$tgl_lahir','$jenis_kelamin','$no_hp','$Email','$alamat_rumah','$kab_kota','$plat')";

  if(mysqli_query($config, $query1) ) {
  	if (mysqli_query($config, $query2)) {
  	?>
  	<script type="text/javascript">
$(document).ready(function () {
    // Handler for .ready() called.
    window.setTimeout(function () {
        location.href = "https://www.google.co.in";
    }, 5000);
});
</script>
  	<?Php
  	}else{
  		?>
  		<script type="text/javascript">
$(document).ready(function () {
    // Handler for .ready() called.
    window.setTimeout(function () {
        location.href = "https://www.google.co.in";
    }, 5000);
});
</script>
  		<?Php
  		echo "Gagal Registrasi";
  	}
  }else{ 
  	?>
  	<script type="text/javascript">
$(document).ready(function () {
    // Handler for .ready() called.
    window.setTimeout(function () {
        location.href = "https://www.google.co.in";
    }, 5000);
});
</script>
<?php
  	echo "Gagal Registrasi";
  }
}


?>