<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>KITA Expense Tracker</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css">

  <style>
    /* ==== "Inter" FONT ==== */
    @import url("https://fonts.googleapis.com/css2?family=Inter:wght@400;500&display=swap");

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Inter", sans-serif;
    }

    a {
      text-decoration: none;
    }

    /* ==== NAVBAR ==== */
    .navbar {
      background-color: #2f446b;
      color: white;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 1rem 2rem;
    }

    .navbar .logo {
      font-size: 1.4rem;
      font-weight: bold;
    }

    .navbar .nav-links {
      display: flex;
      gap: 1.5rem;
    }

    .navbar .nav-links a {
      color: white;
      font-weight: 500;
      transition: color 0.3s;
    }

    .navbar .nav-links a:hover {
      color: #ffdd57;
    }

    /* ==== PAGE ==== */
    body {
      width: 100%;
      height: 100vh;
      font-family: 'Segoe UI', Arial, sans-serif;
      overflow-x: hidden;
      background: linear-gradient(120deg, #eef2fb 0%, #dde7fa 100%);
    }

    .wrapper {
      width: 100%;
      padding: 5rem 1.7rem;
    }

    .grid-cols-2 {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 4rem;
    }

    .main-heading {
      font-weight: 300;
      font-size: 38px;
      line-height: 55px;
      color: #0400ff;
    }

    .acronym {
      font-size: 0.8em;
      line-height: 1.5em;
    }

    .acronym span{
      color: red;
      font-weight: bold;
      font-size: 1.6em;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
      display: inline-block;
      width: 20px;
    }

    .info-text {
      margin-top: 1.5rem;
      font-size: 19px;
      line-height: 28px;
      color: #334157;
    }

    .btn_wrapper {
      margin-top: 3.5rem;
      display: flex;
      gap: 1rem;
    }

    .btn {
      padding: 0.9rem 1.5rem;
      border-radius: 7px;
      color: white;
      font-weight: 500;
      border: none;
      cursor: pointer;
      transition: background 0.3s, transform 0.3s;
    }

    .view_more_btn {
      background-color: #335eea;
    }

    .view_more_btn:hover {
      background-color: #2b50c7;
      transform: translateY(-3px);
    }

    .documentation_btn {
      background-color: #e1e7fc;
      color: #0e2a86;
    }

    .documentation_btn:hover {
      background-color: #d7ddf1;
      transform: translateY(-3px);
    }

    .team_img_wrapper img {
      max-width: 100%;
      height: auto;
    }

    @media (max-width: 991px) {
      .grid-cols-2 {
        grid-template-columns: 1fr;
        text-align: center;
      }

      .btn_wrapper {
        justify-content: center;
      }
    }
    .grid-item-1 {
  padding-left: 5rem; /* Adjust the value as needed */
  padding-top: 4rem;
}

  </style>
</head>
<body>

  <!-- Navbar -->
  <header class="navbar">
    <div class="logo">KITA Expense Tracker</div>
    <nav class="nav-links">
      <a href="index.php">Home</a>
      <a href="About.php">About</a>
      <a href="login.php">Login</a>
    </nav>
  </header>

  <!-- Main Content -->
  <section class="wrapper">
    <div class="container">
      <div class="grid-cols-2">
        <div class="grid-item-1">
          <h1 class="main-heading">
            Welcome to <br>
            <div class="acronym"><span>KITA</span></div>
            Expense Tracker
            <br /> To Analysis your spend.
          </h1>
          <p class="info-text">
            Start tracking your daily expenses from any corner of the world.
          </p>

          <div class="btn_wrapper">
            <a href="login.php"><button class="btn view_more_btn">Start now <i class="ri-arrow-right-line"></i></button></a>
            <a href="signup.php"><button class="btn documentation_btn">Sign Up</button></a>
          </div>
        </div>
        <div class="grid-item-2">
          <div class="team_img_wrapper">
            <img src="./images/ex1.png" alt="team-img" />
          </div>
        </div>
      </div>
    </div>
  </section>

</body>
</html>
