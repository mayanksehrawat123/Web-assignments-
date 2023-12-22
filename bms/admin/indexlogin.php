<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASSIGNMENT_2</title>
    
    <link rel="stylesheet" href="stylelogin.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/fontawesome.min.css" integrity="sha512-siarrzI1u3pCqFG2LEzi87McrBmq6Tp7juVsdmGY1Dr8Saw+ZBAzDzrGwX3vgxX1NkioYNCFOVC0GpDPss10zQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    body{
    background-color: white;
    margin: 0px;
    height: auto;
    padding: 0;

}
.container{
    margin: 0px;
    width: 100%;
    height: auto;
    display: inline-flex;
}
h3{
    color: gray;
}

/* .left{
    height: 400px;
    width: 100%;
    background-image: url(../images/storysetpik.png);

} */
.left{
    float: left;
    width: 49%;
}
.left img{
    width: 100%;
    height: 100%;
}
.right{
    background-color:white;
    padding: 30px;
    float: right;
    overflow: hidden;
    width: 49%;
    align-content: center;
}
.logincard{
inline-size: 0;
    text-align: left;
    margin: 20% 20%;
    border: 1px solid #efefef;
    background-color: #efefef;
    padding: 20px;
    width:50%;
    border-radius: 29px;
}
#email{
    padding: 10px;
    width: 90%;
}
#button{
    width: 95%;
    text-align: center;
    background-color: rgb(0, 73, 0);
    color: white;
    border: #fff;
    font-size: medium;
    padding: 10px;
}
#sign{
    text-align: center;
    color: gray;
    text-decoration-line:inherit;
}
#creat{
    text-decoration: none;
    color: rgb(0, 73, 0);
}
#forp{
    text-align: right;
    color: rgb(0, 73, 0);
    text-decoration: none;
}
</style>
</style>
</head>
<body>
    <div class="container">
        <div class="left">
            <img src="welcome back.jpg" alt="">
            </div>
        
        <div class="right">
            <!-- <div class="logincard"> -->
        
                   <form  class="logincard">
                    <h1>Login</h1>
                    <h3>Welcome Back!Log in to your account</h3>
                <div class="email">
                    <h2><label for="email">Email</label></h2>
                    <input type="email" name="email" placeholder="example@gmail.com" id="email"><br>
                </div>
                <div class="email">
                    <h2><label for="password">Password</label></h2>
                        <input type="password" name="password" placeholder="Enter Your Password" id="email"><br>
                </div>
                   <div><input type="checkbox" name="Remember me" id=""><label for="Remember me" > Remember me &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  </label><a href="https://www.google.com" id="forp">Forget Password?</a></div>
                    <button id="button"><b>Sign In</b></button>
                <h3 id="sign"><a href="#" id="sign">Sign In With</a></h3>
                <h3>Don't have account?<a href="https://www.google.com" id="creat">Create Account</a></h3>
                
                </form>
            
            
            </div>
        </div>
                   </body>
                   </html>
    
    

    
