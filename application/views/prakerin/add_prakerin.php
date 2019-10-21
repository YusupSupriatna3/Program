<div class="feature">
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
      </div>
      <div class="col-sm-4">
        <h3 align="center" class="page-header">Form Tambah Data Prakerin</h3>
        <div class="panel panel-default">
          <div class="panel-heading">
            <?php
            if (!empty($this->session->flashdata('msg'))) {
              $message = $this->session->flashdata('msg');
              ?>
              <div class="alert alert-<?php echo $message['class']?>" role="alert" >
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <?php echo $message['message'] ?>
              </div>
            <?php } ?>
          </div>
          <div class="panel-body">
            <form id="prakerin" action="<?php echo base_url(); ?>proses-add-prakerin" method="post">
              <div class="form-group">
                <label for="nis">Nis</label>
                <input type="text" class="form-control" id="nis" placeholder="Masukkan Nis" name="nis">
                <label for="nis" class="error"></label>
              </div>
              <div class="form-group">
                <label for="nama">Nama</label>
                <input onkeyup="validasiNama()" type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama">
                <label for="nama" class="error"></label>
              </div>
              <div class="form-group">
                <label for="tempat">Tempat Prakerin</label>
                <input onkeyup="validasiNama()" type="text" class="form-control" id="tempat" placeholder="Masukkan Tempat Prakerin" name="tempat">
                <label for="tempat" class="error"></label>
              </div>
              <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea onkeyup="validasiAlamat()" id="alamat" class="form-control" name="alamat" rows="4" cols="50"></textarea>
                <label for="alamat" class="error"></label>
              </div>
              <div class="form-group">
                <label for="kota">Kota</label>
                <input onkeyup="validasiKota()" id="kota" class="form-control" name="kota" placeholder="Masukkan Kota">
                <label for="kota" class="error"></label>
              </div>
              <div class="form-group">
                <label for="kelas">Kelas</label>
                <input disabled type="text" value="XI" style="width: 20px;">
                <select name="kode" style="width: 50px;">
                  <option value="TKJ">TKJ</option>
                  <option value="TEI">TEI</option>
                  <option value="TKR">TKR</option>
                  <option value="PB">PB</option>
                  <option value="TGB">TGB</option>
                  <option value="TB">TB</option>
                </select>
                <select name="angka" style="width: 50px;">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                <input type="hidden" name="romawi" value="XI">
              </div>
              <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <select class="form-control" name="jurusan">
                  <option value="Teknik Komputer Jaringan">Teknik Komputer Jaringan</option>
                  <option value="Teknik Elektronik Industri">Teknik Elektronik Industri</option>
                  <option value="Teknik Kendaraan Ringan">Teknik Kendaraan Ringan</option>
                  <option value="Perbankan">Perbankan</option>
                  <option value="Teknik Gambar Bangunan">Teknik Gambar Bangunan</option>
                  <option value="Tata Boga">Tata Boga</option>
                </select>
              </div>
              <div class="form-group">
                <button style="margin-left:67%;" type="submit" class="btn btn-info">Add Prakerin</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
      </div>
    </div>
  </div>
</div>
<br><br><br>
</section>
</section>
