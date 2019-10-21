<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Surat Prakerin</title>
<link rel="shortcut icon" href="assets/images/smk.ico">
<?php if(strtolower($sertifikat['0']['jurusan'])=='perbankan'){?>
<style type="text/css">
		.belakang{
            background-color:#00BFFF;
            width:100%;
            height:100%
            position:fixed;
        }
	</style>
<?php }else if(strtolower($sertifikat['0']['jurusan'])=='teknik komputer jaringan'){?>
<style type="text/css">
		.belakang{
            background-color:yellow;
            width:100%;
            height:100%
            position:fixed;
        }
	</style>
<?php }else if(strtolower($sertifikat['0']['jurusan'])=='teknik elektronik industri'){?>
<style type="text/css">
		.belakang{
            background-color:green;
            width:100%;
            height:100%
            position:fixed;
        }
	</style>
<?php }else if(strtolower($sertifikat['0']['jurusan'])=='teknik kendaraan ringan'){?>
<style type="text/css">
		.belakang{
            background-color:red;
            width:100%;
            height:100%
            position:fixed;
        }
	</style>
<?php }else if(strtolower($sertifikat['0']['jurusan'])=='teknik gambar bangunan'){?>
<style type="text/css">
		.belakang{
            background-color:orange;
            width:100%;
            height:100%
            position:fixed;
        }
	</style>
<?php }else{?>
<style type="text/css">
		.belakang{
            background-color:purple;
            width:100%;
            height:100%
            position:fixed;
        }
	</style>
<?php }?>
</head>
<body class="belakang">
	<table align="center" style="padding-top:30px;">
        <tr>
            <td align="center">
                <span style="font-size:20px;"><strong>DAFTAR NILAI PRAKTEK KERJA LAPANGAN (PKL)<br>KOMPETENSI KEAHLIAN <?php echo strtoupper($sertifikat['0']['jurusan']); ?></strong></span>
            </td>
        </tr>
    </table>
    <br>
    <table >
        <tr>
            <td style="width:100px;; text-align:right"><span style="font-size:15px;"><strong>NO</strong></span></td>
            <td style="width:300px;; text-align:right"><span style="font-size:15px;"><strong>KOMPONEN PENILAIAN</strong></span></td>
            <td style="width:340px;; text-align:right"><span style="font-size:15px;"><strong>NILAI</strong></span></td>
        </tr>
    </table>
    <table style="padding-left:50px;">
        <tr>
            <td style="width:150px;"><span style="font-size:15px;"><strong>Aspek Teknis</strong></span></td>
        </tr>
    </table>
    <table style="padding-left:55px;">
        <tr>
            <td style="width:100px;; "><span style="font-size:15px;">1</span></td>
            <td style="width:300px;; "><span style="font-size:15px;">Pengetahuan Tentang Pekerjaan</span></td>
            <td style="width:340px;; "><span style="font-size:15px;"></span></td>
        </tr>
        <tr>
            <td style="width:100px;; "><span style="font-size:15px;">2</span></td>
            <td style="width:300px;; "><span style="font-size:15px;">Pemahaman Standar Operasional Pekerjaan</span></td>
            <td style="width:340px;; "><span style="font-size:15px;"></span></td>
        </tr>
        <tr>
            <td style="width:100px;; "><span style="font-size:15px;">3</span></td>
            <td style="width:300px;; "><span style="font-size:15px;">Keterampilan Menjalankan Alat Bantu / Fasilitas</span></td>
            <td style="width:340px;; "><span style="font-size:15px;"></span></td>
        </tr>
        <tr>
            <td style="width:100px;; "><span style="font-size:15px;">4</span></td>
            <td style="width:300px;; "><span style="font-size:15px;">Pemecahan Masalah Pekerjaaan</span></td>
            <td style="width:340px;; "><span style="font-size:15px;"></span></td>
        </tr>
        <tr>
            <td style="width:100px;; "><span style="font-size:15px;">5</span></td>
            <td style="width:300px;; "><span style="font-size:15px;">Kualitas Hasil Pekerjaan</span></td>
            <td style="width:340px;; "><span style="font-size:15px;"></span></td>
        </tr>
    </table>
    <table style="padding-left:50px;">
        <tr>
            <td style="width:150px;; "><span style="font-size:15px;"><strong>Aspek Non Teknis</strong></span></td>
        </tr>
    </table>
    <table style="padding-left:55px;">
        <tr>
            <td style="width:100px;; "><span style="font-size:15px;">1</span></td>
            <td style="width:300px;; "><span style="font-size:15px;">Kedisiplinan</span></td>
            <td style="width:340px;; "><span style="font-size:15px;"></span></td>
        </tr>
        <tr>
            <td style="width:100px;; "><span style="font-size:15px;">2</span></td>
            <td style="width:300px;; "><span style="font-size:15px;">Kerjasama</span></td>
            <td style="width:340px;; "><span style="font-size:15px;"></span></td>
        </tr>
        <tr>
            <td style="width:100px;; "><span style="font-size:15px;">3</span></td>
            <td style="width:300px;; "><span style="font-size:15px;">Inisiatif</span></td>
            <td style="width:340px;; "><span style="font-size:15px;"></span></td>
        </tr>
        <tr>
            <td style="width:100px;; "><span style="font-size:15px;">4</span></td>
            <td style="width:300px;; "><span style="font-size:15px;">Tanggung Jawab</span></td>
            <td style="width:340px;; "><span style="font-size:15px;"></span></td>
        </tr>
        <tr>
            <td style="width:100px;; "><span style="font-size:15px;">5</span></td>
            <td style="width:300px;; "><span style="font-size:15px;">Kebersihan</span></td>
            <td style="width:340px;; "><span style="font-size:15px;"></span></td>
        </tr>
    </table>
    <table style="padding-left:50px;">
        <tr>
            <td style="width:150px;; "><span style="font-size:15px;"><strong>Kompetensi Keahlian</strong></span></td>
        </tr>
    </table>
    <?php if(strtolower($sertifikat['0']['jurusan'])=='perbankan'){?>
        <table style="padding-left:55px;">
            <tr>
                <td style="width:100px;; "><span style="font-size:15px;">1</span></td>
                <td style="width:300px;; "><span style="font-size:15px;">Etika Profesi</span></td>
                <td style="width:340px;; "><span style="font-size:15px;"></span></td>
            </tr>
            <tr>
                <td style="width:100px;; "><span style="font-size:15px;">2</span></td>
                <td style="width:300px;; "><span style="font-size:15px;">Pengantar Administrasi Perkantoran</span></td>
                <td style="width:340px;; "><span style="font-size:15px;"></span></td>
            </tr>
            <tr>
                <td style="width:100px;; "><span style="font-size:15px;">3</span></td>
                <td style="width:300px;; "><span style="font-size:15px;">Layanan Perbankan</span></td>
                <td style="width:340px;; "><span style="font-size:15px;"></span></td>
            </tr>
            <tr>
                <td style="width:100px;; "><span style="font-size:15px;">4</span></td>
                <td style="width:300px;; "><span style="font-size:15px;">Layanan Lembaga Keuangan Non Bank</span></td>
                <td style="width:340px;; "><span style="font-size:15px;"></span></td>
            </tr>
        </table>
    <?php }else if(strtolower($sertifikat['0']['jurusan'])=='teknik komputer jaringan'){?>
        <table style="padding-left:55px;">
            <tr>
                <td style="width:100px;; "><span style="font-size:15px;">1</span></td>
                <td style="width:300px;; "><span style="font-size:15px;">Sistem Operasi Jaringan</span></td>
                <td style="width:340px;; "><span style="font-size:15px;"></span></td>
            </tr>
            <tr>
                <td style="width:100px;; "><span style="font-size:15px;">2</span></td>
                <td style="width:300px;; "><span style="font-size:15px;">Troubleshooting Jaringan</span></td>
                <td style="width:340px;; "><span style="font-size:15px;"></span></td>
            </tr>
        </table>
    <?php }else if(strtolower($sertifikat['0']['jurusan'])=='teknik elektronik industri'){?>
        <table style="padding-left:55px;">
            <tr>
                <td style="width:100px;; "><span style="font-size:15px;">1</span></td>
                <td style="width:300px;; "><span style="font-size:15px;">Teknik Tenaga Listrik Semester</span></td>
                <td style="width:340px;; "><span style="font-size:15px;"></span></td>
            </tr>
            <tr>
                <td style="width:100px;; "><span style="font-size:15px;">2</span></td>
                <td style="width:300px;; "><span style="font-size:15px;">Teknik Pengolahan Isyarat, Elektronika, dan Biomedika</span></td>
                <td style="width:340px;; "><span style="font-size:15px;"></span></td>
            </tr>
            <tr>
                <td style="width:100px;; "><span style="font-size:15px;">3</span></td>
                <td style="width:300px;; "><span style="font-size:15px;">Teknik Instrumentasi Kendali</span></td>
                <td style="width:340px;; "><span style="font-size:15px;"></span></td>
            </tr>
            <tr>
                <td style="width:100px;; "><span style="font-size:15px;">4</span></td>
                <td style="width:300px;; "><span style="font-size:15px;">Teknik Telekomunikasi</span></td>
                <td style="width:340px;; "><span style="font-size:15px;"></span></td>
            </tr>
        </table>
    <?php }else if(strtolower($sertifikat['0']['jurusan'])=='teknik kendaraan ringan'){?>
        <table style="padding-left:55px;">
            <tr>
                <td style="width:100px;; "><span style="font-size:15px;">1</span></td>
                <td style="width:300px;; "><span style="font-size:15px;">Teknik Kerja Bengkel</span></td>
                <td style="width:340px;; "><span style="font-size:15px;"></span></td>
            </tr>
            <tr>
                <td style="width:100px;; "><span style="font-size:15px;">2</span></td>
                <td style="width:300px;; "><span style="font-size:15px;">Pemeliharaan Mesin Kendaraan Ringan 1</span></td>
                <td style="width:340px;; "><span style="font-size:15px;"></span></td>
            </tr>
            <tr>
                <td style="width:100px;; "><span style="font-size:15px;">3</span></td>
                <td style="width:300px;; "><span style="font-size:15px;">Pemeliharaan Mesin Kendaraan Ringan 2</span></td>
                <td style="width:340px;; "><span style="font-size:15px;"></span></td>
            </tr>
        </table>
    <?php }else if(strtolower($sertifikat['0']['jurusan'])=='teknik gambar bangunan'){?>
        <table style="padding-left:55px;">
            <tr>
                <td style="width:100px;; "><span style="font-size:15px;">1</span></td>
                <td style="width:300px;; "><span style="font-size:15px;">Menggambar manual (menggunakan pensil,trek pen,rapido,sepasang segitiga,dll)</span></td>
                <td style="width:340px;; "><span style="font-size:15px;"></span></td>
            </tr>
            <tr>
                <td style="width:100px;; "><span style="font-size:15px;">2</span></td>
                <td style="width:300px;; "><span style="font-size:15px;">Menggambar proyeksi (isometri, proyeksi miring, orthogonal,dll)</span></td>
                <td style="width:340px;; "><span style="font-size:15px;"></span></td>
            </tr>
            <tr>
                <td style="width:100px;; "><span style="font-size:15px;">3</span></td>
                <td style="width:300px;; "><span style="font-size:15px;">Menggambar prespektif teknik </span></td>
                <td style="width:340px;; "><span style="font-size:15px;"></span></td>
            </tr>
            <tr>
                <td style="width:100px;; "><span style="font-size:15px;">4</span></td>
                <td style="width:300px;; "><span style="font-size:15px;">Menggambar digital (Autocad, Archicad, Google Sketchup,Style Builder,dll)</span></td>
                <td style="width:340px;; "><span style="font-size:15px;"></span></td>
            </tr>
        </table>
    <?php }else{?>
        <table style="padding-left:55px;">
            <tr>
                <td style="width:100px;; "><span style="font-size:15px;">1</span></td>
                <td style="width:300px;; "><span style="font-size:15px;">Etika Profesi</span></td>
                <td style="width:340px;; "><span style="font-size:15px;"></span></td>
            </tr>
            <tr>
                <td style="width:100px;; "><span style="font-size:15px;">2</span></td>
                <td style="width:300px;; "><span style="font-size:15px;">Dasar-dasar Manajemen</span></td>
                <td style="width:340px;; "><span style="font-size:15px;"></span></td>
            </tr>
            <tr>
                <td style="width:100px;; "><span style="font-size:15px;">3</span></td>
                <td style="width:300px;; "><span style="font-size:15px;">Tata Hidang</span></td>
                <td style="width:340px;; "><span style="font-size:15px;"></span></td>
            </tr>
            <tr>
                <td style="width:100px;; "><span style="font-size:15px;">4</span></td>
                <td style="width:300px;; "><span style="font-size:15px;">Pengelolaan Usaha Boga</span></td>
                <td style="width:340px;; "><span style="font-size:15px;"></span></td>
            </tr>
        </table>
    <?php }?>
    <table>
        <tr>
            <td style="width:100px; "><span style="font-size:15px;"></span></td>
            <td style="width:400px; text-align:right"><span style="font-size:15px;">JUMLAH NILAI<br>RATA-RATA</span></td>
            <td style="width:340px; "><span style="font-size:15px;"></span></td>
        </tr>
    </table>
    <table style="padding-left:55px;">
        <tr>
            <td style="width:100px; "><span style="font-size:15px;">Keterangan Nilai :<br>A=90-100 : Sangat Baik<br>B=80-89 : Baik<br>C=70-79 : Cukup<br>D=60-69 : Kurang</span></td>
            <td style="width:400px;"><span style="font-size:15px;"></span></td>
            <td style="width:300px; text-align:center "><span style="font-size:15px;">Pembimbing Perusahaan /Instansi,<br><br><br><br><br><hr width="300px;"></span></td>
        </tr>
    </table>   
</body>
</html>