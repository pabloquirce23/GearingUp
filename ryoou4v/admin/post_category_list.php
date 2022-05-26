<?php
include('header.php');
?>


<div class="app-main__inner">
<?php
if(isset($_GET['action']) && $_GET['action'] == 'deleted'){
    echo '
        <div class="alert alert-warning alert-dismissible" role="alert">
          <span type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></span>
          <p>Category Has Been Deleted!</p>
        </div>
        ';
}elseif(isset($_GET['action']) && $_GET['action'] == 'n_deleted'){
    echo '
        <div class="alert alert-danger alert-dismissible" role="alert">
          <span type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></span>
          <p>Category Not Deleted. Something Went Wrong!</p>
        </div>
        ';
}
?>
    <div class="card">
        <div class="card-header"><h5>category list</h5></div>
        <div class="card-body">
            <table id="all_characters" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Edit</th>
                        <th>Delete</th>
                       
                    </tr>
                </thead>
                <tbody>
<?php
$no= 0;
$sql= "select * from post_category";
$result= mysqli_query($conn, $sql);
while ($category= mysqli_fetch_assoc($result)) { $no++ ?>
                    <tr>
                        <td><?php echo $no ?></td>
                        <td><?php echo $category['name']; ?></td>
                        <td><a href="post_category_add.php?edit_rq=<?php echo $category['id'] ?>" class="btn btn-warning">Edit</a></td>
                        <td><a href="config/category_config.php?post_category_delete_id=<?php echo $category['id'] ?>" class="btn btn-danger">Delete</a></td>
                    </tr>
<?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
include('footer.php');
?>