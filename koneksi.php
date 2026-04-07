<?php
$dbHost = 'localhost';
$dbName = 'cars';
$dbUser = 'root';
$dbPass = '';

$dsn = "mysql:host=$dbHost;dbname=$dbName;charset=utf8mb4";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

// Buat $pdo dan juga sediakan fungsi getPDO() agar index.php bisa menggunakannya
$pdo = null;

try {
    $pdo = new PDO($dsn, $dbUser, $dbPass, $options);
} catch (Exception $e) {
    // Jangan tampilkan error detail di production; untuk debugging lokal tampilkan.
    // Jika ingin sembunyikan, ubah echo menjadi log.
    echo "Koneksi database gagal: " . htmlspecialchars($e->getMessage());
    // Pastikan script berhenti agar index.php tidak lanjut dengan $pdo null
    exit;
}

/**
 * Getter optional — jika index.php ingin mengakses via fungsi
 */
function getPDO(): PDO {
    global $pdo;
    return $pdo;
}
