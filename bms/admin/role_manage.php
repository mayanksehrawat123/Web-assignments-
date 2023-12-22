<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a Role</title>
    <style>
       
        .title{
            display: inline-block;
            float: left;

        }
        .save{
            padding: 16px 14px;
            float: right;
             display: inline;
             border-radius: 10px;
             border: 1px solid white;
        }
        .add_role{
            width: 20%;
   margin: 37px auto;
    display: inline-block;
    padding: 0px 500px
        }
     .b1{
        padding: 4px 10px;
    margin: 8px 506px;
    border-radius: 10px;
    border: 1px solid white;
     }
     .b2{
        padding: 4px 15px;
    margin: 8px -495px;
    background-color: rgb(36, 160, 45);
    color: white;
    border: 1px solid white;
    border-radius: 10px;
     }
    </style>
</head>
<body>
    <div class="container">
        <div class="title">
            <h2>
                Add Role
            </h2>
        </div>
        <div class="save">
            <button class="save">
                Save
            </button>
        </div>
        <div class="add_role">
            <label for="role-name">
                <b>
                Role Name *
                </b>
            </label>
            <br>
            <input type="text" name="role-name" id="role-name">
        </div>
        <div class="buttons">
            <button class="b1">
                Cancel
            </button>
            <button class="b2">
                Save
            </button>
        </div>
    </div>
</body>
</html>