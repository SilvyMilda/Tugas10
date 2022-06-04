<?php
//perintah memuat isi 1_connection.php ke dalam tabel
include "1_connection.php";
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $homepage = $_POST['homepage'];
    $username = $_POST['username'];
    $pass = $_POST['pass'];

    //query insert data formulir ke dalam database
    $sql = "INSERT user set nama='$nama', alamat='$alamat', email='$email', homepage='$homepage', username='$username', pass='$pass'";
    mysqli_query($koneksi, $sql) or die("Proses simpan ke database gagal");
    mysqli_close($koneksi);
    header("location:4_login.php");
?>