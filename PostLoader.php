<?php
class PostLoader
{
    // function __construct() {}

    // private $message = "message.json";
    // private $title;
    private $date;
    private $next = false;
    private $prev = false;
    // private $content;
    // private $authorName;
    // private $data = array();

    public function __construct()
    {
        $file_content = file_get_contents("data.json");
        $this->data = json_decode($file_content);
    }


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

    // public function storeData()
    // {

    //     if (isset($_POST["title"])) {
    //         $this->title = $_POST["title"];
    //     }
    //     if (isset($_POST["authorName"])) {
    //         $this->authorName = $_POST["authorName"];
    //     }
    //     if (isset($_POST["content"])) {
    //         $this->content = $_POST["content"];
    //     }
    // }

    public function getData($p, $n)
    {
        $all_data = array_reverse($this->data);
        $count = count((array) $all_data);
        $filtered_data = [];
        if($count > (($p -1) * $n)) {
            foreach ($all_data as $i => $data) {
                if($i >= (($p-1) * $n) && $i < ($p*$n)) {
                    $filtered_data[] = $data;
                }
            }
        }

        else $filtered_data = $all_data;

        if($p > 1) {
            $this->prev = true;
        }

        if($count > ($p * $n)) {
            $this->next = true;
        }

        return $filtered_data;
    }

    public function getAllData() {
        return$this->data;
    }

    /**
     * @return bool
     */
    public function isNext(): bool
    {
        return $this->next;
    }

    /**
     * @return bool
     */
    public function isPrev(): bool
    {
        return $this->prev;
    }
}
