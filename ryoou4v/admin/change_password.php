<?php
require_once('config/connection.php');
// check authentication
if(!isset($_SESSION['admin_email'])){
    header('Location: login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Dashboard</title>
<style>
@import url('https://fonts.googleapis.com/css2?family=Comfortaa&display=swap');

body {
  background: linear-gradient(90deg, #4b6cb7 0%, #182848 100%);
}

.login {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
  font-family: 'Comfortaa', cursive;
}

.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  border-radius: 10px;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
}

.form input {
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  border-radius: 5px;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
  font-family: 'Comfortaa', cursive;
}

.form input:focus {
  background: #dbdbdb;
}

.form .button {
  font-family: 'Comfortaa', cursive;
  text-transform: uppercase;
  outline: 0;
  background: #4b6cb7;
  width: 100%;
  border: 0;
  border-radius: 5px;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}

.form .button:active {
  background: #395591;
}

.form b {
  font-size: 25px;
  color: #4b6cb7;
}
</style>
</head>
<body>
<?php
require_once('config/connection.php');
if(isset($_POST['pass_change_rq'])){
    $current_admin= $_SESSION['admin_email'];
    $new_password= sha1($_POST['new_password']);
    $confirm_password= sha1($_POST['confirm_password']);

    if($new_password == $confirm_password){
        $sql= "update admin_account set password='$confirm_password' where email='$current_admin'";
        mysqli_query($conn, $sql);
        header('Location: change_password.php?info=changed');
    }else{
        header('Location: change_password.php?info=wrong');
    }
}
?>
<div class="login">
  <div class="form">
<?php
if(isset($_GET['info']) && $_GET['info'] == 'wrong'){
    echo ' <p style="color:red;">New Password and Conform Password not match!</p>';
}elseif(isset($_GET['info']) && $_GET['info'] == 'changed'){
    echo ' <p style="color:green;">Password Changed!</p>';
}
?>
    <form action="" method="POST" class="login-form">
      <b class="material-icons">Change Password</b> <br>
      <input type="password" name="new_password" placeholder="New Password" style="margin-top:30px;" required/>
      <input type="password" name="confirm_password" placeholder="Confirm Password" required />
      <input type="submit" name="pass_change_rq" class="button" value="CHANGE PASSWORD">
    </form>  
    <a href="login.php">login</a>
  </div>
</div>
</body>
</html>