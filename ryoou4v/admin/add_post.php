<?php
include('header.php');

if(isset($_POST['post_adding_rq'])){

$post_title=mysqli_real_escape_string($conn, $_POST['post_title']);
$post_category=mysqli_real_escape_string($conn, $_POST['post_category']);
$post_author=mysqli_real_escape_string($conn, $_POST['post_author']);
$post_description=mysqli_real_escape_string($conn, $_POST['post_description']);

$path= $_FILES['post_img']['name'];
$post_img= $path.rand(1000, 100000).".".pathinfo($path, PATHINFO_EXTENSION);
$tmp_name= $_FILES['post_img']['tmp_name'];
$folder = "../assets/imaages/post_images/".$post_img;
move_uploaded_file($tmp_name, $folder);

$sql= "INSERT INTO `posts`(`post_title`, `post_category`, `post_author`, `post_description`, `post_img`) VALUES ('$post_title', '$post_category', '$post_author', '$post_description', '$post_img')";

if(mysqli_query($conn, $sql)){
    echo '
        <div class="alert alert-success alert-dismissible" role="alert">
          <span type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></span>
          <p>Post Inserted!</p>
        </div>
        ';
}else{
    echo '
        <div class="alert alert-danger alert-dismissible" role="alert">
          <span type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></span>
          <p>Something went wrong! Post not inserted.</p>
        </div>
        ';
}
}
?>

<div class="app-main__inner">
    <div class="card">
        <div class="card-header">
            <h5>Add Post</h5>
        </div>
        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="row align-items-center">
                    <div class="col-md-10 input-wrap m-auto">
                        <label for="">post title</label>
                        <input type="text" name="post_title" class="form-control" required />
                    </div>
                    <div class="col-md-10 input-wrap m-auto">
                        <label>post category</label>
                        <select name="post_category" class="form-control" required>
                            <option value="">Select Category</option>
                            <?php
                            $sql= "select * from post_category";
                            $result= mysqli_query($conn, $sql);
                            while ($category= mysqli_fetch_assoc($result)){
                                echo '<option value="'.$category['name'].'">'.$category['name'].'</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-md-10 input-wrap m-auto">
                        <label for="">post author</label>
                        <input type="text" name="post_author" class="form-control" required />
                    </div>
                    <div class="col-md-10 input-wrap m-auto">
                        <label>post description</label>
                        <textarea name="post_description" class="form-control" id="ckeditor2" cols="30" rows="10" required></textarea>
                    </div>
                    <div class="col-md-10 input-wrap m-auto">
                        <label for="">post image</label>
                        <input type="file" name="post_img" class="form-control" required />
                    </div>
                    <br><br>
                    <div class="col-md-6 input-wrap m-auto">
                        <input type="submit" name="post_adding_rq" value="Add Post" class="btn btn-success form-control">
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