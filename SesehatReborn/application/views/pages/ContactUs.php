<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Latest compiled and minified CSS -->
        <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script
            src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <!-- Font Poppins -->
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap"
            rel="stylesheet">
        <link
            rel="stylesheet"
            href="<?= base_url('assets/') ?>CSS/Global_Style.css"
            type="text/css">
        <link
            rel="stylesheet"
            href="<?= base_url('assets/') ?>CSS/Dokter_ListJanjian_Style.css"
            type="text/css">
            <link
            rel="stylesheet"
            href="<?= base_url('assets/') ?>CSS/LandingPage_Style.css"
            type="text/css">
        <title>List Akun User</title>
        <style>
            .topnya{
                margin-top: 120px;
            }
        </style>
    </head>

    <body>
        <!-- Navbar -->
        <div class="nav-container">
            <div class="wrapper">
                <nav>
                    <div class="logo">
                        <a href="<?= base_url('') ?>">
                            <img
                                src="<?= base_url('assets/') ?>images/UI/Sesehat Logo.svg"
                                alt="Sesehat"
                                style="height: 60px;">
                        </a>
                    </div>
                    <ul class="menu-navbar" style="margin-bottom: 0px;">
                        <li>
                            <a href="<?= base_url('') ?>" style="color: #8B4E6D; font-weight: 500;">Beranda</a>
                        </li>
                        <li>
                            <a href="<?= base_url('') ?>">Tentang Kami</a>
                        </li>
                        <li>
                            <a href="<?= base_url('') ?>">Kontak Kami</a>
                        </li>
                        <li id="button-login">
                            <a href="<?= base_url('') ?>" style="color: white;">Login</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <!-- Body -->
        <div class="content-constraint-head">
            <h1>List Author</h1>
        </div>
        <div class="container-fluid content-constraint-body">
            <?php foreach ($datalist as $value) {?>
            <div class="row list-card">
                <div class="hero-image">
                        <img
                            src="<?= base_url("assets/Author/") . $value->pict ?>"
                            alt=""
                            style="width: 250px;">
                </div>
                <br>

                <div class="text-lg-left text-md-center text-xs-left col-lg-4 col-md-6 topnya">
                    <h3>Nama:
                    <?php echo $value->Nama;?></h3>
                    <h3>No. HP:
                    <?php echo $value->Nohp;?></h3>
                </div>
                <div class="text-lg-left text-md-center text-xs-left col-lg-4 col-md-6 topnya">
                    <h3>NIM:
                        <span> <?php echo $value->NIM;?></span>
                    </h3>
                    <h3>Tipe Akun:
                        <span>
                        <?php echo $value->body;?>
                        </span>
                    </h3>
                </div>
                
            </div>
            <?php } ?>
        </div>

        <!-- Modal Box -->

        <div
            class="modal fade bd-example-modal-lg"
            tabindex="-1"
            role="dialog"
            aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content p-3">
                    <h2 class="text-center pt-3">Edit Data Akun User</h2>

                    <form>
                        <div class="form-group p-5">
                            <input type="text" class="form-control my-3" id="nama" placeholder="Nama">
                            <input type="text" class="form-control my-3" id="noHP" placeholder="No. HP">
                            <input
                                type="text"
                                class="form-control my-3"
                                id="username"
                                placeholder="Username">
                            <input
                                type="password"
                                class="form-control my-3"
                                id="password"
                                placeholder="Password">
                        </div>
                        <div class="text-center px-1 pb-3">
                            <button type="submit" class="btn btn-primary mr-2" style="width: 120px;">Simpan</button>
                            <button
                                class="btn btn-outline-primary ml-2"
                                data-dismiss="modal"
                                style="width: 120px;">Batal</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>

    </body>

</html>