<center>
<div class="container-fluid">
    <div class="kolom" style="background-color:floralwhite; width:700px; height:690px; margin:auto; margin-top:20px; margin-bottom: 20px; box-shadow: 3px 3px 5px 6px #ccc; border-radius: 10px; ">
<center>
    <h1 style="margin-left: 20px;">Data Tiket <h3 style="margin-left: 20px;" >( bukan etiket )</h3> </h1> 
    <hr>
    <br>    
</center>

<h2 style="margin-right: 180px; size:2;">Kode Booking : <?='KD' . sprintf("%04s" , $tiket['id'])?>  </h2>
    <div class="col-md-8" style="background-color: lemonchiffon; margin-top:0px; border: 3px solid black; width: 400px; height: 470px; margin-bottom:5px; margin-left: 49px;">
    
        <div class="form-grup row">
            <h2>
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-5">
            <input readonly type="email" class="form-control" name="email" required="" style="background-color: lemonchiffon;" value="<?php echo $tiket['name']; ?>">
            <hr style="border: solid 1px black; width: 350px;">
            </h2>
        </div>
        <div class=" form-grup row">
            <h2>
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-5">
                <input readonly type="email" class="form-control" name="email" required="" style="background-color: lemonchiffon;" value="<?php echo $tiket['email']; ?>">
                <hr style="border: solid 1px black; width: 350px;">
            </h2>
        </div>

        <div class="form-grup row">
        <h2>
            <label for="phone" class="col-sm-2 col-form-label">Phone</label>
            <div class="col-sm-5">
                <input readonly type="number" class="form-control" name="phone" required="" style="background-color: lemonchiffon;" value="<?php echo $tiket['phone']; ?>">
                <hr style="border: solid 1px black; width: 350px;">
            </div>
        </h2>
        </div>

        <div class="form-grup row">
        <h2>    
        <label for="address" class="col-sm-2 col-form-label">Address</label>
            <div class="col-sm-5">
                <input readonly type="text" class="form-control" name="address" required="" style="background-color: lemonchiffon;" value="<?php echo $tiket['address']; ?>">
                <hr style="border: solid 1px black; width: 350px;">
            </div>
        </h2>
        </div>

        <div class="form-grup row">
        <h2>    
        <label for="location" class="col-sm-2 col-form-label">Location</label>
            <div class="col-sm-5">
                <input readonly type="text" class="form-control" name="location" required="" style="background-color: lemonchiffon;" value="<?php echo $tiket['tujuan'];?>">
                <hr style="border: solid 1px black; width: 350px;">
            </div>
        </h2>
        </div>

        <div class="form-grup row">
        <h2>    
        <label for="guests" class="col-sm-2 col-form-label">Guests</label>
            <div class="col-sm-5">
                <input readonly type="number" class="form-control" name="guests" required="" style="background-color: lemonchiffon;" value="<?php echo $tiket['guests']; ?>">
                <hr style="border: solid 1px black; width: 350px;">
            </div>
        </h2>
        </div>

        <div class="form-grup row">
        <h2>    
        <label for="arrivals" class="col-sm-2 col-form-label">Arrivals</label>
            <div class="col-sm-5">
                <input readonly type="date" class="form-control" name="arrivals" required="" style="background-color: lemonchiffon;" value="<?php echo $tiket['arrivals']; ?>">
                <hr style="border: solid 1px black; width: 350px;">
            </div>
        </h2>
        </div>

        <div class="form-grup row">
        <h2>    
        <label for="leaving" class="col-sm-2 col-form-label">Leaving</label>
            <div class="col-sm-5">
                <input readonly type="date" class="form-control" name="leaving" required="" style="background-color: lemonchiffon;" value="<?php echo $tiket['leaving']; ?>">
                <hr style="border: solid 1px black; width: 350px;">
            </div>
        </h2>
        </div>
        <br>
        
        <div class="form-grup row">
        <label for="leaving" class="col-sm-2 col-form-label"></label>
            <h2 style="margin-right: 0px; "> Price  : &nbsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;
            <?php $harga = $tiket['price'] ; 
                $rupiah = "Rp." . number_format($harga,0,',','.') ;
                echo $rupiah;
                    
            ?> / guests
            </h2>
                <hr style="border: solid 1px black; width: 350px;">
                <hr style="border: solid 0px black; width: 350px; height: 10px;">
            </div>
        <div class="form-grup row">
        <label for="leaving" class="col-sm-2 col-form-label"></label>
            <h2 style="margin-right: 25px; "> Price Total : &nbsp;&emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; 
            <?php $harga = $tiket['price'] * $tiket['guests'] ; 
                $rupiah = "Rp." . number_format($harga,0,',','.') ;
                echo $rupiah;
            ?>
            </h2>

        </div>
        </div>
    <div>
        <h3 style="margin-left: 40px;">
            Silahkan Melakukan Pembayaran ke Nomor Rekening Berikut :
        </h3>
        <table style="border: 2px solid black; border-color:red; margin-left: 40px;">
            <tr>
                <td><p style="font-size: 15px;">BCA &nbsp : &nbsp </p></td>
                
                <td><p style="font-size: 15px;">8892832928  &nbsp </p></td>
            </tr>
         
        </table>
        <h3 style="margin-left: 40px;">
            Harap Tunjukan Bukti Transfer ke Petugas Chek-In Counter
        </h3>
    </div>
    <div style="margin-left: 10px;">
        <a class="btn btn-sm btn-outline-success" href="<?= base_url('book/etiket/' . $tiket['id'])?>"> View E-TIKET</a>
        <a class="btn btn-sm btn-outline-success" href="<?= base_url('book/etiket_print/' . $tiket['id'])?>"> Print E-TIKET</a>
        <a class="btn btn-sm btn-outline-success" href="<?= base_url('book/etiket_pdf/' . $tiket['id'])?>"> Download E-TIKET</a>
    </div>
</div>
</div>
</center>