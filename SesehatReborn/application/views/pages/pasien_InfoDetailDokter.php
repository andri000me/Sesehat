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
  <link rel="stylesheet" href="<?= base_url('assets/') ?>CSS/Pasien_InfoDokter_Style.css" type="text/css">
  <title>Info Dokter</title>
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
            <a href="#" style="color: #8B4E6D; font-weight: 700;">Cari Dokter</a>
          </li>
          <li>
            <a href="#ttg-kami">Status Konsultasi</a>
          </li>
          <li>
            <a href="#ktk-kami">Status Jadwal</a>
          </li>
          <li>
            <a href="#ktk-kami">Profile Akun</a>
          </li>
          <li id="button-login">
            <a href="<?= base_url('Auth/logout') ?>" style="color: white;">Logout</a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
  <!-- Body -->
  <div class="container-fluid" style="margin-bottom: 30px;">
    <div class="row content-constraint-head">
      <h1>Info Detail Dokter</h1>
    </div>

    <div class="profile-container">
      <div class="row content-constraint-body">
        <div class="col-lg-8 col-md-12" style="padding: 12px;">
          <div class="Panel-A">
            <div class="row">
              <div class="col">
                <div style="overflow: hidden; height: 350px;">
                  <img class="img-crop" src="<?php echo base_url(); ?>assets/images/Placeholder/doctor1.jpg" alt="">
                </div>
              </div>
              <div class="col" style="padding: 0; margin: auto 0;">
                <ul class="profil-data-list" style=" margin-left: 1.5em;">
                  <li>Nama: Dr.Susana</li>
                  <li>Gelar: S2 Psikologi ITB</li>
                  <li>Jenis Kelamin: Perempuan</li>
                  <li>Pengalaman: 2 Tahun</li>
                  <li>Kontak: 082277714511</li>
                </ul>
              </div>
            </div>
            <div style="margin-top: 54px;">
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit reiciendis quos ex sunt officia est quis beatae suscipit eveniet, voluptas expedita tempora. Cupiditate quo eaque atque pariatur aperiam labore laboriosam! </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br>
    <!-- Konteks Menu -->
    <div class="jadwal-container">
      <div class="col-lg-4 col-md-12" style="padding: 12px;">
        <div class="Panel-A">
          <div class="row" style="height: 100%;">
            <form>
              <div>
                <h2 style="margin-top: 5px;">Pilih Jadwal Konsultasi</h2>
              </div>

              <div class="col-12">
                <div class="select-custom">
                  <select name="slct" id="slct">
                    <option selected disabled>Pilih Waktu . . .</option>
                    <option value="1200 4/04/20">12:00 4 Maret 2020</option>
                    <option value="700 25/04/20">7:00 25 April 2020</option>
                    <option value="1600 21/06/20">16:00 21 Juni 2020</option>
                  </select>
                </div>
                <br>
                <div>
                  <input class="btn btn-primary" type="radio" name="tipe_konsul">
                  <label for="male">Via Whatsapp</label>
                  <input class="btn btn-primary" type="radio" name="tipe_konsul">
                  <label for="male">Ketemuan Langsung</label>
                </div>
                <br>

                <div class="col-12">
                  <button type="submit" class="btn btn-primary btn-block">Pesan Konsultasi</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>