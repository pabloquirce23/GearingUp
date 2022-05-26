<?php
  require_once('header.php');
?>
      <section id="single-character-section">
        <div class="container">
          <div class="row">
<?php
  $character_id= $_GET['v'];
  $sql= "select * from characters where id='$character_id'";
  $result= mysqli_query($conn, $sql);
  while($character= mysqli_fetch_assoc($result)){ 
?>
            <div class="col-md-9">
              <div class="single-character-wrapper">
                <h1 class="s-character-name"><?php echo $character['character_name'] ?></h1>
                <blockquote class="s-character-quote">
                  <div class="quote-icon"><i class="fa-solid fa-quote-left"></i></div>
                  <div class="quote-words">
                    <p>
                    <?php echo $character['quote'] ?>
                  </p>
                  </div>
                  <div class="quote-sing">
                    <b>-<?php echo $character['character_name'] ?></b>
                  </div>
                </blockquote>
                <div class="s-character-details">
                  <aside class="aside-box">
                    <div class="aside-box-wrapper">
                      <div class="aside-header"><?php echo $character['character_name'] ?></div>
                      <div class="aside-img-box">
                        <img
                          src="assets/imaages/characters/<?php echo $character['character_img'] ?>"
                          alt="Character Image"
                        />
                      </div>
                      <div class="c-details-box">
                        <div class="details-title">
                          <b>name</b>
                        </div>
                        <div class="details-row">
                          <b>kanji</b>
                          <p><?php echo $character['character_kanji_name'] ?></p>
                        </div>
                        <div class="details-row">
                          <b>romaji</b>
                          <p><?php echo $character['character_romaji_name'] ?></p>
                        </div>
                        <div class="details-row">
                          <b>Alias</b>
                          <p><?php echo $character['character_alias_name'] ?></p>
                        </div>
                      </div>
                      <div class="c-details-box">
                        <div class="details-title">
                          <b>profile</b>
                        </div>
                        <div class="details-row">
                          <b>race</b>
                          <p><?php echo $character['character_race'] ?></p>
                        </div>
                        <div class="details-row">
                          <b>gender</b>
                          <p><?php echo $character['character_gender'] ?></p>
                        </div>
                        <div class="details-row">
                          <b>age</b>
                          <p><?php echo $character['character_age'] ?></p>
                        </div>
                        <div class="details-row">
                          <b>height</b>
                          <p><?php echo $character['character_height'] ?></p>
                        </div>
                        <div class="details-row">
                          <b>weight</b>
                          <p><?php echo $character['character_weight'] ?></p>
                        </div>
                        <div class="details-row">
                          <b>blood type</b>
                          <p><?php echo $character['character_blood_type'] ?></p>
                        </div>
                        <div class="details-row">
                          <b>origin</b>
                          <p><?php echo $character['character_origin'] ?></p>
                        </div>
                        <div class="details-row">
                          <b>birthday</b>
                          <p><?php echo $character['character_birthday'] ?></p>
                        </div>
                        <div class="details-row">
                          <b>eye color</b>
                          <p><?php echo $character['character_eye_color'] ?></p>
                        </div>
                        <div class="details-row">
                          <b>hobbies</b>
                          <p><?php echo $character['character_hobbies'] ?></p>
                        </div>
                        <div class="details-row">
                          <b>likes</b>
                          <p><?php echo $character['character_likes'] ?></p>
                        </div>
                        <div class="details-row">
                          <b>dislike</b>
                          <p><?php echo $character['character_dislike'] ?></p>
                        </div>
                      </div>
                      <div class="c-details-box">
                        <div class="details-title">
                          <b>status</b>
                        </div>
                        <div class="details-row">
                          <b>Occupation</b>
                          <p><?php echo $character['character_occupation'] ?></p>
                        </div>
                        <div class="details-row">
                          <b>Affiliation</b>
                          <p><?php echo $character['character_affiliation'] ?></p>
                        </div>
                      </div>
                      <div class="c-details-box">
                        <div class="details-title">
                          <b>Abilities</b>
                        </div>
                        <div class="details-row">
                          <b>weapons</b>
                          <p><?php echo $character['character_weapons'] ?></p>
                        </div>
                        <div class="details-row">
                          <b>title</b>
                          <p><?php echo $character['character_title'] ?></p>
                        </div>
                        <div class="details-row">
                          <b>Type • Easy to use</b>
                          <p><?php echo $character['character_type_easyToUse'] ?></p>
                        </div>
                      </div>
                      <div class="c-details-box">
                        <div class="details-title">
                          <b>Voice actor</b>
                        </div>
                        <div class="details-row">
                          <b>japanese</b>
                          <p><?php echo $character['character_voice_actor_japaness'] ?></p>
                        </div>
                        <div class="details-row">
                          <b>english</b>
                          <p><?php echo $character['character_voice_actor_english'] ?></p>
                        </div>
                        <div class="details-row">
                          <b><?php echo $character['character_voice_actor_korean'] ?></b>
                          <p></p>
                        </div>
                      </div>
                    </div>
                  </aside>
                  <div class="details-contents-wrapper">
                    <div class="short-description">
                      <?php echo $character['short_desc'] ?>
                    </div>
                    <div class="table-of-content">
                      <div class="toc-header">
                        <div class="toc-h-left">
                          <i class="fa-solid fa-list"></i>
                          
                        </div>
                        <div class="toc-h-right"><p>contents</p></div>
                      </div>
                      <div class="toc-links">
                        <ul>
                          <li><a href="#design">design</li></a>
                          <li><a href="#personality">personality</li></a>
                          <li><a href="#story">story</li></a>
                          <li><a href="#abilities">abilities</li></a>
                          <li><a href="#music">music</li></a>
                          <li><a href="#quotes">quotes</li></a>
                          <li><a href="#allusions">allusions</li></a>
                          <li><a href="#trivia">trivia</li></a>
                          <!-- <li><a href="#gallery">gallery</li></a> -->
                          <li><a href="#extreme_links">extreme links</li></a>
                          <li><a href="#notes">notes</li></a>
                          <li><a href="#references">references</li></a>
                        </ul>
                      </div>
                    </div>
                    <div id="design" class="toc-box-details">
                        <div class="toc-box-title">
                            design
                        </div>
                        <div class="toc-box-content">
                         <?php echo $character['design_decs'] ?>
                        </div>
                    </div>
                    <div id="personality" class="toc-box-details">
                        <div class="toc-box-title">
                            personality
                        </div>
                        <div class="toc-box-content">
                            <?php echo $character['personality_decs'] ?>
                        </div>
                    </div>
                    <div id="story" class="toc-box-details">
                        <div class="toc-box-title">
                            story
                        </div>
                        <div class="toc-box-content">
                            <?php echo $character['story_decs'] ?>
                        </div>
                    </div>
                    <div id="abilities" class="toc-box-details">
                        <div class="toc-box-title">
                            abilities
                        </div>
                        <div class="toc-box-content">
                            <?php echo $character['abillities_decs'] ?>
                        </div>
                    </div>
                    <div id="music" class="toc-box-details">
                        <div class="toc-box-title">
                            music
                        </div>
                        <div class="toc-box-content">
                            <?php echo $character['music_decs'] ?>
                        </div>
                    </div>
                    <div id="quotes" class="toc-box-details">
                        <div class="toc-box-title">
                            quotes
                        </div>
                        <div class="toc-box-content">
                            <?php echo $character['quotes_decs'] ?>
                        </div>
                    </div>
                    <div id="allusions"></div>
                    <div id="" class="toc-box-details">
                        <div class="toc-box-title">
                            allusions
                        </div>
                        <div class="toc-box-content">
                            <?php echo $character['allusions_decs'] ?>
                        </div>
                    </div>
                    <div id="trivia" class="toc-box-details">
                        <div class="toc-box-title">
                            trivia
                        </div>
                        <div class="toc-box-content">
                            <?php echo $character['trivia_decs'] ?>
                        </div>
                    </div>
                    <!-- <div id="gallery" class="toc-box-details">
                        <div class="toc-box-title">
                            gallery
                        </div>
                        <div class="toc-box-content">
                            
                        </div>
                    </div> -->
                    <div id="extreme_links" class="toc-box-details">
                        <div class="toc-box-title">
                            extreme links
                        </div>
                        <div class="toc-box-content">
                            <?php echo $character['extreme_links_decs'] ?>
                        </div>
                    </div>
                    <div id="notes" class="toc-box-details">
                        <div class="toc-box-title">
                            notes
                        </div>
                        <div class="toc-box-content">
                            <?php echo $character['notes_decs'] ?>
                        </div>
                    </div>
                    <div id="references" class="toc-box-details">
                        <div class="toc-box-title">
                            references
                        </div>
                        <div class="toc-box-content">
                            <?php echo $character['references_decs'] ?>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
<?php
  }
?>
            <div class="col-md-3">
                <div class="character-categories">
                    <h2>Categories</h2>
                    <ul>
                      <?php
                      $sql= "select * from character_category";
                      $result= mysqli_query($conn, $sql);
                      while ($category= mysqli_fetch_assoc($result)) {
                                            echo '<li><a href="character-category.php?name='.$category['name'].'">'.$category['name'].'</a></li>';
                      } ?>
                    </ul>
                </div>
                <div class="popular-characters">
                    <h2>popular characters</h2>
                    <ul>
                      <?php
                      $sql= "select * from characters order by id desc limit 8";
                      $result= mysqli_query($conn, $sql);
                      while($character= mysqli_fetch_assoc($result)){ ?>
                        <li>
                            <a href="character.php?v=<?php echo $character['id'] ?>">
                              <img src="assets/imaages/characters/<?php echo $character['character_img'] ?>" alt="Character Image">
                              <p><?php echo $character['character_name'] ?></p>
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

