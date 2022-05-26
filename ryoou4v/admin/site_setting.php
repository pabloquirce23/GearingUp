<?php
include('header.php');

if(isset($_POST['update_rq'])){
$title= mysqli_real_escape_string($conn, $_POST['title']);
$brand_name= mysqli_real_escape_string($conn, $_POST['brand_name']);
$shrot_description = mysqli_real_escape_string($conn, $_POST['shrot_description']);
$facebook_link = mysqli_real_escape_string($conn, $_POST['facebook_link']);
$twitter_link = mysqli_real_escape_string($conn, $_POST['twitter_link']);
$linkidin_link = mysqli_real_escape_string($conn, $_POST['linkidin_link']);
$google_plug_link = mysqli_real_escape_string($conn, $_POST['google_plug_link']);

//logo upload
if($_FILES['logo']['name'] == ""){
    $logo = mysqli_real_escape_string($conn, $_POST['old_logo']);
}else{
$logo_path= $_FILES['logo']['name'];
$logo= $logo_path.rand(1000, 100000).".".pathinfo($logo_path, PATHINFO_EXTENSION);
$tmp_name= $_FILES['logo']['tmp_name'];
$folder = "../assets/imaages/".$logo;
move_uploaded_file($tmp_name, $folder);
}

//fav icon upload
if($_FILES['fav_icon']['name'] == ""){
    $fav_icon = mysqli_real_escape_string($conn, $_POST['old_favicon']);
}else{
$fav_icon_path= $_FILES['fav_icon']['name'];
$fav_icon= $fav_icon_path.rand(1000, 100000).".".pathinfo($fav_icon_path, PATHINFO_EXTENSION);
$tmp_name= $_FILES['fav_icon']['tmp_name'];
$folder = "../assets/imaages/".$fav_icon;
move_uploaded_file($tmp_name, $folder);
}

$sql= "UPDATE `site_settings` SET `title`='$title',`brand_name`='$brand_name',`logo`='$logo',`shrot_description`='$shrot_description',`facebook_link`='$facebook_link',`twitter_link`='$twitter_link',`linkidin_link`='$linkidin_link',`google_plug_link`='$google_plug_link',`fav_icon`='$fav_icon' WHERE `id`=1";

if(mysqli_query($conn, $sql)){
    echo '
        <div class="alert alert-success alert-dismissible" role="alert">
          <span type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></span>
          <p>Settings Updated!</p>
        </div>
        ';
}else{
    echo '
        <div class="alert alert-danger alert-dismissible" role="alert">
          <span type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></span>
          <p>Something went wrong! Settings not updated.</p>
        </div>
        ';
}
}
?>

<div class="app-main__inner">
    <div class="card">
        <div class="card-header">
            <h5>Site Setting</h5>
        </div>
        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
            <?php
            $sql= "select * from site_settings where id=1";
            $result= mysqli_query($conn, $sql);
            while($site= mysqli_fetch_assoc($result)){ ?>
                <div class="row align-items-center">
                    <div class="col-md-10 input-wrap m-auto">
                        <label for="">site title</label>
                        <input type="text" value="<?php echo $site['title'] ?>" name="title" class="form-control" />
                    </div>
                    <div class="col-md-10 input-wrap m-auto">
                        <label for="">Brand Name</label>
                        <input type="text" value="<?php echo $site['brand_name'] ?>" name="brand_name" class="form-control" />
                    </div>
                    <div class="col-md-10 input-wrap m-auto">
                        <label for="">Logo</label>
                        <input type="file"  name="logo" class="form-control">
                        <input type="hidden" value="<?php echo $site['logo'] ?>" name="old_logo" class="form-control" />
                    </div>
                    <div class="col-md-10 input-wrap m-auto">
                        <label for="">Fav icon</label>
                        <input type="file" name="fav_icon" class="form-control">
                        <input type="hidden" value="<?php echo $site['fav_icon'] ?>" name="old_favicon" class="form-control" />
                    </div>
                    <div class="col-md-10 input-wrap m-auto">
                        <label>footer short description</label>
                        <textarea name="shrot_description" class="form-control" id="ckeditor2" cols="30" rows="10" required><?php echo $site['shrot_description'] ?></textarea>
                    </div>
                    <div class="col-md-10 input-wrap m-auto">
                        <label for="">facebook link</label>
                        <input type="text" value="<?php echo $site['facebook_link'] ?>" name="facebook_link" class="form-control" />
                    </div>
                    <div class="col-md-10 input-wrap m-auto">
                        <label for="">twitter link</label>
                        <input type="text" value="<?php echo $site['twitter_link'] ?>" name="twitter_link" class="form-control" />
                    </div>
                    <div class="col-md-10 input-wrap m-auto">
                        <label for="">linkedin link</label>
                        <input type="text" value="<?php echo $site['linkidin_link'] ?>" name="linkidin_link" class="form-control" />
                    </div>
                    <div class="col-md-10 input-wrap m-auto">
                        <label for="">google plus link</label>
                        <input type="text" value="<?php echo $site['google_plug_link'] ?>" name="google_plug_link" class="form-control" />
                    </div>

                    <br><br>
                    <div class="col-md-6 input-wrap m-auto">
                        <input type="submit" name="update_rq" value="Save Changes" class="btn btn-success form-control">
                    </div>
                    <br><br><br><br>
                </div>
            <?php } ?>
            </form>
        </div>
    </div>
</div>

<?php
include('footer.php');
?>