<?php
session_start();
require_once __DIR__ . "/../db.php";

$hata = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $name  = trim($_POST["name"] ?? "");
  $email = trim($_POST["email"] ?? "");
  $pass  = $_POST["password"] ?? "";

  if ($name==="" || $email==="" || $pass==="") {
    $hata = "Lütfen tüm alanları doldurun.";
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $hata = "Geçerli bir e-posta girin.";
  } elseif (strlen($pass) < 6) {
    $hata = "Şifre en az 6 karakter olmalı.";
  } else {
    $stmt = $db->prepare("SELECT id FROM users WHERE email=? LIMIT 1");
    $stmt->execute([$email]);
    if ($stmt->fetch()) {
      $hata = "Bu e-posta zaten kayıtlı.";
    } else {
      $hash = password_hash($pass, PASSWORD_DEFAULT);
      $stmt = $db->prepare("INSERT INTO users (name,email,password_hash) VALUES (?,?,?)");
      $stmt->execute([$name, $email, $hash]);
      header("Location: login.php");
      exit;
    }
  }
}
?>
<!doctype html>
<html lang="tr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kayıt Ol</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/site.css">
</head>
<body class="auth-wrap">

  <h2 class="mb-2">🧾 Kayıt Ol</h2>
  <hr class="mb-3">

  <?php if($hata): ?>
    <div class="alert alert-danger"><?= htmlspecialchars($hata) ?></div>
  <?php endif; ?>

  <form method="post" class="auth-card auth-body">

    <div class="mb-3">
      <label class="form-label">Ad Soyad</label>
      <input class="form-control" name="name" required placeholder="Ad Soyad">
    </div>

    <div class="mb-3">
      <label class="form-label">E-posta</label>
      <input class="form-control" name="email" type="email" required autocomplete="email" placeholder="ornek@mail.com">
    </div>

    <div class="mb-3">
      <label class="form-label">Şifre</label>
      <input class="form-control" name="password" type="password" required autocomplete="new-password" placeholder="En az 6 karakter">
    </div>

    <div class="d-flex gap-2 flex-wrap">
      <button class="btn btn-primary" type="submit">Kayıt Ol</button>
      <a class="btn btn-outline-primary" href="login.php">Giriş</a>
      <a class="btn btn-outline-secondary" href="../index.php">Anasayfa</a>
    </div>
  </form>
</body>
</html>
