<?php
$url = "http://localhost/home/chiacundippal/.cpanel/datastore/koncet3.txt";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 30);
$content = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($httpCode == 200 && $content !== false) {
    echo "<pre>" . htmlspecialchars($content) . "</pre>";
} else {
    echo "Gagal mengambil konten. HTTP Code: " . $httpCode;
}
?>
