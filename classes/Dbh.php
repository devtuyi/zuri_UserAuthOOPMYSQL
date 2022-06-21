<?php
session_start();
class Dbh {

    public function __construct() {
        return $this;
    }
    public function connect() {
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $database = "zuriphp";
        $cnx = new mysqli($hostname, $username, $password, $database);
        if($cnx->connect_errno) {
            // Throw error
            return false;
        } else {
            return $cnx;
        }
    }
}