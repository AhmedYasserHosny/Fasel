<?php
include("conf.php");
$sql="insert into admine (fname,lname,email,password,gender,age) values('$_POST[fname]' ,'$_POST[lname]' ,'$_POST[email]', '$_POST[password]','$_POST[gender]' ,'$_POST[age]')
     ";email password

     header("Location: home.html");
     if(! mysqli_query($con,$sql))
     {
        echo 'error'.mysqli_error($con);
     }
     else{
     header("Location: cong1.html");

     }
     

?>
