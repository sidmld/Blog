<?php

/*
 * function autoload($classe)
 * {
 * require_once 'model/'.$classe.'.php';
 * }
 *
 * spl_autoload_register('autoload');
 * /*
 * require_once('model/PostManager.php');
 * require_once ('model/CommentManager.php');
 */
class Frontend
{

  public    function listPosts()
    {
        $postManager = new PostManager();
        $trucs = $postManager->getPosts();
        require ('view/frontend/listPostsView.php');
    }

  public   function post()
    {
        $postManager = new PostManager();
        $commentManager = new CommentManager();

        $truc = $postManager->getPost($_GET['id']);
        $trucs = $commentManager->getComments($_GET['id']);

        require ('view/frontend/postView.php');
    }

  public   function addComment($postId, $author, $comment)
    {
        $commentManager = new CommentManager();
        $affectedLines = $commentManager->postComments($postId, $author, $comment);

        if ($affectedLines === false) {
            throw new Exception('Impossible d \'ajouter le comment');
        } else {
            header('Location:index.php?action=post&id=' . $postId);
        }
    }

  public   function addPost($title, $content)
    {
        $postManager = new PostManager();
        $affectedLines = $postManager->postBillet($title, $content);

        if ($affectedLines === false) {
            throw new Exception('Impossible d \'ajouter le comment');
        } else {
            header('Location:index.php');
        }
    }
}