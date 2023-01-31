<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Admin - Website Perangkat Daerah</title>
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/logo-madiun.png">
    <link rel="stylesheet" href="../assets/admin/vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/admin/vendor/owl-carousel/css/owl.theme.default.min.css">
    <link href="../assets/admin/vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link href="../assets/admin/css/style.css" rel="stylesheet">
    <link href="../assets/admin/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <style>
        ul.timeline {
            list-style-type: none;
            position: relative;
        }

        ul.timeline:before {
            content: ' ';
            background: #d4d9df;
            display: inline-block;
            position: absolute;
            left: 29px;
            width: 2px;
            height: 100%;
            z-index: 400;
        }

        ul.timeline>li {
            margin: 20px 0;
            padding-left: 20px;
        }

        ul.timeline>li:before {
            content: ' ';
            background: white;
            display: inline-block;
            position: absolute;
            border-radius: 50%;
            border: 3px solid #22c0e8;
            left: 20px;
            width: 20px;
            height: 20px;
            z-index: 400;
        }
    </style>
    <?php
    session_start();
    if (!isset($_SESSION['admin'])) {
        echo "<script>alert('Anda Harus Login');</script>";
        echo "<script>location='../login.php';</script>";
        header('location:../login.php');
        exit();
    }
    date_default_timezone_set('Asia/Jakarta');
    ?>

</head>

<body>


    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>

    <div id="main-wrapper">

        <div class="nav-header">
            <a href="home.php" class="brand-logo">Panel Admin</a>



            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>

        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                        </div>

                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-account"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="logout.php" onclick="return confirm('Apakah anda yakin ingin logout ?')" class="dropdown-item">
                                        <i class="icon-key"></i>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <div class="quixnav">
            <div class="quixnav-scroll">
                <ul class="metismenu" id="menu">
                    <li><a href="home.php" aria-expanded="false"><i class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a></li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon icon-world-2"></i><span class="nav-text">Data Perangkat</span></a>
                        <ul aria-expanded="false">
                            <li><a href="dataperangkattambah.php">Tambah Data Perangkat</a></li>
                            <li><a href="dataperangkatdaftar.php">Daftar Data Perangkat</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>