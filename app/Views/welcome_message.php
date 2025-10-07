<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Kasir</title>
  <!-- Panggil file CSS -->
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="login-container">
    <h2>Login Kasir</h2>
    <form action="proses_login.php" method="POST">
      <!-- Input Username -->
      <div class="input-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>
      </div>

      <!-- Input Password -->
      <div class="input-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
      </div>

      <!-- Tombol Login -->
      <button type="submit" class="btn-login">Login</button>
    </form>

    <!-- Link ke halaman register -->
    <p class="register-text">
      Belum punya akun? <a href="register.php">Daftar di sini</a>
    </p>
  </div>
</body>
</html>
