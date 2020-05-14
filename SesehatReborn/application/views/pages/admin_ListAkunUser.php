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
    <title>List Akun User</title>
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
                        <a href="" style="color: #8B4E6D; font-weight: 700;">List Akun User</a>
                    </li>
                    <li>
                        <a href="<?= base_url('Admin/verifikasi_dokter') ?>">Verifikasi Dokter</a>
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
        <h1>List Akun User</h1>
        <div class="select-custom ml-auto max-box med-box">
            <select name="slct" id="slct">
                <option value="notFiltered" selected="selected">Tidak ada Filter</option>
                <option value="Pasien">Tipe Akun: Pasien</option>
                <option value="Dokter">Tipe Akun: Dokter</option>
            </select>
        </div>
    </div>
    <div class="container-fluid content-constraint-body">
        <?php $no = 1;
        foreach ($datauser as $d) { ?>
            <div class="row list-card">
                <div class="text-lg-left text-md-center text-xs-left col-lg-4 col-md-6">
                    <h3>Nama:
                        <?php echo $d->nama ?></h3>
                    <h3>No. HP:
                        <?php echo $d->nohp ?></h3>
                </div>
                <div class="text-lg-left text-md-center text-xs-left col-lg-4 col-md-6">
                    <h3>Username:
                        <span><?php echo $d->username ?></span>
                    </h3>
                    <h3>Tipe Akun:
                        <span>
                            <?php if ($d->role_id == 1) {
                                echo "Admin";
                            } else if ($d->role_id == 2) {
                                echo "User";
                            } else {
                                echo "Dokter";
                            } ?>
                        </span>
                    </h3>
                </div>
                <div class="col-lg-2 col-md-6 m-auto px-3 py-2">
                    <a type="button" class="btn btn-outline-primary btn-block" href="<?php echo base_url(); ?>Admin/delete/<?php echo $d->id ?>">Hapus</a>
                </div>
                <div class="col-lg-2 col-md-6 m-auto px-3 py-2">
                    <button type="submit" class="btn btn-outline-primary btn-block" data-toggle="modal" data-target=".bd-example-modal-lg">Edit</button>
                </div>
            </div>
        <?php } ?>
    </div>

    <!-- Modal Box -->

    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content p-3">
                <h2 class="text-center pt-3">Edit Data Akun User</h2>

                <form>
                    <div class="form-group p-5">
                        <input type="text" class="form-control my-3" id="nama" placeholder="Nama">
                        <input type="text" class="form-control my-3" id="noHP" placeholder="No. HP">
                        <input type="text" class="form-control my-3" id="username" placeholder="Username">
                        <input type="password" class="form-control my-3" id="password" placeholder="Password">
                    </div>
                    <div class="text-center px-1 pb-3">
                        <button type="submit" class="btn btn-primary mr-2" style="width: 120px;">Simpan</button>
                        <button class="btn btn-outline-primary ml-2" data-dismiss="modal" style="width: 120px;">Batal</button>
                    </div>

                </form>

            </div>
        </div>
    </div>

</body>

</html>