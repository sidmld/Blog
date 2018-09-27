<?php

class Comment {
    
   private $id;
   private $postId;
   private $author;
   private $comment;
   private $commentDate;
   
    public function setId($id) {
      $this->id = $id;
    }

    public function getId()
    {
      return $this->id;
    }
    
     public function setPostId($postId) {
      $this->postId = $postId;
    }

    public function getPostId()
    {
      return $this->postId;
    }
    
    public function setAuthor($author){
        $this->author = $author;
    }
    
    public function getAuthor(){
        return $this->author;
    }
    
    public function setComment($comment){
        $this->comment = $comment;
    }
    
    public function getComment(){
        return $this->comment;
    }
    
    public function setCommentDate($commentDate){
        $this->commentDate = $commentDate;
    }
    
    public function getCommentDate(){
        return $this->commentDate;
    }
}