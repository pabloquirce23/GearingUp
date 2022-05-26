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
  font-size: 35px;
  color: #4b6cb7;
}
</style>
</head>
<body>
<?php
require_once('config/connection.php');
if(isset($_POST['login_rq'])){
    $email= mysqli_real_escape_string($conn, $_POST['admin_email']);
    $password= sha1($_POST['admin_pass']);

    $sql= "select * from admin_account where email='$email'";
    if ($result=mysqli_query($conn,$sql)){
        if(mysqli_num_rows($result) > 0){
            while($admin= mysqli_fetch_assoc($result)){
                if($password == $admin['password']){
                    $_SESSION['admin_email'] = $admin['email'];
                    header('location: index.php');
                }else{
                    header('location: login.php?info=wrong');
                }
            }
        }else{
            header('location: login.php?info=wrong');
        }
    }else{
        echo 'Something went wrong!';
    }

}
?>
<div class="login">
  <div class="form">
<?php
if(isset($_GET['info']) && $_GET['info'] == 'wrong'){
    echo ' <p style="color:red;">Admin Credential Wrong!</p>';
}
?>
    <form action="" method="POST" class="login-form">
      <b class="material-icons">Admin Login</b> <br>
      <input type="text" name="admin_email" placeholder="email" style="margin-top:30px;" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required/>
      <input type="password" name="admin_pass" placeholder="password" required />
      <input type="submit" name="login_rq" class="button" value="LOGIN">
    </form>  
  </div>
</div>
</body>
</html>