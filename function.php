<?php
function perkenalan($nama, $salam = "Assalamualaikum") {
    echo $salam . ", ";
    echo "Perkenalkan, nama saya " . $nama . "<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}

// Memanggil fungsi dengan parameter yang berbeda
perkenalan("Hamdana", "Hallo");
echo "<hr>"; // Menambahkan garis horizontal sebagai pemisah
$saya = "Elok";
$ucapanSalam = "Selamat pagi";

perkenalan($saya); // Memanggil tanpa parameter salam, menggunakan nilai default
?>
