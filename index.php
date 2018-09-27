<?php

require('controller/frontend.php');

(isset($_GET['action'])) ? $action = $_GET['action'] : $action = 'listPosts';

try{
      switch ($action)
      {
        case 'listPosts' :
          listPosts();
          break;

        case 'post' :
          post();
          break;
        case 'addComment' :
          addComment($_GET['id'],$_POST['author'],$_POST['comment']);
          break;
        case 'addPost' :
          addPost($_POST['title'],$_POST['content']);
          break;
        default :
          listPosts();
      }


}
catch (Exception $e){
    echo 'Erreur: '.$e->getMessage();
}
