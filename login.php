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
    <link rel="stylesheet" href="css/stylelogin.css" type="text/css">
    <!-- =============== Owl Carousel Assets =============== -->
    <link href="owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="owl-carousel/owl.theme.css" rel="stylesheet">
    
    <!-- =========================ICON==================== -->
    <link rel="icon" type="image/png" href="img/brand.png">

    <title>Halaman Login</title>
</head>

<body>
    <div class="container" id="container">
    <div class="form-container login-container">
        <form method="post">
            <img src="img/brand.png"><br><br>
            <h1>LOGIN</h1><br>
            <input type="text" name="txtUser" placeholder="Username" />
            <input type="password" name="txtPass" placeholder="Password" /><br>
            <button name="btnlogin">MASUK</button>

        </form>
    </div>
    <form action="register.php">
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-right">
                    <h3>SELAMAT DATANG DI <br> PT. ABADI KONTRUKSI</h3>
                    <p>Silahkan Daftar Jika Belum Punya Akun</p>
                    <button class="ghost" id="signUp">DAFTAR</button>
                </div>
            </div>
    </form>
    </div>
    </div>

    <?php
    if (isset($_POST['btnlogin'])) {
        include 'koneksi.php';

        //mengaktifkan session
        session_start();

        //mengambil data yang dikirim dari form sebelumnya
        $username = $_POST['txtUser'];
        $password = MD5($_POST['txtPass']);

        //mengambil data user di tabel tblogin
        $querylogin = $abdikoneksi->query("SELECT * FROM tblogin WHERE username='" . $username . "' AND password='" . $password . "';");

        //menghitung jumlah data
        $cek = $querylogin->num_rows;

        //jika username dan password lebih besar dari 0 maka akun ditemukan
        if ($cek > 0) {
            $data = mysqli_fetch_assoc($querylogin);

            //jika admin
            if ($data['kategori'] == '1') {
                //buat session username , kategori , dan nama
                $_SESSION['username'] = $username;
                $_SESSION['kategori'] = '1';
                $_SESSION['namalengkap'] = $data['nama'];
                $_SESSION['ids'] = $data['id_login'];


                //arahkan admin ke tampilan halamanutama admin
                header('location:/Aplikasi_penerimaan_dan_penilaian_calon_karyawan/admin/halamanutama.php?page=dashboard');

                //jika user
            } elseif ($data['kategori'] == '2') {
                //buat session username , kategori , dan nama
                $_SESSION['username'] = $username;
                $_SESSION['kategori'] = '2';
                $_SESSION['namalengkap'] = $data['nama'];
                $_SESSION['ids'] = $data['id_login'];


                //arahkan user ke tampilan halamanutama user
                header('location:/Aplikasi_penerimaan_dan_penilaian_calon_karyawan/user/halamanutama.php?page=dashboard');
            }

            //Jika Passwod Salah akan kembali lagi ke halaman login
        } else {
            echo "<script>alert( 'user dan password salah');window.location='login.php';</script>";
        }
    }
    ?>
</body>

</html>