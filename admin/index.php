<?php
include 'Core/init.php';
if(!isset($_SESSION['username']) ){
   header('Location: login.php ');
}
?>
<?Php
echo "Anda adalah ".$_SESSION['username'];
?>
<a href="report.php"> Report</a>
<a href="logout.php">Logout</a>
<br>
   <h1>Daftar member</h1>
<table border="1">
<tr>
	<td>No</td>
	<td>Nama Lengkap</td>
	<td>Tempat_lahir</td>
	<td>Tanggal lahir</td>
	<td>jenis kelamin</td>
	<td>nomor hp</td>
	<td>email</td>
	<td>alamat rumah</td>
	<td>kota/kabupaten</td>
</tr>
<tr>
<?Php
$query = mysqli_query($config, "SELECT * FROM `tb_member` ORDER BY `id_teruci` ASC  ");
$no = 1;
foreach ($query as $key => $data) { ?>
	<td><?Php echo $no++ ?> </td>
	<td><?Php echo $data['nama_lengkap']; ?> </td>
	<td><?Php echo $data['tempat_lahir']; ?> </td>
	<td><?Php echo $data['tgl_lahir']; ?> </td>
	<td><?Php echo $data['jenis_kelamin']; ?> </td>
	<td><?Php echo $data['no_hp']; ?> </td>
	<td><?Php echo $data['email']; ?> </td>
	<td><?Php echo $data['alamat_rumah']; ?> </td>
	<td><?Php echo $data['kab_kota']; ?> </td>

</tr>
<?php } ?>
</table>
    <hr class="featurette-divider">

