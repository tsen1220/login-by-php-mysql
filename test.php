<?php
session_start();
require_once "config.php";

if(isset($_POST['submit'])){
  $username=$_POST['username'];
  $password=$_POST['password'];
  $confirm_password=$_POST['confirm_password']; 

  if($password==$confirm_password){
      $password=md5($password);
      $sql = "INSERT INTO users(username,password) VALUES ('$username','$password')";
      mysqli_query($link,$sql);
      $_SESSION['message']="You are login";
      $_SESSION['username']= $username;
      header("location: regist.php");

  }else{
      $_SESSION['message']="The two passwords do not match";
    
  }
  
}
