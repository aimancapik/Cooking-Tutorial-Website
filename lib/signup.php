<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../lib/style/aiman.css">
    <link rel="stylesheet" href="boxicons-master/css/boxicons.css">
    <title>Sign Up</title>
</head>
<body>
  <form name="RegForm">
   <div class="box">
    <div class="container">
        <div class="top">
            <header>Sign Up</header>
        </div>
        <div class="input-field">
            <input type="text" class="input" name="email" placeholder="Email" >
            <i class='bx bx-user' ></i>
        </div>
        <br>
        <div class="input-field">
            <input type="text" class="input" name="name" placeholder="Username" >
            <i class='bx bx-user' ></i>
        </div>
        <br>
        <div class="input-field">
            <input type="password" name="password" class="input" placeholder="Password" >
            <i class='bx bx-lock-alt'></i>
        </div>
        <br>
        <div class="input-field">
            <input type="password" name="confpassword" class="input" placeholder="Confirm Password" >
            <i class='bx bx-lock-alt'></i>
        </div>
        <br>
        <div class="input-field">
            <input type="button" name="send" class="submit" value="SIGN UP" onclick="return signup()">
        </div>
      </form>
        <div class="two-col">
            <div class="one">
               <label><a href="http://localhost/Cooking-Tutorial-Website/lib/login.php">Sign in</a></label>             
            </div>
            <div class="two">
                <label><a href="#">Forgot password?</a></label>
            </div>
        </div>
    </div>
</div>  
<script src="script/signup_handler.js"></script>
</body>
</html>