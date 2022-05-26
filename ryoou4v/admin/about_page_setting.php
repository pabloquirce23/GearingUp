<?php
include('header.php');

if(isset($_POST['update_rq'])){
$about_texts= mysqli_real_escape_string($conn, $_POST['about_texts']);

//about img upload
if($_FILES['about_img']['name'] == ""){
    $about_img = mysqli_real_escape_string($conn, $_POST['old_about_img']);
}else{
$about_img_path= $_FILES['about_img']['name'];
$about_img= $about_img_path.rand(1000, 100000).".".pathinfo($about_img_path, PATHINFO_EXTENSION);
$tmp_name= $_FILES['about_img']['tmp_name'];
$folder = "../assets/imaages/".$about_img;
move_uploaded_file($tmp_name, $folder);
}

$sql= "UPDATE `about_page` SET `about_texts`='$about_texts',`about_img`='$about_img' WHERE id=1";
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
            <h5>About page update</h5>
        </div>
        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
            <?php
            $sql= "select * from about_page where id=1";
            $result= mysqli_query($conn, $sql);
            while($site= mysqli_fetch_assoc($result)){ ?>
                <div class="row align-items-center">
                    <div class="col-md-10 input-wrap m-auto">
                        <label for="">Image</label>
                        <input type="file"  name="about_img" class="form-control">
                        <input type="hidden" value="<?php echo $site['about_img'] ?>" name="old_about_img" class="form-control" />
                    </div>
                    <div class="col-md-10 input-wrap m-auto">
                        <label>About Text</label>
                        <textarea name="about_texts" class="form-control" id="ckeditor2" cols="30" rows="10" required><?php echo $site['about_texts'] ?></textarea>
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