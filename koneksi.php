<?php
$koneksi = mysqli_connect("localhost","root","","spp_albret_xirpl3");
if (mysqli_connect_errno()){
    echo "koneksi databases gagal :" .mysqli_connect_errno();
}