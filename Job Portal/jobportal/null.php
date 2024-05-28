<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #1d1160;
      color: white;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .login-form {
      background-color: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      width: 300px;
      text-align: center;
    }

    .login-form h2 {
      margin-bottom: 20px;
      color: #1d1160;
    }

    .login-form input[type="text"],
    .login-form input[type="password"] {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border: 1px solid #1d1160;
      border-radius: 5px;
      box-sizing: border-box;
    }

    .login-form input[type="submit"] {
      width: 100%;
      padding: 10px;
      margin-top: 10px;
      border: none;
      border-radius: 5px;
      background-color: #1d1160;
      color: white;
      cursor: pointer;
    }

    .login-form input[type="submit"]:hover {
      background-color: #000;
    }

    /* .login-form .login-type-buttons {
      margin-bottom: 20px;
    }

    .login-form .login-type-buttons button {
      padding: 10px;
      border: none;
      border-radius: 5px;
      background-color: #1d1160;
      color: white;
      cursor: pointer;
      margin-right: 10px; /* Adjust the margin between buttons */
    /* } */ */

    .user-login {
      display: none;
    }
  </style>
</head>
<body>
  <div class="login-form">
    <!-- <h2>Login</h2> -->
    <div class="user-login">
      <h2>User Login</h2>
      <form action="login.php" method="post">
        <input type="text" name="email" autocomplete="off" placeholder="Enter your e-mail">
        <input type="password" name="password" autocomplete="off" placeholder="Enter your password">
        <input type="submit" value="Login" name="login">
      </form><br>
      <p align="center">Don't have an Account Yet?<a href="register.php" class="text-warning" style="font-weight:200;text-decoration:none;text-align:center">Register Here!</a></p>
      <p align="center">Don't have an Account Yet?<a href="admin.php" class="text-warning" style="font-weight:200;text-decoration:none;text-align:center">Admin!</a></p>
        
    </div>
  </div>
</body>
</html>
