<?php

$servername="localhost";
$Username="root";
$Password="";
$databasename="signup";

$conn=mysqli_connect($servername,$Username,$Password,$databasename);

if($conn){
  die('connection Failed:'.mysqli_connect_error());
if(isset($_POST['save']))
{
  $name=$_POST['name'];
  $Email=$_POST['Email'];
  $username=$_POST['username'];
  $password=$_POST['password'];
  
  $sql_query="INSERT INTO entry_details(name,Email,username,password)
  VALUES($name,$Email,$username,$password)";
}
  if(mysqli_query($conn,$sql_query))
  {
    echo"New Details Entry Inserted Successfully!!!";
  }
  else{
    echo"Error:". $sql. "". mysqli_error($conn);
  }mysqli_close($conn);
}
?>