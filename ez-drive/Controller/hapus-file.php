<?php
include 'koneksi.php';
 $id_files = $_GET['id_files'];
 $sql_delete = "delete from files where id_files=$id_files";
 $sql_delete_share = "delete from share where id_files_tujuan=$id_files";

 $sql_get = "select * from files where id_files=$id_files";
 $unlink_data = mysqli_query($koneksi,$sql_get);
 $file_url;
 while ($d = mysqli_fetch_array($unlink_data)) {
     $file_url = $d['url_files'];
 }
 //echo $file_url;
 mysqli_query($koneksi,$sql_delete);
 mysqli_query($koneksi,$sql_delete_share);
 unlink($_SERVER['DOCUMENT_ROOT']."/files_upload/$file_url");
 header("location:../home.php");
?>