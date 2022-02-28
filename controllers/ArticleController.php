<?php
require_once("../models/ArticleModel.php");
class ArticleController {

    private $model;

    public function __construct()
    {
        $this->model=new ArticleModel();
    }
    
    public function getProductsByCategory($id_categorie){

        $result=$this->model->getProductsByCategory($id_categorie);
        return $result;

    }





}