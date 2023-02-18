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
$nisn = $_POST['nisn'];
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$login = mysqli_query($koneksi,"select*from siswa where nisn = '$nisn' and nis = '$nis'");
// $login = mysqli_query($koneksi,"select*from siswa where nama = '$nama'");
$cek = mysqli_num_rows($login);
if ($cek > 0 ){
    $data = mysqli_fetch_assoc($login);
        $_SESSION['nisn'] = $nisn;
        $_SESSION['nis'] = $nis;
        $_SESSION['nama'] = $nama;
        header("location:siswa/dashboard-siswa.php");
}else{
    header("location:login_siswa.php?pesan=gagal");
}
?>    
</body>
</html>

