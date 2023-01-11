<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload-fertig</title>
</head>
<body>
    <?php
    $post_text = $_GET["text"];


    ?>
</body>
</html>
<?php
//Upload++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//Einen neuen Post erstellen:
    //Wie viele Post hat dieser User bereits hochgeladen:
    $directory = "../assets/data/$userID/post/";

    $userID = $_COOKIE["Cookie_UserID"];
    $post_anzahl = countFolders($directory);
    $postID = $post_anzahl + 1;
    
    function countFolders($directory)
        {
            $files = scandir($directory);
            $count = 0;
            foreach ($files as $file)
            {
            if (is_dir($directory . '/' . $file))
                {
                $count++;
                }
            }
            return $count;
        }
    $postID = $post_anzahl + 1;
//Ordner erstellen
//                                                                      mkdir("./assets/data/$userID/", 0777);
//                                                                      mkdir("./assets/data/$userID/post/", 0777);
    mkdir("../assets/data/$userID/post/$postID/", 0777);
//Text
    $Post = fopen("../assets/data/$userID/post/$postID/PostText.txt","w+");
    fwrite($Post,$post_text);
    fclose($Post);
//Likes
    $Likes = fopen("../assets/data/$userID/post/$postID/Likes.txt","w+");
    fwrite($Likes,"0");
    fclose($Likes);

header("location: start.php");
    ?>