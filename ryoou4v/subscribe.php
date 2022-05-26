<?php
require_once('admin/config/connection.php');

$email= mysqli_real_escape_string($conn, $_POST['email']);
$sql= "insert into subscribers(email) values('$email')";
if(mysqli_query($conn, $sql)){
    $_SESSION['subscribed'] = true;
    header('Location: index.php');
}else{
    header('Location: index.php');
}