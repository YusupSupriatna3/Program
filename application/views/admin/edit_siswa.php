<div class="feature">
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
      </div>
      <div class="col-sm-4">
        <h3 align="center" class="page-header">Form Edit Siswa</h3>
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
            <form id="editsiswa" action="<?php echo base_url(); ?>siswa/proses_edit_siswa/<?php echo $this->uri->segment(3); ?>" method="post">
              <?php foreach ($siswa as $key): ?>
                <div class="form-group">
                  <label for="nis">Nis</label>
                  <input disabled type="text" class="form-control" id="nis" placeholder="Enter Nis" name="nis" value="<?php echo $key['nis']; ?>">
                  <input type="hidden" class="form-control" id="nis" placeholder="Enter Nis" name="nis" value="<?php echo $key['nis']; ?>">
                  <label for="nis" class="error"></label>
                </div>
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input onkeyup="validasiNama()" type="text" class="form-control" id="nama" placeholder="Enter Nama" name="nama" value="<?php echo $key['nama']; ?>">
                  <label for="nama" class="error"></label>
                </div>
                <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <textarea onkeyup="validasiAlamat()" class="form-control" id="alamat" name="alamat" rows="4" cols="50"><?php echo $key['alamat']; ?></textarea>
                  <label for="alamat" class="error"></label>
                </div>
                <div class="form-group">
                  <label for="telp">No Telepon</label>
                  <input type="text" class="form-control" id="telp" placeholder="Enter Telepon" name="telp" value="<?php echo $key['no_telepon']; ?>">
                  <label for="telp" class="error"></label>
                </div>
                <div class="form-group">
                  <label for="jk">Jenis Kelamin</label>&nbsp&nbsp
                  <input type="radio"id="jk" name="jk" value="L" <?php if ($key['jenis_kelamin']=='L') {
                      echo "checked";
                    } ?>>&nbsp&nbsp<span>Laki - Laki</span>&nbsp&nbsp
                    <input type="radio"id="jk" name="jk" value="P" <?php if ($key['jenis_kelamin']=='P') {
                      echo "checked";
                    } ?>>&nbsp&nbsp<span>Perempuan</span>
                    <label for="jk" class="error"></label>
                </div>
                <div class="form-group">
                  <label for="username">Username</label>
                  <input onkeyup="validasiUsername()" type="text" class="form-control" id="username" placeholder="Enter username" name="username" value="<?php echo $key['username']; ?>">
                  <label for="username" class="error"></label>
                </div>
                <div class="form-group">
                  <label for="pwd">Password</label>
                  <input onkeyup="validasiPassword()" type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" value="<?php echo $key['password']; ?>">
                  <label for="pwd" class="error"></label>
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
                  <label for="role">Role :</label>
                  <select class="form-control" name="role">
                    <option value="siswa" <?php if ($key['role']=='siswa') {
                        echo "selected";
                      } ?>>Siswa</option>
                  </select>
                </div>
                <div class="form-group">
                  <button style="margin-left:74%;" type="submit" class="btn btn-info">Edit Siswa</button>
                </div>
              <?php endforeach; ?>
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