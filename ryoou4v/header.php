<?php
include('admin/config/connection.php');

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

<?php
if(isset($_SESSION['theme']) == 'light'){
  //when theme request will be dark
  echo ' 
    <link rel="stylesheet" type="text/css" href="assets/css/light_theme.css" />  
      ';
}
?>

  </head>
  <body>
    <section id="page-wrapper">
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">
            <img src="assets/imaages/<?php echo $site['logo'] ?>" alt="Logo">
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="characters.php">Characters</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="blog.php">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="quiz.php">Quiz</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
              </li>
            </ul>
            <form action="search.php" method="GET" class="d-flex">
              <input
                class="form-control me-2"
                type="search"
                name="query"
                placeholder="Search"
                aria-label="Search"
              />
              <button class="btn btn-outline-success" type="submit">Search</button>

              <div class="header-small-box">
                <ul class="navbar-nav me-auto">
                  <li class="nav-item dropdown">
                    <a
                      class="nav-link user-dash-icon dropdown-toggle"
                      id="navbarDropdown"
                      role="button"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                      href="#"
                      >
                      <?php
                      if(isset($_SESSION['username'])){
                        echo "<b>".$_SESSION['username']."</b>";
                      }   
                      ?>
                      <i class="fa-solid fa-user-tie"></i
                    ></a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <!-- //authentication based menu item  -->
                      <?php
                      if(!isset($_SESSION['username'])){
                        echo '
                          <li><a class="dropdown-item" href="login.php">login</a></li>
                          <li><a class="dropdown-item" href="register.php">register</a></li>
                        ';
                      }else{
                        echo '
                          <li><a class="dropdown-item" href="dashboard.php">dashboard</a></li>
                          <li><a class="dropdown-item" href="logout.php">logout</a></li>
                        ';
                      }
                      ?>
                    </ul>
                  </li>               
                <!-- theme switch -->
                  <li class="nav-item dropdown " style="height: 60px;">
                    <a
                      class="nav-link user-dash-icon dropdown-toggle theme_switch_li"
                      id="navbarDropdown"
                      role="button"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                      href="#"
                      >
                     <img src="assets/imaages/theme-switch.png" alt="Theme" class="theme_switch">
                  </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="switch_theme.php?theme=dark">Dark</a></li>
                          <li><a class="dropdown-item" href="switch_theme.php?theme=light">Light</a></li>
                    </ul>
                  </li>
                </ul>
              </div>

              </form>
          </div>
        </div>
      </nav>

<?php }
//alert for subscribers
if(isset($_SESSION['subscribed']) && $_SESSION['subscribed']==true){
  echo '
    <div class="alert alert-success alert-dismissible fade show alert-subscribe" role="alert">
      <strong?>Thanks for Subscribe us! </strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
      ';
  unset($_SESSION['subscribed']);
}
?>