    <!-- Body -->
    <div class="container-fluid" style="margin-bottom: 56px;">
        <div class="sign-box content-constraint-head">
            <h1>Registrasi Akun</h1>

            <div class="card mx-auto bg-white">
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" id="username" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="noHP" pattern="^[0–9]$"  placeholder="No. HP">
                        </div>
                        <div class="select-custom">
                            <select name="slct" id="slct">
                                <option selected disabled>Daftar Sebagai . . .</option>
                                <option value="Pasien">Pasien</option>
                                <option value="Dokter">Dokter</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block" style="margin-top: 100px;">Daftar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>  