<div class="heading" style="background:url(assets/img/header-bg-3.png) no-repeat">
   <h1>book now</h1>
</div>

<!-- booking section starts  -->

<section class="booking">

   <h1 class="heading-title">book your trip!</h1>

   <form action="<?= base_url('book/booking'); ?>" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="enter your name" name="name" required="enter your name">
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="enter your email" name="email" required="enter your email">
         </div>
         <div class="inputBox">
            <span>phone :</span>
            <input type="number" placeholder="enter your number" name="phone" required="enter your number phone">
         </div>
         <div class="inputBox">
            <span>address :</span>
            <input type="text" placeholder="enter your address" name="address" required="enter your address">
         </div>
         <div class="inputBox">
            <span>where to :</span>
            <br>
            <h1></h1>
            <select name="id_paket" >
               <option>place you want to visit</option>
               <?php 
               $connection = mysqli_connect('localhost', 'root', '', 'db_travelmbs');
               $query = mysqli_query($connection, "SELECT * FROM paket") or die (mysqli_error($connection)); 
               while($data = mysqli_fetch_array($query))
               {
                  $harga = $data['price'] ; 
                  $rupiah = "Rp." . number_format($harga,0,',','.') ;
                  echo "<option value=$data[id_paket] > $data[tujuan]  -  $data[waktu] - $rupiah/Guests </option>";
               }
               ?>
            </select>
         </div>
         <div class="inputBox">
            <span>how many :</span>
            <input type="number" placeholder="number of guests" name="guests" required="enter guests">
         </div>
         <div class="inputBox">
            <span>derparture :</span>
            <input type="date" name="arrivals" required>
         </div>
         <div class="inputBox">
            <span>leaving :</span>
            <input type="date" name="leaving" required>
         </div>
      </div>

      <input type="submit" value="submit" class="btn" name="send" required>

   </form>

</section>
