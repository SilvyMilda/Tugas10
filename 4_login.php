<!--koneksi dengan database-->
<?php
include '1_connection.php'
?>

<!--form yang akan ditampilkan di layar pengguna-->
<!DOCTYPE html>
<html lang="en">
	<head>
        <!--membuat form dengan memberikan efek css sehingga bagus untuk dilihat-->
		<meta charset ="utf-8">
        <meta name ="viewport" content ="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="12_style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
        <title>LOG-IN</title>
	</head>

	<body>
		<!--box formulir yang akan dilakukan input oleh pengguna-->
        <section class="box-formulir">
            <h2>Log In</h2>
            <h3>Silhkan Log In terlebih dahulu!</h3>

            <!--bagian form--> 
            <form action="5_login2.php" method="post">
                <div class="box">
                    <table border="0" class="table-form">
                    <tr>
                        <td>Username</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="username" class="input-control"></input>
                        </td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="pass" class="input-control"></input>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <input type="submit" name="masuk" class="btn-login" value="Masuk"></input>
                        </td>
                    </tr>
                    </table>
                </div>
            </form>
	</body>
</html>