<?php
    session_start();
    include 'koneksi.php';

    $id_user = $_SESSION['id_user'];
    $tag = $_POST['tag'];
    $desk = $_POST['deskripsi'];
    $nama = $_FILES['berkas']['name'];
    $baseDir = $_SERVER['DOCUMENT_ROOT'];
    $new_filename = time().'_'.$nama;
    $file_tmp = $_FILES['berkas']['tmp_name'];	
    move_uploaded_file($file_tmp, $baseDir.'/files_upload/'.$nama);
    rename($baseDir.'/files_upload/'.$nama, $baseDir.'/files_upload/'.$new_filename);
    mysqli_query($koneksi,"INSERT INTO files (tag_files,deskripsi_files,url_files,id_user) VALUES ('$tag','$desk','$new_filename','$id_user')");
    
    try{
        $tableClient->insertEntity("mytable", $entity);
    }
    catch(ServiceException $e){
        // Handle exception based on error codes and messages.
        // Error codes and messages are here:
        // https://docs.microsoft.com/rest/api/storageservices/Table-Service-Error-Codes
        $code = $e->getCode();
        $error_message = $e->getMessage();
    }
    header("location:../home.php");
?>