
<?php

session_start();

$server="localhost";
$username="root";
$password="";
$database="mydb";
$con=mysqli_connect($server,$username,$password,$database);
/*if ($con) {
	echo "successfully";
}*/
if (isset($_POST['submit'])) {
	
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$email=$_POST['Email'];
	$phonenumber=$_POST['phoneno'];
	$pass=$_POST['password'];
    $query=mysqli_query($con,"SELECT * from signup WHERE firstname='".$firstname."' OR password='".$pass."' ");
    $rows=mysqli_num_rows($query);
    if ($rows==0) {
       
        $res=mysqli_query($con,"INSERT INTO signup(firstname,lastname,email,phonenumber,password) VALUES('$firstname','$lastname','$email','$phonenumber','$pass')");
     
    if($res){

        //echo "Data are update successfully";
        header("location:login.html");
     }

     else {
     	echo "there is a problem to update the data";
     }

    }

    else {
       echo "Username Already exist";
       
    } 



}


?>
