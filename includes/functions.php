<?php



function registration(){
    global $connection;
    if(isset($_POST['register'])){
       $firstname =  $_POST['fname'];
       $lastname =  $_POST['lname'];
       $email =  $_POST['email'];
       $password =  md5($_POST['password']);
       $cpassword =  md5($_POST['cpassword']);


       
        if($firstname == '' 
        || $lastname == '' 
        || $email == ''
        || $password == ''
        || $cpassword == ''
        ){

            $message = <<<TEXT
            <div class="alert alert-danger" role="alert">
            Please Fill All Fields!
          </div>

TEXT;
echo $message;

        }else{
            
                $sql_query = "INSERT INTO users (firstname, lastname, email , password)";
           $sql_query .= " VALUES('$firstname' , '$lastname', '$email', ";
           $sql_query .= " '$password' )";
    
    
          $result =  mysqli_query($connection, $sql_query);
            if($result){
                $message = <<<TEXT
                <div class="alert alert-success" role="alert">
                Successfully Inserted!
              </div>
    
    TEXT;
    echo $message;
            }else{
                $message = <<<TEXT
                <div class="alert alert-danger" role="alert">
                Not Inserted!
              </div>
    
    TEXT;
    echo $message;
            }
        }

    }

}



function login(){
    global $connection;
    if(isset($_POST['submit'])){
       
 $user=$_POST['user'];
 $pass=$_POST['password'];
 $query = "SELECT * FROM user WHERE  email='$user' AND password='$pass'";

 $results = mysqli_query($connection, $query);
//  Return nmbr row 
 if(mysqli_num_rows($results) >= 1)
 {
     session_start();

     $_SESSION['email'] = $user;
            header("Location: index.php");//redirect
        }else{
            $message = <<<TEXT
            <div class="alert alert-danger" role="alert">
            sorry username or password is incorrect
          </div>

TEXT;
echo $message;
        }
    }
}
function login1(){
    global $connection;
    if(isset($_POST['submit'])){
       
 $user=$_POST['user'];
 $pass=$_POST['password'];
 $query = "SELECT * FROM user WHERE  email='$user' AND password='$pass'";

 $results = mysqli_query($connection, $query);
//  Return nmbr row 
 if(mysqli_num_rows($results) >= 1)
 {
     session_start();

     $_SESSION['email'] = $user;
            header("Location: index1.php");//redirect
        }else{
            $message = <<<TEXT
            <div class="alert alert-danger" role="alert">
            sorry username or password is incorrect
          </div>

TEXT;
echo $message;
        }
    }
}
?>