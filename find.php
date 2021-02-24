<?php 
session_start();
include 'Controller/koneksi.php';
?>
<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <link rel="shortcut icon" href="logo/logo.png">

    <title>EZ-Drive - Dashboard</title>
    <!-- tambahan css modal -->
    <!-- -->
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="home.php"><img src="logo/logo.png" width="135px" height="65px"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                            <div id="custom-search" class="top-search-bar">


                                <form action="Controller/cari-controller.php" method="post">
                                <table>
                                    <td>
                                    <i class="fa fa-fw fa-search"></i>
                                    </td>
                                    <td>
                                    <input class="form-control" name="cari" type="text" placeholder="<?php echo $_GET['keyword']?>" id="myInput">

                                    </td>
                                </table>
                             

                                <input type="submit" style="display:none" tabindex="-1"/>

                                </form>

                            </div>
                        </li>
                         <li class="nav-item dropdown connection">
                            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <p class="btn btn-primary"><i class="fas fa-f fa-upload"></i>Upload File</p> </a>
                            <ul class="dropdown-menu dropdown-menu-right connection-dropdown">
                                <form action="Controller/upload-controller.php" enctype="multipart/form-data" method="post">
                                <li class="connection-list">
                                    <div class="row">
                                        <p>Pilih File</p>
                                        <p style="color: red"> (Max. 20 MB)</p>
                                       <input class="form-control" id="file" type="file" name="berkas">
                                       <p align="center" style="font:12">---optional---</p>
                                       <input type="text" class="form-control" name="tag" placeholder="tag nya..">
                                       <input type="text" class="form-control" name="deskripsi" placeholder="deskripsi">

                                    </div>
                                   
                                </li>
                                <li>
                                    <div class="conntection-footer"><input class="btn btn-primary" type="Submit" value="Upload Now!"></div>
                                </li>
                                </form>
                            </ul>
                        </li>
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="logo/icon-profile.png" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name"><?php echo $_SESSION["nama"]?></h5>
                                    <span class="status"></span><span class="ml-2"><?php echo $_SESSION["email"]?></span>
                                </div>
                                
                                <a class="dropdown-item" href="Controller/logout.php"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	                    <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="home.php" aria-expanded="false"><i class="fa fa-fw fa-folder"></i>File Saya</a>
                                  
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="di-share-saya.php" aria-expanded="false" ><i class="fas fa-f fa-share"></i>Dibagikan dengan Saya</a>
                                
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="tentang-kami.php" aria-expanded="false" ><i class="fas fa-f fa-info"></i>Tentang Kami</a>
                                
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">File Saya </h2>
                                <?php

$used_storage = 0;
$id_user = $_SESSION['id_user'];
$query = mysqli_query($koneksi, "select * from files where id_user= $id_user");
while($data=mysqli_fetch_array($query)) {
    $used_storage = $used_storage + filesize("files_upload/".$data['url_files'])/1048576 ; 
} 
?>
<label for="Store">Digunakan <?php echo round($used_storage,2)."MB "."dari 100MB";?> </label>
<progress id="Store" value="<?php echo $used_storage?>" max="100"></progress>

                                <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                                <div class="page-breadcrumb">
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="ecommerce-widget">

                        <div class="row">
                            <?php 
                            $nama_file = $_GET['keyword'];
                            $id_user = $_SESSION['id_user'];
                            $query = mysqli_query($koneksi, "select * from files where url_files like '%$nama_file%' and id_user=$id_user");
                            while($data=mysqli_fetch_array($query)) {                     
                         
                            ?>

                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <?php if(strpos($data['url_files'], '.pdf') !== false){?>
                                            <div style="align: center"><img src="logo/pdf.png" width="100px" height="100px"></div>
                                        <?php } elseif(strpos($data['url_files'], '.csv') !== false || strpos($data['url_files'], '.xls') || strpos($data['url_files'], '.xlxs')){?>
                                            <img src="logo/xls.png" width="100px" height="100px">
                                        <?php } elseif(strpos($data['url_files'], '.zip') !== false || strpos($data['url_files'], '.rar') || strpos($data['url_files'], '.7zip')){?>
                                            <img src="logo/archive.png" width="100px" height="100px">
                                        <?php } elseif(strpos($data['url_files'], '.ppt') !== false || strpos($data['url_files'], '.pptx')){?>
                                            <img src="logo/ppt.png" width="100px" height="100px">
                                        <?php } elseif(strpos($data['url_files'], '.doc') !== false || strpos($data['url_files'], '.docx')){?>
                                            <img src="logo/doc.png" width="100px" height="100px">
                                        <?php } elseif(strpos($data['url_files'], '.png') !== false || strpos($data['url_files'], '.jpg')|| strpos($data['url_files'], '.jpeg')){?>
                                            <img src="logo/image.png" width="100px" height="100px">
                                        <?php } else{?>
                                            <img src="logo/other.png" width="100px" height="100px">
                                        <?php } ?>
                                        <h5 class="text-muted"><a href="files_upload/<?php echo $data['url_files']?>" download><?php echo $data['url_files']?></h5>
                                        <h5 class="text-muted"><?php echo $data['upload_file']?></h5>
                                        <h5 class="text-muted"><i class="fa fa-fw fa-lock"></i>Private (<?php echo round(filesize("files_upload/".$data['url_files'])/1048576,3); echo "MB";?>)</h5>

                                        <div class="metric-value d-inline-block">
                                            <a href="Controller/hapus-file.php?id_files=<?php echo $data['id_files'];?>" class="btn btn-default"><i class="fa fa-fw fa-trash"></i>Hapus</a>
                                        </div>
                                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                        <a href="share.php?id_files=<?php echo $data['id_files']; ?> & nama_files=<?php echo $data['url_files']; ?> " class="btn btn-default"><i class="fa fa-fw fa-share"></i>Share</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php    }?>
                        </div>
                        
                        <div class="row">
                            <!-- ============================================================== -->
                      
                            <!-- ============================================================== -->

                     
                        <div class="row">
                            <div class="col-xl-5 col-lg-6 col-md-6 col-sm-12 col-12">
                                
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                             Copyright © 2021. All rights reserved Alferdo,Dandy,Dinda,Firdatus.
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script>
        var input = document.getElementById("myInput");
input.addEventListener("keyup", function(event) {
  if (event.keyCode === 13) {
    document.forms[0].submit();

  }
});
    </script>
    <script>
    var uploadField = document.getElementById("file");

uploadField.onchange = function() {
    if(this.files[0].size > 20097152){
       alert("Mohon Maaf EZ-Drive hanya menerima Maximum Upload File 20 MB");
       this.value = "";
    };
};
    </script>
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="assets/libs/js/dashboard-ecommerce.js"></script>
</body>
 
</html>