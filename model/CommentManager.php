<?php

require_once('Connect.php');
require_once('Entity/Comment.php');
class CommentManager extends Connect
{

    public function getComments($postId){
        $db = $this->dbConnect();

        $comments = $db->prepare('SELECT id,author,comment, DATE_FORMAT(
        comment_date, \'%d/%m/%Y à %Hh%imin%ss\') 
        AS comment_date_fr FROM comments WHERE post_id=?
        ORDER BY comment_date DESC ');
        $comments->execute(array($postId));
        
        
        while ($row =   $comments->fetch(PDO::FETCH_ASSOC))  {

          $comment = new Comment();
          $comment->setId($row['id']);
          $comment->setAuthor($row['author']);
          $comment->setComment($row['comment']);
          $comment->setCommentDate($row['comment_date_fr']);

          $com[] = $comment;
        }
        
        

        return $com;
    }

    public function postComments($postId, $author,$comment){
        $db = $this->dbConnect();

        $comments = $db->prepare('INSERT INTO comments(post_id,author,comment,
        comment_date) VALUES (?,?,?,NOW())');
        $affectedLines = $comments->execute(array(
            $postId,$author,$comment
        ));

        return $affectedLines;
    }



}