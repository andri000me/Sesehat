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

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/CSS/Global_Style.css" type="text/css">
  <?php
  if ($styles != "no") {
    
    foreach ($styles as $css) { 
       
      echo "<link rel='stylesheet' href='" . base_url() . "assets/CSS/" . $css . ".css' type='text/css'>";
    }
  }
    
    
  ?>

  <link rel="icon" type="image/ico" href="<?php echo base_url(); ?>assets/images/UI/Sesehat Logo 2.svg" />
  <title><?= $title ?> - Sesehat</title>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-xl navbar-white bg-white fixed-top <?php if($title != "Welcome"){echo 'shadow-sm';}?>">
    <a class="navbar-brand" href="#">
        <img src="<?php echo base_url(); ?>assets/images/UI/Sesehat Logo.svg" alt="Sesehat Home" style="height: 64px;">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">
        <img src="<?php echo base_url();?>assets/images/UI/ham-menu.svg" alt="Ham">
        </span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
            <a class="nav-link" href="#">Cari Dokter</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Status Konsultasi</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Status Jadwal</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Profil Akun</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- Navbar End -->
