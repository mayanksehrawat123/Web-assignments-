<?php
echo("<pre>");
print_r($_POST);
// print_r($_REQUEST); action can be get or post but it not safe
// print_r($_GET); action should be get
print_r($_FILES);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>category</title>
</head>
<body>
    <h2>category</h2>
    <a href="http://localhost/bms/admin/category_manage.php">add new category</a>
    <table border="1" width="100%">
   <th>name</th>
   <th>details</th>
   <th>action</th>
   <tr>
    <td></td>
    <td></td>
    <td><input type="button" value="edit"> <input type="button" value="delete"></td>
   </tr>
   <tr>
    <td></td>
    <td></td>
    <td><input type="button" value="edit"> <input type="button" value="delete"></td>
   </tr>
   <tr>
    <td></td>
    <td></td>
    <td><input type="button" value="edit"> <input type="button" value="delete"></td>
   </tr>
   <tr>
    <td></td>
    <td></td>
    <td><input type="button" value="edit"> <input type="button" value="delete"></td>
   </tr>
    </table>
</body>
</html>
