<?php
$secretNumber = rand(1, 100);
$attempts = 0;

echo "~~~~~~~~~~~~~~~~~    SARAH'S GAME   ~~~~~~~~~~~~~~~~~~~~\n";
echo "========================================================\n";
echo "Selamat datang di permainan Tebak Angka!\n";
echo "Saya telah memilih angka antara 1 dan 100. Coba tebak Ya!\n";
echo "========================================================\n\n";

do {
    echo "Masukkan tebakan Anda: ";
    $guess = (int) readline();

    $attempts++;

    if ($guess > $secretNumber) {
        echo "Angka terlalu besar! Coba lagi.\n";
    } elseif ($guess < $secretNumber) {
        echo "Angka terlalu kecil! Coba lagi.\n";
    } else {
        echo "+++Selamat! Anda menebak angka dengan benar dalam $attempts percobaan!+++\n";
    }
} while ($guess != $secretNumber);
?>
