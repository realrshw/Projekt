<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kommentar</title>
</head>
<body>
    <?php
$user = "Jonathan";
$creator ="Merlin";
$postID = "1";

    echo"
    <form action=\"comment-save.php?user=$user&creator=$creator&post=$postID\">
        <input type=\"text\" placeholder=\"Dein Kommentar\" name=\"comment\">
        <input type=\"submit\" value=\"Speichern\">
    </form>
    ";

    ?>
</body>
</html>