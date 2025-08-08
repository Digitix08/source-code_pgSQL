<?php

if (session_status() === PHP_SESSION_NONE) session_start();

error_reporting(E_ALL);

$host = "host=localhost";
$port = "port=5432"; // default PostgreSQL port
$dbname = "dbname=users";
$user = "user=dummy";  // replace with your PostgreSQL username
$password = "password=dummy"; // replace with your PostgreSQL password
$conn_string = "$host $port $dbname $user $password";
$conn = pg_connect($conn_string);
?>