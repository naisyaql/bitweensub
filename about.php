<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="about">

   <div class="row">

      <div class="box">
         <img src="images/abt1.jpg" alt="">
         <h3>Pengalaman Terbaik Menikmati Kopi</h3>
         <p>Nikmati segelas kopi penuh rasa dari Bitween Sub hanya dalam website</p>
         <p>Bitween Suburbs adalah kedai kopi yang terletak di surabaya selatan dan yang berbatasan dengan wilayah kota surabaya dan kota sidoarjo</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

      <div class="box">
         <img src="images/abt2.jpg" alt="">
         <h3>Menikmati Kopi Kapanpun, Dimanapun</h3>
         <p>Bebas pilih cara pengambilan, bisa pick up di store atau dikirim langsung ke tujuanmu</p>
         <a href="shop.php" class="btn">our shop</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">customers reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/fix1.jpg" alt="">
         <p>Menu Sweet In The Darknessnya, enak banget beda sama coffeeshop lainnya</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>saufika</h3>
      </div>

      <div class="box">
         <img src="images/fix2.jpg" alt="">
         <p>ini mah coffee shop, ternyaman soalnya bisa request menu ngga kaya ditempat lainnya</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>asa</h3>
      </div>

      <div class="box">
         <img src="images/fix1.jpg" alt="">
         <p>menu Butter Call Scooth, unik si yaa pantes aja dia jadi bets seller di bitween</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>runa</h3>
      </div>

      <div class="box">
         <img src="images/fix2.jpg" alt="">
         <p>bitween ini enak lo kopinya, walau dia diminum besoknya, karena aku milih kopi enak engganya ya dari situ buat besok dia enak apa engga, favoritku Aren't In Bitween si</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>sasa</h3>
      </div>

      <div class="box">
         <img src="images/fix1.jpg" alt="">
         <p>kopinya menurutku si enak, Butter Call Scooth ini termasuk favorite kopiku karena dia tastenya creamy sweet ngga too much gitu</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>dea</h3>
      </div>

      <div class="box">
         <img src="images/fix2.jpg"alt="">
         <p>menu It's A Matchnya suka deh, karna dia tipe yang matcha banget gitu masih ada taste pashitnyaa</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>tasya</h3>
      </div>

   </div>

</section>









<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>