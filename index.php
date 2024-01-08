<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>PT. ABADI KONTRUKSI | MELAYANI </title>

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
    <link rel="icon" type="image/png" href="img/brand.png">
    <!-- =============== Owl Carousel Assets =============== -->
    <link href="owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="owl-carousel/owl.theme.css" rel="stylesheet">
</head>

<body>
    <!-- =============== nav =============== -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="container-fluid">
                <!-- logo perusahaan dan menu untuk android -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <!-- Menu Mobile agar bisa dropdown -->
                        <span class="sr-only"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="img/brand.png" alt="Logo">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a class="page-scroll" href="#">Beranda</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#tentang">Tentang</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#Informasi">Informasi</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#kontak_kami">Kontak Kami</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="login.php">Bergabung</a>
                        </li>
                    </ul>
                </div>
                <!-- =============== navbar-collapse =============== -->

            </div>
        </div>
        <!-- =============== container-fluid =============== -->
    </nav>
    <!-- =============== header =============== -->
    <header>
        <!-- =============== container =============== -->
        <div class="container">
            <div class="header-content row">
                <div class="col-xs-12 col-sm-5 col-md-5">
                    <h2 class="wow bounceIn animated" data-wow-delay=".40s">PERCAYAKAN KONTRUKSIMU DENGAN KAMI</h2>
                    <h3 class="wow bounceIn animated" data-wow-delay=".50s"> Professionally and Durability </h3>
                    <p class="wow bounceIn animated" data-wow-delay=".60s">Kualitas Terbaik, dengan Quaility Control Terbaik</p>
                    </p>
                </div>
                <div class="col-xs-12 col-sm-7 col-md-7 wow slideInLeft animated">
                    <img src="img/kontruksi.png" alt="kontruksi" />
                </div>
            </div>
        </div>
        <!-- =============== container end =============== -->
    </header>
    <!-- =============== Tentang =============== -->
    <hr>
    <section id="tentang" class="">
        <!-- =============== container =============== -->
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-5 col-md-3 wow fadeInLeft animated" data-wow-delay=".5s">
                    <h1><span>Hallo!</span> Selamat Datang Di Abadi Kontruksi </h2>
                </div>
                <div class="col-xs-12 col-sm-7 col-md-9 wow fadeInRight animated" data-wow-delay=".5s">
                    <h2>Abadi Kontruksi</h2>
                    <p>Adalah Profesional Kontruksi yang didirikan dengan keyakinan bahwa ide dan keahlian terampil sangat penting dalam memperkaya kehidupan masyarakat.</P><br><br>
                    <h2>Cerita Sukses</h2>
                    <p>Perjalanan dan reputasi kami membawa kami menjadi pemimpin dalam industri pembangunan kantor dan perumahan di Indonesia.
                        Mulai dari meraih International Design Awards. Mulai dari menampilkan proyek bersertifikasi Platinum Interior Space Greenship hingga menghadirkan karya-karya menarik ke seluruh wilayah Indonesia.
                        Temukan Kisah Sukses kami di sini!.</p><br>
                    <h2>Penghargaan</h2>
                    <p><img src="img/penghargaan.jpg" alt="penghargaan" style="width: 480px;"></p>
                </div>
            </div>
        </div>
        <!-- =============== container end =============== -->
    </section>
    <!-- =============== Informasi =============== -->
    <section id="Informasi" class="parallax">
        <!-- =============== container =============== -->
        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12 wow bounceIn animated headding" data-wow-delay=".5s">
                    <br><br>
                    <h2>INFORMASI<span> PEKERJAAN</span></h2>
                    <div class='col-xs-12 col-sm-12 col-md-12 wow bounceIn animated headding' data-wow-delay='.5s'>
                        <p>Ayo ! Bergabung Bersama Professional Kami
                            <br> Berikut Informasi Lowongan Kerja Di perusahaan kami
                        </p>
                    </div>
                                <?php
                                include('koneksi.php');
                                $query = "SELECT * FROM informasi";
                                $tampil_informasi = $abdikoneksi->query($query);

                                while ($data = $tampil_informasi->fetch_array()) {
                                    echo "<tbody>";
                                    echo "<div class='col-xs-6 col-sm-6 col-md-6'>";
                                    echo "<div class='row'>";
                                    echo "<div class='col-xs-12 col-sm-12 col-md-12 wow fadeInLeft animated textleft' data-wow-delay='.5s'>";   
                                    echo "<H3>" . $data["judul_informasi"] . "</H3>";
                                    echo "<label>Tanggal Publish : " . $data["tanggal_informasi"] . "</label>";
                                    echo "<label>" . $data["isi_informasi"] . "</label>";
                                    echo "<a href='login.php'>APPLY</a>";
                                    echo "</tbody>";
                                    echo "
                                </div>
                            </div>
                        </div>";
                                }
                                ?>

    </section>
    <!-- =============== Kontak Kami =============== -->
    <section id="kontak_kami">
        <!-- =============== container =============== -->
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 wow bounceIn animated headding" data-wow-delay=".1s">
                    <h2>Kontak <span>Kami</span></h2>
                    <p>Percayakan kontruksi bangunan anda kepada kami.</p>
                </div>


            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4 wow bounceIn animated map" data-wow-delay=".5s">

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7921.551651140251!2d106.905092791291!3d-6.917383022328705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e684829c6dffdd5%3A0xecbbf1784114f3d8!2sPoliteknik%20Sukabumi!5e0!3m2!1sen!2sid!4v1702558957634!5m2!1sen!2sid" width="100%" height="250" frameborder="0" style="border:0; border-radius: 0px;" allowfullscreen></iframe>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 wow bounceIn animated" data-wow-delay=".6s">

                    <section id="text-15" class="widget widget_text">
                        <h3 class="widget-title">Sukabumi, Jawa Barat</h3>
                        <div class="textwidget">Politeknik Sukabumi<br>
                            <p>Handphone: 08980950919<br>
                                E-mail: <a href="#">abdicahyan@gmail.com</a></p>
                            <a href="https://maps.app.goo.gl/WBn88qgMCzoGkQWQA">Temukan Kami Di Map</a> →
                        </div>
                    </section>

                </div>
            </div>
        </div><!-- =============== container end =============== -->
    </section>
    <!-- Footer -->
    <footer id="footer">
        <!-- =============== container =============== -->
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">

                    <ul class="social-links">
                        <li><a class="wow fadeInUp animated" href="index.html#" style="visibility: visible; animation-name: fadeInUp;"><i class="fa fa-facebook"></i></a></li>
                        <li><a data-wow-delay=".1s" class="wow fadeInUp animated" href="index.html#" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;"><i class="fa fa-twitter"></i></a></li>
                        <li><a data-wow-delay=".2s" class="wow fadeInUp animated" href="index.html#" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;"><i class="fa fa-google-plus"></i></a></li>
                        <li><a data-wow-delay=".4s" class="wow fadeInUp animated" href="index.html#" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;"><i class="fa fa-pinterest"></i></a></li>
                        <li><a data-wow-delay=".5s" class="wow fadeInUp animated" href="index.html#" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;"><i class="fa fa-envelope"></i></a></li>
                    </ul>

                    <p class="copyright">
                        &copy; <?= date('Y') ?> ABDI CAHYA NEGORO <br>TEKNIK KOMPUTER <br>POLITEKNIK SUKABUMI
                    </p>

                </div>
            </div>
        </div><!-- =============== container end =============== -->
    </footer>
    <!-- =============== jQuery =============== -->
    <script src="js/jquery.js"></script>
    <!-- =============== Bootstrap Core JavaScript =============== -->
    <script src="js/bootstrap.min.js"></script>
    <!-- =============== Plugin JavaScript =============== -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>
    <!-- =============== Custom Theme JavaScript =============== -->
    <script src="js/creative.js"></script>
    <!-- =============== owl carousel =============== -->
    <script src="owl-carousel/owl.carousel.js"></script>
    <script>
        $(document).ready(function() {
            $("#owl-demo").owlCarousel({
                autoPlay: 3000,
                items: 3,
                itemsDesktop: [1199, 3],
                itemsDesktopSmall: [979, 3]
            });

        });
    </script>
</body>

</html>