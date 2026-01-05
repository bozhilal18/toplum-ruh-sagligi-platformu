<?php
session_start();
require_once __DIR__ . "/../db.php";

$hata = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $email = trim($_POST["email"] ?? "");
  $pass  = $_POST["password"] ?? "";

  $stmt = $db->prepare("SELECT * FROM users WHERE email=? LIMIT 1");
  $stmt->execute([$email]);
  $user = $stmt->fetch(PDO::FETCH_ASSOC);

  if ($user && password_verify($pass, $user["password_hash"])) {
    session_regenerate_id(true);
    $_SESSION["user_id"] = $user["id"];
    $_SESSION["user_name"] = $user["name"];
    $_SESSION["role"] = $user["role"] ?? "user";
    header("Location: ../index.php");
    exit;
  } else {
    $hata = "E-posta veya şifre hatalı.";
  }
}
?>
<!doctype html>
<html lang="tr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Giriş Yap</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/site.css">
</head>

<body class="auth-wrap">

  <h2 class="mb-2">🔐 Siteye Giriş</h2>
  <hr class="mb-3">

  <?php if($hata): ?>
    <div class="alert alert-danger"><?= htmlspecialchars($hata) ?></div>
  <?php endif; ?>

  <form method="post" class="auth-card auth-body">

    <div class="mb-3">
      <label class="form-label">E-posta</label>
      <input class="form-control" name="email" type="email" required autocomplete="email" placeholder="ornek@mail.com">
    </div>

    <div class="mb-3">
      <label class="form-label">Şifre</label>
      <input class="form-control" name="password" type="password" required autocomplete="current-password" placeholder="••••••••">
    </div>

    <div class="d-flex gap-2 flex-wrap">
      <button class="btn btn-primary" type="submit">Giriş</button>
      <a class="btn btn-outline-primary" href="register.php">Kayıt Ol</a>
      <a class="btn btn-outline-secondary" href="../index.php">Anasayfa</a>
    </div>
  </form>
</body>
</html>
