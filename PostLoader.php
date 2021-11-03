<?php
class PostLoader
{
    // function __construct() {}

    private $message = "message.json";
    private $title;
    private $date;
    private $content;
    private $authorName;
    private $data = array();


    public function addData()
    {

        if (isset($_POST["submit"])) {
            if (file_exists($this->message)) {
                $this->storeData();
                array_push($this->data, $this->title, $this->date, $this->authorName, $this->content);
                echo json_encode($this->data);
            } else {
                $createfile = fopen($this->message, 'w');
                header("Refresh:0");
            }
        }
    }

    public function storeData()
    {

        if (isset($_POST["title"])) {
            $this->title = $_POST["title"];
        }
        if (isset($_POST["authorName"])) {
            $this->authorName = $_POST["authorName"];
        }
        if (isset($_POST["content"])) {
            $this->content = $_POST["content"];
        }
    }
}
