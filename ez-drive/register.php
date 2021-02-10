<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center"><a href=""><img class="logo-img" src="logo/logo.png" width="300px" hright="200px" alt="logo"></a><span class="splash-description">Please enter your user information.</span></div>
            <div class="card-body">
            <p style="color: red">
<?php
		if(isset($_GET['pesan'])){
			if($_GET['pesan'] == "tidakcocok"){
				echo "Konfirmasi Password Register tidak sama";
			}else if($_GET['pesan'] == "terdaftar"){
				echo "Maaf email yang anda masukkan telah terdaftar";
			}else if($_GET['pesan'] == "loginsalah"){
				echo "password atau email salah";
			}else if($_GET['pesan'] == "belumverif"){
				echo "maaf akun anda belum di verifikasi admin";
			}
		}
        
    ?>
</p>
                <form method="post" action="Controller/register-controller.php">
                <table>
                <tr>  
                <td><div class="form-group">
                        <input class="form-control form-control-lg" id="username" name="email" type="text" placeholder="Email" autocomplete="off" required>
                    </div></td>
                    <td><div class="form-group">
                        <input class="form-control form-control-lg" id="name" name="nama" type="text" placeholder="Nama" required>
                    </div></td>
                    </tr>
                    <tr>
                    <td><div class="form-group">
                        <input class="form-control form-control-lg" id="password" name="password" type="password" placeholder="Password" required>
                    </div></td>
                    <td><div class="form-group">
                        <input class="form-control form-control-lg" name="konfirmasi_password" type="password" placeholder="Konfiramsi Password" required>
                    </div></td>
                    </tr>
                    </table>
                  
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Sign Up</button>
                </form>
            </div>
            <div class="card-footer bg-white p-0  ">
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="index.php" class="footer-link">Login Page</a></div>
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="#" class="footer-link">Forgot Password</a>
                </div>
            </div>
        </div>
    </div>
  
    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>
 
</html>