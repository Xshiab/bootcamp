<!-- reviews section starts  -->

<section class="reviews">

    <h1 class="heading-title"> My Profile </h1>

    <div class="swiper reviews-slider">
        <div class="swiper-slide slide">
            <h3 class="swiper-slide slide"><?= $user['name']; ?></h3>
            <h3 class="swiper-slide slide"><?= $user['email']; ?></h3>
            <h3 class="card-text"><small class="text-muted">Member since, <?= date('d F Y', $user['date_created']); ?></small></h3>
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                </div>

 
            </div>

</section>

<!-- reviews section ends -->