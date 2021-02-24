<?php
include 'koneksi.php';
$email = $_POST['email'];
$password = md5($_POST['password']);
$result;
try    {
  $result = $tableClient->getEntity("users", "user", $email);
}
catch(ServiceException $e){
  // Handle exception based on error codes and messages.
  // Error codes and messages are here:
  // https://docs.microsoft.com/rest/api/storageservices/Table-Service-Error-Codes
  $code = $e->getCode();
  $error_message = $e->getMessage();
  echo $code.": ".$error_message."<br />";
}

$entity = $result->getEntity();

echo $entity->getPartitionKey().":".$entity->getRowKey();
$cek_data = mysqli_num_rows($result);

$data;
try    {
  $data = $tableClient->getEntity("users", "user", $password);
}
catch(ServiceException $e){
  // Handle exception based on error codes and messages.
  // Error codes and messages are here:
  // https://docs.microsoft.com/rest/api/storageservices/Table-Service-Error-Codes
  $code = $e->getCode();
  $error_message = $e->getMessage();
  echo $code.": ".$error_message."<br />";
}
$entity = $data->getEntity();

echo $entity->getPartitionKey().":".$entity->getRowKey();
$cek_nim = mysqli_num_rows($data);
//echo $cek_nim;
if($cek_nim < 1){
   header("location:../index.php?pesan=tidakdaftar");

}else{
//echo $cek_data;
if($cek_data > 0){
  $currentID;
  $nama;
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