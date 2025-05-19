<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Perpus Digital</title>
  <style>
    /* Reset dasar */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #e0f7fa, #ffffff);
      color: #333;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding: 20px;
    }

    .container {
      background-color: #ffffff;
      border-radius: 12px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
      padding: 30px 40px;
      text-align: center;
      max-width: 500px;
      width: 100%;
    }

    h1 {
      color: #00796b;
      margin-bottom: 10px;
    }

    p {
      font-size: 1.1em;
      margin-bottom: 20px;
    }

    .info {
      background-color: #e0f2f1;
      padding: 10px 15px;
      border-radius: 8px;
      margin-bottom: 20px;
      font-size: 0.95em;
      color: #004d40;
    }

    .btn {
      display: flex;
      justify-content: center;
      gap: 15px;
    }

    .btn a {
      padding: 10px 20px;
      text-decoration: none;
      background-color: #009688;
      color: #fff;
      border-radius: 5px;
      transition: background-color 0.3s ease;
      font-weight: bold;
    }

    .btn a:hover {
      background-color: #00796b;
    }
  </style>
</head>
<body>
  <div class="container">
    <?php if (isset($_SESSION['username_baru'])): ?>
      <div class="info">
        Username: <strong><?= htmlspecialchars($_SESSION['username_baru']); ?></strong><br />
        Silakan login untuk melanjutkan.
      </div>
      <?php unset($_SESSION['username_baru']); ?>
    <?php endif; ?>

    <h1>Selamat Datang!</h1>
    <p>Ayo baca buku dan perluas wawasanmu 📚</p>

    <div class="btn">
      <a href="login.php">Login</a>
      <a href="register.php">Sign Up</a>
    </div>
  </div>
</body>
</html>
