<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Travel website</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="./style.css" />
  </head>
  <body>
  <header>

  <section class="header-section">
        <div class="container">
          <div class="row">
            <div class="logo">
              <img src="./img/logo-black.png" alt="Logo" />
            </div>
            <div class="main-menu">
              <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Locations</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contact Us</a></li>
              </ul>
            </div>
            <div class="btn-wrapper">
              <a href="./login.php" class="btn">Sign In</a>
            </div>
          </div>
        </div>
      </section>
      <section class="mobile-header">
        <div class="logo">
          <img src="./img/logo-black.png" alt="">
        </div>
        <div class="hamburger" onclick="toggleMenu()"><i class="fa-solid fa-bars"></i></div>
      <nav id="navLinks">
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Contact</a>
      </nav>
      </section>
    </header>