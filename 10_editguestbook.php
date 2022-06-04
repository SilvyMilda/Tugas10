<!!--koneksi dengan database-->
<?php
include "1_connection.php";

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: 9_guestbook.php');

    //ambil id dari query string
    $id = $_GET['id'];

    // buat query untuk ambil data dari database
    $sql = "SELECT * FROM guestbook WHERE id=$id";
    $query = mysqli_query($koneksi, $sql);
    $result = mysqli_fetch_assoc($query);

    // jika data yang di-edit tidak ditemukan
    if( mysqli_num_rows($query) < 1 ){
        die("data tidak ditemukan...");
    }
}
?>

<!--memuat ulang form yang akan dilakukan pengubahan oleh pengguna-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset ="utf-8">
        <meta name ="viewport" content ="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="12_style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
        <title>EDIT</title>
    </head>

    <body>
        <section class="box-formulir">
            <h2>Edit Guest Book</h2>
            <h3>Silahkan mengedit data anda</h3>

            <form action="10_editguestbook2.php" method="post">
                <div class="box">
                    <table border="0" class="table-form">
                        <tr>
                            <input type="hidden" name="id" value="<?php echo $result['id'] ?>" />
                        </tr>
                        <tr>
                            <td>Posted</td>
                            <td>:</td>
                            <td>
                                <input type="date" name="posted" value="<?php echo $result['posted'] ?>"
                                    class="input-control">
                            </td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td>:</td>
                            <td>
                                <input type="text" name="nama" value="<?php echo $result['nama'] ?>" class="input-control">
                            </td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td>
                                <input type="text" name="email" value="<?php echo $result['email'] ?>"
                                    class="input-control">
                            </td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td>:</td>
                            <td>
                                <input type="text" name="alamat" value="<?php echo $result['alamat'] ?>"class="input-control"></input>
                            </td>
                        </tr>
                        <tr>
                            <td>City</td>
                            <td>:</td>
                            <td>
                                <input type="text" name="city" value="<?php echo $result['city'] ?>"class="input-control"></input>
                            </td>
                        </tr>
                        <tr>
                            <td>Message</td>
                            <td>:</td>
                            <td>
                               <input type="text" name="pesan" value="<?php echo $result['pesan'] ?>"class="input-control"></input>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>
                                <input type="submit" name="update" class="btn-masuk" value="Update">
                            </td>
                        </tr>
                    </table>
                </div>
            </form>
        </div>

    </body>
</html>