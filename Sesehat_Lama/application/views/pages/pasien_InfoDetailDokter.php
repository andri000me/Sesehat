  <!-- Body -->
  <div class="container-fluid" style="margin-bottom: 30px;">
    <div class="row content-constraint-head">
      <h1>Info Detail Dokter</h1>
    </div>

    <div class="row content-constraint-body">
      <div class="col-lg-8 col-md-12" style="padding: 12px;">
        <div class="Panel-A">
          <div class="row">
            <div class="col">
               <div style="overflow: hidden; height: 350px;">
                  <img class="img-crop" src="<?php echo base_url(); ?>assets/images/Placeholder/Nishino.jpg" alt="">
                </div>
            </div>
            <div class="col" style="padding: 0; margin: auto 0;">
              <ul class="profil-data-list" style=" margin-left: 1.5em;">
                <li>Nama: Nishino</li>
                <li>Gelar: Psikolog Mancing</li>
                <li>Jenis Kelamin: FBI</li>
                <li>Pengalaman: 2 windu</li>
                <li>Kontak: 082277714511</li>
             </ul>
            </div>
          </div>
          <div style="margin-top: 54px;">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit reiciendis quos ex sunt officia est quis beatae suscipit eveniet, voluptas expedita tempora. Cupiditate quo eaque atque pariatur aperiam labore laboriosam! </p>
          </div>
        </div>
      </div>  
          
      <!-- Konteks Menu -->        
      <div class="col-lg-4 col-md-12" style="padding: 12px;">
        <div class="Panel-A">
          <div class="row" style="height: 100%;">
            <form >
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
    
                <input class="btn btn-primary" type="radio" name="tipe_konsul">
                <input class="btn btn-primary" type="radio" name="tipe_konsul">  
              </div>
  
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