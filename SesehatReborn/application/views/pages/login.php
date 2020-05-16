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
    <link rel="stylesheet" href="<?= base_url('assets/') ?>CSS/All_Login-Register_Style.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>CSS/FormInput_Style.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>CSS/Global_Style.css" type="text/css">
    <title>Login</title>
    <script>
        $(document).ready(function(){
            $("h1").click(function(){
                $("h1").hide();
            });
        });
    </script>
</head>

<body>
    <!-- Navbar -->
    <div class="nav-container">
        <div class="wrapper">
            <nav>
                <div class="logo">
                    <a href="<?= base_url('Auth') ?>">
                        <img src="<?= base_url('assets/') ?>images/UI/Sesehat Logo.svg" alt="Sesehat" style="height: 60px;">
                    </a>
                </div>
            </nav>
        </div>
    </div>
    <!-- Body -->
    <div class="container-fluid">
        <div class="sign-box content-constraint-head">
            <h1>Login</h1>
            <?= $this->session->flashdata('message'); ?>
            <div class="card mx-auto bg-white">
                <div class="card-body">
                    <form method="POST" action="<?= base_url('Auth/login') ?>">
                        <div class="form-group">
                            <input type="text" class="form-control" id="username" placeholder="Username" name="username">
                            <?= form_error('username', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                            <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <!-- <div class="select-custom">
                            <select name="slct" id="slct">
                                <option selected disabled>Login Sebagai . . .</option>
                                <option value="Pasien">Pasien</option>
                                <option value="Dokter">Dokter</option>
                                <option value="Admin">Admin</option>
                            </select>
                        </div> -->
                        <button type="submit" class="btn btn-primary btn-block" style="margin-top: 100px;">Login</button>
                    </form>
                </div>
            </div>

            <p>Belum memiliki akun sesehat? <span><a href="<?= base_url('Auth/register') ?>">Daftar</a></span></p>
        </div>
    </div>
</body>

</html>