<?php
  require_once('header.php');
?>
      <section id="single__post_section">
        <div class="container">
          <div class="row">
            <div class="col-md-9">
              <?php
                $post_id= $_GET['p'];
                $sql= "select * from posts where id='$post_id'";
                $result= mysqli_query($conn, $sql);
                while($post= mysqli_fetch_assoc($result)){ 
              ?>
              <div class="single-post-wrapper">
                <img
                  src="assets/imaages/post_images/<?php echo $post['post_img'] ?>" alt="post Image"
                  class="post-img"
                />
                <div class="post-details">
                  <p>written by <span>-<?php echo $post['post_author'] ?></span></p>
                  <p>date time <span>-<?php echo $post['created_at'] ?></span></p>
                  <p>category <span>-<?php echo $post['post_category'] ?></span></p>
                </div>
                <h1><?php echo $post['post_title'] ?></h1>
                <div class="post__content">
                  <?php echo $post['post_description'] ?>
                </div>
              </div>
              <?php } ?>
            </div>
            <div class="col-md-3">
              <div class="character-categories">
                <h2>Categories</h2>
                    <ul>
                      <?php
                      $sql= "select * from post_category";
                      $result= mysqli_query($conn, $sql);
                      while ($category= mysqli_fetch_assoc($result)) {
                                            echo '<li><a href="post-category.php?name='.$category['name'].'">'.$category['name'].'</a></li>';
                      } ?>
                    </ul>
              </div>
              <div class="popular-characters">
                <h2>popular post</h2>
                    <ul>
                      <?php
                      $sql= "select * from posts order by id desc limit 8";
                      $result= mysqli_query($conn, $sql);
                      while($post= mysqli_fetch_assoc($result)){ ?>
                        <li>
                            <a href="post.php?p=<?php echo $post['id'] ?>">
                              <img src="assets/imaages/post_images/<?php echo $post['post_img'] ?>" alt="post Image">
                              <p><?php echo $post['post_title'] ?></p>
                          </a>
                        </li>
                      <?php } ?>
                    </ul>
              </div>
            </div>
          </div>
        </div>
      </section>

<?php
  require_once('footer.php');
?>