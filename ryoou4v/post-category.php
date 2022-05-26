<?php
    require_once('header.php');
?>

      <section id="hero-section-blog">
        <div class="hero-bg-img-about">
          <div class="hero-contents">
            <h1>blog</h1>
            <b style="padding-left: 10px; font-size: 22px; color: white;">
                <?php
                if(isset($_GET['name'])){
                    echo $_GET['name'];
                }
                ?>
            </b>
          </div>
        </div>
      </section>
      <section id="blog-section">
        <div class="container">
          <div class="blog-row">
          <?php
          $category_name= $_GET['name'];
          $sql= "select * from posts where post_category='$category_name'";
          $result= mysqli_query($conn, $sql);
          while($post= mysqli_fetch_assoc($result)){ ?>
            <div class="single-blog-box">
              <a href="post.php?p=<?php echo $post['id'] ?>"
                ><div class="blog-img-box">
                  <img
                    src="assets/imaages/post_images/<?php echo $post['post_img'] ?>"
                    width="100%"
                    height="100%"
                    alt="Post Image"
                  />
                </div>
                <div class="blog-content-box">
                  <div class="b-p-category"><?php echo $post['post_category'] ?></div>
                  <div class="b-post-c">
                    <h1 class="b-p-c-title">
                      <?php echo $post['post_title'] ?>
                    </h1>
                    <p class="b-p-details">
                      <?php 
                          $string= $post['post_description'];
                          if (strlen($string) >= 20) {
                              echo substr($string, 0, 250). " ... ";
                          }
                          else {
                              echo $string;
                          }                           
                        ?>
                    </p>
                  </div>
                </div></a>
            </div>
            <?php } ?>
          </div>
        </div>
      </section>

<?php
    require_once('footer.php');
?>
