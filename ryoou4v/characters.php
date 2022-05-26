
<?php
  require_once('header.php');
?>
      <section id="hero-section-character">
        <div class="hero-bg-img">
          <div class="hero-contents">
            <h1>characters</h1>
          </div>
        </div>
      </section>

      <section id="character-section" class="c-page-bg">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="character-boxes-wrapper">
                <?php
                $sql= "select * from characters order by id desc limit 20";
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
          </div>
        </div>
      </section>

<?php
  require_once('footer.php');
?>