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
            <a href="<?php echo base_url(); ?>add-prakerin"><button class="btn btn-info" style="margin-right:90%; width:10%">Add</button></a>
            <span style="font-size:30px;"><b>DATA PRAKERIN</b></span>
            <br><br>
            <table id="myTable" class="table table-striped table-bordered" width="150%" cellspacing="0">
              <thead>
                  <tr>
                    <?php  
                      if (isset($_SESSION['logged_in']) && $this->session->userdata('role')=='siswa') {?>
                      <!-- <th>Id Prakerin</th> -->
                      <th style="text-align:center">Nis</th>
                      <th style="text-align:center">Nama</th>
                      <th style="text-align:center">Tempat Prakerin</th>
                      <th style="text-align:center">Alamat</th>
                      <th style="text-align:center">Kota</th>
                      <th style="text-align:center">Status</th>
                      <th style="text-align:center">Kelas</th>
                      <th style="text-align:center">Jurusan</th>
                      <th style="text-align:center">Aksi</th>
                    <?php }else{?>
                      <!-- <th>Id Prakerin</th> -->
                      <th style="text-align:center">Nis</th>
                      <th style="text-align:center">Nama</th>
                      <th style="text-align:center">Tempat Prakerin</th>
                      <th style="text-align:center">Alamat</th>
                      <th style="text-align:center">Kota</th>
                      <th style="text-align:center">Status</th>
                      <th style="text-align:center">Kelas</th>
                      <th style="text-align:center">Jurusan</th>
                      <th style="text-align:center">Aksi</th>
                      <th style="text-align:center">Persetujuan</th>
                    <?php }  ?>
                  </tr>
              </thead>
              <tbody>
                <?php $nomor_index =0; ?>
                <?php foreach ($prakerin as $key): ?>
                  <tr>
                    <?php  
                      if (isset($_SESSION['logged_in']) && $this->session->userdata('role')=='siswa') {?>
                      <!-- <td><?php //echo $key['id_prakerin']; ?></td> -->
                      <td><?php echo $key['nis']; ?></td>
                      <td nowrap><?php echo $key['nama']; ?></td>
                      <td><?php echo $key['tempat_prakerin']; ?></td>
                      <td><?php echo $key['alamat']; ?></td>
                      <td><?php echo $key['kota']; ?></td>
                      <td>
                        <?php if($key['status']=='reject'){ ?>
                          <span style="color:red"><b>Pengajuan Prakerin Di Tolak Silahkan Ajukan Yang Baru</b></span>
                        <?php }else if($key['status']=='ok'){ ?>
                          <span style="color:green"><b>Pengajuan Prakerin Di Terima</b></span>
                        <?php }else{?>
                          <span style="color:dark"><b>Pending</b></span>
                        <?php }?>
                      </td>
                      <td><?php echo $key['kelas']; ?></td>
                      <td><?php echo $key['jurusan']; ?></td>
                      <td>
                        <?php if($key['status']=='ok' || $key['status']=='reject'){ ?>
                          <a href="<?php echo base_url(); ?>prakerin/edit_prakerin/<?php echo $key['id_prakerin']; ?>/<?php echo $key['tempat_prakerin']; ?>/<?php echo $key['status']; ?>/<?php echo $key['kota']; ?>"><button disabled class="btn btn-warning">Edit</button></a>
                        <?php }else{ ?>
                          <a href="<?php echo base_url(); ?>prakerin/edit_prakerin/<?php echo $key['id_prakerin']; ?>/<?php echo $key['tempat_prakerin']; ?>/<?php echo $key['status']; ?>/<?php echo $key['kota']; ?>"><button class="btn btn-warning">Edit</button></a>
                        <?php } ?>
                      </td>
                    <?php }else{?>
                      <!-- <td><?php //echo $key['id_prakerin']; ?></td> -->
                      <td id="nis"><?php echo $key['nis']; ?></td>
                      <td nowrap><?php echo $key['nama']; ?></td>
                      <td><?php echo $key['tempat_prakerin']; ?></td>
                      <td><?php echo $key['alamat']; ?></td>
                      <td><?php echo $key['kota']; ?></td>
                      <td><?php if ($key['status']=='pending') {?>
                        <span style="color:red"><?php echo $key['status'];?></span>
                      <?php }else{echo $key['status'];} ?>
                      </td>
                      <td><?php echo $key['kelas']; ?></td>
                      <td><?php echo $key['jurusan']; ?></td>
                      <td nowrap>
                        <?php if ($key['status']=='ok') {?>
                          <a target="_blank" href="<?php echo base_url(); ?>prakerin/cetak_surat/<?php echo $key['id_prakerin']; ?>/<?php echo $key['tempat_prakerin']; ?>/<?php echo $key['status']; ?>/<?php echo $key['kota']; ?>"><button class="btn btn-warning">Surat</button></a>
                          <a href="#" data-toggle="modal" onclick="ubahhref(<?php echo $nomor_index?>)" data-target="#myModal"><button class="btn btn-danger" id="sertifikat">Sertifikat</button></a>
                        <?php }else if($key['status']=='reject'){ ?>
                          <span style="color:red"><b>Pengajuan Prakerin Di Tolak</b></span>
                        <?php }else{ ?>
                                <?php if($key['status']=='ok'){ ?>
                                  <a href="<?php echo base_url(); ?>prakerin/edit_prakerin/<?php echo $key['id_prakerin']; ?>"><button disabled class="btn btn-warning">Edit</button></a>  <a href="<?php echo base_url(); ?>prakerin/proses_delete_prakerin/<?php echo $key['id_prakerin']; ?>"><button onclick="return confirm('Are You Sure ?')" class="btn btn-danger">Delete</button></a>
                                <?php }else{ ?>
                                  <a href="<?php echo base_url(); ?>prakerin/edit_prakerin/<?php echo $key['id_prakerin']; ?>"><button class="btn btn-warning">Edit</button></a></a>  <a href="<?php echo base_url(); ?>prakerin/proses_delete_prakerin/<?php echo $key['id_prakerin']; ?>"><button onclick="return confirm('Are You Sure ?')" class="btn btn-danger">Delete</button></a>
                                <?php } ?>
                        <?php } ?>
                        <input type="hidden" id="<?php echo $nomor_index ?>" value="<?php echo $key['id_prakerin']?>">
                                <?php $nomor_index++;?>
                      </td>
                      <td nowrap>
                        <?php if ($key['status']=='ok') {?>
                          <a href="<?php echo base_url(); ?>prakerin/persetujuan_prakerin/<?php echo $key['id_prakerin'];?>/<?php echo $key['nis'];?>"><button  onclick="return confirm('Are You Sure ?')"  disabled class="btn btn-info">Terima</button></a>  <a href="<?php echo base_url(); ?>prakerin/penolakan_prakerin/<?php echo $key['id_prakerin']; ?>/<?php echo $key['nis'];?>"><button onclick="return confirm('Are You Sure ?')" class="btn btn-danger">Tolak</button></a>
                        <?php }else{ ?>
                        <a href="<?php echo base_url(); ?>prakerin/persetujuan_prakerin/<?php echo $key['id_prakerin'];?>/<?php echo $key['nis'];?>"><button onclick="return confirm('Are You Sure ?')"  class="btn btn-info">Terima</button></a>  <a href="<?php echo base_url(); ?>prakerin/penolakan_prakerin/<?php echo $key['id_prakerin']; ?>/<?php echo $key['nis'];?>"><button onclick="return confirm('Are You Sure ?')" class="btn btn-danger">Tolak</button></a>
                        <?php } ?>
                      </td>
                    <?php }  ?>
                  </tr>
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