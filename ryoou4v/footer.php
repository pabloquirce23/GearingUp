 <?php
$sql= "select * from site_settings where id=1";
$result= mysqli_query($conn, $sql);
while($site= mysqli_fetch_assoc($result)){ 
?>
 <footer class="footer-section">
        <div class="container">
          <!-- <div class="footer-cta pt-5 pb-5">
            <div class="row">
              <div class="col-xl-4 col-md-4 mb-30">
                <div class="single-cta">
                  <i class="fas fa-map-marker-alt"></i>
                  <div class="cta-text">
                    <h4>Find us</h4>
                    <span>1010 Avenue, sw 54321, chandigarh</span>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-md-4 mb-30">
                <div class="single-cta">
                  <i class="fas fa-phone"></i>
                  <div class="cta-text">
                    <h4>Call us</h4>
                    <span>9876543210 0</span>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-md-4 mb-30">
                <div class="single-cta">
                  <i class="far fa-envelope-open"></i>
                  <div class="cta-text">
                    <h4>Mail us</h4>
                    <span>mail@info.com</span>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
          <div class="footer-content pt-5 pb-5">
            <div class="row">
              <div class="col-xl-4 col-lg-4 mb-50">
                <div class="footer-widget">
                  <div class="footer-logo">
                    <a href="index.php"
                      ><img
                        src="assets/imaages/<?php echo $site['logo'] ?>"
                        class="img-fluid"
                        alt="logo"
                    /></a>
                  </div>
                  <div class="footer-text">
                    <p>
                      <?php echo $site['shrot_description'] ?>
                    </p>
                  </div>
                  <div class="footer-social-icon">
                    <span>Follow us</span>
                    <a target="_blank" href="<?php echo $site['facebook_link'] ?>"><i class="fab fa-facebook-f facebook-bg"></i></a>
                    <a target="_blank" href="<?php echo $site['twitter_link'] ?>"><i class="fab fa-twitter twitter-bg"></i></a>
                    <a target="_blank" href="<?php echo $site['linkidin_link'] ?>"><i class="fab fa-google-plus-g google-bg"></i></a>
                    <a target="_blank" href="<?php echo $site['google_plug_link'] ?>"><i class="fa-brands fa-linkedin-in twitter-bg"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                <div class="footer-widget">
                  <div class="footer-widget-heading">
                    <h3>Useful Links</h3>
                  </div>
                  <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="about.php">about</a></li>
                    <li><a href="characters.php">characters</a></li>
                    <li><a href="blog.php">blog</a></li>
                    <li><a href="quiz.php">quiz</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                <div class="footer-widget">
                  <div class="footer-widget-heading">
                    <h3>Subscribe</h3>
                  </div>
                  <div class="footer-text mb-25">
                    <p>Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
                  </div>
                  <div class="subscribe-form">
                    <form action="subscribe.php" method="post">
                      <input type="email" name="email" placeholder="Email Address" />
                      <button><i class="fab fa-telegram-plane"></i></button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="copyright-area">
          <div class="container">
            <div class="row">
              <div class="col-xl-12 col-lg-12 text-center text-lg-left">
                <div class="copyright-text">
                  <p>
                    Copyright &copy; 2018, All Right Reserved
                    <a href="index.php"><?php echo $site['brand_name'] ?></a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </section>
<?php } ?>
    <script src="assets/js/jquery.3.6.0.min.js"></script>
    <script src="assets/js/bootstrap5.0.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="assets/js/app.js"></script>
  </body>
</html>