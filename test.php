<?php
echo "PHP Version: " . phpversion() . "<br>";

// Cek apakah cURL aktif
if (function_exists('curl_init')) {
    echo "✓ cURL is ACTIVE<br>";
} else {
    echo "✗ cURL is NOT ACTIVE<br>";
}

// Cek error
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Test sederhana
echo "Test berhasil!";
