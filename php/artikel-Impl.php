<?php 
require("./Dbconn.php");
define ('SITE_ROOT', realpath(dirname(__FILE__)));

$artikelName = $_POST["artikel"];
$preis = $_POST["preis"];
//Bildname + Dateiendung
$bildName = $_FILES["bild"]["name"];
//Bild Dateityp 
$bildType = $_FILES["bild"]["type"];
//tep Verzeichens des Servers mit Datei
$bildTmp = $_FILES["bild"]["tmp_name"];
//-->katze.jpg

$bildPfadServer = ".\\img\\".$bildName;

$bildDBPfad = "./php/img/".$bildName;

if (!empty($bildName)) {
    move_uploaded_file($bildTmp, $bildPfadServer/* SITE_ROOT."\\".$bildPfadServer */);
    $conn->query("INSERT INTO artikel (artikel, preis, bildpfad) 
    VALUES ('$artikelName', '$preis', '$bildDBPfad')");
}

header("Location: http://localhost/phpobj/artikel.php");






