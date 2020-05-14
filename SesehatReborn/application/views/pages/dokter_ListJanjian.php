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
  <link rel="stylesheet" href="<?= base_url('assets/') ?>CSS/Dokter_ListJanjian_Style.css" type="text/css">
  <title>List Jadwal Janjian</title>
</head>

<body>

</body>

</html>
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
          <a href="" style="color: #8B4E6D; font-weight: 700;">Jadwal Janjian</a>
        </li>
        <li>
          <a href="<?= base_url('Dokter/status_konsultasi') ?>">Status Konsultasi</a>
        </li>
        <li>
          <a href="<?= base_url('Dokter/profile_akunDokter') ?>">Profile Akun</a>
        </li>
        <li id="button-login">
          <a href="<?= base_url('Auth/logout') ?>" style="color: white;">Logout</a>
        </li>
      </ul>
    </nav>
  </div>
</div>

<!-- Body -->
<div class="content-constraint-head">
  <h1>List Jadwal Janjian</h1>
</div>
<div class="container-fluid content-constraint-body">
  <div class="row list-card">
    <div class="text-lg-left text-md-center text-xs-left col-lg-4 col-md-6">
      <h3>Nama: Muhammad Rafif</h3>
      <h3>Jenis Kelamin : Laki-Laki</h3>
    </div>
    <div class="text-lg-left text-md-center text-xs-left col-lg-4 col-md-6">
      <h3>Metode Konsultasi: <span>Chat via WA</span> </h3>
      <h3>Waktu Konsultasi: <span>20 April 2020</span> </h3>
    </div>
    <div class="col-lg-2 col-md-6 m-auto px-3 py-2">
      <button type="submit" class="btn btn-outline-primary btn-block">Tolak</button>
    </div>
    <div class="col-lg-2 col-md-6 m-auto px-3 py-2">
      <button type="submit" class="btn btn-primary btn-block">Terima</button>
    </div>
  </div>
</div>

<div class="container-fluid content-constraint-body">
  <div class="row list-card">
    <div class="text-lg-left text-md-center text-xs-left col-lg-4 col-md-6">
      <h3>Nama: Hanif Reangga</h3>
      <h3>Jenis Kelamin : Laki-Laki</h3>
    </div>
    <div class="text-lg-left text-md-center text-xs-left col-lg-4 col-md-6">
      <h3>Metode Konsultasi: <span>Chat via WA</span> </h3>
      <h3>Waktu Konsultasi: <span>20 April 2020</span> </h3>
    </div>
    <div class="col-lg-2 col-md-6 m-auto px-3 py-2">
      <button type="submit" class="btn btn-outline-primary btn-block">Tolak</button>
    </div>
    <div class="col-lg-2 col-md-6 m-auto px-3 py-2">
      <button type="submit" class="btn btn-primary btn-block">Terima</button>
    </div>
  </div>
</div>

<div class="container-fluid content-constraint-body">
  <div class="row list-card">
    <div class="text-lg-left text-md-center text-xs-left col-lg-4 col-md-6">
      <h3>Nama: Bocil Cilok</h3>
      <h3>Jenis Kelamin : Laki-Laki</h3>
    </div>
    <div class="text-lg-left text-md-center text-xs-left col-lg-4 col-md-6">
      <h3>Metode Konsultasi: <span>Chat via WA</span> </h3>
      <h3>Waktu Konsultasi: <span>20 April 2020</span> </h3>
    </div>
    <div class="col-lg-2 col-md-6 m-auto px-3 py-2">
      <button type="submit" class="btn btn-outline-primary btn-block">Tolak</button>
    </div>
    <div class="col-lg-2 col-md-6 m-auto px-3 py-2">
      <button type="submit" class="btn btn-primary btn-block">Terima</button>
    </div>
  </div>
</div>

</body>

</html>