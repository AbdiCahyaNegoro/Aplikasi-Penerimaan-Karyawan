<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- =============== Bootstrap Core CSS =============== -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <!-- =============== Google fonts =============== -->
    <link href='https://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
    <!-- =============== fonts awesome =============== -->
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <!-- =============== Plugin CSS =============== -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">
    <!-- =============== Custom CSS =============== -->
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <!-- =============== Owl Carousel Assets =============== -->
    <link href="owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="owl-carousel/owl.theme.css" rel="stylesheet">
    <title>Register</title>

</head>

<body>
    <section id="registrasi">
        <!-- =============== container =============== -->
        <div class="container">
            <div class="row">
                <div class="col-xs-5 col-sm-5 col-md-5">
                    <form method="POST">
                        <div class="judul textleft">
                                <h1>REGIS<span>TRASI</h1></span>
                        </div>
                        <div class="ajax-hidden">
                            <p>Sudah Punya Akun ? <span><b><a href="login.php">LOGIN</a></b></span></p><br><br>
                            <b>Username</b> <input type="text" placeholder="Username" name="txtUsername" class="form-control"><br>
                            <b>Nomor KTP</b> <input type="text" placeholder="No. KTP" name="txtNoKTP" class="form-control"><br>
                            <b>Nama Lengkap</b><input type="text" placeholder="Nama Lengkap" name="txtNama" class="form-control"><br>
                            <b>Password</b><input type="password" placeholder="********" name="txtPassword" class="form-control"><br>
                            <b>Status</b><input type="text" value="PELAMAR" class="form-control" readonly><br>

                            <button type="submit" name="btnregistrasi" class="btn btn-sm btn-danger" style="width: 200px; height: 50px; border-radius: 20px;">Registrasi</button>
                            <button type="reset" name="btnbatal" class="btn btn-sm btn-danger" style="width: 200px; height: 50px; border-radius: 20px;">Batal</button>

                        </div>
                </div>
                <div class="col-xs-5 col-sm-5 col-md-5">
                    <img src="./img/register.png">
                </div>
            </div>
            </form>
    </section>
</body>

<?php
if (isset($_POST['btnregistrasi'])) {
    include 'koneksi.php';

    // Mengambil data yang dikirim dari formulir registrasi
    $username = $_POST['txtUsername'];
    $no_ktp = $_POST['txtNoKTP'];
    $namalengkap = $_POST['txtNama'];
    $password = MD5($_POST['txtPassword']);

    // Mengambil data user di tabel tblogin
    $queryusername = $abdikoneksi->query("SELECT * FROM tblogin WHERE username='" . $username . "' ;");

    // Menghitung jumlah data
    $cek = $queryusername->num_rows;

    // Jika username dan password lebih besar dari 0 maka akun ditemukan
    if ($cek == 0) {
        // Simpan data ke tabel tblogin
        $querysimpan = "INSERT INTO tblogin (id_login, username, password, kategori, nama)
             VALUES (NULL, '$username', '$password', 2, '$namalengkap');";
        $simpandata = $abdikoneksi->query($querysimpan);

        if ($simpandata) {
            // Simpan data ke tabel pelamar
            $querysimpan_pelamar = "INSERT INTO pelamar (id_login, no_ktp, nama)
                 VALUES (LAST_INSERT_ID(), '$no_ktp', '$namalengkap');";
            $simpandata_pelamar = $abdikoneksi->query($querysimpan_pelamar);

            if ($simpandata_pelamar) {
                echo "<script>alert('DATA BERHASIL DISIMPAN');window.location='login.php'</script>";
            } else {
                echo $abdikoneksi->error;
            }
        } else {
            echo $abdikoneksi->error;
        }
    } else {
        echo "<script>alert( 'Username Sudah Ada');window.location='register.php';</script>";
    }
}
?>
</html>
