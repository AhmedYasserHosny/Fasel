<?php
include("conf.php");
$sql="insert into user (fname,lname,password,email,gender,age) values('$_POST[fname]' ,'$_POST[lname]' ,'$_POST[password]' ,'$_POST[email]','$_POST[gender]' ,'$_POST[age]')
     ";

     header("Location: home.html");
     if(! mysqli_query($con,$sql))
     {
        echo 'error'.mysqli_error($con);
     }
     else{
     header("Location: cong.html");

     }
     

?>
