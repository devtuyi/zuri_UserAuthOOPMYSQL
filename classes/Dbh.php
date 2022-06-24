<?php
session_start();
class Dbh {
    private string $_hostname;
    private string $_username;
    private string $_password;
    private string $_database;

    public function __construct() {
        $this->_hostname = "localhost";
        $this->_username = "root";
        $this->_password = "";
        $this->_database = "zuriphp";
    }
    protected function connect() {
        $cnx = new mysqli($this->_hostname, $this->_username, $this->_password, $this->_database);
        if($cnx->connect_errno) {
            // Throw error
            return false;
        } else {
            return $cnx;
        }
    }
    protected function showError($url, $message = "") {
        echo $message;
        header("refresh:1; url=$url");
    }
}