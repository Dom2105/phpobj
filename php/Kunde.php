<?php 

//Die Klasse gibt die Struktur für das Objekt, das wir erzeugen wollen. 
class Kunde {

    //Attribute eines Objektes
    private $name;
    private $email;
    private $passwort;

    public function __construct($email, $passwort){
        $this->setEmail($email);
        $this->setPasswort($passwort);
    }

    //Methoden des Objektes, hier wird die Logik, zum setzen und auslesen der Variablen(Attribute)
    //, des Objekts geschrieben
    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            
            $this->email = $email;
        }
     
    }

    public function getPasswort()
    {
        return $this->passwort;
    }


    public function setPasswort($passwort)
    {
        $hashPw = password_hash($passwort, PASSWORD_BCRYPT);

        $this->passwort = $hashPw;
    }

    public function registerDB(){
        require("./Dbconn.php");
        $conn->query("INSERT INTO kunde (email, passwort) VALUES ('$this->email','$this->passwort')");
    }

    

    //Ende der Klasse
}

//Bilden eines Objektes, aus einer Klasse über den Konstruktor
/* $kunde1 = new Kunde(); */

//zuweißen eines Wertes für ein bestimmtes Objekt
/* $kunde1->name = "Max";
$kunde1->setEmail("do");

echo $kunde1->email; */