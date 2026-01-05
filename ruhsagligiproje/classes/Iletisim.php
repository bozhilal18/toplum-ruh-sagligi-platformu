<?php
require_once __DIR__ . "/Database.php";

class Iletisim extends Database
{
    public function ekle(string $ad, string $email, string $konu, string $mesaj): bool
    {
        $sql = "INSERT INTO iletisim (ad, email, konu, mesaj) VALUES (?,?,?,?)";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$ad, $email, $konu, $mesaj]);
    }

    public function listele(): array
    {
        $sql = "SELECT * FROM iletisim ORDER BY id DESC";
        return $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function tekKayit(int $id): ?array
    {
        $sql = "SELECT * FROM iletisim WHERE id=?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$id]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row ?: null;
    }

    public function guncelle(int $id, string $ad, string $email, string $konu, string $mesaj): bool
    {
        $sql = "UPDATE iletisim SET ad=?, email=?, konu=?, mesaj=? WHERE id=?";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$ad, $email, $konu, $mesaj, $id]);
    }

    public function sil(int $id): bool
    {
        $sql = "DELETE FROM iletisim WHERE id=?";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$id]);
    }
}
