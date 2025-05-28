<?php
require "../functions.php";


if (isset($_POST["daftar"])) {
  if (daftar($_POST) > 0) {
    echo "<div class='alert alert-success'>Berhasil mendaftar, silakan login.</div>
            <meta http-equiv='refresh' content='2; url= ../login.php'/>  ";
  }
}


?>


<!doctype html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registrasi</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f0f2f5;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
    }

    .card-register {
      background: #ffffff;
      padding: 40px;
      border-radius: 15px;
      box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 700px;
    }

    .card-register h1 {
      color: #0d47a1;
      font-weight: 700;
      margin-bottom: 30px;
      text-align: center;
    }

    .form-label {
      font-weight: 500;
      font-size: 14px;
    }

    .form-control {
      border-radius: 8px;
    }

    .btn-inti {
      background-color: #0d47a1;
      color: white;
      font-weight: 600;
      border-radius: 8px;
      padding: 10px 20px;
      width: 100%;
    }

    .btn-inti:hover {
      background-color: #08306b;
    }

    .text-center a {
      color: #0d47a1;
      font-weight: 500;
      text-decoration: none;
    }

    .text-center a:hover {
      text-decoration: underline;
    }
  </style>
</head>

<body>
  <div class="card-register">
    <form action="" method="post" enctype="multipart/form-data">
      <h1>Registrasi</h1>
      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="nama" class="form-label">Nama Lengkap</label>
          <input type="text" name="nama" class="form-control" id="nama" required>
        </div>
        <div class="col-md-6 mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" name="email" class="form-control" id="email" required>
        </div>
        <div class="col-md-6 mb-3">
          <label for="hp" class="form-label">No HP</label>
          <input type="text" name="hp" class="form-control" id="hp" required>
        </div>
        <div class="col-md-6 mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" name="password" class="form-control" id="password" required>
        </div>
        <div class="col-12 mb-3">
          <label for="alamat" class="form-label">Alamat</label>
          <input type="text" name="alamat" class="form-control" id="alamat" required>
        </div>
        <div class="col-12 mb-3">
          <label class="form-label d-block mb-2">Jenis Kelamin</label>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="male" value="Laki-Laki" required>
            <label class="form-check-label" for="male">Laki-Laki</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="female" value="Perempuan" required>
            <label class="form-check-label" for="female">Perempuan</label>
          </div>
        </div>
        <div class="col-12 mb-4">
          <label for="foto" class="form-label">Foto</label>
          <input type="file" name="foto" class="form-control" id="foto" required>
        </div>
        <div class="col-12 mb-3">
          <button type="submit" class="btn btn-inti" name="daftar">Daftar</button>
        </div>
        <div class="col-12 text-center">
          <p>Sudah punya akun? <a href="../login.php">Login</a></p>
        </div>
      </div>
    </form>
  </div>
</body>

</html>
