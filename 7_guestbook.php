<?php
include '1_connection.php'
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset ="utf-8">
        <meta name ="viewport" content ="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="12_style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
        <title>GUESTBOOK</title>
	</head>

    <body>
        <!--bagian box formulir-->
        <section class="box-formulir">
            <h2>Guest Book</h2>
            <h3>Silahkan mengisi</h3>

            <!--bagian form--> 
            <form action="8_guestbook2.php" method="post">
                <div class="box">
                    <table border="0" class="table-form">
                    <tr>
                        <td>Posted</td>
                        <td>:</td>
                        <td>
                            <input type="date" name="posted" class="input-control"></input>
                        </td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="nama" class="input-control"></input>
                        </td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="email" class="input-control"></input>
                        </td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="alamat" class="input-control"></input>
                        </td>
                    </tr>
                    <tr>
                        <td>City</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="city" class="input-control"></input>
                        </td>
                    </tr>
                    <tr>
                        <td>Message</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="pesan" class="input-control"></input>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <input type="submit" name="masuk" class="btn-masuk" value="Masuk"></input>
                        </td>
                    </tr>
                    </table>
                </div>
            </form>
    </body>
</html>