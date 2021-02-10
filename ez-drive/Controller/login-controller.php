<?php
include 'koneksi.php';
$email = $_POST['email'];
$password = md5($_POST['password']);

$data = mysqli_query($koneksi,"select * from users where email='$email' and pass='$password'");
$cek_data = mysqli_num_rows($data);
$nim = mysqli_query($koneksi,"select * from users where email='$email'");
$cek_nim = mysqli_num_rows($nim);
//echo $cek_nim;
if($cek_nim < 1){
   header("location:../index.php?pesan=tidakdaftar");

}else{
//echo $cek_data;
if($cek_data > 0){
  $currentID;
  $nama;
  $status;
  $email;
  while($d = mysqli_fetch_array($data)){
    $currentID = $d['id'];
    $nama = $d['nama'];
    $email = $d['email'];
  }
 // if($status == "terverifikasi"){
    session_start();
   // $_SESSION['nama'] = $nama;
   
    $_SESSION['id_user'] = $currentID;
    $_SESSION['email'] = $email;
    $_SESSION['nama'] = $nama;
   header("location:../home.php");
   /* }else{
    header("location:login.php?pesan=belumverif");
   }*/
}else{
  header("location:../index.php?pesan=loginsalah");

}
}

 ?>