<?php
require_once __DIR__ . "/classes/Iletisim.php";

$id = isset($_GET["id"]) ? (int)$_GET["id"] : 0;
if ($id <= 0) {
    die("Geçersiz ID");
}

$iletisim = new Iletisim();
$iletisim->sil($id);

header("Location: iletisim-listele.php");
exit;
