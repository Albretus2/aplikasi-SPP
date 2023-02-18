<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
session_start();
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];
$login = mysqli_query($koneksi,"select*from petugas where username = '$username' and password = '$password'");
$cek = mysqli_num_rows($login);
if ($cek > 0 ){
    $data = mysqli_fetch_assoc($login);
    if ($data['level'] == "admin"){
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "admin";
        header("location:   Admin/dashboard-admin.php");
    }else if ($data['level'] == "petugas"){
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "petugas";
        header("location:petugas/dashboard-petugas.php");
    }else {
        header("location:login_admin.php?pesan=gagal");
        echo ' <script>';
        echo ' alert("masukan username dan password dengan benar");';
        echo '</script>';
    }
}else{
    header("location:login_admin.php?pesan=gagal");
    echo ' <script>';
    echo ' alert("masukan username dan password dengan benar");';
    echo '</script>';
}
?>    
</body>
</html>

