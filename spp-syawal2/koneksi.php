<?php

$koneksi = mysqli_connect('localhost','root','', 'db_lsp');

if(!$koneksi){
    echo"Koneksi Anda Gagal";
}