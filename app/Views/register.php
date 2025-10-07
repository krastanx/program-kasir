<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register Akun</title>
  
  <!-- CSS Inline (diadaptasi dari tema login: gradient biru-ungu, container mirip login) -->
  <style>
    /* Reset dan Body Styling (sama seperti login) */
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

    /* Container Register (mirip .login-container di login) */
    .register-container {
      background: white;
      padding: 40px;
      border-radius: 15px;
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 420px;
      text-align: center;
    }

    .register-container h1 {
      color: #333;
      margin-bottom: 30px;
      font-size: 28px;
      font-weight: 600;
    }

    /* Input Group (mirip .input-group di login, sesuai dosen) */
    .form-group {
      margin-bottom: 20px;
      text-align: left;
    }

    .form-group label {
      display: block;
      margin-bottom: 8px;
      color: #555;
      font-weight: 500;
      font-size: 14px;
    }

    .form-group input,
    .form-group select {
      width: 100%;
      padding: 12px 15px;
      border: 2px solid #ddd;
      border-radius: 8px;
      font-size: 16px;
      transition: border-color 0.3s ease;
    }

    .form-group input:focus,
    .form-group select:focus {
      outline: none;
      border-color: #667eea;
      box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
    }

    /* Button Group (sesuai dosen, tapi dengan tema login: gradient untuk submit) */
    .button-group {
      display: flex;
      justify-content: space-between;
      gap: 8px;
      margin-top: 10px;
    }

    .button-group input[type="submit"],
    .button-group input[type="reset"] {
      flex: 1;
      padding: 12px;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      font-weight: 600;
      cursor: pointer;
      transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .button-group input[type="submit"] {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      color: white;
    }

    .button-group input[type="submit"]:hover {
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
    }

    .button-group input[type="reset"] {
      background: #e5e7eb;
      color: #555;
    }

    .button-group input[type="reset"]:hover {
      background: #d1d5db;
      transform: translateY(-2px);
    }

    /* Link Login (balik ke login, mirip .register-text di login) */
    .login-text {
      margin-top: 20px;
      color: #666;
      font-size: 14px;
    }

    .login-text a {
      color: #667eea;
      text-decoration: none;
      font-weight: 500;
    }

    .login-text a:hover {
      text-decoration: underline;
    }

    /* Responsif untuk Mobile (sama seperti login) */
    @media (max-width: 480px) {
      .register-container {
        padding: 30px 20px;
        margin: 10px;
      }

      .register-container h1 {
        font-size: 24px;
      }

      .button-group {
        flex-direction: column;
      }
    }
  </style>
</head>
<body>
  <div class="register-container">
    <h1>Register Akun</h1>
    
    <form name="formregister" action="<?= base_url('auth/proses_register') ?>" method="POST">
      <!-- Input Username (sesuai dosen) -->
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" name="Username" id="username" placeholder="Masukkan Username" required>
      </div>

      <!-- Input Password (sesuai dosen) -->
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="Password" id="password" placeholder="Masukkan Password" required minlength="6">
      </div>

      <!-- Input Nama Lengkap (sesuai dosen) -->
      <div class="form-group">
        <label for="nama_lengkap">Nama Lengkap</label>
        <input type="text" name="NamaLengkap" id="nama_lengkap" placeholder="Masukkan Nama Lengkap" required>
      </div>

      <!-- Input Level (sesuai dosen) -->
      <div class="form-group">
        <label for="level">Level</label>
        <select name="Level" id="level_kasir" required>
          <option value="">-- Pilih Level --</option>
          <option value="Admin">Admin</option>
          <option value="Kasir">Kasir</option>
        </select>
      </div>

      <!-- Button Group (sesuai dosen) -->
      <div class="button-group">
        <input type="submit" value="Register">
        <input type="reset" value="Batal">
      </div>
    </form>

    <!-- Link ke halaman login -->
    <p class="login-text">
      Sudah punya akun? <a href="<?= base_url('/') ?>">Login di sini</a>
    </p>
  </div>
</body>
</html>