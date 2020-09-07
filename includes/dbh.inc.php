<?php

class Dbh
{
    private $server_name;
    private $user_name;
    private $password;
    private $dbname;

    protected function connect()
    {
        $this->server_name = "localhost";
        $this->user_name = "root";
        $this->password = "";
        $this->dbname = "phpoop";

        $conn = new mysqli($this->server_name, $this->user_name, $this->password, $this->dbname);

        return $conn;
    }
}
 