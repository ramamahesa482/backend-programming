<?php

# membuat fungsi
function hitungLuasLingkaran($jari)
{
    $phi = 3.14;
    $hasil = $phi * $jari * $jari;
    return $hasil;
}

# memanggil
echo hitungLuasLingkaran(5);
echo "<br>";
echo hitungLuasLingkaran(7);
