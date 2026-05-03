<?php
/**
 * Global Configuration & Shared Data
 */

$list_pendidikan = ['SD', 'SMP', 'SMA', 'D3', 'S1', 'S2', 'S3'];
$list_hobby = ['Mancing', 'Game', 'Ngoding', 'Membaca', 'Olahraga', 'Musik', 'Menari', 'Berenang', 'Bermain Gitar', 'Bermain Piano'];

/**
 * Sanitasi input untuk keamanan XSS
 */
function input_safe($data)
{
    if (is_array($data)) {
        return array_map('input_safe', $data);
    }
    return htmlspecialchars(stripslashes(trim($data)));
}
?>