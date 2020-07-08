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
echo "Anda adalah ".$_SESSION['username'];
?>
<a href="index.php"> Home</a>
<a href="?hal=report"> Report</a>
<a href="?hal=mobil">Mobil</a>
<a href="logout.php">Logout</a>

<?php
if(empty($_GET['hal'])){
include "home.php";
}else if($_GET['hal'] == 'report'){
include "report.php";
}else if($_GET['hal'] == 'mobil'){
include "mobil.php";
}else if($_GET['hal'] == 'edit'){
include "edit.php";
}else if($_GET['hal'] == 'delete'){
include "delete.php";
}else if($_GET['hal'] == 'detail'){
include "detail.php";
}else if($_GET['hal'] == 'tambah'){
include "tambah.php";
}
?>


