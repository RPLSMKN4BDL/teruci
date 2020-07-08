<?php
include 'Core/init.php';
if(!isset($_SESSION['username']) ){
   header('Location: login.php ');
}
echo "Anda adalah ".$_SESSION['username'];

    $id = $_GET['ID'];
    $result = mysqli_query($config, "DELETE FROM `tb_member` WHERE `tb_member`.`id_teruci` = '$id'");
    print_r($result);
    header('Location:index.php');
