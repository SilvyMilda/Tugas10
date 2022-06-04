<!--koneksi dengan database-->
<?php
include '1_connection.php';

// mengambil data nama dari database
$query =mysqli_query($koneksi, "SELECT nama FROM user");
$result=mysqli_fetch_array($query);
?>

<!--menampilkan pemberitahuan ke layar pengguna mengenai log out-->
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title>LOG OUT</title>
    </head>

    <body>
        <!--bagian box formulir-->
        <section class="box-formulir">
            <h2>Log Out</h2>
            <div class="box">
                <h3>Terima kasih</h3>
            </div>
        </section>
    </body>
</html>