<?php
session_start();
if(empty($_SESSION['id_petugas'])){
    echo"<script>alert('Maaf Anda Belum Login');
    window.location.assign('../index2.php');
    </script>";
}
if($_SESSION['level']!='admin'){
    echo"<script>alert('Maaf Anda Bukan Sesi Admin');
    window.location.assign('../index2.php');
    </script>";
}
?>
<DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin - Aplikasi Pembayaran SPP </title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        
        <div class="text-center"><h3> Aplikasi Pembayaran SPP</h3>
        <div class="alert alert-success">
            Anda Login Sebagai <b>Administrator</b> Aplikasi Pembayaran SPP
                </div></div> 
                <div class="card">
                    <div class="card-body bg-success" >
                 <a href="admin.php" class="btn btn-warning"> Administrator</a>
                 <a href="admin.php?url=spp" class="btn btn-warning"> SPP</a>
                 <a href="admin.php?url=kelas" class="btn btn-warning"> Kelas</a>
                 <a href="admin.php?url=siswa" class="btn btn-warning"> Siswa</a>
                 <a href="admin.php?url=petugas" class="btn btn-warning"> Petugas</a>
                 <a href="admin.php?url=pembayaran" class="btn btn-warning"> Pembayaran</a>
                 <a href="admin.php?url=laporan" class="btn btn-warning"> Laporan</a>
                 <a href="admin.php?url=logout" class="btn btn-warning"> Logout</a>

                <div class="card mt-2">
                    <div class="card-body">
                        <!-- Ini Isi Web-->
                        <?php
                        $file = @$_GET['url'];
                        if(empty($file)){
                            echo"<h4>Selamat Datang DI Halaman Administrator</h4>";
                            echo"Aplikasi Pembayaran SPP digunakan untuk mempermudah dalam mencatat pembayaran siswa / siswi disekolah.";
                        }else{
                            include $file.'.php';
                        }
                        
                        ?>
                </div>


            </div>
        </div>
    </div>
</body>


<script scr="../js/bootstrap.bundle.min.js"></script>
</body>
</html>