<!--koneksi dengan database-->
<?php
include '1_connection.php';
// set menjadi bahasa Indonesia
setlocale(LC_ALL, 'id-ID', 'id_ID');

// mengambil data nama dari database
$query =mysqli_query($koneksi, "SELECT nama FROM user");
$result=mysqli_fetch_array($query);
?>

<!--form yang akan ditampilkan di layar pengguna-->
<!DOCTYPE html>
<html>

<head>
    <!--membuat form dengan memberikan efek css sehingga bagus untuk dilihat-->
    <meta charset ="utf-8">
    <meta name ="viewport" content ="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="12_style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <title>BERHASIL</title>
</head>

<body>
    <!--box formulir yang akan dilakukan input oleh pengguna-->
    <section class="box-formulir">
        <h2>Selamat datang</h2>
        <div class="box">
            <h3><?php echo $result['nama'] ?> pada hari
                <!-- menampilkan hari dan tanggal login-->
                <?php echo strftime("%A, %d %B %Y", strtotime('2022-06-04'))?>
            </h3>
            <div class="box-kecil">
                <th>
                <td></td>
                </th>
                <a href="7_guestbook.php">Input Guestbook</a>
                <a href="9_guestbook.php">Lihat Guestbook</a>
                <a href="13_logout.php">Logout</a>
            </div>
        </div>
    </section>
</body>
</html>