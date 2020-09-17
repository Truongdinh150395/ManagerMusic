<?php


namespace MVC\Model;
use PDO;

class DBConnect
{
    protected $dsn;
    protected $username;
    protected $password;
    public function __construct()
    {
        $this->dsn = "mysql:host =localhost;dbname=MUSIC;charset = utf8";
        $this->username = "root";
        $this->password = "123456@Abc";
    }
    public function connect()
    {
        $connect = new PDO($this->dsn,$this->username,$this->password);
        return $connect;
    }
}
//test connect
//$connect = new DBConnect();
//var_dump($connect->connect()->query("SELECT * FROM `albums`"));