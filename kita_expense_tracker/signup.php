
<?php
require('config.php');
if (isset($_REQUEST['firstname'])) {
  if ($_REQUEST['password'] == $_REQUEST['confirm_password']) {
    $firstname = stripslashes($_REQUEST['firstname']);
    $firstname = mysqli_real_escape_string($con, $firstname);
    $lastname = stripslashes($_REQUEST['lastname']);
    $lastname = mysqli_real_escape_string($con, $lastname);

    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($con, $email);


    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con, $password);


    $trn_date = date("Y-m-d H:i:s");

    $query = "INSERT into `users` (firstname, lastname, password, email, trn_date) VALUES ('$firstname','$lastname', '" . md5($password) . "', '$email', '$trn_date')";
    $result = mysqli_query($con, $query);
    if ($result) {
      header("Location: login.php");
    }
  } else {
    echo ("ERROR: Please Check Your Password & Confirmation password");
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sign Up</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>
    body {
        font-family: Arial, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        background: linear-gradient(120deg, #eef2fb 0%, #dde7fa 100%);
    }
    .container {
        display: flex;
        align-items: center;
        gap: 50px;
    }
    .form-box {
        width: 300px;
    }
    h2 {
        text-align: center;
        margin-bottom: 20px;
        font-size: 28px;
    }
    .input-group {
        position: relative;
        margin-bottom: 15px;
    }
    .input-group i {
        position: absolute;
        top: 50%;
        left: 10px;
        transform: translateY(-50%);
        color: #555;
    }
    .input-group input {
        width: 100%;
        padding: 10px 10px 10px 35px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 14px;
    }
    .terms {
        font-size: 13px;
        margin-bottom: 15px;
        display: block;
    }
    .terms a {
        color: #1a73e8;
        text-decoration: none;
    }
    .btn {
        width: 100%;
        padding: 10px;
        background-color: #1a73e8;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }
    .btn:hover {
        background-color: #0c5dc0;
    }
    .login-link {
        text-align: center;
        margin-top: 10px;
        font-size: 14px;
    }
    .login-link a {
        color: #1a73e8;
        text-decoration: none;
    }
    .image-box img {
        max-width: 1000px;
    }
</style>
</head>
<body>

<div class="container">
    <div class="form-box">
        <h2>Sign up</h2>
        <form>
            <div class="input-group">
                <i class="fa fa-user"></i>
                <input type="text" placeholder="First Name" name="firstname" required>
            </div>
            <div class="input-group">
                <i class="fa fa-user"></i>
                <input type="text" placeholder="Last Name" name="lastname" required>
            </div>
            <div class="input-group">
                <i class="fa fa-envelope"></i>
                <input type="email" placeholder="Email Id" name="email" required>
            </div>
            <div class="input-group">
                <i class="fa fa-lock"></i>
                <input type="password" placeholder="Password" name="password" required>
            </div>
            <div class="input-group">
                <i class="fa fa-key"></i>
                <input type="password" placeholder="Confirm Password" name="confirm_password" required>
            </div>
            <button type="submit" class="btn">Create Account</button>
        </form>
        <div class="login-link">
            Have already an account? <a href="login.php">Login here</a>
        </div>
    </div>
    <div class="image-box">
        <img src="./images/draw1.png" alt="Illustration" width="700px" height="400px">
    </div>
</div>

</body>
</html>
