<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "wedding_organizer";

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
    die ("Koneksi Gagal");
}
?>