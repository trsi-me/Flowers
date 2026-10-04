<?php
// إعدادات الاتصال بقاعدة البيانات
$host = 'localhost';
$dbname = 'flower_store';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("خطأ في الاتصال: " . $e->getMessage());
}
?>

