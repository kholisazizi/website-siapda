<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Login - Website Perangkat Daerah</title>
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/logo-madiun.png">
    <link href="./assets/admin/css/style.css" rel="stylesheet">
    <style>
        body {
            background-image: url("assets/bglogin.jpg");
            height: 1000px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>


<body class="h-100">
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">LOGIN</h4>
                                    <form method="post" style="width:100%;">
                                        <div class="form-group">
                                            <label><strong>Username</strong></label>
                                            <input type="text" class="form-control" placeholder="Username" name="username" required>
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Password</strong></label>
                                            <input type="password" class="form-control" placeholder="Password" name="password" required>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" name="login" value="login" class="btn btn-primary btn-block">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    session_start();
    include_once('koneksi.php');

    if (isset($_POST["login"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $ambil = $conn->query("SELECT * FROM user WHERE username='$username' AND password='$password'");
        $akunyangcocok = $ambil->num_rows;
        if ($akunyangcocok == 1) {
            $akun = $ambil->fetch_assoc();
            $_SESSION["admin"] = $akun;
            echo "<script> alert('Login Berhasil');</script>";
            echo "<script> location ='admin/home.php';</script>";
        } else {
            echo "<script> alert('Login Gagal, Username atau Password anda salah');</script>";
            echo "<script> location ='login.php';</script>";
        }
    }

    ?>
    <script src="./assets/admin/vendor/global/global.min.js"></script>
    <script src="./assets/admin/js/quixnav-init.js"></script>
    <script src="./assets/admin/js/custom.min.js"></script>

</body>