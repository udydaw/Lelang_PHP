<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello, Admin !</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;700&display=swap" rel="stylesheet">
    <style>
        body{
            background-image: url(../asset/img/bg.png);
        }
        .header{
            background-image: url(../asset/img/bg2.jpg);
            color: black;
        }
    </style>
</head>
<body>
   <div class="overlay"></div>
   <form action="../model/login_admin.php" method="post" class="box">
       <div class="header">
           <h4>Log in Your Account</h4>
           <p>Log in using a registered account</p>
       </div>
       <div class="login-area">
           <input type="text" class="form-control" name="username" placeholder="Username">
           <input type="password" class="form-control" name="password" placeholder="Password">
           <input type="submit" value="Login" class="submit">
           <a href="#">Forgot Password?</a>
       </div>
   </form> 
</div>
</body>
</html>