    <!-- Body -->
    <div class="container-fluid content-constraint-head">
      <h1>Profil Akun</h1>
    </div>
    <div class="container-fluid content-constraint-body">
      <div class="row">
        <div class="col-lg-5  pb-4 text-md-center">
          <div class="Panel-B">
            <div style="overflow: hidden;" class="p-0">
              <img src="<?php echo base_url(); ?>assets/images/Placeholder/Tasya.jpg" alt="" style="width: 700px;">
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

              <div class="form-group col-lg-6 p-0 pl-lg-2">
                <input type="text" class="form-control btn-block" id="nHP" placeholder="No. HP">
              </div>
              
              <div class="form-group col-lg-12 p-0">
                <input type="text" class="form-control btn-block" id="verifikasi" placeholder="Status Akun" disabled>
              </div>
              <div class="form-group col-lg-12 p-0">
                <textarea class="form-control" id="deskripsi" rows="4"></textarea>
                <label class="p-3" for="deskripsi">*Anda harus menambahkan Deskripsi diri anda dan Gelar agar akun dapat diverifikasi oleh Admin</label>
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