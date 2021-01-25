<?php

  // Connect to database
  $servername = 'localhost';
  $username = 'root';
  $password = 'root';
  $database = 'script_buildar';

  $conn = mysqli_connect($servername, $username, $password, $database);


  // Check connection
  if(!$conn){
    echo 'Connection error: '.mysqli_connect_error();
  }

?>
