<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roles</title>
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/trash.css' rel='stylesheet' class="dustbin">
    <style>
        body{
           
            background-color: rgb(216, 216, 216);
        }
        ._newrole{
            display: inline;
            margin: 10px 0px;
           
        }
        button{
            display: inline;
            float: right;
            margin:10px 0px ;
        }
        p{
            display: block;
            width: 33%;
           
        }
        .search{
            display: inline;
            float: right;
            margin: -40px 0px;
        }
        .newrole{
            color: antiquewhite;
            background-color: rgb(24, 100, 24);
        }
        table{
            margin: 30px 0px;
           
        }
        .action1{
            padding: 2px 4px;
        }
        div{
               float: right;
               padding: 0px 160px;
        }
      .s2{
        width: 70%;
      }
   a{
    color: white;
    text-decoration: none;
   }
      
    </style>
</head>
<body>
            <h2 class="_newrole">
                Role
            </h2>
            <button class="newrole">
              <a class="linkrole" href="http://localhost/bms/admin/role_manage.php"> Add New Role</a> 
            </button>
<p>show:  <input type="number" value="50">  entries</p>
<div class="search">search: <input type="text" placeholder="search here"></div>
<table  border="4" width="80%">
   
     <tr>
     <td class="action1" colspan="2" >name <div>action</div></td>
     
    </tr>
    <tr>
        <td class="s2">admin</td>
        <td><a href="">delete</a> <a href="">edit</a></td>
    </tr>
   
</table>
</body>
</html>