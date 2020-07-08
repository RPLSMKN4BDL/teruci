<?php
include 'Core/init.php';
if(!isset($_SESSION['username']) ){
   header('Location: login.php ');
}
?>
<br>
   <h1>Daftar member</h1>
   <a href="?hal=tambah">Tambah Member</a><br>
<table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0" border="1">
<thead>
<tr>
	<th>No</td>
	<th>Nama Lengkap</th>
	<th>nomor hp</th>
	<th>email</th>
	<th>alamat rumah</th>
	<th>Aksi</th>
</tr>
</thead>
<tr>
<?Php
$query = mysqli_query($config, "SELECT * FROM `tb_member` ORDER BY `id_teruci` ASC  ");
$no = 1;
foreach ($query as $key => $data) { ?>
	<td><?Php echo $no++ ?> </td>
	<td><?Php echo $data['nama_lengkap']; ?> </td>
	<td><?Php echo $data['no_hp']; ?> </td>
	<td><?Php echo $data['email']; ?> </td>
	<td><?Php echo $data['alamat_rumah']; ?> </td>
	 <td>
      <a href="?hal=edit&ID=<?php echo $data['id_teruci']; ?>">Edit</a>
      <input type="hidden" name="ID" >
      <a href="?hal=delete&ID=<?php echo $data['id_teruci']; ?>" name="hapus">Hapus</a>
      </td>
</tr>
<?php } ?>
</table>
    <hr class="featurette-divider">
