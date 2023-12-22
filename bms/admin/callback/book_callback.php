<?php

include("../../config/config.php");

if(isset($_POST['name']) && trim($_POST['name'])!= ''){
    $name = $_POST['name'];
    $details = $_POST['details'];
    
    $query = "insert into books(name,details) values('$name','$details')";
    $result =$conn->query($query);
}


?>