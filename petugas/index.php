<?php
include "../koneksi.php";
session_start();
if (empty($_SESSION['username'])) {
    echo "<script type='text/javascript'> alert ('Sesi tidak ada '); </script>";
    header("location:../login.php");
} else {
    $username = $_SESSION['username'];
    $ceksesi = mysqli_query($koneksi, "Select * from petugas where username='$username'");
    $cek = mysqli_num_rows($ceksesi);
    $akun = mysqli_fetch_assoc($ceksesi);
}

if ($cek > 0) {

    ?>


    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Perpustakaan</title>
        <!-- BOOTSTRAP STYLES-->
        <link href="../assets/css/bootstrap.css" rel="stylesheet" />
        <!-- FONTAWESOME STYLES-->
        <link href="../assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
        <link href="../assets/css/custom.css" rel="stylesheet" />
        <!-- GOOGLE FONTS-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
        <!-- TABLE STYLES-->
        <link href="../assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    </head>

    <body>
        <div id="wrapper">
            <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php?page=kosong$aksi=kosong">Perpustakaan</a>
                </div>
                <div style="color: white;
    padding: 15px 50px 5px 50px;
    float: right;
    font-size: 16px;"><?php echo date('d-m-Y'); ?> &nbsp; || &nbsp; <a href="logout.php" class="btn btn-danger square-btn-adjust"><i class="fa fa-sign-out"></i> Logout</a> </div>
            </nav>
            <!-- /. NAV TOP  -->
            <nav class="navbar-default navbar-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="main-menu">
                        <li class="text-center">
                            <img src="../assets/img/petugas.png" class="user-image img-responsive" />
                        </li>


                        <li>
                            <a href="?page=kosong&aksi=kosong"><i class="fa fa-home fa-3x"></i> Home</a>
                        </li>


                        <li>
                            <a href="?page=anggota&aksi=kosong"><i class="fa fa-users fa-3x"></i> Data Anggota</a>
                        </li>


                        <li>
                            <a href="?page=buku&aksi=kosong"><i class="fa fa-book fa-3x"></i> Data Buku</a>
                        </li>


                        <li>
                            <a href="#"><i class="fa fa-pencil-square fa-3x"></i> Data Transaksi<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="?page=peminjaman&aksi=kosong">Peminjaman</a>
                                </li>
                                <li>
                                    <a href="?page=pengembalian&aksi=kosong">Pengembalian</a>
                                </li>
                        </li>
                    </ul>

                </div>

            </nav>
            <!-- /. NAV SIDE  -->
            <div id="page-wrapper">
                <div id="page-inner">
                    <div class="row">
                        <div class="col-md-12">

                            <?php
                            include("../koneksi.php");
                            include("function.php");
                            $page = $_GET['page'];
                            $aksi = $_GET['aksi'];

                            if ($page == "buku") {
                                if ($aksi == "kosong") {
                                    include "page/buku/buku.php";
                                } elseif ($aksi == "tambah") {
                                    include "page/buku/tambah.php";
                                } elseif ($aksi == "ubah") {
                                    include "page/buku/ubah.php";
                                } elseif ($aksi == "hapus") {
                                    include "page/buku/hapus.php";
                                }
                            } elseif ($page == "anggota") {
                                if ($aksi == "kosong") {
                                    include "page/anggota/anggota.php";
                                } elseif ($aksi == "tambah") {
                                    include "page/anggota/tambah.php";
                                } elseif ($aksi == "ubah") {
                                    include "page/anggota/ubah.php";
                                } elseif ($aksi == "hapus") {
                                    include "page/anggota/hapus.php";
                                }
                            } elseif ($page == "petugas") {
                                if ($aksi == "kosong") {
                                    include "page/petugas/petugas.php";
                                } elseif ($aksi == "tambah") {
                                    include "page/petugas/tambah.php";
                                } elseif ($aksi == "ubah") {
                                    include "page/petugas/ubah.php";
                                } elseif ($aksi == "hapus") {
                                    include "page/petugas/hapus.php";
                                }
                            } elseif ($page == "peminjaman") {
                                if ($aksi == "kosong") {
                                    include "page/peminjaman/peminjaman.php";
                                } elseif ($aksi == "tambah") {
                                    include "page/peminjaman/tambah.php";
                                } elseif ($aksi == "ubah") {
                                    include "page/peminjaman/ubah.php";
                                } elseif ($aksi == "hapus") {
                                    include "page/peminjaman/hapus.php";
                                }
                            } elseif ($page == "pengembalian") {
                                if ($aksi == "kosong") {
                                    include "page/pengembalian/pengembalian.php";
                                } elseif ($aksi == "tambah") {
                                    include "page/pengembalian/tambah.php";
                                } elseif ($aksi == "prosestambah") {
                                    include "page/pengembalian/prosestambah.php";
                                } elseif ($aksi == "proseslagi") {
                                    include "page/pengembalian/proseslagi.php";
                                } elseif ($aksi == "ubah") {
                                    include "page/pengembalian/ubah.php";
                                } elseif ($aksi == "hapus") {
                                    include "page/pengembalian/hapus.php";
                                }
                            } elseif (($page == "kosong") && ($aksi = "kosong")) {
                                include "page/home.php";
                            }

                            ?>

                        </div>
                    </div>
                    <!-- /. ROW  -->
                    <hr />

                </div>
                <!-- /. PAGE INNER  -->
            </div>
            <!-- /. PAGE WRAPPER  -->
        </div>
        <!-- /. WRAPPER  -->
        <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
        <!-- JQUERY SCRIPTS -->
        <script src="../assets/js/jquery-1.10.2.js"></script>
        <!-- BOOTSTRAP SCRIPTS -->
        <script src="../assets/js/bootstrap.min.js"></script>
        <!-- METISMENU SCRIPTS -->
        <script src="../assets/js/jquery.metisMenu.js"></script>
        <!-- CUSTOM SCRIPTS -->

        <!-- DATA TABLE SCRIPTS -->
        <script src="../assets/js/dataTables/jquery.dataTables.js"></script>
        <script src="../assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function() {
                $('#dataTables-example').dataTable();
            });
        </script>
        <!-- CUSTOM SCRIPTS -->
        <script src="../assets/js/custom.js"></script>


    </body>

    </html>

<?php
} else {
    echo "<script type='text/javascript'> alert ('Anda Harus Login dulu ');</script>";
    header("location:../login.php");
}
?>