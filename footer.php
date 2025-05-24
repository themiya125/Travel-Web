<footer>
      <section class="footer">
        <div class="container">
          <div class="row">
            <div class="col-1">
              <img src="./img/logo-white.png" alt="footer logo" />
              <p class="text">Don’t just get there, get there in style.</p>

              <div class="contact">
                <p>
                  <i class="fa-solid fa-location-dot"></i>&nbsp;&nbsp;1901,
                  Kandy, Sri Lanka
                </p>
                <p><i class="fa-solid fa-phone"></i>&nbsp;&nbsp;(909) 547 1577</p>
                <p><i class="fa-solid fa-envelope"></i>&nbsp;&nbsp;webadvisorlk@gmail.com</p>
              </div>
            </div>
            <div class="col-2">

              <p class="title"><b>Top Destinations</b></p>
              <ul>
                <li>Bali</li>
                <li>China</li>
                <li>Inida</li>
                <li>Sri Lanka</li>
              </ul>
            </div>
            <div class="col-3">
              <p class="title"><b>Information</b></p>
              <ul>
                <li>Help & FAQ</li>
                <li>Careers</li>
                <li>About Us</li>
                <li>Blog</li>
                <li>Contact Us</li>
              </ul>
            </div>
            <div class="col-4">
              <p class="title"><b>Follow Us</b></p>
              <div class="social-media">
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-youtube"></i></a>
              </div>
              <p class="title"><b>Payment Methods</b></p>
              <img class="payment-img" src="./img/payment.png" alt="payment">
            </div>
          </div>
        </div>
      <div class="line">

      </div>
      <p class="copyright">Copyright @ 2025 Web Advisor. All Right Received</p>
      </section>
    </footer>

    <script>
      $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 30,
        responsiveClass: true,
        nav: true,
        autoplay: false,
        responsive: {
          0: {
            items: 1,
          },
          600: {
            items: 3,
          },
          1200: {
            items: 5,
            nav: true,
          },
        },
      });


      function toggleMenu(){
        const nav = document.getElementById('navLinks');
        nav.classList.toggle('active');
      }
    </script>
  </body>
</html>
