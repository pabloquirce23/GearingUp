<?php
require_once('admin/config/connection.php');

//register function
if(isset($_POST['register_rq'])){
    $username= mysqli_real_escape_string($conn, $_POST['username']);
    $email= mysqli_real_escape_string($conn, $_POST['email']);
    $password= sha1($_POST['password']);
    $confirm_password= sha1($_POST['confirm_password']);

    if($confirm_password > 5){
    if($password == $confirm_password){
        $sql= "insert into users(username, email, confirm_password) values('$username', '$email', '$confirm_password')";
        if(mysqli_query($conn, $sql)){
            $_SESSION['username'] = $username;
            $_SESSION['email'] = $email;
            header('location: dashboard.php');
        }else{
            header('Location: home.php?action=register&c=not'); 
        }
    }else{
        header('Location: home.php?action=register&m=not');
    }
}else{
    header('Location: home.php?action=register&to_short=true');
}
}


//login function
if(isset($_POST['login_rq'])){
    $email= mysqli_real_escape_string($conn, $_POST['email']);
    $password= sha1($_POST['password']);

    $sql= "select * from users where email='$email' and confirm_password='$password'";
    if ($result=mysqli_query($conn, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($user= mysqli_fetch_assoc($result)){
                $_SESSION['username'] = $user['username'];
                $_SESSION['email'] = $user['email'];
                header('location: dashboard.php');
            }
        }else{
            header('location: home.php?action=login&info=wrong');
        }
    }else{
        header('location: home.php?action=login&info=wrong');
    }

}
