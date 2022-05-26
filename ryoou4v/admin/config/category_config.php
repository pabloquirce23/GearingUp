<?php
require_once('../config/connection.php');

// character category delete
if(isset($_GET['character_category_delete_id'])){
    $delete_id= $_GET['character_category_delete_id'];
    $sql= "delete from character_category where id='$delete_id'";
    if(mysqli_query($conn, $sql)){
        header('location: ../character_category_list.php?action=deleted');
    }else{
        header('location: ../character_category_list.php?action=n_deleted');
    }
}
// post category delete
if(isset($_GET['post_category_delete_id'])){
    $delete_id= $_GET['post_category_delete_id'];
    $sql= "delete from post_category where id='$delete_id'";
    if(mysqli_query($conn, $sql)){
        header('location: ../post_category_list.php?action=deleted');
    }else{
        header('location: ../post_category_list.php?action=n_deleted');
    }
}

// user delete
if(isset($_GET['user_delete_id'])){
    $delete_id= $_GET['user_delete_id'];
    $sql= "delete from users where id='$delete_id'";
    if(mysqli_query($conn, $sql)){
        header('location: ../user_list.php?action=deleted');
    }else{
        header('location: ../user_list.php?action=n_deleted');
    }
}

// subscriber delete
if(isset($_GET['subscriber_delete_id'])){
    $delete_id= $_GET['subscriber_delete_id'];
    $sql= "delete from subscribers where id='$delete_id'";
    if(mysqli_query($conn, $sql)){
        header('location: ../subscribed_email.php?action=deleted');
    }else{
        header('location: ../subscribed_email.php?action=n_deleted');
    }
}