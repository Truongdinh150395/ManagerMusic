<?php


namespace MVC\Controller;


use MVC\Model\MusicDB;

class MusicController
{
    protected $musicModel;
    public function __construct()
    {
        $this->musicModel = new  MusicDB();
    }
    function getAllMusic()
    {
        return $this->musicModel->getAllListMusic();
    }
    function getTopFive()
    {
        return $this->musicModel->getTopFiveMusic();
    }
    function getMusicById($id)
    {
        return $this->musicModel->getMusic($id);
    }
    function addMusic($data)
    {
        // thuc hien upload file

        $this->musicModel->store($data);
        header("location:http://localhost/ManagerMusic/");
    }

    //chuc nang search
//    function search()
//    {
//        return $this->$this->musicModel->searchSing();
//    }
}