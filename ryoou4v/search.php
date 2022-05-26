<?php
    require_once('header.php');
?>
    <section id="search-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
        <nav >
            <div class="nav nav-tabs" id="nav-tab" role="tablist" >
                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">In Characters</button>
                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">In Posts</button>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                <div class="search-result-wrap">
                    <div class="c-s-r">
                    <?php
                    $query= $_GET['query'];
                    $query= htmlspecialchars($query);
                    $query = mysqli_real_escape_string($conn, $query);

                    $sql= "SELECT * FROM `characters`
                                WHERE (`character_name` LIKE '%".$query."%') OR (`short_desc` LIKE '%".$query."%') OR (`character_category` LIKE '%".$query."%')";
                    if($result= mysqli_query($conn, $sql)){;
                        while($character= mysqli_fetch_assoc($result)){ ?>
                        <div class="s-single-row">
                            <a href="character.php?v=<?php echo $character['id'] ?>">
                                <div class="c-s-r-row">
                                    <img src="assets/imaages/characters/<?php echo $character['character_img'] ?>" alt="Character Image" class="s-row-img" />
                                    <div class="s-row-content">
                                        <h3><?php echo $character['character_name'] ?></h3>
                                        <p>                            <?php 
                                            $string= $character['short_desc'];
                                            if (strlen($string) >= 20) {
                                                echo substr($string, 0, 300). " ... ";
                                            }
                                            else {
                                                echo $string;
                                            }                           
                                            ?>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php }}else{
                        echo 'No result found!';
                    } ?>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                <div class="search-result-wrap">
                    <div class="c-s-r">
                    <?php
                    $query= $_GET['query'];
                    $query= htmlspecialchars($query);
                    $query = mysqli_real_escape_string($conn, $query);

                    $sql= "SELECT * FROM `posts`
                                WHERE (`post_title` LIKE '%".$query."%') OR (`post_description` LIKE '%".$query."%') OR (`post_category` LIKE '%".$query."%')";
                    if($result= mysqli_query($conn, $sql)){;
                        while($post= mysqli_fetch_assoc($result)){ ?>
                        <div class="s-single-row">
                            <a href="post.php?p=<?php echo $post['id'] ?>">
                                <div class="c-s-r-row">
                                    <img src="assets/imaages/post_images/<?php echo $post['post_img'] ?>" alt="Character Image" class="s-row-img" />
                                    <div class="s-row-content">
                                        <h3><?php echo $post['post_title'] ?></h3>
                                        <p>                            <?php 
                                            $string= $post['post_description'];
                                            if (strlen($string) >= 20) {
                                                echo substr($string, 0, 200). " ... ";
                                            }
                                            else {
                                                echo $string;
                                            }                           
                                            ?>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php }}else{
                        echo 'No result found!';
                    } ?>
                    </div>
                </div>
            </div> 
        </div>
                </div>
            </div>
        </div>
    </section>
<?php
    require_once('footer.php');
?>


