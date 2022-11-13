<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>book</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <style>
   *{padding:0;margin:0}
      .wrapper{height:15vh;display:flex;justify-content:center;align-items:center;background-color:transparent}
      .checkmark__circle{stroke-dasharray: 166;stroke-dashoffset: 166;stroke-width: 2;stroke-miterlimit: 10;stroke: #7ac142;fill: none;animation: stroke 0.6s cubic-bezier(0.65, 0, 0.45, 1) forwards}
      .checkmark{width: 56px;height: 56px;border-radius: 50%;display: block;stroke-width: 5;stroke: #fff;stroke-miterlimit: 10;margin: 10% auto;box-shadow: inset 0px 0px 0px #7ac142;animation: fill .4s ease-in-out .4s forwards, scale .3s ease-in-out .9s both}
      .checkmark__check{transform-origin: 50% 50%;stroke-dasharray: 48;stroke-dashoffset: 48;animation: stroke 0.3s cubic-bezier(0.65, 0, 0.45, 1) 0.8s forwards}
      @keyframes stroke{100%{stroke-dashoffset: 0}}
      @keyframes scale{0%, 100%{transform: none}50%{transform: scale3d(1.1, 1.1, 1)}}
      @keyframes fill{100%{box-shadow: inset 0px 0px 0px 30px #7ac142}}

   .submission{
      padding:3rem 2rem;
      text-align: center;
      background: var(--main-color);
      cursor: pointer;}
   
   .submission h1{
      font-size: 1.2cm;
   }

   .submission p{
      font-size: medium;
   }
   </style>


</head>
<body>

<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo">Pune Wanderer!</a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->



<!-- submit section starts -->


<?php

   if(isset($_POST['send'])){
      $server = "localhost";
      $username = "root";
      $password = "";
      $database = "pune_wanderer";
  
      $con = mysqli_connect($server, $username, $password, $database);
  
      if(!$con){
          die("Connection to the Database failed due to ".mysqli_connect_error());   
      }
      // echo "Connection Successful...<br>";
   
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $location = $_POST['location'];
      $guests = $_POST['guests'];
      $arrivals = $_POST['arrivals'];
      $leaving = $_POST['leaving'];

      $sql = "insert into book (Name, Email, Phone, City, Location, Guests, Arrivals, Leaving) values('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving'); ";

      $result = mysqli_query($con, $sql);
      // echo $result;
?>
   <div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
   <h1><?php if($result){
          echo "Registered Successfully";
      } 
      else{
         echo "ERROR: $sql <br> $con->error";
     }?></h1> 
   </div>

<?php      
      $con->close();
      // echo "CLOSED..!!";
   }

?>


<!-- Submit section ends -->
<div class="wrapper"> <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"> <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/> <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
</svg>
</div>


<div class="submission">
   <div class="box">
         <div class="content">
            <h1>Thanks For Joining Us</h1>
            <p>We will be in touch with you as soon as possible. </p>
         </div>
   </div>
</div>

<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +91-9999955555 </a>
         <a href="#"> <i class="fas fa-phone"></i> +91-9999944444 </a>
         <a href="#"> <i class="fas fa-envelope"></i> support@pwanderer.com </a>
         <a href="#"> <i class="fas fa-map"></i> pune, india - 411001 </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

   <div class="credit"> created by <span>Azad</span> | all rights reserved! </div>

</section>

<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
