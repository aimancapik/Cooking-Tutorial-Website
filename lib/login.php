<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../lib/style/aiman.css">
    <link rel="stylesheet" href="boxicons-master/css/boxicons.css">
    <title>Login</title>
</head>
<body>
  <form name="RegForm">
   <div class="box">
    <div class="container">
        <div class="top">
            <header>Login</header>
        </div>
        <div class="input-field">
            <input type="text" class="input" name="email" placeholder="Email">
            <i class='bx bx-user' ></i>
        </div>
        <br>
        <div class="input-field">
            <input type="password" name="password" class="input" placeholder="Password">
            <i class='bx bx-lock-alt'></i>
        </div>
        <br>
        <div class="input-field">
            <input type="button" name="send" class="submit" value="Login" onclick="return login()"/>
        </div>
      </form>
        <div class="two-col">
            <div class="one">
               <label><a href="http://localhost/Cooking-Tutorial-Website/lib/signup.php">Sign Up</a></label>             
            </div>
            <div class="two">
                <label><a href="#">Forgot password?</a></label>
            </div>
        </div>
    </div>
</div> 
<script src="script/login_handler.js"></script> 
</body>
</html>