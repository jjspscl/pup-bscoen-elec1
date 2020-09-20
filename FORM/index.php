<?php
  if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    echo $username.$password;

    $con = mysqli_connect("localhost","root","","login");
    $query = "INSERT INTO users(user,password) VALUES('$username','$password')";
    $result = mysqli_query($con,$query);
  } // (POST) HINDI LALABAS SA URL
?>
