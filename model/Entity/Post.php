<?php

class Post
{
    private $id;
    private $title;
    private $content;
    private $creationDate;
    
   

    public function setId($id) {
      $this->id = $id;
    }

    public function getId()
    {
      return $this->id;
    }

    public function setTitle($title) {
      $this->title = $title;
    }

    public function getTitle()
    {
      return $this->title;
    }

    public function setContent($content) {
      $this->content = $content;
    }

    public function getContent()
    {
      return $this->content;
    }
    
    public function setCreationDate($creationDate){
        
        $this->creationDate = $creationDate;
    }

    public function getCreationDate()
    {
      return $this->creationDate;
    }


}
