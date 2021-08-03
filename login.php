<?php

session_start();

$server="localhost";
$username="root";
$password="";
$database="mydb";
$con=mysqli_connect($server,$username,$password,$database);
if (isset($_POST['login'])) {
  
  $username=$_POST['username'];
  $pass=$_POST['password'];
    $query=mysqli_query($con,"SELECT * from signup WHERE firstname='".$username."' AND password='".$pass."' ");
    $rows=mysqli_num_rows($query);
    if ($rows==0) {
       echo"Invalid Username or Password";
       
    }

       else {
             header("location:imagemapping.html");

           }



}


?>