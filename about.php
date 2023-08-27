<?php

include 'components/connect.php';

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

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.png" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
<<<<<<< HEAD
         <p>Pixclo is the clothing brand where we create our own lisenced designs which we print in our products. We provide high quality fabric and best unique grapical designs created by our talented artists to our valued customers. <br>For any inquiries and collaborations, feel free to contact us.</br> </p>
            <div class="content-box">
               <a href="tel:1234567890"><i class="fas fa-phone"></i> 9803379819</a>
               <a href="tel:11122233333"><i class="fas fa-phone"></i> 9849556321</a>
               <a href="mailto:Pixclo.art45@gmail.com"><i class="fas fa-envelope"></i> Pixclo.art45@gmail.com</a>
            </div>      
      </div>

      

   </div>

</section>


=======
         <p>Pixnep is the clothing brand where we create our own lisenced designs which we print in our products. We provide high quality fabric and best unique grapical designs created by our talented artists to our valued customers. <br>For any inquiries and collaborations, feel free to contact us.</br> </p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>


>>>>>>> d0cffa116e1f9aa10d37b30a16787c93f003081e









<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script> 

</body>
</html>