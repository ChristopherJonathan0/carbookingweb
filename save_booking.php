<?php
require_once 'koneksi.php';

$car   = $_POST['car']   ?? '';
$name  = $_POST['name']  ?? '';
$phone = $_POST['phone'] ?? '';
$days  = $_POST['days']  ?? '';

// Validasi sederhana
if ($car === '' || $name === '' || $phone === '' || $days === '') {
    echo "Form tidak lengkap! <a href='index.php'>Back</a>";
    exit;
}

$bookingDate = date('Y-m-d H:i:s');
$invoiceId   = 'INV' . date('YmdHis') . strtoupper(substr(md5($name), 0, 4));

/* =========================================================
   1. SIMPAN KE FILE TXT
   ========================================================= */
$lines = [
    "==============================",
    "INVOICE: $invoiceId",
    "Tanggal: $bookingDate",
    "------------------------------",
    "Nama   : $name",
    "Telp   : $phone",
    "Mobil  : $car",
    "Lama   : $days hari",
    "------------------------------",
    PHP_EOL
];
$data = implode(PHP_EOL, $lines);

$file   = 'booking_data.txt';
$result = file_put_contents($file, $data, FILE_APPEND | LOCK_EX);
if ($result === false) {
    error_log("Gagal menulis booking_data.txt");
}

/* =========================================================
   2. SIMPAN KE DATABASE 
   ========================================================= */
try {
    $sql = "INSERT INTO bookings (car, name, phone, days)
            VALUES (:car, :name, :phone, :days)";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':car'   => $car,
        ':name'  => $name,
        ':phone' => $phone,
        ':days'  => (int)$days,
    ]);

    $newId = $pdo->lastInsertId(); // ID yang baru dibuat otomatis

    echo "Booking saved! Invoice: <strong>$invoiceId</strong><br>
          Booking ID: <strong>$newId</strong><br>
          <a href='index.php'>Back</a>";

} catch (PDOException $e) {
    echo "Gagal simpan ke database: " . $e->getMessage();
}