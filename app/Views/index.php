<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login babi</title>
  
  <!-- CSS Inline untuk Form Login -->
  <style>
    /* Reset dan Body Styling */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 20px;
    }

    /* Container Login */
    .login-container {
      background: white;
      padding: 40px;
      border-radius: 15px;
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 400px;
      text-align: center;
    }

    .login-container h2 {
      color: #333;
      margin-bottom: 30px;
      font-size: 28px;
      font-weight: 600;
    }

    /* Input Group */
    .input-group {
      margin-bottom: 20px;
      text-align: left;
    }

    .input-group label {
      display: block;
      margin-bottom: 8px;
      color: #555;
      font-weight: 500;
      font-size: 14px;
    }

    .input-group input {
      width: 100%;
      padding: 12px 15px;
      border: 2px solid #ddd;
      border-radius: 8px;
      font-size: 16px;
      transition: border-color 0.3s ease;
    }

    .input-group input:focus {
      outline: none;
      border-color: #667eea;
      box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
    }

    /* Tombol Login */
    .btn-login {
      width: 100%;
      padding: 12px;
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      color: white;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      font-weight: 600;
      cursor: pointer;
      transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .btn-login:hover {
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
    }

    .btn-login:active {
      transform: translateY(0);
    }

    /* Link Register */
    .register-text {
      margin-top: 20px;
      color: #666;
      font-size: 14px;
    }

    .register-text a {
      color: #667eea;
      text-decoration: none;
      font-weight: 500;
    }

    .register-text a:hover {
      text-decoration: underline;
    }

    /* Responsif untuk Mobile */
    @media (max-width: 480px) {
      .login-container {
        padding: 30px 20px;
        margin: 10px;
      }

      .login-container h2 {
        font-size: 24px;
      }
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h2>Login Kasir</h2>
    <form action="<?= base_url('auth/proses_login') ?>" method="POST"> <!-- Ubah action ke controller CodeIgniter -->
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
        Belum punya akun? <a href="<?= base_url('register') ?>">Daftar di sini</a>
    </p>
  </div>
</body>
</html>