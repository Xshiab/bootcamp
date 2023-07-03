<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>E-Tiket</title>
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <!--<link rel="stylesheet" href="css/style.css" type="text/css">-->
</head>
<body style="background-color: darkgrey">
    <div class="kolom" style="background-color:khaki; width:700px; height:680px; margin:auto; margin-top:20px; margin-bottom: 20px; box-shadow: 3px 3px 5px 6px #ccc; border-radius: 10px; ">
        <div class="col-md-6">
            <br style="line-height:25px;">
            <center >
                <h2 style="font-family:Times New Roman; line-height:25px;"  >E-TIKET</h2>
                <hr style="width: 520px; margin:0px; color:#000; border: solid 1px black;">
                <hr style="border: solid 0px black;">
            </center>            
            <p style="margin-left: 40px; size:2;">Detail Tiket : </p>
        </div>
        <?php //<div class="col-md-6">
            //<img src="../assets/img/profile/default.jpg" height="50px" width="50px" style="margin-left: 25px;">
        //</div>
        ?>

        <div class="col-md-8" style="background-color: lemonchiffon; margin-top:0px; border: 3px solid black; width: 600px; height: 310px; margin-bottom:5px; margin-left: 49px;">
          <div class="col-md-6">
            <?php
                //<img src="../assets/img/tiket/logo_travel.png" height="60px" width="200px" style="margin-top: 8px; margin-left: 8px;">
            ?>
              <p style="margin: 0px;">Kode Booking <?= "KD" . sprintf("%04s" , $tiket['id'])?></p>
              <p style="font-size: 20px; font-weight:bold;"><?= $tiket['tujuan']?> ( <?= $tiket['waktu']?> ) </p>
              <p style="font-size: 15px; font-weight:bold;"> <?= $tiket['name']?></p>
              <hr style="width: 520px; margin:0px; color:#000; border: solid 1px black;"></p>
              <div>
                <p style="margin:0px;">Derparture : <?=  date('d F Y ' , strtotime($tiket['arrivals'])) ?></p>
                <hr>
                <p style="margin:0px;">Leaving : <?= date('d F Y ' , strtotime($tiket['leaving'])) ?></p>
              </div>
              <p style="margin-left: 6px; margin-bottom: -2px;font-size: 12px;">Guest : <?= $tiket['guests'] ?> Orang  </p>
              <p style="margin-left: 6px; margin-bottom: -2px; font-size: 12px;;">Status Pembayaran :
              <?php if ($tiket['status_payment'] == '0'){
                                    echo  '<span class="badge badge-warning"> Waiting Payment </span>' ;
                                } else if ($tiket['status_payment'] == '1') {
                                    echo '<span class="badge badge-info"> Paid Off  </span>' ;
                                } else {
                                    echo '<span class="badge badge-info> eror </span>' ;
                                } ?>
            </p>
              <hr style="border: solid 0px black;">
          </div>
        
            <div class="col-md-12" style="margin-left: -40px;">
                <ul style="padding-bottom:6px;"><strong>NOTE:</strong>
                    <li style="margin-left: 18px; padding-bottom: 2px; font-size: 10px;">Semua waktu tertera adalah waktu daerah setempat</li>
                    <li style="margin-left: 18px; font-size: 10px;">Mohon lakukan check-in minimal <strong>1jam</strong> sebelum berangkat</li>

                </ul>
            </div>

        </div>
        
        <center>
            <div class="col-md-6" style="width: 500px; margin-top: 10px;">      
                <p style="font-size: 10px; ">Tiket ini dapat dicetak dan dibawa untuk ditunjukkan kepada petugas pada saat check-in</p>
                <p style="font-size: 10px; ">Sertakan identitas diri para penumpang pada saat check-in agar melakukan verifikasi tiket ini.</p>
            </div>            
        </center>

            <div class="col-md-12"style="width: 600px;">
                <hr style="width: 600px;margin-top:10px;margin-left: 50px; color:#000; border: solid 2px grey;">
                <p style="font-size:10px; margin-left: 80px; margin-top:1px; text-align: center">Jika mengalami kendala mohon hubungi MBSTravel.com di <strong>+123-456-7890</strong> atau email <strong>Mbstravel.com</strong></p>
        </div>
    </div>
</div>


</body>
</html>

