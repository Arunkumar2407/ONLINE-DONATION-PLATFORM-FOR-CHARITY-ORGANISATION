
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
	
	$trustname=$_POST['name'];
	$connum=$_POST['mobno'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$doc=$_POST['uploaddocument'];
    $message=$_POST['msg'];
    $query=mysqli_query($con,"SELECT * from trustform WHERE email='".$email."' OR contactnumber='".$connum."' ");
    $rows=mysqli_num_rows($query);
    if ($rows==0) {
       
        $res=mysqli_query($con,"INSERT INTO trustform(nameofthetrust, contactnumber,address,email,uploaddocuments,message) VALUES('$trustname','$connum','$address','$email','$doc','$message')");
     
    if($res){

        echo "Data  updated successfully.We will get back to you within 3 days  ";
        //header("location:login.html");
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
