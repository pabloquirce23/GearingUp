
<?php
  require_once('header.php');
$sql= 'select * from home_page where id=1';
$result= mysqli_query($conn, $sql);
while($home_page= mysqli_fetch_assoc($result)){ ?>
      <section id="slider-section">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button
              type="button"
              data-bs-target="#carouselExampleCaptions"
              data-bs-slide-to="0"
              class="active"
              aria-current="true"
              aria-label="Slide 1"
            ></button>
            <button
              type="button"
              data-bs-target="#carouselExampleCaptions"
              data-bs-slide-to="1"
              aria-label="Slide 2"
            ></button>
            <button
              type="button"
              data-bs-target="#carouselExampleCaptions"
              data-bs-slide-to="2"
              aria-label="Slide 3"
            ></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item">
              <img src="assets/imaages/slider_images/<?php echo $home_page['3rd_slider_img'] ?>" class="d-block w-100" alt="Slider Image" />
              <div class="carousel-caption carousel-caption-edit d-none d-md-block">
                <h5><?php echo $home_page['3rd_slider_title'] ?></h5>
                <p><?php echo $home_page['3rd_slider_description'] ?></p>
              </div>
            </div>
            <div class="carousel-item active" data-bs-interval="20000">
              <img src="assets/imaages/slider_images/<?php echo $home_page['1st_slider_img'] ?>" class="d-block w-100" alt="Slider Image" />
              <div class="carousel-caption d-none d-md-block">
                <section class="login-signup-wrapper">
                <?php
                    if(isset($_GET['action']) && $_GET['action'] == 'login'){
                      echo '<div class="container " id="l-s-form-toggle">';
                    }elseif(isset($_GET['action']) && $_GET['action'] == 'register'){
                      echo '<div class="container active" id="l-s-form-toggle">';
                    }else{
                      echo '<div class="container " id="l-s-form-toggle">';
                    }
                ?>
                    <div class="user signinBx">
                      <div class="imgBx">
                        <img
                          src="assets/imaages/login_img.jpg"
                          alt=""
                        />
                      </div>
                      <div class="formBx">
                        <form method="POST" action="user_login_register.php">
                        <?php
                        if(isset($_GET['info']) && $_GET['info'] == 'wrong'){
                            echo ' <p style="color:red; font-size: 13px;">User Credential Wrong!</p>';
                        }
                        ?>
                          <h2>Login</h2>
                          <input type="email" name="email" placeholder="Email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required/>
                          <input type="password" name="password" placeholder="Password" required/>
                          <input type="submit" name="login_rq" value="Login" />
                          <p class="signup">
                            Don't have an account ?
                            <a href="index.php?action=register" class="toggleForm">Register.</a>
                          </p>
                        </form>
                      </div>
                    </div>
                    <div class="user signupBx">
                      <div class="formBx">
                        <form method="POST" action="user_login_register.php">
                        <?php
                        if(isset($_GET['m']) && $_GET['m'] == 'not'){
                            echo ' <p style="color:red; font-size: 13px;">Password and Conform Password not match!</p>';
                        }elseif(isset($_GET['c']) && $_GET['c'] == 'not'){
                            echo ' <p style="color:red; font-size: 13px;">Something went wrong! Please try again.</p>';
                        }elseif(isset($_GET['to_short']) && $_GET['to_short'] == 'true'){
                            echo ' <p style="color:red; font-size: 13px;">Password should be greater than 5.</p>';
                        }
                        ?>
                          <h2>Create an account</h2>
                          <input type="text" name="username" placeholder="Username" max="20" min="4" required/>
                          <input type="email" name="email" placeholder="Email Address" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required/>
                          <input type="password" name="password" placeholder="Create Password" min="5" required/>
                          <input type="password" name="confirm_password" placeholder="Confirm Password" min="5" required/>
                          <input type="submit" name="register_rq" value="Sign Up" />
                          <p class="signup">
                            Already have an account ?
                            <a href="index.php?action=login" class="toggleForm">Login.</a>
                          </p>
                        </form>
                      </div>
                      <div class="imgBx">
                        <img
                          src="assets/imaages/register_img.png"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                </section>
              </div>
            </div>
            <div class="carousel-item">
              <img src="assets/imaages/slider_images/<?php echo $home_page['2nd_slider_img'] ?>" class="d-block w-100" alt="Slider Image" />
              <div class="carousel-caption carousel-caption-edit d-none d-md-block">
                <h5><?php echo $home_page['2nd_slider_title'] ?></h5>
                <p><?php echo $home_page['2nd_slider_description'] ?></p>
              </div>
            </div>
          </div>
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </section>
<?php } ?>

      <section id="character-section">
        <div class="section--title">
          <ul>
            <li>Playable characters in -Strive-</li>
          </ul>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="character-boxes-wrapper">
                <?php
                $sql= "select * from characters order by id desc limit 18";
                $result= mysqli_query($conn, $sql);
                while($character= mysqli_fetch_assoc($result)){ ?>
                <div class="character-box">
                  <a href="character.php?v=<?php echo $character['id'] ?>"
                    ><div class="img-box">
                      <img
                        src="assets/imaages/characters/<?php echo $character['character_img'] ?>"
                        width="100%"
                        height="100%"
                        alt=""
                      />
                    </div>
                    <div class="character-name"><a href="character.php?v=<?php echo $character['id'] ?>"><?php echo $character['character_name'] ?></a></div></a
                  >
                </div>
                <?php } ?>
              </div>
            </div>
            <div class="all-character-btn">
              <a href="characters.php">all character</a>
            </div>
          </div>
        </div>
      </section>

      <section id="blog-section-carousel">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div id="news-slider" class="owl-carousel">

                <?php
                $sql= "select * from posts order by id desc limit 9";
                $result= mysqli_query($conn, $sql);
                while($post= mysqli_fetch_assoc($result)){ ?>
                <div class="post-slide">
                  <div class="post-img">
                    <img src="assets/imaages/post_images/<?php echo $post['post_img'] ?>" alt="Post Image" />
                    <a href="post.php?p=<?php echo $post['id'] ?>" class="over-layer"><i class="fa fa-link"></i></a>
                  </div>
                  <div class="post-content">
                    <h3 class="post-title">
                      <a href="post.php?p=<?php echo $post['id'] ?>"><?php echo $post['post_title'] ?></a>
                    </h3>
                    <p class="post-description">
                      <?php 
                          $string= $post['post_description'];
                          if (strlen($string) >= 20) {
                              echo substr($string, 0, 100). " ... ";
                          }
                          else {
                              echo $string;
                          }                           
                        ?>
                    </p>
                    <span class="post-date"><i class="fa fa-clock-o"></i><?php echo $post['created_at'] ?></span>
                    <a href="post.php?p=<?php echo $post['id'] ?>" class="read-more">read more</a>
                  </div>
                </div>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </section>

<?php
  require_once('footer.php');
?>
