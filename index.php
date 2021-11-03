<?php

require('Post.php');
require('PostLoader.php');

$postLoader = new PostLoader();
$postLoader->addData();


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

            <input type="text" placeholder="First Name" name="authorName">
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