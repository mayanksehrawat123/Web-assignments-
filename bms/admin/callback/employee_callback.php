<?php

include("../../config/config.php");

if(isset($_POST['name']) && trim($_POST['name']) !=''  ){
    $name=$_POST['name'];
    $password=$_POST['password'];
    
    $query = "insert into employee(name,password) values('$name','$password')";
    $result =$conn->query($query);
    
    
}

?>