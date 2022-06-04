<?php
//perintah memuat isi koneksi.inc.php ke dalam file create-table.php 
include "1_connection.php";
    $username = $_GET['username'];
    $pass = $_GET['pass'];

    header("location:6_home.php");
?>