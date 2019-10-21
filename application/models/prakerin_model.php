<?php
  class prakerin_model extends CI_Model{
    public function login_admin(){
      $hasil=$this->db->query("SELECT * FROM admin");
      return $hasil->result_array();
    }

    public function login_guru($username,$password){
      $hasil=$this->db->query("SELECT * FROM guru WHERE username='$username' AND password='$password'");
      return $hasil->result_array();
    }

    public function login_siswa($username,$password){
      $hasil=$this->db->query("SELECT * FROM siswa WHERE username='$username' AND password='$password'");
      return $hasil->result_array();
    }

    public function cek_admin(){
      $hasil=$this->db->query("SELECT * FROM admin");
      return $hasil->num_rows();
    }

    public function cek_guru($username,$password){
      $hasil=$this->db->query("SELECT * FROM guru WHERE username='$username' AND password='$password'");
      return $hasil->num_rows();
    }

    public function cek_siswa($username,$password){
      $hasil=$this->db->query("SELECT * FROM siswa WHERE username='$username' AND password='$password'");
      return $hasil->num_rows();
    }

    public function proses_add_guru(){
      $nip = $this->input->post('nip');
      $nama = $this->input->post('nama');
      $alamat = $this->input->post('alamat');
      $no_telp = $this->input->post('telp');
      $jenis_kelamin = $this->input->post('jk');
      $username = $this->input->post('username');
      $password = $this->input->post('pwd');
      $jurusan = $this->input->post('jurusan');
      $role = $this->input->post('role');
      $hasil=$this->db->query("INSERT INTO guru VALUES('$nip','$nama','$alamat','$no_telp','$jenis_kelamin','$username','$password','$jurusan','$role')");
      if($hasil){
        return true;
      }else{
          return false;
      }
    }

    public function getGuru()
    {
      $hasil=$this->db->query("SELECT * FROM guru");
      return $hasil->result_array();
    }

    public function getGuruByNip($nip)
    {
      $hasil=$this->db->query("SELECT * FROM guru WHERE nip='$nip'");
      return $hasil->result_array();
    }

    public function proses_edit_guru($nip)
    {
      $nip = $this->input->post('nip');
      $nama = $this->input->post('nama');
      $alamat = $this->input->post('alamat');
      $no_telp = $this->input->post('telp');
      $jenis_kelamin = $this->input->post('jk');
      $username = $this->input->post('username');
      $password = $this->input->post('pwd');
      $jurusan = $this->input->post('jurusan');
      $role = $this->input->post('role');
      $hasil=$this->db->query("UPDATE guru SET nama='$nama',alamat='$alamat',no_telepon='$no_telp',jenis_kelamin='$jenis_kelamin',username='$username',password='$password',role='$role',jurusan='$jurusan' WHERE nip ='$nip'");
      if($hasil){
        return true;
      }else{
          return false;
      }
    }

    public function proses_delete_guru($nip)
    {
      $hasil=$this->db->query("DELETE FROM guru WHERE nip ='$nip'");
      if($hasil){
        return true;
      }else{
          return false;
      }
    }

    public function getGuruJurusan($jurusan,$nip)
    {
      $hasil=$this->db->query("SELECT * FROM guru WHERE nip='$nip' AND jurusan='$jurusan'");
      return $hasil->result_array(); 
    }

    public function proses_add_siswa(){
      $nis = $this->input->post('nis');
      $nama = $this->input->post('nama');
      $alamat = $this->input->post('alamat');
      $no_telp = $this->input->post('telp');
      $jenis_kelamin = $this->input->post('jk');
      $username = $this->input->post('username');
      $password = $this->input->post('pwd');
      $jurusan = $this->input->post('jurusan');
      $role = $this->input->post('role');
      $hasil=$this->db->query("INSERT INTO siswa VALUES('$nis','$nama','$alamat','$no_telp','$jenis_kelamin','$username','$password','$jurusan','$role','')");
      if($hasil){
        return true;
      }else{
          return false;
      }
    }

    public function getSiswa()
    {
      $hasil=$this->db->query("SELECT * FROM siswa");
      return $hasil->result_array();
    }

    public function getSiswaByNip($nis)
    {
      $hasil=$this->db->query("SELECT * FROM siswa WHERE nis='$nis'");
      return $hasil->result_array();
    }

    public function proses_edit_siswa($nis)
    {
      $nis = $this->input->post('nis');
      $nama = $this->input->post('nama');
      $alamat = $this->input->post('alamat');
      $no_telp = $this->input->post('telp');
      $jenis_kelamin = $this->input->post('jk');
      $username = $this->input->post('username');
      $password = $this->input->post('pwd');
      $jurusan = $this->input->post('jurusan');
      $role = $this->input->post('role');
      $hasil=$this->db->query("UPDATE siswa SET nama='$nama',alamat='$alamat',no_telepon='$no_telp',jenis_kelamin='$jenis_kelamin',username='$username',password='$password',role='$role',jurusan='$jurusan' WHERE nis ='$nis'");
      if($hasil){
        return true;
      }else{
          return false;
      }
    }

    public function proses_delete_siswa($nis)
    {
      $hasil=$this->db->query("DELETE FROM siswa WHERE nis ='$nis'");
      if($hasil){
        return true;
      }else{
          return false;
      }
    }

    public function proses_add_prakerin()
    {
      $nis = $this->input->post('nis');
      $nama = $this->input->post('nama');
      $alamat = $this->input->post('alamat');
      $tempat = $this->input->post('tempat');
      $kota = $this->input->post('kota');
      $tamp1 = $this->input->post('romawi');
      $tamp2 = $this->input->post('kode');
      $tamp3 = $this->input->post('angka');
      $kelas = $tamp1.' '.$tamp2.' '.$tamp3;
      $status = 'pending';
      $jurusan = $this->input->post('jurusan');
      $hasil=$this->db->query("INSERT INTO pkl VALUES(NULL,'$nis','$nama','$tempat','$alamat','$kota','$status','$jurusan','$kelas','$tamp1','$tamp2','$tamp3')");
      $update = $this->db->query("UPDATE siswa SET status='$status' WHERE nis='$nis'");
      if($hasil){
        return true;
      }else{
          return false;
      }
    }

    public function getPrakerinById($id,$tempat,$status,$kota)
    {
      $hasil=$this->db->query("SELECT * FROM pkl WHERE STATUS='$status' AND kota='$kota' HAVING tempat_prakerin='$tempat'");
      return $hasil->result_array();
    }

    public function getPrakerinId($id)
    {
      $hasil = $this->db->query("SELECT * FROM pkl WHERE id_prakerin='$id'");
      return $hasil->result_array();
    }

    public function proses_edit_prakerin($id)
    {
      $nis = $this->input->post('nis');
      $nama = $this->input->post('nama');
      $tempat = $this->input->post('tempat');
      $alamat = $this->input->post('alamat');
      $kota = $this->input->post('kota');
      $status = $this->input->post('status');
      $jurusan = $this->input->post('jurusan');
      $tamp1 = $this->input->post('romawi');
      $tamp2 = $this->input->post('kode');
      $tamp3 = $this->input->post('angka');
      $kelas = $tamp1.' '.$tamp2.' '.$tamp3;
      $hasil=$this->db->query("UPDATE pkl SET nis='$nis',nama='$nama',tempat_prakerin='$tempat',alamat='$alamat',kota='$kota',status='$status', jurusan='$jurusan', kelas='$kelas', romawi='$tamp1', kode='$tamp2', angka='$tamp3' WHERE id_prakerin ='$id'");
      if($hasil){
        return true;
      }else{
          return false;
      }
    }

    public function proses_delete_prakerin($id)
    {
      $hasil=$this->db->query("DELETE FROM pkl WHERE id_prakerin ='$id'");
      $update = $this->db->query("UPDATE siswa SET status='' WHERE nis='$nis'");
      if($hasil){
        return true;
      }else{
          return false;
      }
    }

    public function persetujuan_prakerin($id,$nis)
    {
      $hasil=$this->db->query("UPDATE pkl SET status='ok' WHERE id_prakerin ='$id'");
      $update = $this->db->query("UPDATE siswa SET status='ok' WHERE nis='$nis'");
      if($hasil){
        return true;
      }else{
          return false;
      } 
    }

    public function penolakan_prakerin($id,$nis)
    {
      $hasil=$this->db->query("UPDATE pkl SET status='reject' WHERE id_prakerin ='$id'");
      $update = $this->db->query("UPDATE siswa SET status='reject' WHERE nis='$nis'");
      if($hasil){
        return true;
      }else{
          return false;
      } 
    }

    public function delete_prakerin($nis)
    {
      $hasil = $this->db->query("DELETE FROM pkl WHERE nis='$nis' AND status='pending' OR status='reject'");
      if($hasil){
        return true;
      }else{
          return false;
      }
    }

    public function getPrakerinByNis($nis)
    {
      $hasil=$this->db->query("SELECT * FROM pkl WHERE nis='$nis'");
      return $hasil->result_array();
    }

    public function getPrakerinByNisStatus($nis,$status)
    {
      $hasil=$this->db->query("SELECT * FROM pkl WHERE nis='$nis' AND status='$status'");
      return $hasil->result_array();
    }

    public function getPrakerinByJurusan()
    {
      $jurusan = $this->session->userdata('jurusan');
      $hasil=$this->db->query("SELECT * FROM pkl WHERE jurusan='$jurusan' AND STATUS!='reject'");
      return $hasil->result_array(); 
    }

    public function getDataSiswaPrakerin()
    {
      $jurusan = $this->session->userdata('jurusan');
      $hasil=$this->db->query("SELECT COUNT(nama) AS jumlah FROM siswa WHERE jurusan='$jurusan' AND STATUS!='ok'");
      return $hasil->result_array();
    }

    public function getDataSiswaPrakerinn()
    {
      $jurusan = $this->session->userdata('jurusan');
      $hasil=$this->db->query("SELECT * FROM siswa WHERE jurusan='$jurusan' AND STATUS!='ok'");
      return $hasil->result_array();
    }

    public function getTanggal()
    {
      $hasil = $this->db->query("SELECT * FROM tanggal");
      return $hasil->result_array();
    }

    public function addTanggal()
    {
      $start = $this->input->post('tanggal_mulai');
      $end = $this->input->post('tanggal_selesai');
      $status = 'aktif';
      $hasil = $this->db->query("INSERT INTO tanggal VALUES ('','$start','$end','$status')");
      if ($hasil) {
        return true;
      }else{
        return false;
      }
    }

    public function getTanggalId($id)
    {
      $hasil = $this->db->query("SELECT * FROM tanggal WHERE waktu_id='$id'");
      return $hasil->result_array();
    }

    public function editTanggal($id)
    {
      $start = $this->input->post('tanggal_mulai');
      $end = $this->input->post('tanggal_selesai');
      $status = $this->input->post('status');
      $hasil = $this->db->query("UPDATE tanggal SET tanggal_mulai='$start',tanggal_selesai='$end',status='$status' WHERE waktu_id='$id'");
      
      if ($hasil) {
        return true;
      }else{
        return false;
      }
    }

    public function deleteTanggal($id)
    {
      $hasil = $this->db->query("DELETE FROM tanggal WHERE waktu_id='$id'");
      return $hasil->result_array();
    }

  }
?>
