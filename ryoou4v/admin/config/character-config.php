<?php
require_once('../config/connection.php');

// delete character
if(isset($_GET['delete'])){
    $delete_id= $_GET['delete'];
    $sql= "delete from characters where id='$delete_id'";
    if(mysqli_query($conn, $sql)){
        header('location: ../all_character.php?action=deleted');
    }else{
        header('location: ../all_character.php?action=n_deleted');
    }
}

//delete post
if(isset($_GET['delete_post'])){
    $delete_id= $_GET['delete_post'];
    $sql= "delete from posts where id='$delete_id'";
    if(mysqli_query($conn, $sql)){
        header('location: ../all_post.php?action=deleted');
    }else{
        header('location: ../all_post.php?action=n_deleted');
    }
}