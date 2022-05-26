<?php
session_start();

if(isset($_GET['theme']) && $_GET['theme'] == 'light'){
    $_SESSION['theme'] = 'light' ;
    echo '<script> history.back() </script>';
}elseif(isset($_GET['theme']) && $_GET['theme'] == 'dark'){
    unset($_SESSION['theme']);
    echo '<script> history.back() </script>';
}