<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Like</title>
</head>
<body>
    <?php
    $user = $_GET['userID'];
    $post = $_GET['postID'];;
    echo "<h1>Dein Like wurde gezählt.</h1>";
    include("functions.php");
    like($user,$post);
    header("location: projekt.php");
    ?>
</body>
</html>