<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "db_phppure-master";

$connect = mysqli_connect($host, $username, $password, $database);
mysqli_set_charset($connect, 'UTF8');

if ($connect === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if (!function_exists('currency_format')) {
    function currency_format($number, $suffix = 'đ') {
        if (!empty($number)) {
            return number_format($number, 0, ',', '.') . "{$suffix}";
        }
    }
} ?>