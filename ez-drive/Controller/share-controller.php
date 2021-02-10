<?php
 session_start();
 include 'koneksi.php';
 $id_user_tujuan = $_POST['id_user'];
 $id_file = $_GET['id_files'];
 $id_usee_asal = $_SESSION['id_user'];
 //echo $id_usee_asal.$id_user_tujuan.$id_file;
 mysqli_query($koneksi,"INSERT INTO share (id_user_awal,id_user_tujuan,id_files_tujuan) VALUES ('$id_usee_asal','$id_user_tujuan','$id_file')");
// echo $koneksi->error;
 header("location:../home.php");

 ?>