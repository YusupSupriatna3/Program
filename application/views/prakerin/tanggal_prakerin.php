<div class="feature">
    <div class="container">
      <div class="text-center">
        <div class="col-md-12">
          <div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <!-- <i class="fa fa-book"></i> -->
            <br><br><br>
            <?php
      			   if (!empty($this->session->flashdata('msg'))) {
          				$message = $this->session->flashdata('msg');
          				?>
          				<div class="alert alert-<?php echo $message['class']?>" role="alert" >
          					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          					<?php echo $message['message'] ?>
          				</div>
      			<?php } ?>
            <a href="<?php echo base_url(); ?>add-tanggal-prakerin"><button class="btn btn-info" style="margin-right:90%; width:10%">Add</button></a>
            <span style="font-size:30px;"><b>DATA TANGGAL PRAKERIN</b></span>
            <br><br>
            <table id="myTable" class="table table-striped table-bordered" width="150%" cellspacing="0">
              <thead>
                  <tr>
                      <th style="text-align:center">No</th>
                      <th style="text-align:center">Tanggal Mulai</th>
                      <th style="text-align:center">Tanggal Selesai</th>
                      <th style="text-align:center">Tanggal Selesai</th>
                      <th style="text-align:center">Aksi</th>
                  </tr>
              </thead>
              <tbody>
                <?php $nomor_index =1; ?>
                <?php foreach ($tgl as $key): ?>
                  <tr>
                      <td><?php echo $nomor_index; ?></td>
                      <td nowrap><?php echo $key['tanggal_mulai']; ?></td>
                      <td><?php echo $key['tanggal_selesai']; ?></td>
                      <td><?php echo $key['status']; ?></td>
                      <td>
                      <a href="<?php echo base_url(); ?>prakerin/edit_tanggal_prakerin/<?php echo $key['waktu_id']; ?>"><button class="btn btn-warning">Edit</button></a> 
                      <a href="<?php echo base_url(); ?>prakerin/delete_tanggal_prakerin/<?php echo $key['waktu_id']; ?>"><button onclick="return confirm('Are You Sure ?')" class="btn btn-danger">Delete</button></a>
                      </td>
                    </tr>
                  <?php $nomor_index++;?>
                <?php endforeach; ?>
              </tbody>
          </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  </section>
  <div id="myModal" class="modal fade" role="dialog" width="50px;">
    <div class="modal-dialog">
      <!-- konten modal-->
      <div class="modal-content">
        <!-- heading modal -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Cetak Sertifikat Prakerin</h4>
        </div>
        <!-- body modal -->
        <div class="modal-body" style="text-align:center">
              <a id="depan" target="_blank"><button class="btn btn-danger">Sertifikat Depan</button></a>
              <a id="belakang" target="_blank"><button class="btn btn-danger">Sertifikat Belakang</button></a>
        </div>
        <!-- footer modal -->
        <div class="modal-footer">
          <button type="button" class="btn btn-info" data-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>
  <br><br><br>
  <script>
    function ubahhref(index) {
			    var $id = $('#'+index).val(); // Find the text

			    // $('#email').val($email);
			    // $('#status').val($text);
          // console.log();
          $("#depan").attr("href","<?php echo base_url(); ?>prakerin/cetak_sertifikat_depan/"+$id);
          $("#belakang").attr("href","<?php echo base_url(); ?>prakerin/cetak_sertifikat_belakang/"+$id);
    }
    // var base_url = "<?php echo base_url(); ?>";
		// 	$("#sertifikat").click(function() {
		// 	    var $id = $('#id_prakerin').val(); // Find the text

		// 	    // $('#email').val($email);
		// 	    // $('#status').val($text);
    //       console.log();
    //       $("#depan").attr("href","<?php echo base_url(); ?>prakerin/cetak_sertifikat_depan/"+$id);
    //       $("#belakang").attr("href","<?php echo base_url(); ?>prakerin/cetak_sertifikat_belakang/"+$id);
		// 	});
  </script>