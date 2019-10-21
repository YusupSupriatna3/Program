<!DOCTYPE html>
<html>
<head>
	<title>Sertifikat Depan</title>
	<link rel="shortcut icon" href="assets/images/smk.ico">
	<style type="text/css">
		
            /** 
            * Set the margins of the PDF to 0
            * so the background image will cover the entire page.
            **/
            @page {
                margin: 0cm 0cm;
            }

            /**
            * Define the real margins of the content of your PDF
            * Here you will fix the margins of the header and footer
            * Of your background image.
            **/
            /* body {
                margin-top:    3.5cm;
                margin-bottom: 1cm;
                margin-left:   1cm;
                margin-right:  1cm;
            } */

            /** 
            * Define the width, height, margins and position of the watermark.
            **/
            #watermark {
                position: fixed;
                padding-top:50px;
                /** The width and height may change 
                    according to the dimensions of your letterhead
                **/
                width:    30cm;
                height:   20cm;

                /** Your watermark should be behind every content**/
                z-index:  -1000;
            }

            .tahun {
                writing-mode:tb-rl;
                -webkit-transform:rotate(-90deg);
                -moz-transform:rotate(-90deg);
                -o-transform: rotate(-90deg);
                -ms-transform:rotate(-90deg);
                transform: rotate(-90deg);
                white-space:nowrap;
                margin-left:830px;
                margin-top:52px;
                font-size:30px;
                color:white;
            }
	</style>
</head>
<body>
	<div id="watermark">
        <img src="assets/images/sertifikat-2.png" height="700cm" width="100%" />
    </div>
    <?php if(strtolower($sertifikat['0']['jurusan'])=='perbankan'){?>
        <img src="assets/images/blue.png" alt="" height="80px;" width="450px;" style="margin-top:250px;margin-left:330px;">
    <?php }else if(strtolower($sertifikat['0']['jurusan'])=='teknik komputer jaringan'){?>
        <img src="assets/images/yellow.png" alt="" height="80px;" width="450px;" style="margin-top:250px;margin-left:330px;">
    <?php }else if(strtolower($sertifikat['0']['jurusan'])=='teknik elektronik industri'){?>
        <img src="assets/images/green.png" alt="" height="80px;" width="450px;" style="margin-top:250px;margin-left:330px;">
    <?php }else if(strtolower($sertifikat['0']['jurusan'])=='teknik kendaraan ringan'){?>
        <img src="assets/images/red.png" alt="" height="80px;" width="450px;" style="margin-top:250px;margin-left:330px;">
    <?php }else if(strtolower($sertifikat['0']['jurusan'])=='teknik gambar bangunan'){?>
        <img src="assets/images/orange.png" alt="" height="80px;" width="450px;" style="margin-top:250px;margin-left:330px;">
    <?php }else{?>
        <img src="assets/images/purple.png" alt="" height="80px;" width="450px;" style="margin-top:250px;margin-left:330px;">
    <?php }?>
    <div style="text-align: center;margin-top: 50px;">
        <span style="font-size:30px;"><strong><?php echo $sertifikat['0']['nama']; ?></strong></span><br>
    	<span>NIS : <?php echo $sertifikat['0']['nis']; ?></span><br>
    	<span>Kompetensi Keahlian : <?php echo $sertifikat['0']['jurusan']; ?></span>
    </div>
    <div class="tahun">
        <strong><?php echo date('Y');?></strong>
    </div>
</body>
</html>