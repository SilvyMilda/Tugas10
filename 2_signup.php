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
        <title>SIGN-UP</title>
	</head>

	<body>
		<!--box formulir yang akan dilakukan input oleh pengguna-->
        <section class="box-formulir">
        	<!--judul form inputan-->
            <h2>Sign Up</h2>
            <h3>Harap mendaftar jika belum memiliki akun</h3>

            <!--bagian form, setelah form selesai diisi, maka akan beralih ke file berikutnya--> 
            <form action="3_signup2.php" method="post">
                <div class="box">
                    <table border="0" class="table-form">
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="nama" class="input-control"></input>
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="alamat" class="input-control"></input>
                        </td>
                    </tr>
                    <tr>
                        <td>Email Pribadi</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="email" class="input-control"></input>
                        </td>
                    </tr>
                    <tr>
                        <td>Homepage</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="homepage" class="input-control" p></input>
                        </td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td>:</td>
                        <td>
                            <input type=" text" name="username" class="input-control"></input>
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
                            <input type="submit" name="daftar" class="btn-daftar" value="Daftar"></input>
                        </td>
                    </tr>
                    </table>
                </div>
            </form>
	</body>
</html>