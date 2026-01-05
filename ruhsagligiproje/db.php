<?php
/*
$db → veritabanı bağlantı nesnesi

ruhsagligi → phpMyAdmin’de oluşturulacak veritabanı adı
root → XAMPP varsayılan kullanıcı
"" → şifre boş

Bu dosya, veritabanı bağlantısını sağlar
ve require ile diğer PHP dosyalarında kullanılır.
*/

try {
    $db = new PDO(
        "mysql:host=localhost;dbname=ruhsagligi;charset=utf8",
        "root",
        ""
    );
} catch (PDOException $e) {
    die("Veritabanı bağlantı hatası: " . $e->getMessage());
}
?>

