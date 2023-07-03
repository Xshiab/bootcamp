<div class="heading" style="background:url(assets/img/header-bg-2.png) no-repeat">
   <h1>packages</h1>
</div>

<!-- packages section starts  -->

<?php 

if (empty($this->session->userdata('email'))) {
?>
        
        <section class="packages">

<h1 class="heading-title">top destinations</h1>

<div class="box-container">

   <div class="box">
      <div class="image">
         <img src="assets/img/img-1.jpg" alt="">
      </div>
      <div class="content">
         <h3>Taj Mahal - India</h3>
         <p>The Taj Mahal is a monument located in Agra, India. Built on the wishes of the Mughal Emperor Shāh Jahān, the Taj Mahal is a masterpiece of Mughal architecture.</p>
         <p>5 Days - start form Rp.5.000.000 </p>
         <a href=<?= base_url('auth'); ?> class="btn">book now</a>
      </div>
   </div>

   <div class="box">
      <div class="image">
         <img src="assets/img/img-2.jpg" alt="">
      </div>
      <div class="content">
         <h3>Raja Ampat - Indonesia</h3>
         <p>The Raja Ampat Islands are a series of four adjacent islands located in the western part of the island of Papua. Administratively, this group is under the Raja Ampat Regency, West Papua Province.</p>
         <p>3 Days - start form Rp.2.500.000 </p>
         <a href=<?= base_url('auth'); ?> class="btn">book now</a>
      </div>
   </div>

   <div class="box">
      <div class="image">
         <img src="assets/img/img-33.jpg" alt="">
      </div>
      <div class="content">
         <h3>Fuji Mountain - Jepang</h3>
         <p>Mount Fuji, located on the island of Honshu, is the highest mountain in Japan, with a height of 3,776.24 m.</p>
         <p>5 Days - start form Rp.7.000.000 </p>
         <a href=<?= base_url('auth'); ?> class="btn">book now</a>
      </div>
   </div>

   <div class="box">
      <div class="image">
         <img src="assets/img/img-44.jpg" alt="">
      </div>
      <div class="content">
         <h3>Great Wall - China</h3>
         <p>The Great Wall of China or the Great Wall of China also known in China as the 10,000 Li Long Wall is the longest building ever created by humans in China. The Great Wall of China is considered one of the Seven Wonders of the World.</p>
         <p>4 Days - start form Rp.4.000.000 </p>
         <a href=<?= base_url('auth'); ?> class="btn">book now</a>
      </div>
   </div>

   <div class="box">
      <div class="image">
         <img src="assets/img/img-5.jpg" alt="">
      </div>
      <div class="content">
         <h3>Roma - Italia</h3>
         <p>Rome is a special city in Italy. With 2.9 million inhabitants in an area of ​​1,285 km², Rome is the most populous country in the world and the fourth most populous city in the European Union.</p>
         <p>5 Days - start form Rp.8.000.000 </p>
         <a href=<?= base_url('auth'); ?> class="btn">book now</a>
      </div>
   </div>

   <div class="box">
      <div class="image">
         <img src="assets/img/img-6.jpg" alt="">
      </div>
      <div class="content">
         <h3>Hawai - United States</h3>
         <p>Hawai'i is the 50th state of the United States and the most recently joined to the United States on August 21, 1959. Hawaii is the only state in the United States that is separated from the Americas and is an archipelago and is part of Oceania.</p>
         <p>5 Days - start form Rp.6.000.000 </p>
         <a href=<?= base_url('auth'); ?> class="btn">book now</a>
      </div>
   </div>

   <div class="box">
      <div class="image">
         <img src="assets/img/img-7.jpg" alt="">
      </div>
      <div class="content">
         <h3>Ankara - Turkey</h3>
         <p>Ankara is the capital of Turkey since 1923, replacing Constantinople or Istanbul.</p>
         <p>4 Days - start form Rp.5.000.000 </p>
         <a href=<?= base_url('auth'); ?> class="btn">book now</a>
      </div>
   </div>

   <div class="box">
      <div class="image">
         <img src="assets/img/img-8.jpg" alt="">
      </div>
      <div class="content">
         <h3>Nusa Dua, Bali - Indonesia</h3>
         <p>Nusa Dua Bali beach is the most suitable for children's holidays which is currently very popular among Indonesian tourists.</p>
         <p>3 Days - start form Rp.3.000.000 </p>
         <a href=<?= base_url('auth'); ?> class="btn">book now</a>
      </div>
   </div>

   <div class="box">
      <div class="image">
         <img src="assets/img/img-9.jpg" alt="">
      </div>
      <div class="content">
         <h3>Phi Phi Island - Thailand</h3>
         <p>The Phi Phi Islands are one of the most beautiful islands in Southeast Asia.</p>
         <p>4 Days - start form Rp.5.000.000 </p>
         <a href=<?= base_url('auth'); ?> class="btn">book now</a>
      </div>
   </div>

   <div class="box">
      <div class="image">
         <img src="assets/img/img-10.jpg" alt="">
      </div>
      <div class="content">
         <h3>Dubai - Uni Emirat Arab</h3>
         <p>The fun thing is, exploring the desert is best done in the afternoon. Challenging the adrenaline of driving a car, riding a camel, and closing the day with a sunset can be an exciting agenda while in Dubai.</p>
         <a href=<?= base_url('auth'); ?> class="btn">book now</a>
      </div>
   </div>

   <div class="box">
      <div class="image">
         <img src="assets/img/img-11.jpg" alt="">
      </div>
      <div class="content">
         <h3>Venice - Italy</h3>
         <p>Venice is a city in Italy that has a number of beautiful tourist attractions and is worth visiting while on vacation.</p>
         <a href=<?= base_url('auth'); ?> class="btn">book now</a>
      </div>
   </div>

   <div class="box">
      <div class="image">
         <img src="assets/img/img-12.jpg" alt="">
      </div>
      <div class="content">
         <h3>Cocoa Island Beaches - Maldives</h3>
         <p>The Republic of the Maldives is an archipelago consisting of a collection of atolls in the Indian Ocean. The Maldives is located in the south-southwest of India, about 700 km southwest of Sri Lanka.</p>
         <a href=<?= base_url('auth'); ?> class="btn">book now</a>
      </div>
   </div>

</div>

<div class="load-more"><span class="btn">load more</span></div>

</section>
<?php } else { ?> 

   <section class="packages">

   <h1 class="heading-title">top destinations</h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="assets/img/img-1.jpg" alt="">
         </div>
         <div class="content">
            <h3>Taj Mahal - India</h3>
            <p>The Taj Mahal is a monument located in Agra, India. Built on the wishes of the Mughal Emperor Shāh Jahān, the Taj Mahal is a masterpiece of Mughal architecture.</p>
            <p>5 Days - start form Rp.5.000.000 </p>
            <a href=<?= base_url('book'); ?> class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="assets/img/img-2.jpg" alt="">
         </div>
         <div class="content">
            <h3>Raja Ampat - Indonesia</h3>
            <p>The Raja Ampat Islands are a series of four adjacent islands located in the western part of the island of Papua. Administratively, this group is under the Raja Ampat Regency, West Papua Province.</p>
            <p>3 Days - start form Rp.2.500.000 </p>
            <a href=<?= base_url('book'); ?> class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="assets/img/img-33.jpg" alt="">
         </div>
         <div class="content">
            <h3>Fuji Mountain - Jepang</h3>
            <p>Mount Fuji, located on the island of Honshu, is the highest mountain in Japan, with a height of 3,776.24 m.</p>
            <p>5 Days - start form Rp.7.000.000 </p>
            <a href=<?= base_url('book'); ?> class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="assets/img/img-44.jpg" alt="">
         </div>
         <div class="content">
            <h3>Great Wall - China</h3>
            <p>The Great Wall of China or the Great Wall of China also known in China as the 10,000 Li Long Wall is the longest building ever created by humans in China. The Great Wall of China is considered one of the Seven Wonders of the World.</p>
            <p>4 Days - start form Rp.4.000.000 </p>
            <a href=<?= base_url('book'); ?> class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="assets/img/img-5.jpg" alt="">
         </div>
         <div class="content">
            <h3>Roma - Italia</h3>
            <p>Rome is a special city in Italy. With 2.9 million inhabitants in an area of ​​1,285 km², Rome is the most populous country in the world and the fourth most populous city in the European Union.</p>
            <p>5 Days - start form Rp.8.000.000 </p>
            <a href=<?= base_url('book'); ?> class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="assets/img/img-6.jpg" alt="">
         </div>
         <div class="content">
            <h3>Hawai - United States</h3>
            <p>Hawai'i is the 50th state of the United States and the most recently joined to the United States on August 21, 1959. Hawaii is the only state in the United States that is separated from the Americas and is an archipelago and is part of Oceania.</p>
            <p>5 Days - start form Rp.6.000.000 </p>
            <a href=<?= base_url('book'); ?> class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="assets/img/img-7.jpg" alt="">
         </div>
         <div class="content">
            <h3>Ankara - Turkey</h3>
            <p>Ankara is the capital of Turkey since 1923, replacing Constantinople or Istanbul.</p>
            <p>4 Days - start form Rp.5.000.000 </p>
            <a href=<?= base_url('book'); ?> class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="assets/img/img-8.jpg" alt="">
         </div>
         <div class="content">
            <h3>Nusa Dua, Bali - Indonesia</h3>
            <p>Nusa Dua Bali beach is the most suitable for children's holidays which is currently very popular among Indonesian tourists.</p>
            <p>3 Days - start form Rp.3.000.000 </p>
            <a href=<?= base_url('book'); ?> class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="assets/img/img-9.jpg" alt="">
         </div>
         <div class="content">
            <h3>Phi Phi Island - Thailand</h3>
            <p>The Phi Phi Islands are one of the most beautiful islands in Southeast Asia.</p>
            <p>4 Days - start form Rp.5.000.000 </p>
            <a href=<?= base_url('book'); ?> class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="assets/img/img-10.jpg" alt="">
         </div>
         <div class="content">
            <h3>Dubai - Uni Emirat Arab</h3>
            <p>The fun thing is, exploring the desert is best done in the afternoon. Challenging the adrenaline of driving a car, riding a camel, and closing the day with a sunset can be an exciting agenda while in Dubai.</p>
            <a href=<?= base_url('book'); ?> class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="assets/img/img-11.jpg" alt="">
         </div>
         <div class="content">
            <h3>Venice - Italy</h3>
            <p>Venice is a city in Italy that has a number of beautiful tourist attractions and is worth visiting while on vacation.</p>
            <a href=<?= base_url('book'); ?> class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="assets/img/img-12.jpg" alt="">
         </div>
         <div class="content">
            <h3>Cocoa Island Beaches - Maldives</h3>
            <p>The Republic of the Maldives is an archipelago consisting of a collection of atolls in the Indian Ocean. The Maldives is located in the south-southwest of India, about 700 km southwest of Sri Lanka.</p>
            <a href=<?= base_url('book'); ?> class="btn">book now</a>
         </div>
      </div>

   </div>

   <div class="load-more"><span class="btn">load more</span></div>

</section>
   <?php } ?>

<!-- packages section ends -->