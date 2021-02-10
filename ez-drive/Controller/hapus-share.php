<?php
include 'koneksi.php';
$id_share = $_GET['id_share'];

$sql_delete_share = "delete from share where id_share=$id_share";
mysqli_query($koneksi,$sql_delete_share);
//echo $koneksi->error;
header("location:../di-share-saya.php");

?>