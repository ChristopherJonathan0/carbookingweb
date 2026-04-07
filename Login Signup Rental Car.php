<?php
require 'koneksi.php';

$errors = [];
$success = $_SESSION['success'] ?? null;
unset($_SESSION['success']);
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Rental Car - Login & Sign Up</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #ffffff;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .container {
      width: 100%;
      max-width: 420px;
      background: #ffffff;
      padding: 32px;
      border-radius: 16px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    }
    h2 {
      text-align: center;
      color: #fe5b29;
    }
    label {
      font-weight: bold;
      color: #333;
    }
    input {
      width: 100%;
      padding: 12px;
      margin-top: 6px;
      margin-bottom: 16px;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 1rem;
    }
    button {
      width: 100%;
      padding: 14px;
      background-color: #fe5b29;
      color: white;
      font-size: 1rem;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: 0.3s;
    }
    button:hover {
      background-color: #e85122;
    }
    .switch {
      text-align: center;
      margin-top: 16px;
    }
    .switch a {
      color: #fe5b29;
      font-weight: bold;
      cursor: pointer;
      text-decoration: none;
    }

    .logh1{
       color: #00000;
       font-size: 40px;
       margin-left: 10px;
    }
    .error {
      color: #cc0000;
    }
    .success {
      background-color: #ccffcc;
      color: #006600;
    }
  </style>
</head>
<body>
    <nav style="width:100%; padding:16px; position:fixed; top:0; left:0; display:flex; align-items:center;">
            <div class="logo-container" style="display:flex; align-items:center;">
                <h1 class="logh1">Trator</h1>
            </div>
    </nav>
    <!-- Login part-->
    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST'&& isset($_POST['email'], $_POST['password'])) {
            $email = trim($_POST['email'] ?? '');
            $password = $_POST['password'] ?? '';

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors[] = 'Email tidak valid.';
            }
            if (empty($password)) {
                $errors[] = "Password tidak boleh kosong.";
            }
            if (empty($errors)) {
                // Cari user berdasarkan email
                $stmt = $pdo->prepare("SELECT id, nama_lengkap, email, password FROM signup WHERE email = :email LIMIT 1");
                $stmt->execute(['email' => $email]);
                $user = $stmt->fetch();

                if ($user && password_verify($password, $user['password'])) {
                    // Login berhasil — set session
                    session_regenerate_id(true);
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['user_name'] = $user['name'];

                    header('Location: index.php'); // redirect ke halaman home/dashboard
                    exit;
                } else {
                    $errors[] = 'Email atau password salah.';
                }
            }
        }

        // Handle flash message dari register
        $success = $_SESSION['success'] ?? null;
        unset($_SESSION['success']);
        ?>

      <div class="container" id="formBox">
        <h2 id="title">Login</h2>

                <!-- tampilkan pesan success -->
            <?php if ($success): ?>
                <div class="message success"><?= htmlspecialchars($success) ?></div>
            <?php endif; ?>

            <!-- tampilkan semua error -->
            <?php if (!empty($errors)): ?>
                <div class="message error">
                    <?php foreach ($errors as $error): ?>
                        <p><?= htmlspecialchars($error) ?></p>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

        <div id="loginForm">
          <form method="post" action="">
          <label>Email</label>
          <input type="email" name="email" value="<?=htmlspecialchars($_POST['email'] ?? '')?>" placeholder="Masukkan email" />

          <label>Password</label>
          <input type="password" name="password" value="<?=htmlspecialchars($_POST['password'] ?? '')?>" placeholder="Masukkan password" />

          <button>Login</button>
          </form>

          <div class="switch">
            Belum punya akun? <a onclick="showSignup()">Sign Up</a>
          </div>
        </div>



     <!-- register part-->
     <?php    
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['Nama'], $_POST['Email'], $_POST['Password'])) {
            // Ambil input dan trim
            $Nama = trim($_POST['Nama'] ?? '');
            $Email = trim($_POST['Email'] ?? '');
            $Password = $_POST['Password'] ?? '';

            // Validasi sederhana
            if ($Nama === '') $errors[] = 'Nama harus diisi.';
            if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Email tidak valid.';
            if (strlen($Password) < 6) $errors[] = 'Password minimal 6 karakter.';

            if (empty($errors)) {
                // Cek apakah email sudah terdaftar
                $stmt = $pdo->prepare("SELECT id FROM signup WHERE email = :email LIMIT 1");
                $stmt->execute(['email' => $email]);
                if ($stmt->fetch()) {
                    $errors[] = 'Email sudah terdaftar.';
                } else {
                    // Hash password dan simpan
                    $hash = password_hash($Password, PASSWORD_DEFAULT);
                    $insert = $pdo->prepare("INSERT INTO signup (nama_lengkap, email, password) VALUES (:Nama, :Email, :Password)");
                    $insert->execute([
                        'Nama' => $Nama,
                        'Email' => $Email,
                        'Password' => $hash,
                    ]);

                    $_SESSION['success'] = 'Registrasi berhasil. Silakan login.';
                    header('Location: ' . $_SERVER['PHP_SELF']);
                    exit;
                }
            }
        }

     ?>
    <div id="signupForm" style="display: none;">
    <form method="post" action="">
      <label>Nama Lengkap</label>
      <input name="Nama" type="text" placeholder="Masukkan nama"  value="<?=htmlspecialchars($nama_lengkap ?? '')?>" required/>

      <label>Email</label>
      <input name="Email" type="email" placeholder="Masukkan email" value="<?=htmlspecialchars($email ?? '')?>" required/>

      <label>Password</label>
      <input name="Password" type="password" placeholder="Masukkan password" value="<?=htmlspecialchars($password ?? '')?>" required/>

      <button>Sign Up</button>
      </form>
      <div class="switch">
        Sudah punya akun? <a onclick="showLogin()">Login</a>
      </div>
    </div>
  </div>

  <script>
    const loginForm = document.getElementById("loginForm");
    const signupForm = document.getElementById("signupForm");
    const title = document.getElementById("title");

    function showSignup() {
      loginForm.style.display = "none";
      signupForm.style.display = "block";
      title.textContent = "Sign Up";
    }

    function showLogin() {
      signupForm.style.display = "none";
      loginForm.style.display = "block";
      title.textContent = "Login";
    }
  </script>
</body>
</html>
