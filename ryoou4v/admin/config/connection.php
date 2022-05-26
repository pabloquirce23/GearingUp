<?php
$server = "localhost";
$username = "root"; 
$password = "";
$database = "ryoou4v";

// Create connection
$conn = mysqli_connect($server, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//start the session
session_start();