<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insta | Like</title>
</head>
<body>
    <?php
    $user = $_GET['userID'];
    $post = $_GET['postID'];;
    echo "<h1>Dein Like wurde gezählt.</h1>";

    include("../functions.php");

    #Like hinzufügen
    function like($user,$post){

        $data = fopen ("../assets/data/$user/post/$post/likes.txt","r+");
        $likes = fgets ($data);
        $likes++;
        rewind($data); 
        fwrite($data,$likes);
        fclose($data);
    }


    like($user,$post);
    header("location: start.php");
    ?>
</body>
</html>