<?php

require('Post.php');
require('PostLoader.php');

$postLoader = new PostLoader();
$postLoader->addData();

$posts = new PostLoader();
    $page = 1;
    $count = 2;
    if(isset($_POST['number_of_post']) && !empty($_POST['number_of_post'])) {
        $count = $_POST['number_of_post'];
    }
    if(isset($_GET['page'] ) && !empty($_GET['page'])) {
        $page = $_GET['page'];
    }

    $page_posts = $posts->getData($page, $count);

        header("Refresh:0");
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Guestbook</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="form">
        <form action="index.php" method="POST">

            <input type="text" placeholder="First Name" name="author">
            <input type="text" placeholder="Title" name="title">
            <textarea name="content" cols="100%" rows="10" charswidth="23"></textarea>
            <input type="submit" name="submit">
        </form>
    </div>

    <div class="guestbook">
        <?php
        ?>
    </div>

</body>

</html>