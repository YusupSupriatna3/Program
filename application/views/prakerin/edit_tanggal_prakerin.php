<div class="feature">
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
      </div>
      <div class="col-sm-4">
        <h3 align="center" class="page-header">Form Ubah Data Tanggal Prakerin</h3>
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
            <form id="prakerin" action="<?php echo base_url(); ?>prakerin/proses_edit_tanggal_prakerin/<?php echo $tgl[0]['waktu_id']; ?>" method="post">
              <div class="form-group">
                <label for="tanggal_mulai">Tanggal Mulai</label>
                <input type="date" class="form-control" id="tanggal_mulai" placeholder="Masukkan Tanggal Mulai" name="tanggal_mulai" value="<?php echo $tgl[0]['tanggal_mulai']?>">
                <label for="tanggal_mulai" class="error"></label>
              </div>
              <div class="form-group">
                <label for="tanggal_selesai">Tanggal Selesai</label>
                <input type="date" class="form-control" id="tanggal_selesai" placeholder="Masukkan Tanggal Selesai" name="tanggal_selesai" value="<?php echo $tgl[0]['tanggal_selesai']?>">
                <label for="tanggal_selesai" class="error"></label>
              </div>
              <div class="form-group">
                <label for="status">Status</label>
                    <select class="form-control" name="status">
                        <option <?php if ($tgl[0]['status']=='aktif') {
                            echo "selected";
                        } ?> value="aktif">Aktif</option>
                        <option <?php if ($tgl[0]['status']=='tidak aktif') {
                            echo "selected";
                        } ?> value="tidak aktif">Tidak Aktif</option>
                    </select>
                <label for="tanggal_selesai" class="error"></label>
              </div>
              <div class="form-group">
                <button style="margin-left:42%;" type="submit" class="btn btn-info">Ubah Tanggal Prakerin</button>
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
