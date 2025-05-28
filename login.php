<?php
session_start();
require "functions.php";

$errorMessage = "";

if (isset($_SESSION["role"])) {
  $role = $_SESSION["role"];
  if ($role == "Admin") {
    header("Location: admin/home.php");
    exit;
  } else {
    header("Location: user/lapangan.php");
    exit;
  }
}

if (isset($_POST["login"])) {
  $username = $_POST["username"];
  $password = $_POST["password"];

  $cariadmin = query("SELECT * FROM admin_212279 WHERE 212279_email = '$username' AND 212279_password = '$password'");
  $cariuser = query("SELECT * FROM user_212279 WHERE 212279_email = '$username' AND 212279_password = '$password'");

  if ($cariadmin) {
    $_SESSION['username'] = $cariadmin[0]['212279_nama'];
    $_SESSION['role'] = "Admin";
    header("Location: admin/admin.php");
    exit;
  } else if ($cariuser) {
    $_SESSION['email'] = $cariuser[0]['212279_email'];
    $_SESSION['id_user'] = $cariuser[0]['212279_id_user'];
    $_SESSION['role'] = "User";
    header("Location: user/lapangan.php");
    exit;
  } else {
    $errorMessage = "Email atau password salah.";
  }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f0f2f5;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
    }

    .login-wrapper {
      display: flex;
      max-width: 900px;
      width: 100%;
      background: white;
      border-radius: 12px;
      box-shadow: 0 0 20px rgba(0,0,0,0.1);
      overflow: hidden;
    }

    .login-image {
      flex: 1;
      background-color: #0d47a1;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 30px;
    }

    .login-image img {
      max-width: 100%;
      max-height: 300px;
      object-fit: contain;
    }

    .login-form {
      flex: 1;
      padding: 40px;
    }

    .form-label {
      font-weight: 600;
    }

    .error-message {
      color: red;
      font-weight: bold;
      margin-bottom: 15px;
    }
  </style>
</head>
<body>


  <a class="btn btn-outline-secondary position-absolute top-0 start-0 m-3" href="index.php" role="button">
    ← Kembali
  </a>
<div class="login-wrapper">
  <div class="login-image">
    <img src="assets/img/logo.jpg" alt="Logo Universitas">
  </div>
  <div class="login-form">
    <h3 class="mb-4 fw-bold text-center text-primary">Login Akun</h3>

    <?php if (!empty($errorMessage)) : ?>
      <div class="error-message text-center"><?php echo $errorMessage; ?></div>
    <?php endif; ?>
    <form method="POST">
      <div class="mb-3">
        <label for="username" class="form-label">Email</label>
        <input type="email" class="form-control" id="username" name="username" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Kata Sandi</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>
      <button type="submit" class="btn btn-primary w-100" name="login">Masuk</button>
      <p class="mt-3 text-center">
        Belum punya akun? <a href="user/daftar.php">Daftar</a>
      </p>
    </form>
  </div>
</div>

</body>
</html>
