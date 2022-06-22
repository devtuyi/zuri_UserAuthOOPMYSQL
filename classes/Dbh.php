<?php
session_start();
class Dbh {
    protected string $_hostname;
    protected string $_username;
    protected string $_password;
    protected string $_database;

    public function __construct() {
        $this->_hostname = "localhost";
        $this->_username = "root";
        $this->_password = "";
        $this->_database = "zuriphp";
    }
    public function connect() {
        $cnx = new mysqli($this->_hostname, $this->_username, $this->_password, $this->_database);
        if($cnx->connect_errno) {
            // Throw error
            return false;
        } else {
            return $cnx;
        }
    }
}