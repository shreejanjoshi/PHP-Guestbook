<?php

class Post{

    private $title;
    private $date;
    private $content;
    private $authorName;

    function __construct($title, $date, $content, $authorName)
    {
        $this->title = $title;
        $this->date = $date;
        $this->content = $content;
        $this->authorName = $authorName;
    }

    public function title(){
        return $this->title;
    }

    public function date(){
        return $this->date;
    }

    public function content(){
        return $this->content;
    }

    public function authorName(){
        return $this->authorName;
    }

}