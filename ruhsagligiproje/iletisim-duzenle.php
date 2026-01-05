<?php
session_start();
require_once __DIR__ . "/classes/Iletisim.php";

$iletisim = new Iletisim();

// id yoksa listeye dön
if (!isset($_GET["id"])) {
    header("Location: iletisim-listele.php");
    exit;
}

$id = (int) $_GET["id"];
$kayit = $iletisim->tekKayit($id);

// kayıt bulunamazsa
if (!$kayit) {
    die("Kayıt bulunamadı");
}

// form gönderildiyse
if ($_POST) {
    $ad    = htmlspecialchars($_POST["ad"]);
    $email = $_POST["email"];
    $konu  = $_POST["konu"];
    $mesaj = htmlspecialchars($_POST["mesaj"]);

    $iletisim->guncelle($id, $ad, $email, $konu, $mesaj);

    header("Location: iletisim-listele.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8">
<title>İletişim Düzenle</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">

<h2>✏️ İletişim Kaydı Düzenle</h2>
<hr>

<form method="post" class="p-4 border rounded bg-light" style="max-width:600px">

<div class="mb-3">
<label class="form-label">Ad Soyad</label>
<input type="text" name="ad" class="form-control"
       value="<?= htmlspecialchars($kayit["ad"]) ?>" required>
</div>

<div class="mb-3">
<label class="form-label">E-posta</label>
<input type="email" name="email" class="form-control"
       value="<?= htmlspecialchars($kayit["email"]) ?>" required>
</div>

<div class="mb-3">
<label class="form-label">Konu</label>
<select name="konu" class="form-select">
<option <?= $kayit["konu"]=="Bilgi" ? "selected" : "" ?>>Bilgi</option>
<option <?= $kayit["konu"]=="Destek" ? "selected" : "" ?>>Destek</option>
<option <?= $kayit["konu"]=="Geri Bildirim" ? "selected" : "" ?>>Geri Bildirim</option>
</select>
</div>

<div class="mb-3">
<label class="form-label">Mesaj</label>
<textarea name="mesaj" class="form-control" rows="4" required><?= htmlspecialchars($kayit["mesaj"]) ?></textarea>
</div>

<button class="btn btn-success">Güncelle</button>
<a href="iletisim-listele.php" class="btn btn-secondary">İptal</a>

</form>

</body>
</html>
