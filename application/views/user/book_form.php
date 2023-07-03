<?php

$connection = mysqli_connect('localhost', 'root', '', 'db_travelmbs');

if (isset($_POST['send'])) {
   $name = $_POST['name'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $address = $_POST['address'];
   $id_paket = $_POST['id_paket'];
   $guests = $_POST['guests'];
   $arrivals = $_POST['arrivals'];
   $leaving = $_POST['leaving'];

   $request = " insert into book_form(name, email, phone, address, id_paket, guests, arrivals, leaving) values('$name','$email','$phone','$address','$id_paket','$guests','$arrivals','$leaving') ";
   mysqli_query($connection, $request);

   header('location:book.php');
} else {
   echo 'something went wrong please try again!';
}
