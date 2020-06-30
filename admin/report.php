
<script src="https://code.jquery.com/jquery-3.1.0.js"></script>
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function(){
        $('#tabel-data').DataTable();
    });
</script>
<?php
include 'Core/init.php';
if(!isset($_SESSION['username']) ){
   header('Location: login.php ');
}
?>
<?Php
echo "Anda adalah ".$_SESSION['username'];
?>
<a href="logout.php"> Logout</a><br>
   <h1>Daftar member</h1>
<table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
	<thead>
	<tr>
	<th>No</th>
	<th>Nama Lengkap</th>
	<th>Nama Panggilan</th>
	<th>Tempat_lahir</th>
	<th>Tanggal lahir</th>
	<th>jenis kelamin</th>
	<th>nomor hp</th>
	<th>email</th>
	<th>alamat rumah</th>
	<th>kota/kabupaten</th>
	<th>plat nomor</th>
	<th>Aksi</th>
	</tr>
</thead>
<tfoot>
	<tr>
	<th>No</th>
	<th>Nama Lengkap</th>
	<th>Nama Panggilan</th>
	<th>Tempat_lahir</th>
	<th>Tanggal lahir</th>
	<th>jenis kelamin</th>
	<th>nomor hp</th>
	<th>email</th>
	<th>alamat rumah</th>
	<th>kota/kabupaten</th>
	<th>plat nomor</th>
	<th>Aksi</th>
	</tr>
	</tfoot>
	 <tbody>
<tr>
<?Php
$query = mysqli_query($config, "SELECT * FROM `tb_member` ORDER BY `id_teruci` ASC  ");
$no = 1;
foreach ($query as $key => $data) { ?>
	<td><?Php echo $no++ ?> </td>
	<td><?Php echo $data['nama_lengkap']; ?> </td>
	<td><?Php echo $data['panggilan']; ?> </td>
	<td><?Php echo $data['tempat_lahir']; ?> </td>
	<td><?Php echo $data['tgl_lahir']; ?> </td>
	<td><?Php echo $data['jenis_kelamin']; ?> </td>
	<td><?Php echo $data['no_hp']; ?> </td>
	<td><?Php echo $data['email']; ?> </td>
	<td><?Php echo $data['alamat_rumah']; ?> </td>
	<td><?Php echo $data['kab_kota']; ?> </td>
	<td><?Php echo $data['no_pol']; ?> </td>
	 <td>
      <a href="edit.php?ID=<?php echo $data['id_teruci']; ?>">Edit</a>
      <input type="hidden" name="ID" >
      <a href="ubah/delete.php?ID=<?php echo $data['id_teruci']; ?>" name="hapus">Hapus</a>
      </td>
</tr>
<?php } ?>
    </tbody>
</table>
    <hr class="featurette-divider">

