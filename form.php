<?php

session_start();
$trustname1="MANITHAM ORGANISATION";
//$trustname2="ZOO OUTREACH ORGANISATION";
$server="localhost";
$username="root";
$password="";
$database="mydb";
$con=mysqli_connect($server,$username,$password,$database);
/*if ($con) {
  echo "successfully";
}*/
if (isset($_POST['submit'])) {
  
  $name=$_POST['name'];
  $mobile=$_POST['mob-no'];
  $email=$_POST['email'];
  $donation = $_POST['donation'];
  $d=implode(' and ',$donation);
  $date=$_POST['date'];
  $message=$_POST['msg'];
    //$trustname=$_POST['trustname'];
  $query=mysqli_query($con,"SELECT * from form WHERE  donationdate='".$date."' ");
  $rows=mysqli_num_rows($query);
    if ($rows==0) {
       $res=mysqli_query($con,"INSERT INTO form(name,  mobile,email,donation,donationdate,message) VALUES('$name','$mobile','$email','$d','$date','$message')");
     
    if($res){

        echo "<h1>Data  updated successfully..</h1>";
        echo "<h1>Click here to go to <a href=index.html>HomePage</a> </h1> ";
       
          
}  

     }
     else {
       echo "<h1>The selected date is already booked..please select another date<h1> ";
       echo "<h1>Click here to <a href=form.html> Fill the form </a> </h1> ";
       
    }
     foreach($_POST['donation'] as $selected) {
            if ($selected=="Money" and $trustname1=="MANITHAM ORGANISATION" ) {
                header("location:ac.html");
              
        }
        
 
}

}
?>