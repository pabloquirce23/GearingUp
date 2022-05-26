<?php
include('header.php');

if(isset($_POST['update_rq'])){
$_2nd_slider_title= mysqli_real_escape_string($conn, $_POST['2nd_slider_title']);
$_2nd_slider_description= mysqli_real_escape_string($conn, $_POST['2nd_slider_description']);
$_3rd_slider_title= mysqli_real_escape_string($conn, $_POST['3rd_slider_title']);
$_3rd_slider_description= mysqli_real_escape_string($conn, $_POST['3rd_slider_description']);

//1st slider
if($_FILES['1st_slider_img']['name'] == ""){
    $_1st_slider_img = mysqli_real_escape_string($conn, $_POST['old_1st_slider_img']);
}else{
$_1st_slider_img_path= $_FILES['1st_slider_img']['name'];
$_1st_slider_img= $_1st_slider_img_path.rand(1000, 100000).".".pathinfo($_1st_slider_img_path, PATHINFO_EXTENSION);
$tmp_name= $_FILES['1st_slider_img']['tmp_name'];
$folder = "../assets/imaages/slider_images/".$_1st_slider_img;
move_uploaded_file($tmp_name, $folder);
}
//2nd slider
if($_FILES['2nd_slider_img']['name'] == ""){
    $_2nd_slider_img = mysqli_real_escape_string($conn, $_POST['old_2nd_slider_img']);
}else{
$_2nd_slider_img_path= $_FILES['2nd_slider_img']['name'];
$_2nd_slider_img= $_2nd_slider_img_path.rand(1000, 100000).".".pathinfo($_2nd_slider_img_path, PATHINFO_EXTENSION);
$tmp_name= $_FILES['2nd_slider_img']['tmp_name'];
$folder = "../assets/imaages/slider_images/".$_2nd_slider_img;
move_uploaded_file($tmp_name, $folder);
}
//3rd slider
if($_FILES['3rd_slider_img']['name'] == ""){
    $_3rd_slider_img = mysqli_real_escape_string($conn, $_POST['old_3rd_slider_img']);
}else{
$_3rd_slider_img_path= $_FILES['3rd_slider_img']['name'];
$_3rd_slider_img= $_3rd_slider_img_path.rand(1000, 100000).".".pathinfo($_3rd_slider_img_path, PATHINFO_EXTENSION);
$tmp_name= $_FILES['3rd_slider_img']['tmp_name'];
$folder = "../assets/imaages/slider_images/".$_3rd_slider_img;
move_uploaded_file($tmp_name, $folder);
}

$sql= "UPDATE `home_page` SET `1st_slider_img`='$_1st_slider_img',`2nd_slider_img`='$_2nd_slider_img',`2nd_slider_title`='$_2nd_slider_title',`2nd_slider_description`='$_2nd_slider_description',`3rd_slider_img`='$_3rd_slider_img',`3rd_slider_title`='$_3rd_slider_title',`3rd_slider_description`='$_3rd_slider_description' WHERE `id`=1";

if(mysqli_query($conn, $sql)){
    echo '
        <div class="alert alert-success alert-dismissible" role="alert">
          <span type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></span>
          <p>Page Updated!</p>
        </div>
        ';
}else{
    echo '
        <div class="alert alert-danger alert-dismissible" role="alert">
          <span type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></span>
          <p>Something went wrong! Page not updated.</p>
        </div>
        ';
}
}
?>

<div class="app-main__inner">
    <div class="card">
        <div class="card-header">
            <h5>Home page update</h5>
        </div>
        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
            <?php
            $sql= "select * from home_page where id=1";
            $result= mysqli_query($conn, $sql);
            while($site= mysqli_fetch_assoc($result)){ ?>
                <div class="row align-items-center">
                    <div class="col-md-10 input-wrap m-auto">
                        <label for="">1st slider image</label> 
                        <input type="file"  name="1st_slider_img" class="form-control">
                        <input type="hidden" value="<?php echo $site['1st_slider_img'] ?>" name="old_1st_slider_img" class="form-control" />
                    </div>
                    <div class="col-md-10 input-wrap m-auto">
                        <label for="">2nd slider image</label> 
                        <input type="file"  name="2nd_slider_img" class="form-control">
                        <input type="hidden" value="<?php echo $site['2nd_slider_img'] ?>" name="old_2nd_slider_img" class="form-control" />
                    </div>
                    <div class="col-md-10 input-wrap m-auto">
                        <label for="">2nd slider title</label>
                        <input type="text" value="<?php echo $site['2nd_slider_title'] ?>" name="2nd_slider_title" class="form-control" />
                    </div>
                    <div class="col-md-10 input-wrap m-auto">
                        <label>2nd slider description</label>
                        <textarea name="2nd_slider_description" class="form-control" id="ckeditor2" cols="30" rows="10" required><?php echo $site['2nd_slider_description'] ?></textarea>
                    </div>
                    <div class="col-md-10 input-wrap m-auto">
                        <label for="">3rd slider image</label> 
                        <input type="file"  name="3rd_slider_img" class="form-control">
                        <input type="hidden" value="<?php echo $site['3rd_slider_img'] ?>" name="old_3rd_slider_img" class="form-control" />
                    </div>
                    <div class="col-md-10 input-wrap m-auto">
                        <label for="">3rd slider title</label>
                        <input type="text" value="<?php echo $site['3rd_slider_title'] ?>" name="3rd_slider_title" class="form-control" />
                    </div>
                    <div class="col-md-10 input-wrap m-auto">
                        <label>3rd slider description</label>
                        <textarea name="3rd_slider_description" class="form-control" id="ckeditor2" cols="30" rows="10" required><?php echo $site['3rd_slider_description'] ?></textarea>
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