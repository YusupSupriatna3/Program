<div class="feature">
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
      </div>
      <div class="col-sm-4">
        <h3 align="center" class="page-header">Form Edit Prakerin</h3>
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
              <?php foreach ($prakerin as $key): ?>
              <form id="editprakerin" action="<?php echo base_url(); ?>prakerin/proses_edit_prakerin/<?php echo $key['id_prakerin']; ?>/<?php echo $key['tempat_prakerin']; ?>/<?php echo $key['status']; ?>/<?php echo $key['kota']; ?>" method="post">
                <div class="form-group">
                  <label for="nis">Nis</label>
                  <input disabled type="text" class="form-control" id="nis" placeholder="Masukkan Nis" name="nis" value="<?php echo $key['nis']; ?>">
                  <input type="hidden" class="form-control" id="nis" placeholder="Masukkan Nis" name="nis" value="<?php echo $key['nis']; ?>">
                  <label for="nis" class="error"></label>
                </div>
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input onkeyup="validasiNama()" type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama" value="<?php echo $key['nama']; ?>">
                  <label for="nama" class="error"></label>
                </div>
                <div class="form-group">
                  <label for="tempat">Tempat Prakerin</label>
                  <input onkeyup="validasiNama()" type="text" class="form-control" id="tempat" placeholder="Masukkan Tempat Prakerin" name="tempat" value="<?php echo $key['tempat_prakerin']; ?>">
                  <label for="tempat" class="error"></label>
                </div>
                <div class="form-group">
                  <label for="alamat">Alamat Prakerin</label>
                  <textarea onkeyup="validasiAlamat()" class="form-control" name="alamat" id="alamat" rows="4" cols="50"><?php echo $key['alamat']; ?></textarea>
                  <label for="alamat" class="error"></label>
                </div>
                <div class="form-group">
                  <label for="kota">Kota</label>
                  <input onkeyup="validasiKota()" type="text" class="form-control" id="kota" placeholder="Masukkan Kota" name="kota" value="<?php echo $key['kota']; ?>">
                  <label for="kota" class="error"></label>
                </div>
                <div class="form-group">
                  <label for="status">Status</label>
                  <input disabled type="text" class="form-control" id="status" placeholder="Masukkan Status" name="status" value="<?php echo $key['status']; ?>">
                  <input type="hidden" class="form-control" id="status" placeholder="Masukkan Status" name="status" value="<?php echo $key['status']; ?>">
                  <label for="status" class="error"></label>
                </div>
                <div class="form-group">
                <label for="kelas">Kelas</label>
                <input disabled type="text" value="XI" style="width: 20px;">
                <select name="kode" style="width: 50px;">
                  <option value="TKJ" <?php if ($key['kode']=='TKJ') {
                        echo "selected";
                      } ?>>TKJ</option>
                  <option value="TEI" <?php if ($key['kode']=='TEI') {
                        echo "selected";
                      } ?>>TEI</option>
                  <option value="TKR" <?php if ($key['kode']=='TKR') {
                        echo "selected";
                      } ?>>TKR</option>
                  <option value="PB" <?php if ($key['kode']=='PB') {
                        echo "selected";
                      } ?>>PB</option>
                  <option value="TGB" <?php if ($key['kode']=='TGB') {
                        echo "selected";
                      } ?>>TGB</option>
                  <option value="TB" <?php if ($key['kode']=='TB') {
                        echo "selected";
                      } ?>>TB</option>
                </select>
                <select name="angka" style="width: 50px;">
                  <option value="1" <?php if ($key['angka']=='1') {
                        echo "selected";
                      } ?>>1</option>
                  <option value="2" <?php if ($key['angka']=='2') {
                        echo "selected";
                      } ?>>2</option>
                  <option value="3" <?php if ($key['angka']=='3') {
                        echo "selected";
                      } ?>>3</option>
                  <option value="4" <?php if ($key['angka']=='4') {
                        echo "selected";
                      } ?>>4</option>
                  <option value="5" <?php if ($key['angka']=='5') {
                        echo "selected";
                      } ?>>5</option>
                </select>
                <input type="hidden" name="romawi" value="XI">
              </div>
                <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <select class="form-control" name="jurusan">
                  <option value="Teknik Komputer Jaringan" <?php if ($key['jurusan']=='Teknik Komputer Jaringan') {
                        echo "selected";
                      } ?>>Teknik Komputer Jaringan</option>
                  <option value="Teknik Elektronik Industri" <?php if ($key['jurusan']=='Teknik Elektronik Industri') {
                        echo "selected";
                      } ?>>Teknik Elektronik Industri</option>
                  <option value="Teknik Kendaraan Ringan" <?php if ($key['jurusan']=='Teknik Kendaraan Ringan') {
                        echo "selected";
                      } ?>>Teknik Kendaraan Ringan</option>
                  <option value="Perbankan" <?php if ($key['jurusan']=='Perbankan') {
                        echo "selected";
                      } ?>>Perbankan</option>
                  <option value="Teknik Gambar Bangunan" <?php if ($key['jurusan']=='Teknik Gambar Bangunan') {
                        echo "selected";
                      } ?>>Teknik Gambar Bangunan</option>
                  <option value="Tata Boga" <?php if ($key['jurusan']=='Tata Boga') {
                        echo "selected";
                      } ?>>Tata Boga</option>
                </select>
              </div>
                <div class="form-group">
                  <button style="margin-left:67%;" type="submit" class="btn btn-info">Edit Prakerin</button>
                </div>
                </form>
              <?php endforeach; ?>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
      </div>
    </div>
  </div>
</div>
</section>
</section>