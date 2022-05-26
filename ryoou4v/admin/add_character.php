<?php
include('header.php');

if(isset($_POST['add_character_rq'])){
$character_name= mysqli_real_escape_string($conn, $_POST['character_name']);  
$character_kanji_name= mysqli_real_escape_string($conn, $_POST['character_kanji_name']);  
$character_romaji_name= mysqli_real_escape_string($conn, $_POST['character_romaji_name']);  
$character_alias_name= mysqli_real_escape_string($conn, $_POST['character_alias_name']);  
// $character_img= mysqli_real_escape_string($conn, $_POST['']);

$path= $_FILES['character_img']['name'];
$character_img= $path.rand(1000, 100000).".".pathinfo($path, PATHINFO_EXTENSION);
$tmp_name= $_FILES['character_img']['tmp_name'];
$folder = "../assets/imaages/characters/".$character_img;
move_uploaded_file($tmp_name, $folder);

$character_category= mysqli_real_escape_string($conn, $_POST['character_category']);  
$quote= mysqli_real_escape_string($conn, $_POST['quote']);  
$short_desc= mysqli_real_escape_string($conn, $_POST['short_desc']);  
$design_decs= mysqli_real_escape_string($conn, $_POST['design_decs']);  
$personality_decs= mysqli_real_escape_string($conn, $_POST['personality_decs']);  
$story_decs= mysqli_real_escape_string($conn, $_POST['story_decs']);  
$abillities_decs= mysqli_real_escape_string($conn, $_POST['abillities_decs']);  
$music_decs= mysqli_real_escape_string($conn, $_POST['music_decs']);  
$quotes_decs= mysqli_real_escape_string($conn, $_POST['quotes_decs']);  
$allusions_decs= mysqli_real_escape_string($conn, $_POST['allusions_decs']);  
$trivia_decs= mysqli_real_escape_string($conn, $_POST['trivia_decs']);  
$extreme_links_decs= mysqli_real_escape_string($conn, $_POST['extreme_links_decs']);  
$notes_decs= mysqli_real_escape_string($conn, $_POST['notes_decs']);  
$references_decs= mysqli_real_escape_string($conn, $_POST['references_decs']);  
$character_race= mysqli_real_escape_string($conn, $_POST['character_race']);  
$character_gender= mysqli_real_escape_string($conn, $_POST['character_gender']);  
$character_height= mysqli_real_escape_string($conn, $_POST['character_height']);  
$character_age= mysqli_real_escape_string($conn, $_POST['character_age']);  
$character_weight= mysqli_real_escape_string($conn, $_POST['character_weight']);  
$character_blood_type= mysqli_real_escape_string($conn, $_POST['character_blood_type']);  
$character_origin= mysqli_real_escape_string($conn, $_POST['character_origin']);  
$character_birthday= mysqli_real_escape_string($conn, $_POST['character_birthday']);  
$character_eye_color= mysqli_real_escape_string($conn, $_POST['character_eye_color']);  
$character_hobbies= mysqli_real_escape_string($conn, $_POST['character_hobbies']);  
$character_likes= mysqli_real_escape_string($conn, $_POST['character_likes']);  
$character_dislike= mysqli_real_escape_string($conn, $_POST['character_dislike']);  
$character_occupation= mysqli_real_escape_string($conn, $_POST['character_occupation']);  
$character_affiliation= mysqli_real_escape_string($conn, $_POST['character_affiliation']);  
$character_weapons= mysqli_real_escape_string($conn, $_POST['character_weapons']);  
$character_title= mysqli_real_escape_string($conn, $_POST['character_title']);  
$character_type_easyToUse= mysqli_real_escape_string($conn, $_POST['character_type_easyToUse']);  
$character_voice_actor_japaness= mysqli_real_escape_string($conn, $_POST['character_voice_actor_japaness']);  
$character_voice_actor_english= mysqli_real_escape_string($conn, $_POST['character_voice_actor_english']);  
$character_voice_actor_korean= mysqli_real_escape_string($conn, $_POST['character_voice_actor_korean']);  

$sql= "INSERT INTO `characters`(`character_name`, `character_kanji_name`, `character_romaji_name`, `character_alias_name`, `character_img`, `character_category`, `quote`, `short_desc`, `design_decs`, `personality_decs`, `story_decs`, `abillities_decs`, `music_decs`, `quotes_decs`, `allusions_decs`, `trivia_decs`, `extreme_links_decs`, `notes_decs`, `references_decs`, `character_race`, `character_gender`, `character_height`, `character_age`, `character_weight`, `character_blood_type`, `character_origin`, `character_birthday`, `character_eye_color`, `character_hobbies`, `character_likes`, `character_dislike`, `character_occupation`, `character_affiliation`, `character_weapons`, `character_title`, `character_type_easyToUse`, `character_voice_actor_japaness`, `character_voice_actor_english`, `character_voice_actor_korean`) 
VALUES('$character_name', '$character_kanji_name', '$character_romaji_name', '$character_alias_name', '$character_img',  '$character_category', '$quote', '$short_desc', '$design_decs', '$personality_decs', '$story_decs', '$abillities_decs', '$music_decs', '$quotes_decs', '$allusions_decs', '$trivia_decs', '$extreme_links_decs', '$notes_decs', '$references_decs', '$character_race', '$character_gender', '$character_height', '$character_age', '$character_weight', '$character_blood_type', '$character_origin', '$character_birthday', '$character_eye_color', '$character_hobbies', '$character_likes', '$character_dislike', '$character_occupation', '$character_affiliation', '$character_weapons', '$character_title', '$character_type_easyToUse', '$character_voice_actor_japaness', '$character_voice_actor_english', '$character_voice_actor_korean')";
if(mysqli_query($conn, $sql)){
    echo '
        <div class="alert alert-success alert-dismissible" role="alert">
          <span type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></span>
          <p>Character Inserted!</p>
        </div>
        ';
}else{
    echo '
        <div class="alert alert-danger alert-dismissible" role="alert">
          <span type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></span>
          <p>Something went wrong! Character not inserted.</p>
        </div>
        ';
}
}
?>

<div class="app-main__inner">
    <div class="card">
        <div class="card-header">
            <h5>Add Character</h5>
        </div>
        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="row align-items-center">
                    <div class="col-md-10 input-wrap m-auto">
                        <label for="">character name</label>
                        <input type="text" name="character_name" class="form-control">
                    </div>
                    <div class="col-md-10 input-wrap m-auto">
                        <label>character kanji name</label>
                        <input type="text" name="character_kanji_name" class="form-control">
                    </div>
                    <div class="col-md-10 input-wrap m-auto">
                        <label>character romaji name</label>
                        <input type="text" name="character_romaji_name" class="form-control">
                    </div>
                    <div class="col-md-10 input-wrap m-auto">
                        <label>character alias name</label>
                        <input type="text" name="character_alias_name" class="form-control">
                    </div>
                    <div class="col-md-10 input-wrap m-auto">
                        <label>character photo</label>
                        <input type="file" name="character_img" class="form-control">
                    </div>
                    <div class="col-md-10 input-wrap m-auto">
                        <label>character category</label>
                        <select name="character_category" class="form-control">
                            <option value="">Select Category</option>
                            <?php
                            $sql= "select * from character_category";
                            $result= mysqli_query($conn, $sql);
                            while ($category= mysqli_fetch_assoc($result)){
                                echo '<option value="'.$category['name'].'">'.$category['name'].'</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-md-10 input-wrap m-auto">
                        <label>character quote</label>
                        <input type="text" name="quote" class="form-control">
                    </div>
                    <div class="col-md-10 input-wrap m-auto">
                        <label>short description</label>
                        <textarea name="short_desc" class="form-control" id="ckeditor1" cols="30" rows="9"></textarea>
                    </div>
                    <div class="col-md-10 input-wrap m-auto">
                        <label>design</label>
                        <textarea name="design_decs" class="form-control" id="ckeditor2" cols="30" rows="10"></textarea>
                    </div>
                    <div class="col-md-10 input-wrap m-auto">
                        <label>personality</label>
                        <textarea name="personality_decs" class="form-control" id="ckeditor3" cols="30" rows="10"></textarea>
                    </div>
                    <div class="col-md-10 input-wrap m-auto">
                        <label>story</label>
                        <textarea name="story_decs" class="form-control" id="ckeditor4" cols="30" rows="10"></textarea>
                    </div>
                    <div class="col-md-10 input-wrap m-auto">
                        <label>abilities</label>
                        <textarea name="abillities_decs" class="form-control" id="ckeditor5" cols="30" rows="10"></textarea>
                    </div>
                    <div class="col-md-10 input-wrap m-auto">
                        <label>music</label>
                        <textarea name="music_decs" class="form-control" id="ckeditor6" cols="30" rows="10"></textarea>
                    </div>
                    <div class="col-md-10 input-wrap m-auto">
                        <label>quotes description</label>
                        <textarea name="quotes_decs" class="form-control" id="ckeditor7" cols="30" rows="10"></textarea>
                    </div>
                    <div class="col-md-10 input-wrap m-auto">
                        <label>allusions</label>
                        <textarea name="allusions_decs" class="form-control" id="ckeditor8" cols="30" rows="10"></textarea>
                    </div>
                    <div class="col-md-10 input-wrap m-auto">
                        <label>trivia</label>
                        <textarea name="trivia_decs" class="form-control" id="ckeditor9" cols="30" rows="10"></textarea>
                    </div>
                    <div class="col-md-10 input-wrap m-auto">
                        <label>extreme links</label>
                        <textarea name="extreme_links_decs" class="form-control" id="ckeditor10" cols="30" rows="10"></textarea>
                    </div>
                    <div class="col-md-10 input-wrap m-auto">
                        <label>notes</label>
                        <textarea name="notes_decs" class="form-control" id="ckeditor11" cols="30" rows="10"></textarea>
                    </div>
                    <div class="col-md-10 input-wrap m-auto">
                        <label>references</label>
                        <textarea name="references_decs" class="form-control" id="ckeditor12" cols="30" rows="10"></textarea>
                    </div>


                    <div class="col-md-10 input-wrap m-auto">
                        <label>character race</label>
                        <input type="text" name="character_race" class="form-control">
                    </div>
                    <div class="col-md-10 input-wrap m-auto">
                        <label>character gender</label>
                        <input type="text" name="character_gender" class="form-control">
                    </div>
                    <div class="col-md-10 input-wrap m-auto">
                        <label>character height</label>
                        <input type="text" name="character_height" class="form-control">
                    </div>
                    <div class="col-md-10 input-wrap m-auto">
                        <label>character age</label>
                        <input type="text" name="character_age" class="form-control">
                    </div>
                    <div class="col-md-10 input-wrap m-auto">
                        <label>character weight</label>
                        <input type="text" name="character_weight" class="form-control">
                    </div>
                    <div class="col-md-10 input-wrap m-auto">
                        <label>character blood type</label>
                        <input type="text" name="character_blood_type" class="form-control">
                    </div>
                    <div class="col-md-10 input-wrap m-auto">
                        <label>character origin</label>
                        <input type="text" name="character_origin" class="form-control">
                    </div>
                    <div class="col-md-10 input-wrap m-auto">
                        <label>character birthday</label>
                        <input type="text" name="character_birthday" class="form-control">
                    </div>
                    <div class="col-md-10 input-wrap m-auto">
                        <label>character eye color</label>
                        <input type="text" name="character_eye_color" class="form-control">
                    </div>
                    <div class="col-md-10 input-wrap m-auto">
                        <label>character hobbies</label>
                        <input type="text" name="character_hobbies" class="form-control">
                    </div>
                    <div class="col-md-10 input-wrap m-auto">
                        <label>character likes</label>
                        <input type="text" name="character_likes" class="form-control">
                    </div>
                    <div class="col-md-10 input-wrap m-auto">
                        <label>character dislike</label>
                        <input type="text" name="character_dislike" class="form-control">
                    </div>
                    <div class="col-md-10 input-wrap m-auto">
                        <label>character occupation</label>
                        <input type="text" name="character_occupation" class="form-control">
                    </div>
                    <div class="col-md-10 input-wrap m-auto">
                        <label>character affiliation</label>
                        <input type="text" name="character_affiliation" class="form-control">
                    </div>
                    <div class="col-md-10 input-wrap m-auto">
                        <label>character weapons</label>
                        <input type="text" name="character_weapons" class="form-control">
                    </div>
                    <div class="col-md-10 input-wrap m-auto">
                        <label>character title</label>
                        <input type="text" name="character_title" class="form-control">
                    </div>
                    <div class="col-md-10 input-wrap m-auto">
                        <label>character ability type (easy to use)</label>
                        <input type="text" name="character_type_easyToUse" class="form-control">
                    </div>
                    <div class="col-md-10 input-wrap m-auto">
                        <label>character voice actor japaneses</label>
                        <input type="text" name="character_voice_actor_japaness" class="form-control">
                    </div>
                    <div class="col-md-10 input-wrap m-auto">
                        <label>character voice actor english</label>
                        <input type="text" name="character_voice_actor_english" class="form-control">
                    </div>
                    <div class="col-md-10 input-wrap m-auto">
                        <label>character voice actor korean</label>
                        <input type="text" name="character_voice_actor_korean" class="form-control">
                    </div>
                    <br><br>
                    <div class="col-md-6 input-wrap m-auto">
                        <input type="submit" name="add_character_rq" value="Add Character" class="btn btn-success form-control">
                    </div>
                    <br><br><br><br>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include('footer.php');
?>