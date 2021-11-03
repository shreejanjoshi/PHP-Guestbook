<?php

class Post
{

    // private $title;
    // private $content;
    // private $authorName;
    // private $date;

    private $file = 'data.json';

    function __construct($title, $content, $authorName)
    {
        // $this->title = $title;
        // $this->date = $date('d-m-y');
        // $this->content = $content;
        // $this->authorName = $authorName;

        if (file_exists($this->file)) {
            $this->message($title, $content, $authorName);
        } else {
            $myfile = fopen($this->file, 'w');
            header("Refresh:0");
        }
    }

    // function addFile(){

    // }

    // public function message()
    // {
    //     $data = [
    //         'title' =>  $this->title,
    //         'content' => $this->content,
    //         'authorName' => $this->authorName,
    //         'date' => $this->date
    //     ]
    // }

    // file exit or not 
    function message($title, $content, $authorName)
    {
        $data = json_decode(file_get_contents($this->file));
        $data[] = array(
            'title' => $title,
            'content' => $content,
            'author' => $authorName,
            'date' => date('d-m-y')
        );
        $json = json_encode($data);
        file_put_contents($this->file, $json);

        // if (file_exists("message.txt")) {
        //     //if file exit made variable and store
        //     $file = "message.txt";

        //     // made new varible which will get content to this file
        //     $current = file_get_contents($file);
        // } 

        // $json = json_encode($current);

        // else {
        // ___________________________________________________________________
        // if there is no file make a file
        // fopen(filename,mode,include_path,context)
        // w => write only
        // ___________________________________________________________________
        // $myfile = fopen("message.txt", "w");
        // user will land on this page if there is no file it will create new file. After it will create new file it will refresh the page
        //:0 means delay unitl the delay happen
        // header("Refresh:0");
        // _________________________________________________________________________
        // }
    }

    // public function title(){
    //     return $this->title;
    // }

    // public function date(){
    //     return $this->date;
    // }

    // public function content(){
    //     return $this->content;
    // }

    // public function authorName(){
    //     return $this->authorName;
    // }

}
