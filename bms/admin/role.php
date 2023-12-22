<?php
  include("bms/config/config.php");
   if(isset($_POST['title']) && trim($_POST['title'])!=''){
           $title = $_POST['title'];
           $description = $_POST['description'];

           $query = "insert into role(name,description)values('$title','$description')";
           $checkresult = $conn->query($query);
           if($checkresult){
            $_SESSION['status']='pass';
            header("location: bms/admin/role.php");
            die;
           }
        //  insert into tablename('columns','columns')values('','');
        //  update tablename set column1=value, column2=value where id=1
        //  delete *  form tablename where id=1
   }else{
    header("loaction:bms/admin/role.php")
   }
  ?>