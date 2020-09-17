<?php


namespace MVC\Model;


class CategoryDB
{
    protected $conn;
    public function __construct()
    {
        $db= new DBConnect();
        $this->conn= $db->connect();
    }
    function getAllCategory()
    {
       $sql = "SELECT name_category FROM `categorys`";
       $stmt = $this->conn->query($sql);
       return $stmt->fetchAll();
    }

}