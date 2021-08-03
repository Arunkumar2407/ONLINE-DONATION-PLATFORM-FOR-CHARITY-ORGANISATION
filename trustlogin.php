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
    $query=mysqli_query($con,"SELECT * from trustform WHERE email='".$username."' AND contactnumber='".$pass."' ");
    $rows=mysqli_num_rows($query);
    if ($rows==0) {
       echo"<h1>you don't have login credentials</h1>";
       echo"<h1>Click here to<a href=trustform.html>Fill the Form </a></h1>";
       
    }

       else {
             echo"<h1>Click here to<a href=http://localhost:8000/phpmyadmin/index.php?route=/sql&server=1&db=mydb&table=form&pos=0</a>View Donation details</h1>";

           }



}


?>