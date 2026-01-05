<?php
require_once __DIR__ . "/classes/Iletisim.php";

$iletisim = new Iletisim();
$veriler = $iletisim->listele();
?>

<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8">
<title>İletişim Kayıtları</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">

<h2>📩 Gelen İletişim Mesajları</h2>
<hr>

<table class="table table-bordered table-striped">
<thead>
<tr>
<th>ID</th>
<th>Ad Soyad</th>
<th>E-posta</th>
<th>Konu</th>
<th>Mesaj</th>
<th>İşlem</th>
</tr>
</thead>

<tbody>
<?php foreach($veriler as $v): ?>
<tr>
<td><?= $v["id"] ?></td>
<td><?= $v["ad"] ?></td>
<td><?= $v["email"] ?></td>
<td><?= $v["konu"] ?></td>
<td><?= $v["mesaj"] ?></td>

<td>
<a href="iletisim-duzenle.php?id=<?= $v['id'] ?>" 
   class="btn btn-warning btn-sm">
Düzenle
</a>

<a href="iletisim-sil.php?id=<?= $v['id'] ?>"
   class="btn btn-danger btn-sm"
   onclick="return confirm('Silmek istediğine emin misin?')">
Sil
</a>
</td>
</tr>

<?php endforeach; ?>
</tbody>
</table>
