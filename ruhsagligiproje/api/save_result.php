<?php
session_start();
header("Content-Type: application/json");
require_once __DIR__ . "/../db.php";

if (!isset($_SESSION["user_id"])) {
    echo json_encode(["ok" => false, "message" => "Giriş yapılmamış"]);
    exit;
}

$data = json_decode(file_get_contents("php://input"), true);

$testKey = trim($data["testKey"] ?? "");
$score   = (int)($data["score"] ?? 0);
$max     = (int)($data["maxScore"] ?? 0);
$level   = trim($data["level"] ?? "");

if ($testKey === "" || $max <= 0) {
    echo json_encode(["ok"=>false, "message"=>"Eksik veri"]);
    exit;
}

$stmt = $db->prepare("INSERT INTO test_results (user_id, test_key, score, max_score, level) VALUES (?,?,?,?,?)");
$stmt->execute([(int)$_SESSION["user_id"], $testKey, $score, $max, $level]);

echo json_encode(["ok"=>true]);
