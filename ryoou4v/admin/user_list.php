<?php
include('header.php');
?>


<div class="app-main__inner">
<?php
if(isset($_GET['action']) && $_GET['action'] == 'deleted'){
    echo '
        <div class="alert alert-warning alert-dismissible" role="alert">
          <span type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></span>
          <p>User Has Been Deleted!</p>
        </div>
        ';
}elseif(isset($_GET['action']) && $_GET['action'] == 'n_deleted'){
    echo '
        <div class="alert alert-danger alert-dismissible" role="alert">
          <span type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></span>
          <p>User Not Deleted. Something Went Wrong!</p>
        </div>
        ';
}
?>
    <div class="card">
        <div class="card-header"><h5>user list</h5></div>
        <div class="card-body">
            <table id="all_characters" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Delete</th>
                       
                    </tr>
                </thead>
                <tbody>
<?php
$no= 0;
$sql= "select * from users";
$result= mysqli_query($conn, $sql);
while ($user= mysqli_fetch_assoc($result)) { $no++ ?>
                    <tr>
                        <td><?php echo $no ?></td>
                        <td><?php echo $user['username']; ?></td>
                        <td><?php echo $user['email']; ?></td>
                        <td><a href="config/category_config.php?user_delete_id=<?php echo $user['id'] ?>" class="btn btn-danger">Delete</a></td>
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