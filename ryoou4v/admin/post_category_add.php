<?php
include('header.php');
if(isset($_POST['cat_add_req'])){
    $category_name= mysqli_real_escape_string($conn, $_POST['name']);
    
    $sql= "insert into post_category(name) values('$category_name')";
    if(mysqli_query($conn, $sql)){
    echo '
        <div class="alert alert-success alert-dismissible" role="alert">
          <span type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></span>
          <p>Category Has Been Added!</p>
        </div>
        ';
    }else{
    echo '
        <div class="alert alert-danger alert-dismissible" role="alert">
          <span type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></span>
          <p>Category Not Added. Something Went Wrong!</p>
        </div>
        ';
    }
}
if(isset($_POST['cat_edit_req'])){
    $category_name= mysqli_real_escape_string($conn, $_POST['name']);
    $edit_id= mysqli_real_escape_string($conn, $_POST['edit_id']);
    
    $sql= "update post_category set name='$category_name' where id='$edit_id'";
    if(mysqli_query($conn, $sql)){
    echo '
        <div class="alert alert-success alert-dismissible" role="alert">
          <span type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></span>
          <p>Category Has Been Updated!</p>
        </div>
        ';
    }else{
    echo '
        <div class="alert alert-danger alert-dismissible" role="alert">
          <span type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></span>
          <p>Category Not Updated. Something Went Wrong!</p>
        </div>
        ';
    }
}
?>

<div class="app-main__inner">
    <div class="card">
        <?php if(isset($_GET['edit_rq'])){ 
            $edit_id= $_GET['edit_rq'];
            $sql= "select * from post_category where id='$edit_id'";
            $result= mysqli_query($conn, $sql);
            while ($category= mysqli_fetch_assoc($result)) { ?>
            <div class="card-header">
                <h5>Update category</h5>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="row align-items-center">
                        <div class="col-md-10 input-wrap m-auto">
                            <label for="">category name</label>
                            <input type="text" name="name" value="<?php echo $category['name'] ?>" class="form-control" required>
                            <input type="hidden" name="edit_id" value="<?php echo $category['id'] ?>" class="form-control">
                        </div>
                        <br><br>
                        <div class="col-md-6 input-wrap m-auto">
                            <input type="submit" name="cat_edit_req" value="Update Category" class="btn btn-success form-control">
                        </div>
                        <br><br><br><br>
                    </div>
                </form>
            </div>           
        <?php }}else{ ?>
        <div class="card-header">
            <h5>Add category</h5>
        </div>
        <div class="card-body">
            <form action="" method="post">
                <div class="row align-items-center">
                    <div class="col-md-10 input-wrap m-auto">
                        <label for="">category name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <br><br>
                    <div class="col-md-6 input-wrap m-auto">
                        <input type="submit" name="cat_add_req" value="Add Category" class="btn btn-success form-control">
                    </div>
                    <br><br><br><br>
                </div>
            </form>
        </div>
        <?php } ?>
    </div>
</div>

<?php
include('footer.php');
?>