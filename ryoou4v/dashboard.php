<?php
require_once('header.php');
if(!isset($_SESSION['username'])){
  header("Location: login.php");
}
?>
      <section id="hero-section-blog">
        <div class="hero-bg-img">
          <div class="hero-contents">
            <h1>dashboard</h1>
          </div>
        </div>
      </section>


<?php
require_once('footer.php');
?>
