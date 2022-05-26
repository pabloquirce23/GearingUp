<?php
require_once('header.php');

$sql= 'select * from about_page where id=1';
$result= mysqli_query($conn, $sql);
while($about_page= mysqli_fetch_assoc($result)){ ?>
      <section id="hero-section-blog">
        <div class="hero-bg-img">
          <div class="hero-contents">
            <h1>about us</h1>
          </div>
        </div>
      </section>

      <section id="about-us-section">
        <div class="about-section" style="background: url('assets/imaages/<?php echo $about_page['about_img'] ?>') no-repeat left; background-size: 57% 100%;">
          <div class="inner-container">
            <div class="text">
              <?php echo $about_page['about_texts'] ?>
            </div>
          </div>
        </div>
      </section>
<?php
}
require_once('footer.php');
?>
