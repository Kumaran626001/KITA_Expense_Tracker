<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>About</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', Arial, sans-serif;
      background: linear-gradient(120deg, #eef2fb 0%, #dde7fa 100%);
      min-height: 100vh;
    }
    
    /* === NAVBAR STYLE === */
    .header {
      background: #344869;
      padding: 0.8rem 2rem;
      box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    }
    .nav {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .logo h1 {
      color: white;
      margin: 0;
      font-size: 1.5rem;
      letter-spacing: 1px;
    }
    .nav_menu_list {
      list-style: none;
      margin: 0;
      padding: 0;
      display: flex;
      gap: 1.2rem;
    }
    .nav_menu_link {
      text-decoration: none;
      color: white;
      font-weight: 500;
      transition: color 0.3s;
    }
    .nav_menu_link:hover {
      color: #ffdd57;
    }
    .toggle_btn, .close_btn {
      display: none;
      background: none;
      border: none;
      font-size: 1.5rem;
      color: white;
      cursor: pointer;
    }

    @media (max-width: 768px) {
      .nav_menu_list {
        position: absolute;
        top: 60px;
        right: 0;
        background: #344869;
        flex-direction: column;
        width: 200px;
        padding: 1rem;
        display: none;
      }
      .nav_menu_list.show {
        display: flex;
      }
      .toggle_btn {
        display: block;
      }
      .close_btn {
        display: block;
        align-self: flex-end;
        margin-bottom: 1rem;
      }
    }

    /* === PAGE TITLE === */
    h1 {
      text-align: center;
      margin-top: 2rem;
      font-size: 2.3rem;
      color: #344869;
      letter-spacing: 2px;
    }

    /* === CARDS === */
    .card-row {
      display: flex;
      justify-content: center;
      align-items: stretch;
      gap: 1rem;
      padding: 2rem 1vw 1rem 1vw;
      max-width: 1300px;
      margin: 0 auto;
      flex-wrap: wrap;
    }
    .card {
      background: #fff;
      border-radius: 1.2rem;
      box-shadow: 0 8px 32px rgba(60, 80, 150, 0.14), 0 1.5px 4px rgba(0,0,0,0.04);
      width: 200px;
      min-width: 160px;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 1.2rem 1.2rem;
      transition: transform 0.18s, box-shadow 0.18s;
      position: relative;
    }
    
    .card-img {
      width: 78px;
      height: 78px;
      margin-bottom: 1rem;
      border-radius: 50%;
      object-fit: cover;
      border: 2px solid #d4deff;
      box-shadow: 0 2px 8px rgba(80, 80, 130, 0.08);
    }
    .card-info {
      flex: 1;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }
    .info-item {
      margin: 0.3rem 0;
      font-size: 1.06rem;
      color: #3b4351;
      line-height: 1.32;
      word-break: break-word;
    }
    .info-label {
      font-weight: 600;
      color: #4f5b7d;
      margin-right: 4px;
    }
    @media (max-width: 1100px) {
      .card-row {
        flex-wrap: wrap;
        gap: 1.2rem;
      }
      .card {
        width: 100%;
        max-width: 470px;
      }
    }
    @media (max-width: 700px) {
      .card-row {
        flex-direction: column;
        align-items: center;
        padding: 1rem 0.4rem;
      }
      .card {
        width: 96vw;
        max-width: 340px;
      }
      .card-info {
        align-items: center;
        text-align: center;
      }
    }
  </style>

  <script>
    // Toggle menu for mobile
    document.addEventListener("DOMContentLoaded", () => {
      const toggleBtn = document.getElementById("toggle_btn");
      const navMenu = document.querySelector(".nav_menu_list");
      const closeBtn = document.getElementById("close_btn");

      toggleBtn.addEventListener("click", () => {
        navMenu.classList.toggle("show");
      });

      closeBtn.addEventListener("click", () => {
        navMenu.classList.remove("show");
      });
    });
  </script>

</head>
<body>

  <?php include "header.php"; ?>
     <h1>About Us:</h1>
  <div class="card-row">
    <div class="card">
      <img src="./images/Kumaran.jpeg" class="card-img" alt="Profile Picture 1">
      <div class="card-info">
        <div class="info-item"><span class="info-label">Name:</span> Kumaran</div>
        <div class="info-item"><span class="info-label">Roll No:</span>25MIT021</div>
        <div class="info-item"><span class="info-label">Department:</span> IT</div>
        <div class="info-item"><span class="info-label">College:</span>Sri Krishna Arts and Science Colege</div>
      </div>
    </div>
    <div class="card">
      <img src="./images/indra.jpg" class="card-img" alt="Profile Picture 2" >
      <div class="card-info">
        <div class="info-item"><span class="info-label">Name:</span> Indra Kumar</div>
        <div class="info-item"><span class="info-label">Roll No:</span>25MIT016</div>
        <div class="info-item"><span class="info-label">Department:</span> IT</div>
        <div class="info-item"><span class="info-label">College:</span>Sri Krishna Arts and Science Colege</div>
      </div>
    </div>
    <div class="card">
      <img src="./images/tamil.jpg" class="card-img" alt="Profile Picture 3" width="60px"> 
      <div class="card-info">
        <div class="info-item"><span class="info-label">Name:</span> Tamil Arasan</div>
        <div class="info-item"><span class="info-label">Roll No:</span>25MIT055</div>
        <div class="info-item"><span class="info-label">Department:</span> IT</div>
        <div class="info-item"><span class="info-label">College:</span>Sri Krishna Arts and Science Colege</div>
      </div>
    </div>
    <div class="card">
      <img src="./images/abdou.jpg" class="card-img" alt="Profile Picture 4">
      <div class="card-info">
        <div class="info-item"><span class="info-label">Name:</span> Abdou elghaniou</div>
        <div class="info-item"><span class="info-label">Roll No:</span>25MIT002</div>
        <div class="info-item"><span class="info-label">Department:</span> IT</div>
        <div class="info-item"><span class="info-label">College:</span>Sri Krishna Arts and Science Colege</div>
      </div>
    </div>
  </div>


</body>
</html>
