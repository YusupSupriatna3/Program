<div class="feature">
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
      </div>
      <div class="col-sm-4">
        <h3 align="center" class="page-header">Please Enter Your Account</h3>
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
            <form id="login" action="<?php echo base_url(); ?>proses_login" method="post">
              <div class="form-group">
                <label for="username">Username :</label>
                <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
                <label for="username" class="error"></label>
              </div>
              <div class="form-group">
                <label for="pwd">Password :</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                <label for="pwd" class="error"></label>
              </div>
              <!-- <div class="form-group">
                <label for="auth">Login as :</label>
                <select class="form-control" name="auth" id="auth">
                  <option value="admin">Admin</option>
                  <option value="guru">Guru</option>
                  <option value="siswa">Siswa</option>
                </select>
              </div> -->
              <label for="auth" class="error"></label>
              <div class="form-group" id="jurusan">
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
                <button style="margin-left:80%;" type="submit" class="btn btn-info">Login</button>
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