<?php

$u=$_POST['u'];
$u=$_POST['p'];


//database connection
$conn = new mysqli('localhost','root','','login');
  if($conn->connect_error){
      die('connection Failed:'.$conn->connect_error);
  }else{
      $stmt = $conn->prepare("insert into registration(u,p) values(?,?)");
      $stmt->bind_param("sssssi",$u,$p);
      $stmt->execute();
      echo "Login Successfully...";
      $stmt->close();
      $conn->close();
      
  }
?>