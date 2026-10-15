<?php
// Definisi konstanta atau variabel bitwise
$READ = 1;
$WRITE = 2;
$DELETE = 4;

// Jika $permission = $READ | $WRITE
$permission = $READ | $WRITE;

// Pengecekan flag DELETE
$ScanDelete = ($permission & $DELETE);

echo "Nilai permission: " . $permission . "<br>";
echo "Nilai ScanDelete: " . ($ScanDelete ? 'true' : 'false');
?>