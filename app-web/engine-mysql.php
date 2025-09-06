<?php

$host = getenv("DB_HOST") ?: "srv1800.hstgr.io";
$user = getenv("DB_USER") ?: "u193613732_flashnx";
$pass = getenv("DB_PASS") ?: "flashNX2011";
$mysql = getenv("DB_NAME") ?: "u193613732_flashnx";
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$connect = null;

try {
    $connect = new mysqli($host, $user, $pass, $mysql);
    $connect->set_charset("utf8mb4");
} catch (mysqli_sql_exception $e) {
    error_log("bug!!! the error: " . $e->getMessage());
    die("Database not connected.");
}

?>