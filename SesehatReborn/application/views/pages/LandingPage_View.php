<!-- Nama : Muhammad Rafif
     NIM : 1301184124
     Kelas : IF 42 05
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!-- Font Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url('assets/') ?>CSS/LandingPage_Style.css" type="text/css">


    <link rel="icon" type="image/ico" href="images/Sesehat Logo 2.svg" />
    <title>Landing Page</title>
</head>

<body>
    <!-- Navbar Landing Page -->
    <div class="nav-container">
        <div class="wrapper">
            <nav>
                <div class="logo">
                    <a href="#">
                        <img src="<?= base_url('assets/') ?>images/UI/Sesehat Logo.svg" alt="Sesehat" style="height: 60px;">
                    </a>
                </div>
                <ul class="menu-navbar" style="margin-bottom: 0px;">
                    <li>
                        <a href="#" style="color: #8B4E6D; font-weight: 500;">Beranda</a>
                    </li>
                    <li>
                        <a href="#ttg-kami">Tentang Kami</a>
                    </li>
                    <li>
                        <a href="#ktk-kami">Kontak Kami</a>
                    </li>
                    <li id="button-login">
                        <a href="<?= base_url('Auth/login') ?>" style="color: white;">Login</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <!-- Header Landing Page -->
    <div class=" head-container">
        <div class="wrapper">
            <header>
                <div class="hero-content">
                    <h1>
                        <b>Piling Gud, Neper Stress</b>
                    </h1>
                    <p style="margin-bottom: 30px;">Jika anda sedang mengalami stress, depresi, atau masalah lainnya
                        kami siap
                        membantu anda
                        untuk memberikan solusi yang
                        terbaik.</p>
                    <a href="<?= base_url('Auth/register') ?>" id="button-gabung" style="color:white; text-decoration: none;">
                        Gabung Sekarang
                    </a>
                </div>
                <div class="hero-image">
                    <img src="<?= base_url('assets/') ?>images/UI/LandPage_1.png" alt="" style="width: 550px;">
                </div>
            </header>

            <!-- Dibawah Header -->
            <img src="<?= base_url('assets/') ?>images/UI/LandPage_4.svg" alt="GarisBatas" style="max-width: 100%;">
            <br>
            <br><br>
            <div class="head-container">
                <div class="wrapper">
                    <header-bawah>
                        <div class="ttg-kami" id="ttg-kami">
                            <h2>
                                Tentang Kami
                            </h2>
                            <p>
                                Sesehat merupakan produk layanan dari Rumah Sakit Semangat Sehat,
                                dimana Sesehat itu
                                sendiri
                                adalah
                                aplikasi berbasis website yang merupakan sebuah tempat untuk
                                melakukan konsultasi pasien
                                kepada
                                dokter psikologi untuk membantu pasien yang dalam mengalami masalah
                                mental seperti
                                stress,
                                depresi
                                atau yang lagi membutuhkan sebuah saran terkait masalah yang sedang
                                dihadapi.
                            </p>
                        </div>
                        <div class="img-ttgkmi">
                            <img src="<?= base_url('assets/') ?>images/UI/LandPage_2.svg" alt="Tentang-Kami">
                        </div>
                    </header-bawah>
                </div>
            </div>
            <div class="head-container">
                <div class="wrapper">
                    <header-bawah>
                        <div class="img-ktkkmi">
                            <img src="<?= base_url('assets/') ?>images/UI/LandPage_3.svg" alt="Kontak-kami">
                        </div>
                        <div class="ktk-kami" id="ktk-kami">
                            <h2>
                                Kontak Kami
                            </h2>
                            <p>
                                Kamu dapat menghubungi kami untuk informasi lebih lanjut melalui
                                email ataupun nomor
                                telepon
                                rumah
                                sakit yang ada pada dibawah ini.
                            </p>
                        </div>
                    </header-bawah>
                </div>
            </div>
        </div>
    </div>
    <!-- End Navbar -->
    <div class="credit">
        <p style="align-items: center;">
            <b>Email : sesehat@rumahsakit.com</b>
        </p>
        <p>
            <b>Telp. 08992220222</b>
        </p>
    </div>
</body>

</html>