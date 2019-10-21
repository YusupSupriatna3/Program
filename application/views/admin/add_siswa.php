<div class="feature">
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
      </div>
      <div class="col-sm-4">
        <h3 align="center" class="page-header">Form Data Siswa</h3>
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
            <form id="siswa" action="<?php echo base_url(); ?>proses-add-siswa" method="post">
              <div class="form-group">
                <label for="nis">Nis</label>
                <input type="text" class="form-control" id="nis" placeholder="Enter Nis" name="nis">
                <label for="nis" class="error"></label>
              </div>
              <div class="form-group">
                <label for="nama">Nama</label>
                <input onkeyup="validasiNama()" type="text" class="form-control" id="nama" placeholder="Enter Nama" name="nama">
                <label for="nama" class="error"></label>
              </div>
              <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea onkeyup="validasiAlamat()" class="form-control" id="alamat" name="alamat" rows="4" cols="50"></textarea>
                <label for="alamat" class="error"></label>
              </div>
              <div class="form-group">
                <label for="telp">No Telepon</label>
                <input type="text" class="form-control" id="telp" placeholder="Enter Telepon" name="telp">
                <label for="telp" class="error"></label>
              </div>
              <div class="form-group">
                <label for="jk">Jenis Kelamin</label>&nbsp&nbsp
                <input type="radio"id="jk" name="jk" value="L">&nbsp&nbsp<span>Laki - Laki</span>&nbsp&nbsp
                <input type="radio"id="jk" name="jk" value="P">&nbsp&nbsp<span>Perempuan</span>
                <label for="jk" class="error"></label>
              </div>
              <div class="form-group">
                <label for="username">Username</label>
                <input onkeyup="validasiUsername()" type="text" class="form-control" id="username" placeholder="Enter username" name="username">
                <label for="username" class="error"></label>
              </div>
              <div class="form-group">
                <label for="pwd">Password</label>
                <input onkeyup="validasiPassword()" type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                <label for="pwd" class="error"></label>
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
                <label for="role">Role :</label>
                <select class="form-control" name="role">
                  <option value="siswa">Siswa</option>
                </select>
              </div>
              <div class="form-group">
                <button style="margin-left:74%;" type="submit" class="btn btn-info">Add Siswa</button>
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
</section>
</section>
