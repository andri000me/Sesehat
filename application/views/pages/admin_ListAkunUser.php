    <!-- Body -->
    <div class="content-constraint-head">
      <h1>List Akun User</h1>
      <div class="select-custom ml-auto max-box med-box">
        <select name="slct" id="slct">
            <option value="notFiltered" selected>Tidak ada Filter</option>
            <option value="Pasien">Tipe Akun: Pasien</option>
            <option value="Dokter">Tipe Akun: Dokter</option>
        </select>
    </div>
    </div>
    <div class="container-fluid content-constraint-body">
      <div class="row list-card">
        <div class="text-lg-left text-md-center text-xs-left col-lg-4 col-md-6">
          <h3>Nama: Siayam Petualang</h3>
          <h3>No. HP: 0921142069</h3>
        </div>
        <div class="text-lg-left text-md-center text-xs-left col-lg-4 col-md-6">
          <h3>Username: <span>Yamyamtomyam</span> </h3>
          <h3>Tipe Akun: <span>Pasien</span> </h3>
        </div>
        <div class="col-lg-2 col-md-6 m-auto px-3 py-2">
          <button type="submit" class="btn btn-outline-primary btn-block">Hapus</button>
        </div>
        <div class="col-lg-2 col-md-6 m-auto px-3 py-2">
          <button type="submit" class="btn btn-outline-primary btn-block" data-toggle="modal" data-target=".bd-example-modal-lg">Edit</button>
        </div>
      </div>
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
            <div class="text-center px-1 pb-3" >
              <button type="submit" class="btn btn-primary mr-2" style="width: 120px;">Simpan</button>
              <button class="btn btn-outline-primary ml-2" data-dismiss="modal" style="width: 120px;">Batal</button>
            </div>
            
          </form>
        </div>
      </div>
    </div>

  
</body>
</html>   