<?php
define('st',true);
  $servername="localhost";
  $username="root";
  $password="";
  $db="frank";
  $conn=mysqli_connect($servername,$username,$password,$db);
  if(!$conn){
    die();
  }
  
  ?>