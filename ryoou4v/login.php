
<?php
  require_once('admin/config/connection.php');

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
            header('location: login.php?info=wrong');
        }
    }else{
        header('location: login.php?info=wrong');
    }
}

// fetch site settings
$sql= "select * from site_settings where id=1";
$result= mysqli_query($conn, $sql);
while($site= mysqli_fetch_assoc($result)){ 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $site['title'] ?></title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
    />
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.5.0.1.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <link rel="stylesheet" type="text/css" href="assets/css/about-us.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/search.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/blog.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" /> 
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css" /> 

</head>
<?php } ?>

                <section class="login-signup-wrapper login-page">
                  <div class="container " id="l-s-form-toggle">';
                    <div class="user signinBx">
                      <div class="imgBx">
                        <img
                          src="assets/imaages/guilty-gear-x-arte-promocional.jpg"
                          alt=""
                        />
                      </div>
                      <div class="formBx">
                        <form method="POST" action="">
                        <?php
                        if(isset($_GET['info']) && $_GET['info'] == 'wrong'){
                            echo ' <p style="color:red; text-align: center; margin-bottom:20px; font-size: 13px;">User Credential Wrong!</p>';
                        }
                        ?>
                          <h2>Login</h2>
                          <input type="email" name="email" placeholder="Email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required/>
                          <input type="password" name="password" placeholder="Password" required/>
                          <input type="submit" class="s_btn" name="login_rq" value="Login" />
                          <p class="signup">
                            Don't have an account ?
                            <a href="register.php" class="">Register.</a>
                          </p>
                        </form>
                      </div>
                    </div>
                  </div>
                </section>


<?php
  require_once('footer.php');
?>
