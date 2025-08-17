<?php include "head.php" ?>
<style>
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
</style>
<body>
    <!-- ==== HEADER ==== -->
    <header class="container header">
      <!-- ==== NAVBAR ==== -->
      <nav class="nav">
        <div class="logo">
          <h1>KITA Expense Tracker</h1>
        </div>

        <div class="nav_menu" id="nav_menu">
          <button class="close_btn" id="close_btn">
            <i class="ri-close-fill"></i>
          </button>

          <ul class="nav_menu_list">
            <li class="nav_menu_item">
              <a href="index.php" class="nav_menu_link">Home</a>
            </li>
            <li class="nav_menu_item">
              <a href="About.php" class="nav_menu_link">About</a>
            </li>
            <li class="nav_menu_item">
              <a href="login.php" class="nav_menu_link">Login</a>
            </li>
          </ul>
        </div>

        <button class="toggle_btn" id="toggle_btn">
          <i class="ri-menu-line"></i>
        </button>
      </nav>
    </header>