<?php
require("./Kunde.php");
$email = $_POST["email"];
$pw = $_POST["passwort"];

$k = new Kunde($email, $pw);

if (isset($_POST["name"])) {
    $k->setName($_POST["name"]);
}

if (empty($k->getEmail() == false)) {
    $k->registerDB();
}





//header("Location: http://localhost/phpobj/login.php");