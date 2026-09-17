<?php
// Script untuk ekstrak konten saja
$files = [
    'application/views/tk/profile.php' => [616, 158], // dari baris 617, sebanyak 158 baris
    'application/views/tk/program.php' => [616, 184], // saya akan cek barisnya nanti
    'application/views/tk/pendaftaran.php' => [616, 137] 
];

// Profile
$lines = file('application/views/tk/profile.php');
$content = array_slice($lines, 616, 158); // baris 617 - 774
file_put_contents('application/views/tk/profile.php', implode('', $content));

echo "Profile updated.\n";
