<?php
require_once __DIR__ . "/../auth/auth_guard.php";
require_once __DIR__ . "/../db.php";

$userId = (int)$_SESSION["user_id"];

$stmt = $db->prepare("SELECT * FROM test_results WHERE user_id=? ORDER BY created_at DESC LIMIT 10");
$stmt->execute([$userId]);
$sonuclar = $stmt->fetchAll(PDO::FETCH_ASSOC);

$stmt = $db->prepare("
  SELECT test_key, COUNT(*) adet, ROUND(AVG((score/max_score)*100),1) ort_yuzde
  FROM test_results
  WHERE user_id=?
  GROUP BY test_key
  ORDER BY adet DESC
");
$stmt->execute([$userId]);
$ozet = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!doctype html>
<html lang="tr">
<head>
  <meta charset="utf-8">
  <title>Profilim</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/site.css">
</head>
<body class="p-4" style="max-width:950px;margin:0 auto;">

<h2>👤 Profilim</h2>
<p>Merhaba, <b><?= htmlspecialchars($_SESSION["user_name"]) ?></b></p>

<div class="mb-3">
  <a class="btn btn-outline-primary btn-sm" href="../minitest.php">Mini Testlere Git</a>
  <a class="btn btn-outline-secondary btn-sm" href="../index.php">Anasayfa</a>
  <a class="btn btn-danger btn-sm" href="../auth/logout.php">Çıkış</a>
</div>

<div class="row g-3">
  <div class="col-md-5">
    <div class="border rounded p-3 bg-light">
      <h5>📊 Özet Analiz</h5>
      <?php if(!$ozet): ?>
        <p>Henüz kayıtlı test sonucun yok.</p>
      <?php else: ?>
        <ul>
          <?php foreach($ozet as $o): ?>
            <li><b><?= htmlspecialchars($o["test_key"]) ?></b> — <?= (int)$o["adet"] ?> kez — Ortalama: <b><?= htmlspecialchars($o["ort_yuzde"]) ?>%</b></li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>
    </div>
  </div>

  <div class="col-md-7">
    <div class="border rounded p-3">
      <h5>🧾 Son Test Sonuçlarım</h5>
      <?php if(!$sonuclar): ?>
        <p>Mini test çözünce sonuçlar burada listelenecek.</p>
      <?php else: ?>
        <table class="table table-sm table-striped">
          <thead><tr><th>Tarih</th><th>Test</th><th>Skor</th><th>Düzey</th></tr></thead>
          <tbody>
            <?php foreach($sonuclar as $s): ?>
              <tr>
                <td><?= htmlspecialchars($s["created_at"]) ?></td>
                <td><?= htmlspecialchars($s["test_key"]) ?></td>
                <td><?= (int)$s["score"] ?>/<?= (int)$s["max_score"] ?></td>
                <td><b><?= htmlspecialchars($s["level"]) ?></b></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      <?php endif; ?>
    </div>
  </div>
</div>

</body>
</html>
