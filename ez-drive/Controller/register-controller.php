<?php
 include 'koneksi.php';
 $email = $_POST['email'];
 $nama = $_POST['nama'];
 $password = md5($_POST['password']);
 $konfirmasi_password = md5($_POST['konfirmasi_password']);
$data = mysqli_query($koneksi,"select * from users where email='$email'");
$cek_user = mysqli_num_rows($data);

if($cek_user > 0){
    header("location:../register.php?pesan=terdaftar");
}else if($password != $konfirmasi_password){
    header("location:../register.php?pesan=tidakcocok");
}
else{
    //header("location:login.php?pesan=terdaftar");
    mysqli_query($koneksi,"INSERT INTO users (nama,email,pass) VALUES ('$nama','$email','$password')");
   // echo $koneksi->error;
    session_start();
    $getID = mysqli_query($koneksi,"select * from users where email='$email'");
    $currentID;
    while($d = mysqli_fetch_array($getID)){
     $currentID = $d['id'];
  
    }
  
  header("location:../index.php?pesan=berhasilregister");
}

?>