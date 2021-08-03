<?php

session_start();

$server="localhost";
$username="root";
$password="";
$database="mydb";
$con=mysqli_connect($server,$username,$password,$database);
if (isset($_POST['Reset'])) {
	
	$username=$_POST['username'];
	$pass=$_POST['password'];
  $confirmpass=$_POST['confirmpassword'];
    //$query=mysqli_query($con,"SELECT * from signup WHERE firstname='".$username."' AND password='".$pass."' ");
  if ($pass==$confirmpass) {
    //echo "updated";
    $query=mysqli_query($con,"UPDATE signup SET password='".$pass."' WHERE firstname='".$username."'  ");
    echo "<h1>updated Successfully</h1>";
    echo "<h2>Click here to <a href=login.html> Login </a></h2>" ;

    /*$rows=mysqli_num_rows($query);
    if ($rows==0) {
       echo"<h1>Password updated Successfully</h1>"; 
       echo  "<h2> Click here to <a href=login.html>Login </a> </h2>" ;
       
    } */
}
       else {
              echo "<h1>Password and ConfirmPassword should be same</h1>";
              echo "<h2>Click here to <a href=passwordreset.html> Reset </a></h2>" ;
              //header("location:imagemapping.html");

           }
}


?>