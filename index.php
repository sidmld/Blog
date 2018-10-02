<?php
require 'lib/autoload.php';

//require('controller/frontend.php');

$controller = new Frontend();

(isset($_GET['action'])) ? $action = $_GET['action'] : $action = 'listPosts';

try{
      switch ($action)
      {
        case 'listPosts' :
            $controller->listPosts();
          break;

        case 'post' :
            $controller->post();
          break;
        case 'addComment' :
            $controller->addComment($_GET['id'],$_POST['author'],$_POST['comment']);
          break;
        case 'addPost' :
            $controller->addPost($_POST['title'],$_POST['content']);
          break;
        default :
            $controller->listPosts();
      }


}
catch (Exception $e){
    echo 'Erreur: '.$e->getMessage();
}
