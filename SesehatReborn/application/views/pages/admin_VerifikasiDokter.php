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
  <title>Verifikasi Dokter</title>
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
            <a href="<?= base_url('Admin') ?> " ">List Akun User</a>
          </li>
          <li>
            <a href=" <?= base_url('Admin/verifikasi_dokter') ?>" style="color: #8B4E6D; font-weight: 700;">Verifikasi Dokter</a>
          </li>
          <li>
            <a href="<?= base_url('Admin/profile_akunAdmin') ?>">Profile Akun</a>
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
    <h1>Verifikasi Dokter</h1>
  </div>
  <div class="container-fluid content-constraint-body">
    <div class="row list-card">
      <div class="text-lg-left text-md-center text-xs-left m-md-auto col-lg-4 col-md-6">
        <h3>Nama: Dr. Munap</h3>
        <h3>Jenis Kelamin: Perempuan</h3>
      </div>
      <div class="text-lg-left text-md-center text-xs-left m-md-auto col-lg-5 col-md-6">
        <h3>Username: <span>AyamAyam</span> </h3>
        <h3>Gelar: <span>S2 Psikoterapi UNUN</span> </h3>
      </div>
      <div class="col-lg-3 col-sm-12 m-auto py-2">
        <button type="submit" class="btn btn-outline-primary btn-block">Verifikasi</button>
      </div>
    </div>

  </div>
</body>

</html>