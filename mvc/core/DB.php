<?php
class DB
{
    public $con;
    protected $servername = "mysql";
    protected $username = 'root';
    protected $password = 'password';
    protected $dbname = 'quanlyhocphan';

    public function __construct()
    {
        $this-> con = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);
        if ($this-> con -> connect_errno) {
            echo "Failed to connect to MySQL: " . $this->con-> connect_error;
            exit();
        }
        mysqli_query($this->con, "SET NAMES 'utf8'");
    }
    public function query($query)
    {
        error_log($query);
        return $this->con->query($query);
    }
}
