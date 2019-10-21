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
            <a href="<?php echo base_url(); ?>add-guru"><button class="btn btn-info" style="margin-right:90%; width:10%">Add</button></a>
            <span style="font-size:30px;"><b>DATA GURU</b></span>
            <br><br>
            <table id="myTable" class="table table-striped table-bordered" width="100%" cellspacing="0">
              <thead>
                  <tr>
                      <th style="text-align: center;">Nip</th>
                      <th style="text-align: center">Nama</th>
                      <th style="text-align: center;">Alamat</th>
                      <th style="text-align: center;">L/P</th>
                      <th style="text-align: center;">No Hp</th>
                      <th style="text-align: center;">Username</th>
                      <th style="text-align: center;">Password</th>
                      <th style="text-align: center;width: 10%">Jurusan</th>
                      <th style="text-align: center;">Role</th>
                      <th style="text-align: center;">Aksi</th>
                  </tr>
              </thead>
              <tbody>
                <?php foreach ($guru as $key): ?>
                  <tr>
                      <td><?php echo $key['nip']; ?></td>
                      <td nowrap><?php echo $key['nama']; ?></td>
                      <td><?php echo $key['alamat']; ?></td>
                      <td><?php echo $key['jenis_kelamin']; ?></td>
                      <td><?php echo $key['no_telepon']; ?></td>
                      <td><?php echo $key['username']; ?></td>
                      <td><?php echo $key['password']; ?></td>
                      <td><?php echo $key['jurusan']; ?></td>
                      <td><?php echo $key['role']; ?></td>
                      <td nowrap><a href="<?php echo base_url(); ?>guru/edit_guru/<?php echo $key['nip']; ?>"><button class="btn btn-warning">Edit</i></button></a>  <a href="<?php echo base_url(); ?>guru/proses_delete_guru/<?php echo $key['nip']; ?>" onclick="return confirm('Are You Sure ?')"><button class="btn btn-danger">Delete</button></a></td>
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
