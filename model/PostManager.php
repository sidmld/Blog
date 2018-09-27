<?php

require_once('Connect.php');
require_once('Entity/Post.php');

class PostManager extends Connect
{

    public function getPosts(){

        $db = $this->dbConnect();

        $req = $db->prepare('SELECT id,title,content,DATE_FORMAT(creation_date,
        \'%d/%m/%Y à %Hh%imin%ss\' ) AS creation_date_fr FROM posts
        ORDER BY creation_date DESC LIMIT 0,5');
        $req->execute();

        while ($row =   $req->fetch(PDO::FETCH_ASSOC))  {

          $post = new Post();
          $post->setId($row['id']);
          $post->setTitle($row['title']);
          $post->setContent($row['content']);
          $post->setCreationDate($row['creation_date_fr']);

          $arr[] = $post;
        }



        return $arr;
    }


    public function getPost($postId){

        $db = $this->dbConnect();

        $req = $db->prepare('SELECT id,title,content,DATE_FORMAT(creation_date,
        \'%d/%m/%Y à %Hh%imin%ss\' ) AS creation_date_fr FROM posts
        WHERE id = ?');
        $req->execute(array($postId));
        
        $row =   $req->fetch();
        
        $post = new Post();
          $post->setId($row['id']);
          $post->setTitle($row['title']);
          $post->setContent($row['content']);
          $post->setCreationDate($row['creation_date_fr']);
        
        /*$req->execute(array($postId));
        $post = $req->fetch();

        return $post;*/
        
        return $post;

    }
    
    
    
     public function postBillet($title, $content){
        $db = $this->dbConnect();

        $post = $db->prepare('INSERT INTO posts(title,content,
        creation_date) VALUES (?,?,NOW())');
        $affectedLines = $post->execute(array(
            $title,$content
        ));

        return $affectedLines;
    }
    
    
    
}
