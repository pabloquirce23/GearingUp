
<?php
  require_once('admin/config/connection.php');

//register function
if(isset($_POST['register_rq_2'])){
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
            header('Location: register.php?c=not'); 
        }
    }else{
        header('Location: register.php?m=not');
    }
}else{
    header('Location: register.php?to_short=true');
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
                  <div class="container active" id="l-s-form-toggle">';
                    <div class="user signupBx">
                      <div class="formBx">
                        <form method="POST" action="">
                            <?php
                            if(isset($_GET['m']) && $_GET['m'] == 'not'){
                                echo ' <p style="color:red; text-align: center; margin-bottom:20px; font-size: 13px;">Password and Conform Password not match!</p>';
                            }elseif(isset($_GET['c']) && $_GET['c'] == 'not'){
                                echo ' <p style="color:red; text-align: center; margin-bottom:20px; font-size: 13px;">Something went wrong! Please try again.</p>';
                            }elseif(isset($_GET['to_short']) && $_GET['to_short'] == 'true'){
                                echo ' <p style="color:red; text-align: center; margin-bottom:20px; font-size: 13px;">Password should be greater than 5</p>';
                            }
                            ?>
                            <h2>Create an account</h2>
                            <input type="text" name="username" placeholder="Username" max="20" min="4" required/>
                            <input type="email" name="email" placeholder="Email Address" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required/>
                            <input type="password" name="password" placeholder="Create Password" required/>
                            <input type="password" name="confirm_password" placeholder="Confirm Password" required/>
                            <input type="submit" class="s_btn" name="register_rq_2" value="Sign Up" />
                            <p class="signup">
                                Already have an account ?
                                <a href="login.php" class="">Login.</a>
                            </p>
                        </form>
                      </div>
                      <div class="imgBx">
                        <img
                          src="assets/imaages/Guilty-Gear-20th-Anniversary-Edition-210119-005.jpg"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                </section>
<?php
  require_once('footer.php');
?>

