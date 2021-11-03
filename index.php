<?php 

declare(strict_type=1)

// file exit or not 
if(file_exists("log.txt")){
    //if file exit made variable and store
    $file = "message.txt"; 

    // made new varible which will get content to this file
    $current = file_get_contents($file);

}else{
    // if there is no file make a file
    $myfile = fopen("message.txt","w")
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Guestbook</title>
</head>

<body>

    <form action="index.php" method="POST">

        <input type="text" placeholder="First Name" name="authorName">
        <input type="text" placeholder="Title" name="title">
        <input type="date" name="date">
        <input type="text" placeholder="Content" name="content" maxlength="8" size="100">
        <input type="submit" name="submit">
    </form>

</body>

</html>