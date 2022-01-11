<?php

$servername = "localhost";
$username = "root";
$passwort = "";
$datenbank = "phpobjtest";
$port = 3306;

$conn = new mysqli($servername, $username, $passwort, $datenbank, $port);

if ($conn->connect_errno) {
    die("Datenbank Verbindungsfehler: ". $conn->connect_errno);
}