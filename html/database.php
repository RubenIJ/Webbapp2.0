<?php

class Database { //gebruiken om later de connectie mooier aan te roepen
   private $host = "localhost";
    private $user = "user";
    private $pass = "rootpassword";
    private $dbname = "mydatabase";


    public function connect() { // deze function is public zodat andere pagina's hem ook kunnen gebruiken
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname; // DataSourceName welke host gebruiken we, wat is de naam van de database
        $pdo = new PDO($dsn, $this->user, $this->pass); //declare een nieuwe connectie en gebruik de user en wachtwoord om in te loggen
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); // Default attribute zodat we later niet alles opnieuw moeten typen, maakt data in code mooier. UI deze video: https://www.youtube.com/watch?v=rcNYXc-hG_I
        return $pdo;
    }
}