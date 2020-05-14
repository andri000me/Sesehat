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
  <link rel="stylesheet" href="<?= base_url('assets/') ?>CSS/ProfileAkun.css" type="text/css">
  <title>Profile Akun</title>
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
            <a href="<?= base_url('User') ?>">Cari Dokter</a>
          </li>
          <li>
            <a href=" #ttg-kami">Status Konsultasi</a>
          </li>
          <li>
            <a href="#ktk-kami">Status Jadwal</a>
          </li>
          <li>
            <a href="<?= base_url('User/profile_akun') ?> " style="color: #8B4E6D; font-weight: 700;">Profile Akun</a>
          </li>
          <li id="button-login">
            <a href="<?= base_url('Auth/logout') ?>" style="color: white;">Logout</a>
          </li>
        </ul>
      </nav>
    </div>
  </div>

  <!-- Body -->
  <div class="container-fluid content-constraint-head">
    <h1>Profil Akun</h1>
  </div>
  <div class="container-fluid content-constraint-body">
    <div class="row">
      <div class="col-lg-5  pb-4 text-md-center">
        <div class="Panel-B">
          <div style="overflow: hidden;" class="p-0" id="gambar_profile">
            <img src="<?php echo base_url(); ?>assets/images/Placeholder/doctor1.jpg" alt="" style="width: 700px;">
          </div>
        </div>
      </div>

      <!-- Form -->
      <div class="col-lg-7">
        <div class="Panel-B">
          <form class="row m-md-3" style="height: 100%;">
            <div class="form-group col-lg-6 p-0 pr-lg-2">
              <input type="text" class="form-control btn-block" id="nama" placeholder="Nama">
            </div>
            <div class="form-group col-lg-6 p-0 pl-lg-2">
              <input type="text" class="form-control btn-block" id="gelar" placeholder="Gelar">
            </div>

            <div class="form-group col-lg-6 p-0 pr-lg-2">
              <input type="text" class="form-control btn-block" id="jenisK" placeholder="Jenis Kelamin">
            </div>

            <div class="form-group col-lg-6 p-0 pr-lg-2">
              <input type=" text" class="form-control btn-block" id="nHP" placeholder="No. HP">
            </div>

            <div class="form-group col-lg-12 p-0">
              <input type="text" class="form-control btn-block" id="verifikasi" placeholder="Status Akun" disabled>
            </div>
            <div class="form-group col-lg-12 p-0">
              <textarea class="form-control" id="deskripsi" rows="4"></textarea>
              <label class="p-3" for="deskripsi">Silahkan tambahkan deskripsi singkat anda</label>
            </div>

            <div class="form-group col-lg-12 p-0 text-right">
              <button type="submit" class="btn btn-outline-primary">Simpan Profil</button>
            </div>

          </form>
        </div>
      </div>


    </div>
  </div>
</body>

</html>