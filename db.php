<?php 
session_start();

$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'inventory';

$koneksi = new mysqli($host, $user, $pass, $db);

 ?>