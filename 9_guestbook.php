<!--koneksi dengan database-->
<?php
include '1_connection.php'
?>

<!--hasil cetak tabel yang akan ditampilkan ke layar pengguna-->
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset ="utf-8">
        <meta name ="viewport" content ="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="12_style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
        <title>CETAK</title>
	</head>

    <!--tabel cetak guest book-->
    <body>
        <table border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Posted</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>City</th>
                <th>Message</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $sql = "SELECT * FROM guestbook";
            $query = mysqli_query($koneksi, $sql);
            while ($result = mysqli_fetch_array($query)) {
                echo "<tr>";
                echo "<td>" . $result['id'] . "</td>";
                echo "<td>" . $result['posted'] . "</td>";
                echo "<td>" . $result['nama'] . "</td>";
                echo "<td>" . $result['email'] . "</td>";
                echo "<td>" . $result['alamat'] . "</td>";
                echo "<td>" . $result['city'] . "</td>";
                echo "<td>" . $result['pesan'] . "</td>";

                echo "<td>";
                echo "<a href='10_editguestbook.php?id=".$result['id']."'>Edit</a> | ";
                echo "<a href='11_hapusguestbook.php?id=".$result['id']."'>Hapus</a>";
                echo "</td>";

                echo "</tr>";
            }
            ?>
        </tbody>

    </table>
    <br>
    <a href="7_guestbook.php">Kembali</a>
    <a href="13_logout.php">Log Out</a>
    </body>
</html>