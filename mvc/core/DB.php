<?php
class DB
{
    public $con;
    protected $servername = "mysql";
    protected $username = 'root';
    protected $password = 'password';
    protected $dbname = 'quanlihocphan';

    public function __construct()
    {
        $this->con = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);
        if ($this->con->connect_errno) {
            echo "Failed to connect to MySQL: " . $this->con->connect_error;
            exit();
        }
        mysqli_query($this->con, "SET NAMES 'utf8'");
    }
    public function query($query)
    {
        return $this->con->query($query);
    }
    public function quyen()
    {
        if (isset($_SESSION['idloaitaikhoan']))
            return $_SESSION['idloaitaikhoan'];
        else
            return NULL;
    }
}
