<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <!-- Font Poppins -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url('assets/') ?>CSS/Global_Style.css" type="text/css">
  <link rel="stylesheet" href="<?= base_url('assets/') ?>CSS/Pasien_ListDokter_Style.css" type="text/css">
  <title>List Dokter</title>
</head>

<body>
  <!-- Navbar -->
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
            <a href="#" style="color: #8B4E6D; font-weight: 700;">Cari Dokter</a>
          </li>
          <li>
            <a href="#ttg-kami">Status Konsultasi</a>
          </li>
          <li>
            <a href="#ktk-kami">Status Jadwal</a>
          </li>
          <li>
            <a href="<?= base_url('User/profile_akun') ?>">Profile Akun</a>
          </li>
          <li id="button-login">
            <a href="<?= base_url('Auth/logout') ?>" style="color: white;">Logout</a>
          </li>
        </ul>
      </nav>
    </div>
  </div>

  <!-- Body -->
  <div class="container-fluid">
    <div class="row content-constraint-head">
      <h1>List Dokter Tersedia</h1>
    </div>
    <div class="row content-constraint-body">
      <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 gridPad">
        <div class="card text-center small-center">
          <div>
            <img class="card-img-top" src="<?php echo base_url(); ?>assets/images/Placeholder/doctor1.jpg" alt="Card image cap">
          </div>
          <div class="card-body">
            <h5 class="card-title">Dr. Susana</h5>
            <p class="card-text">Lokasi : Bandung <br> Gelar : S2 Psikologi ITB</p>
            <a href="<?= base_url('User/info_dokter') ?>" class="btn btn-primary">Lihat Detail</a>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 gridPad">
        <div class="card text-center small-center">
          <div>
            <img class="card-img-top" src="<?php echo base_url(); ?>assets/images/Placeholder/doctor2.jpg" alt="Card image cap">
          </div>
          <div class="card-body">
            <h5 class="card-title">Dr. Aladdin</h5>
            <p class="card-text">Lokasi : Bandung <br> Gelar : S2 Psikologi ITB</p>
            <a href="#" class="btn btn-primary">Lihat Detail</a>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 gridPad">
        <div class="card text-center small-center">
          <div>
            <img class="card-img-top" src="<?php echo base_url(); ?>assets/images/Placeholder/doctor3.jpg" alt="Card image cap">
          </div>
          <div class="card-body">
            <h5 class="card-title">Dr. Alibaba</h5>
            <p class="card-text">Lokasi : Bandung <br> Gelar : S2 Psikologi ITB</p>
            <a href="#" class="btn btn-primary">Lihat Detail</a>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 gridPad">
        <div class="card text-center small-center">
          <div>
            <img class="card-img-top" src="<?php echo base_url(); ?>assets/images/Placeholder/doctor4.jpg" alt="Card image cap">
          </div>
          <div class="card-body">
            <h5 class="card-title">Dr. Tasya</h5>
            <p class="card-text">Lokasi : Bandung <br> Gelar : S2 Psikologi ITB</p>
            <a href="#" class="btn btn-primary">Lihat Detail</a>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 gridPad">
        <div class="card text-center small-center">
          <div>
            <img class="card-img-top" src="<?php echo base_url(); ?>assets/images/Placeholder/doctor5.jpg" alt="Card image cap">
          </div>
          <div class="card-body">
            <h5 class="card-title">Dr. Eren</h5>
            <p class="card-text">Lokasi : Bandung <br> Gelar : S2 Psikologi ITB</p>
            <a href="#" class="btn btn-primary">Lihat Detail</a>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 gridPad">
        <div class="card text-center small-center">
          <div>
            <img class="card-img-top" src="<?php echo base_url(); ?>assets/images/Placeholder/doctor6.jpg" alt="Card image cap">
          </div>
          <div class="card-body">
            <h5 class="card-title">Dr. Mikasa</h5>
            <p class="card-text">Lokasi : Bandung <br> Gelar : S2 Psikologi ITB</p>
            <a href="#" class="btn btn-primary">Lihat Detail</a>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 gridPad">
        <div class="card text-center small-center">
          <div>
            <img class="card-img-top" src="<?php echo base_url(); ?>assets/images/Placeholder/doctor7.jpg" alt="Card image cap">
          </div>
          <div class="card-body">
            <h5 class="card-title">Dr. Morgiana</h5>
            <p class="card-text">Lokasi : Bandung <br> Gelar : S2 Psikologi ITB</p>
            <a href="#" class="btn btn-primary">Lihat Detail</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>