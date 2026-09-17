<?php
// Script untuk ekstrak konten
$files = [
    'application/views/tk/program.php' => [563, 140], // baris 564 (index 563) - 703
    'application/views/tk/pendaftaran.php' => [653, 166] // baris 654 (index 653) - 819
];

foreach ($files as $file => $bounds) {
    $lines = file($file);
    $content = array_slice($lines, $bounds[0], $bounds[1]);
    file_put_contents($file, implode('', $content));
    echo "$file updated.\n";
}
