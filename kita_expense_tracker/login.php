<head>
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet" />
  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet" />
  <!-- MDB -->
  <link

    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css"
    rel="stylesheet" />
  <!-- Boxicons CSS -->
  <link
    href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
    rel="stylesheet" />
  <link href="/assets/libs/frontend/MDB-UI-KIT-Pro-Essential-1.0.0/css/mdb.min.css" type="text/css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>
</head>
<title>Login</title>
<?php
require('config.php');
session_start();
$errormsg = "";
if (isset($_POST['email'])) {

  $email = stripslashes($_REQUEST['email']);
  $email = mysqli_real_escape_string($con, $email);
  $password = stripslashes($_REQUEST['password']);
  $password = mysqli_real_escape_string($con, $password);
  $query = "SELECT * FROM `users` WHERE email='$email'and password='" . md5($password) . "'";
  $result = mysqli_query($con, $query) or die(mysqli_error($con));
  $rows = mysqli_num_rows($result);
  if ($rows == 1) {
    $_SESSION['email'] = $email;
    header("Location: home.php");
  } else {
    $errormsg  = "Wrong";
  }
} else {
}
?>




<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="images/Wavy_Tech-28_Single-10.png"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form method="post">


          <h2 class="fw-bold mb-2 text-center text-uppercase">Login</h2>
          <p class="text-black-50 text-center mb-5">Please enter your login and password!</p>
          <p style="font-size:16px; color:red" align="center"> <?php if ($errormsg) {
                                                                  echo $errormsg;
                                                                }  ?> </p>
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="email" name="email" class="form-control form-control-lg" required />
            <label class="form-label" for="form3Example3">Email address</label>

          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" id="password" name="password" class="form-control form-control-lg" required />

            <label class="form-label" for="form3Example4">Password</label>
            <i class="bx bx-hide show-hide"></i>

          </div>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
              <label class="form-check-label" for="form2Example3">
                Remember me
              </label>
            </div>
            <a href="#!" class="text-body">Forgot password?</a>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;" name="submit" value="Login">Login</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="signup.php"
                class="link-danger">Create account</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>

</section>
<script>
  document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.form-outline').forEach((formOutline) => {
      new mdb.Input(formOutline).init();
    });
  });
  // Hide and show password
  const eyeIcons = document.querySelectorAll(".show-hide");
  eyeIcons.forEach((eyeIcon) => {
    eyeIcon.addEventListener("click", () => {
      const pInput = eyeIcon.parentElement.querySelector("input"); //getting parent element of eye icon and selecting the password input
      if (pInput.type === "password") {
        eyeIcon.classList.replace("bx-hide", "bx-show");
        return (pInput.type = "text");
      }
      eyeIcon.classList.replace("bx-show", "bx-hide");
      pInput.type = "password";
    });
  });
</script>

<style>
  .divider:after,
  .divider:before {
    content: "";
    flex: 1;
    height: 1px;
    background: #eee;
  }

  body {
    overflow-y: hidden;
    /* Hide vertical scrollbar */
    overflow-x: hidden;
    /* Hide horizontal scrollbar */
    background: linear-gradient(120deg, #eef2fb 0%, #dde7fa 100%);
  }

  element.style {
    background-color: #eee;
  }

  .show-hide {
    position: absolute;
    right: 13px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 18px;
    color: #919191;
    cursor: pointer;
    padding: 3px;
  }

  .mx-md-4 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important;
    margin-top: -1.5rem;
  }
</style>