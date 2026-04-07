<?php
$car = $_POST['car'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$days = $_POST['days'];

$bookingDate = date('Y-m-d H:i:s'); // format: 2025-11-20 14:30:00
$invoiceId   = 'INV' . date('YmdHis') . strtoupper(substr(md5($name),0,4));

$data = "Car: $car
		\nName: $name
		\nPhone: $phone
		\nDays: $days\n-------------------\n";

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
    PHP_EOL // beri baris kosong antar-transaksi
];
//Gabungkan semua elemen array $lines menjadi satu string
$data = implode(PHP_EOL, $lines);

$file = 'booking_data.txt';
$result = file_put_contents($file, $data, FILE_APPEND | LOCK_EX);
if ($result === false) {
    // tangani error (log atau tampilkan pesan)
}

echo "Booking saved! <a href='index.php'>Back</a>";
?>
