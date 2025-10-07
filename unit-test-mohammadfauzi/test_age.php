<?php
require_once "Validator.php";

try {
    $result = validateAge(24);
    echo "PASS: Umur 24 diterima\n";
} catch (Exception $e) {
    echo "FAIL: Umur 24 tidak diterima. Error: " . $e->getMessage() . "\n";
}

try {
    $result = validateName("Fauzi");
    echo "PASS: Fauzi diterima\n";
} catch (Exception $e) {
    echo "FAIL: Fauzi tidak diterima. Error: " . $e->getMessage() . "\n";
}

try {
    $result = validateName("  ");
    echo "FAIL: Nama kosong seharusnya ditolak\n";
} catch (Exception $e) {
    echo "PASS: Nama kosong ditolak. Pesan: " . $e->getMessage() . "\n";
}
