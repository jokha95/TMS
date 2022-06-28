<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <!----css custom file link-->
    <link rel="stylesheet" href="./styles/style.css">

    <!---Fontawesome CDN link----->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
</head>
<body>
<img class="wave" src="img/bg1.png">
    <div class="container">
    <div class="img">
      </div>
        <div class="login-content">
                <form action="index.php" method="POST" autocomplete="">
                <img src="img/logicon.jpg">
                <h2 class="title">Welcome </h2>
                </br>
</br>
</br>
              

            <div class="input-div one">
            <div class="i">
              <i class="fas fa-user"></i>
            </div>
            <div class="div">
              <h5>Username</h5>
              <input class="input" type="Username" name="Username" placeholder="Username" required >
            </div>
          </div>
          <div class="input-div pass">
            <div class="i">
              <i class="fas fa-lock"></i>
            </div>
            <div class="div">
                            <h5>Password</h5>

              <input class="input" type="password" name="password" placeholder="password" required>
            </div>
          </div>
                  </br>
          <a href="./authentication/forgot-password.php">Forgot password?</a>
          <input class="btn" type="submit" name="login" value="Login">
        </form>
      </div>
    </div>


    <script src="js/java.js"></script>
        </div>
    </div>
    
</body>
</html>