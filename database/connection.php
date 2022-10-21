<?php
$koneksi = new mysqli("localhost", "root", "", "uts_skd");

// Check connection
if ($koneksi->connect_error) {
    echo "Failed to connect to MySQL: " . $koneksi->connect_error;
    exit();
}