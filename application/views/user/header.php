<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome To MBS Travel</title>

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link href="<?= base_url('assets/'); ?>css/style.css" rel="stylesheet">

</head>

<body>

    <!-- header section starts  -->
 

    <section class="header">                    

        <a href="<?= base_url('home'); ?>" class="logo">MBS travel</a>

        <nav class="navbar">
        <?php 

        if (!empty($this->session->userdata('email'))) {
            ?>
            <a href="<?= base_url('home'); ?>">home</a>
            <a href="<?= base_url('about'); ?>">about</a>
            <a href="<?= base_url('packages'); ?>">package</a>
            <a href="<?= base_url('home/book'); ?>">book</a>
            <a href="<?= base_url('book/mybook'); ?>">mybook</a>
            <a href="<?= base_url('myprofile'); ?>">my profile</a>
            <a href="<?= base_url('auth/logout'); ?>">logout</a>
        <?php } else { ?> 
            <a href="<?= base_url('home'); ?>">home</a>
            <a href="<?= base_url('about'); ?>">about</a>
            <a href="<?= base_url('packages'); ?>">package</a>
            <a href="<?= base_url('auth'); ?>">login</a>
            

       <?php } ?>
       
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </section>

    <!-- header section ends -->