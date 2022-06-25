<?php
session_start();
class Dbh {
    private string $_hostname = "localhost";
    private string $_username = "root";
    private string $_password = "";
    private string $_database = "zuriphp";

    protected function connect() {
        $cnx = new mysqli($this->_hostname, $this->_username, $this->_password, $this->_database);
        if($cnx->connect_errno) {
            Dbh::showError("index.php", "Error connecting to database");
        }
        return $cnx;
    }

    public static function showError($url, $message = "") {
        echo $message . " Click <a href=\"$url\"><strong>here</strong></a> if you are not redirected automatically";
        header("refresh:1; url=$url");
    }
}