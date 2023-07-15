<?php

@include 'config.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

     <!-- font awesome cdn link  -->
     <link rel="stylesheet" href="css/all.css">
   <link rel="stylesheet" href="css/all.min.css">
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style1.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="about">

   <div class="row">

      <div class="box">
         <img src="images/Screenshot (68).png" alt="">
         <h3>Always Here for You</h3>
         <p>Muskan's world is dedicated to ensuring your complete satisfaction, and we are always happy to hear from you. If you have any questions or comments, or just want share your thoughts,just contace with us.Thank You</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

      <div class="box">
      <img src="images/tt.jpg" alt="">
        
         <h3>Everyday Fresh And Clean</h3>
         <p>Muskan's world is on a mission is to ensure quality and safe food. We have a big range of handpicked food items, including varieties of rice, spices from all corners of the country, homemade spreads.</p>
         <a href="shop.php" class="btn">our shop</a>
      </div>

   </div>

</section>











<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>