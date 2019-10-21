<?php
  function tgl_indo($tanggal){
  $bulan = array (
    1 =>   'Januari',
    'Februari',
    'Maret',
    'April',
    'Mei',
    'Juni',
    'Juli',
    'Agustus',
    'September',
    'Oktober',
    'November',
    'Desember'
  );
  $pecahkan = explode('-', $tanggal);
  
  // variabel pecahkan 0 = tanggal
  // variabel pecahkan 1 = bulan
  // variabel pecahkan 2 = tahun
 
  return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}
 
// echo tgl_indo(date('Y-m-d')); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Surat Prakerin</title>
<link rel="shortcut icon" href="assets/images/smk.ico">
</head>

<body>
  <table align="center" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td align="center" rowspan="5"><img height="100px" src="assets/images/logo_banjar.png"></td>
    <td align="center"><b>PEMERINTAH DAERAH PROVINSI JAWA BARAT</b></td>
  </tr>
  <tr>
    <td align="center"><b>DINAS PENDIDIKAN</b></td>
  </tr>
  <tr>
    <td align="center"><b>SMK NEGERI 2 BANJAR</b></td>
  </tr>
  <tr>
    <td align="center"><span>Jalan Raya Banjar &mdash; Ciamis Dsn. Cipadung Purwaharja Kota Banjar 46331</span></td>
  </tr>
  <tr>
    <td align="center"><span>Tlp. (0265) 744356 Fax. (0265) 744356 email : smkn2banjar@yahoo.co.id</span></td>
  </tr>
</table>
<hr width="80%">
<table  width="80%" align="center" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td></td>
    <td>Banjar, <?php echo tgl_indo(date('Y-m-d')); ?></td>
  </tr>
  <tr>
    <td>Nomor: 421.5/<?php if ($guru[0]['jurusan']=='Teknik Komputer Jaringan') {
      echo "01-Tkj";
    }elseif ($guru[0]['jurusan']=='Teknik Elektronik Industri') {
      echo "02-Tei";
    }elseif ($guru[0]['jurusan']=='Teknik Kendaraan Ringan') {
      echo "03-Tkr";
    }elseif ($guru[0]['jurusan']=='Perbankan') {
      echo "04-Pb";
    }elseif ($guru[0]['jurusan']=='Teknik Gambar Bangunan') {
      echo "05-Tgb";
    }else {
      echo "06-Tb";
    } ?>-SMKN2/CADISDIK.WILL.XIII/<?php echo date('Y'); ?></td>
    <td>Kepada Yth</td>
  </tr>
  <tr>
    <td>Lampiran : 1 (satu) Lembur</td>
    <td>Bapak/Ibu Pimpinan</td>
  </tr>
  <tr>
    <td>Hal : Permohonan Prakerin</td>
    <td><?php echo $surat['0']['tempat_prakerin']; ?></td>
  </tr>
  <tr>
    <td></td>
    <td><?php echo $surat['0']['alamat'].', '.$surat['0']['kota']; ?></td>
  </tr>
</table>

<br />
<table align="center" width="80%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td>
    	<span style="margin-left: 50px">Dengan Hormat,</span><br>
		<span style="margin-left: 50px">Sejalan dengan program pemerintah hususnya Direktorat Pembinaan SMK Dirjen Depdiknas bahwa siswa SMK harus memiliki keterampilan atau kompetensi yang sesuai dan relavan dengan kebutuhan atau tuntutan dunia usaha dan dunia industri (dudi). Untuk merealisasikan hal tersebut maka pada jenjang SMK diadakan kegiatan Praktik Kerja Industri (Prakerin).</span>
    </td>
  </tr>
</table>

<table align="center" width="80%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td>
    	<span style="margin-left: 50px">Sehubungan dengan hal tersebut, maka kami mengajukan surat permohonan penerimaan praktik kerja industri (prakerin). Mohon kiranya perusahaan yang bapak/ibu pimpin berkenan untuk dapat memberikan kesempatan kepada anak didik kami :</span>
    </td>
  </tr>
</table>

<table align="center" width="80%" border="1" cellspacing="0" cellpadding="5">
  <tr align="center">
    <td>NAMA</td>
    <td>KELAS</td>
    <td>Prog. KEAHLIAN</td>
  </tr>
  <?php foreach ($surat as $key) : ?>
  <tr align="center">
    <td><?php echo $key['nama']; ?></td>
    <td><?php echo $key['kelas']; ?></td>
    <td><?php echo $key['jurusan']; ?></td>
  </tr>
  <?php endforeach ?>
</table>

<table align="center" width="80%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td>
    	<span style="margin-left: 50px">Guna Melaksanakan kegiatan Praktik Kerja Industri (Prakerin) yang akan dilaksanakan selama tiga bulan terhitung bulan September s/d Mei 2020</span>
    </td>
  </tr>
</table>

<table align="center" width="80%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td>
    	<span style="margin-left: 50px">Sebagai Jawaban dari surat permohonan ini mohon bapak/ibu dapat mengisi dan mengirimkan kembali kepada kami formulir balasan terlampir.</span>
    </td>
  </tr>
</table>

<table align="center" width="80%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td>
    	<span>Demikian surat Permohonan ini kami buat, atas perhatian serta kerjasamanya kami ucapkan terima kasih.</span>
    </td>
  </tr>
</table>
<br />
<table align="center" width="80%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td style="padding-left: 300px;">Kepala Sekolah</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td style="padding-left: 220px;"><span><b><u>DARLAN SUMANADIJAYA,S.Pd.,M.Pd</u></b><br>
	NIP. 19610114 198803 1 004</span></td>
  </tr>
</table>
<p style="margin-left: 70px;">Tembusan :</p>
<ol style="margin-left: 50px;">
	<li>Arsip</li>
</ol>

<table style="padding-top: 50px;" align="center" width="80%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td>
      <span><u>Lampiran : Formulir Balasan</u></span><br>

      <span>Kepada Yth.</span><br>

      <span>Kepala Sekolah</span><br>

      <span>SMKN 2 Banjar</span><br>

      <span>Jl. Raya Banjar-Ciamis, Cipadung</span><br>

      <span>Purwaharja Kota Banjar</span><br>

      <span>Kode Pos 46311</span><br>

      <span>Cp. Sekprog <?php echo $guru[0]['jurusan']; ?>, <?php echo $guru[0]['nama']; ?>, ( Telp. <?php echo $guru[0]['no_telepon']; ?>)</span><br>

      <p><i><u>Re : Surat Prmohonan Prakerin</u></i></p>
      <p>Dengan Hormat, </p>

      <span>Sehubungan dengan surat dari SMKN Negeri 2 Banjar mengenai permohonan Praktik Kerja Industri (Prakerin) Yang ditujukan kepada perusahaan kami, maka bersama ini kami menyatakan</span><br>

      <p align="center">BERSEDIA MENERIMA, Sebanyak .................... Siswa/i</p>

      <p style="margin-left: 164px">TIDAK BERSEDIA MENERIMA *)</p>

      <span>Siswa-siswi dari SMK Negeri 2 Banjar untuk melaksanakan Prakerin diperusahaan kami, Karena</span><br>

      <span>............................................................................................................................................................</span><br>
      <span>............................................................................................................................................................</span><br>
      <span>............................................................................................................................................................</span><br><br>

      <span>Demikian surat balasan ini kami buat untuk diketahui, dan dipergunakan sebagimana mestinya.</span><br>

      <span>Atas perhatian dan kerjasamanya kami mengucapkan terima kasih.</span><br><br><br>

      <span>..................................... <?php echo date('Y'); ?></span><br>

      <span>Hormat Kami,</span><br><br>

      <span>..............................................................</span><br>

      <span>Nama Jelas dan Tanda Tangan/Cap Perusahaan</span><br><br>

      <span>.......................................................................</span><br>

      <span>No Telpon/HP dan Fax</span><br><br>

      <span>...........................................................................</span><br>

      <span>Email</span><br><br>

      <span>...........................................................................</span><br><br>
    </td>
  </tr>
</table>

</body>
</html>
