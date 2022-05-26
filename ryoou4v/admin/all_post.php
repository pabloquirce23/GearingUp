<?php
include('header.php');
?>

<div class="app-main__inner">
<?php
if(isset($_GET['action']) && $_GET['action'] == 'deleted'){
    echo '
        <div class="alert alert-warning alert-dismissible" role="alert">
          <span type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></span>
          <p>Post Has Been Deleted!</p>
        </div>
        ';
}elseif(isset($_GET['action']) && $_GET['action'] == 'n_deleted'){
    echo '
        <div class="alert alert-danger alert-dismissible" role="alert">
          <span type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></span>
          <p>Post Not Deleted. Something Went Wrong!</p>
        </div>
        ';
}
?>
    <div class="card">
        <div class="card-header"><h5>all posts</h5></div>
        <div class="card-body">
            <table id="all_characters" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Category</th>
                        <th>Image</th>
                        <th>Short Description</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
<?php
$no= 0;
$sql= "SELECT * FROM `posts` ORDER BY `id` DESC";
$result= mysqli_query($conn, $sql);
while ($post= mysqli_fetch_assoc($result)) { $no++ ?>
                    <tr>
                        <td><?php echo $no ?></td>
                        <td><?php echo $post['post_title'] ?></td>
                        <td><?php echo $post['post_author'] ?></td>
                        <td><?php echo $post['post_category'] ?></td>
                        <td>
                            <img width="100px" height="auto" src="../assets/imaages/post_images/<?php echo $post['post_img'] ?>" alt="Post Images" />
                        </td>
                        <td>
                            <?php 
                            $string= $post['post_description'];
                            if (strlen($string) >= 20) {
                                echo substr($string, 0, 40). " ... ";
                            }
                            else {
                                echo $string;
                            }                           
                            ?>
                        </td>
                         <td><a href="" class="btn btn-warning">Edit</a></td>
                        <td><a href="config/character-config.php?delete_post=<?php echo $post['id'] ?>" class="btn btn-danger">Delete</a></td>
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