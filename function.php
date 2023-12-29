<?php

function getAllItems(){
    //connection
    $connection = mysqli_connect("localhost", "root", "", "fasel_db");
    //query
    $query = mysqli_query($connection, 'SELECT * FROM items');
    $items = [];
    while ($row = mysqli_fetch_assoc($query)){
        $items[] = $row;
    }
    //close connection
    mysqli_close($connection); 
    return $items;
       
}
function getAllSummer(){
    //connection
    $connection = mysqli_connect("localhost", "root", "", "fasel_db");
    //query
    $query = mysqli_query($connection, "SELECT name,price,image,number FROM items WHERE cat = 'summer' OR cat='Winter/summer'");
    $items = [];
    while ($row = mysqli_fetch_assoc($query)){
        $items[] = $row;
    }
    //close connection
    mysqli_close($connection); 
    return $items;
       
} 
function getAllAccessories(){
    //connection
    $connection = mysqli_connect("localhost", "root", "", "fasel_db");
    //query
    $query = mysqli_query($connection, "SELECT name,price,image,number FROM items WHERE nameLIKE'%access%'");
    $items = [];
    while ($row = mysqli_fetch_assoc($query)){
        $items[] = $row;
    }
    //close connection
    mysqli_close($connection); 
    return $items;
       
}
function getAllshoes(){
    //connection
    $connection = mysqli_connect("localhost", "root", "", "fasel_db");
    //query
    $query = mysqli_query($connection, "SELECT name,price,image,number FROM items WHERE name LIKE '%sneakers' OR name LIKE '%shoes%'");
    $items = [];
    while ($row = mysqli_fetch_assoc($query)){
        $items[] = $row;
    }
    //close connection
    mysqli_close($connection); 
    return $items;
       
}
function getAllWinter(){
    //connection
    $connection = mysqli_connect("localhost", "root", "", "fasel_db");
    //query
    $query = mysqli_query($connection, "SELECT id,name,price,image,number FROM items WHERE cat = 'winter'OR cat='Winter/summer'");
    $items = [];
    while ($row = mysqli_fetch_assoc($query)){
        $items[] = $row;
    }
    //close connection
    mysqli_close($connection); 
    return $items;
       
}
function add($name,$number,$id,$price,$cat,$imgContent) {
    //connection
    $connection = mysqli_connect("localhost", "root", "", "fasel_db");
    if ($connection->connect_error) {
  die("Connection failed: " . $connection->connect_error);
}
$sql = "INSERT INTO items(name,number,id,cat,price ,image) VALUES ('$name','$number','$id','$cat','$price','$imgContent')";
$result = mysqli_query($connection, $sql);
     mysqli_close($connection);
    
    if ($result) {
        return true;
   
    return false;
    //close connection
    
}
}
function update($name,$number,$id,$price,$cat) {
    //connection
    $connection = mysqli_connect("localhost", "root", "", "fasel_db");
    if ($connection->connect_error) {
  die("Connection failed: " . $connection->connect_error);
}
$sql = "UPDATE items SET name='$name',number='$number',price='$price',cat='$cat' WHERE id = '$id'";
$result = mysqli_query($connection, $sql);
     mysqli_close($connection);
    
    if ($result) {
        return true;
   
    return false;
    //close connection
    
}
}
function delete($id) {
    $boool=FALSE;
    //connection
    $connection = mysqli_connect("localhost", "root", "", "fasel_db");
    //query
    $query = mysqli_query($connection, "DELETE FROM items  WHERE id = $id");
     //close connection
    
    if($query && mysqli_affected_rows($connection)){
       $boool=true;
    mysqli_close($connection);}
   else {
        $boool=false;
        mysqli_close($connection);
   }
    
    
    return $boool;
   
}
function searchItems($keyword){
    //connection
    $connection = mysqli_connect("localhost", "root", "", "fasel_db");
    //query
    $query = mysqli_query($connection, "SELECT name,price,image,number FROM items WHERE `name` Like '%$keyword%' ");
    while ($row = mysqli_fetch_assoc($query)){
        $clients[] = $row;
    }
     //close connection
    mysqli_close($connection);
    return $clients;
   
}
function getItem($id) {
    //connection
    $connection = mysqli_connect("localhost", "root", "", "fasel_db");
    if ($connection->connect_error) {
  die("Connection failed: " . $connection->connect_error);
}
$sql = "SELECT * FROM items WHERE id = '$id'";
$result = mysqli_query($connection, $sql);
$row = $connection->query($sql);
$row = mysqli_fetch_assoc($result);
    //close connection
    mysqli_close($connection);
    return $row;
    
}
function getproduct($id) {
    //connection
    $connection = mysqli_connect("localhost", "root", "", "fasel_db");
    if ($connection->connect_error) {
  die("Connection failed: " . $connection->connect_error);
}
$sql = "SELECT name,price,image,number FROM items WHERE id = '$id'";
$result = mysqli_query($connection, $sql);
$row = $connection->query($sql);
$row = mysqli_fetch_assoc($result);
    //close connection
    mysqli_close($connection);
    return $row;
    
}

?>