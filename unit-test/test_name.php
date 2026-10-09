<?php

require_once "Validator.php";

// Test 1: Nama lengkap yang benar
try {
    $result = validateName("Alyssaa");
    echo "PASS : Nama lengkap diterima\n";
} catch (Exception $e) {
    echo "FAIL : Nama lengkap tidak diterima. Error: " . $e->getMessage() . "\n";
}


// Test 2: Nama dengan angka
try {
    $result = validateName("Alyssaa 1212");
    echo "FAIL : Nama dengan angka seharusnya ditolak\n";
} catch (Exception $e) {
    echo "PASS : Nama dengan angka ditolak. Error: " . $e->getMessage() . "\n";
}


// Test 3: Nama kosong
try {
    $result = validateName("");
    echo "FAIL : Nama kosong seharusnya ditolak\n";
} catch (Exception $e) {
    echo "PASS : Nama kosong ditolak. Error: " . $e->getMessage() . "\n";
}

?>