<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <title>Tiemacs Garage</title>
</head> 
<body>
  <?php "include header.php"?>
  <nav>
  <section class="header">
        <nav>   
          <ul>
            <a href="#" class="welcome">Kydz companies</a>
            <li> <a href="home.php">Home</a></li>
           <!-- <li> <a href="admin.php">View products</a></li> -->
            <li> <a href="products.php">Shop</a></li> 
            <!--<li> <a href="product_form.php">Add</a></li> -->
            <li> <a href="logout.php">Login</a></li> 
            <li><a href = "logout.php">Admin login</a></li> 
          
          </ul>
        </nav> 
  </section>
             
    <div class ="container">
<!-- Slider main container -->
<div class="swiper">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
      <!-- Slides -->
      <div class="swiper-slide"><img src ="Images/1.jpg"></div>
      <div class="swiper-slide"><img src ="Images/9.jpg"></div>
      <div class="swiper-slide"><img src ="Images/5.jpg"></div>
      <div class="swiper-slide"><img src ="Images/6.jpg"></div>
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>
  
    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

  </div>

    </div>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script>
  const swiper = new Swiper('.swiper', {
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  }, 
  
    loop: true,
  
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
  }); 
  
  </script>
  
<h2 class ="Tim">Welcome to Tiemacs Garage<hr><br></h2> 
<div class="Image">
<article class="Paragraph">
    <!---<img class="Img-company" src="Images/7.jpg" alt="Modifications">--->
    <p1><h5>Thank you for chosing to visit Tiemacs Garage.</h5> This is your number one company offering professional vehicle servicing handled with the best machinery and equipment to ensure customer satisfaction.We are a company dealing with car tuning and testing, upgrades, vehicle alignment, wheel balancing, vehicle testing, professional paint job among other services. <br><br>
        <h2>"Tiemacs Autoshop and Garage  <br>transforms your ordinary car<br> into the machine you<br> dream about"</h2></p1>
</article>
</div>
<footer class="footer">
  <div class="container-">
    <div class="row">
      <div class="footer-col">
        <h4>Company</h4>
        <ul>
          <!--<li><a href ="aboutus.php">About us</a></li>-->
          <li><a href ="products.php">Our products</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>Shop Online</h4>
        <ul>
         <li><a href ="products.php">Wheels</a></li>
          <li><a href ="products.php">Interior designs</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>Follow us</h4>
        <div class="social links">
          <a href ="#"><i class="fab fa-facebook-f"></i></a>
          <a href ="#"><i class="fab fa-twitter"></i></a>
          <a href ="#"><i class="fab fa-instagram"></i></a>
          <a href ="#"><i class="fab fa-linkedin-in"></i></a>
        </div> 
      </div>

    </div>
  </div>

</footer>
</body>
</html>