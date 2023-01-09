<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kommentar speichern</title>
</head>
<body>


    <?php
    $user = $_GET['user'];
    $comment = $_GET['comment'];
    $creator = $_GET['creator'];
    $post = $_GET['post'];
    
    echo "<h1>Dein Kommentar wird gespeichert.</h1>";
    include("functions.php");
    comment_hinzu($user,$comment,$creator,$post);
    header("location: projekt.php");
    ?>
</body>
</html>