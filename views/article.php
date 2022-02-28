<?php
require_once('../controllers/ArticleController.php');

$articleController = new ArticleController();
if(isset($_GET['id_categorie'])){
    $id_categorie = $_GET["id_categorie"];
    $articleByCategorie = $articleController->getProductsByCategory($id_categorie);
    var_dump($articleByCategorie)
}

