<?php


namespace MVC\Controller;


use MVC\Model\CategoryDB;

class CategoryCotroller
{
    protected $categoryModel;
    public function __construct()
    {
        $this->categoryModel = new CategoryDB();
    }
    function getAllCategory()
    {
        return $this->categoryModel->getAllCategory();
    }
}