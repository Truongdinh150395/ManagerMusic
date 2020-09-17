<?php


namespace MVC\Model;


class MusicDB
{
    protected $conn;


    public function __construct()
    {
        $db = new DBConnect();
        $this->conn = $db->connect();
    }
    //Đưa ra trường có cả c
//    function  getAllListMusic()
//    {
//        $sql = "SELECT musics.name as 'music_name',musics.url,musics.img,musics.author,categorys.name_category as 'category_name' FROM `musics` INNER JOIN `categorys` ON musics.id = categorys.id";
//        $stmt = $this->conn->query($sql);
//       return $stmt->fetchAll();
//    }
    function  getAllListMusic()
    {
        $sql = "SELECT * FROM `musics`";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll();
    }
    function getTopFiveMusic()
    {
        $sql = "SELECT * FROM `musics` LIMIT 6";
        $stmt = $this->conn->query($sql);

        return $stmt->fetchAll();
    }
    function getMusic($id)
    {
        $sql = "SELECT * FROM `musics` WHERE id=:id";
        $stmt =$this->conn->prepare($sql);
        $stmt->bindParam(':id',$id);
        $stmt->execute();
        return $stmt->fetch();
    }
    function store($music)
    {

        $sql = "INSERT INTO `musics`(`name`, `url`, `img`, `id_category`, `author`) VALUES (:nameMusic,:audio,:img,:id_category,:author)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':nameMusic',$music["name"]);
        $stmt->bindParam(':audio',$music["audio"]);
        $stmt->bindParam(':img',$music["img"]);
        $stmt->bindParam(':id_category',$music["id_category"]);
        $stmt->bindParam(':author',$music["author"]);
        $stmt->execute();

    }
//Chuc nang search
//    function searchSing($key)
//    {
//        $sql = "SELECT * FROM `musics` WHERE name LIKE :key ";
//        $stmt = $this->conn->prepare($sql);
//        $stmt->bindParam(':key',$key);
////        $stmt = $this->conn->query($sql);
//        $stmt->execute();
//        return $stmt->fetchAll();
//    }

}