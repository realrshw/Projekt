<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Instagrum</title>
    </head>
    
    <body>

        <?php
        #Kontrollieren ob User Angemeldet ist
        setcookie('userid', '1', time()+3600);
        $cookiewert = $_COOKIE['userid']; // Inhalt des Cookies in anderer Variable speichern
        if(is_numeric($cookiewert)){
            header('Location: http://www.example.com/');
        }else{
            header('Location: http://www.google.com/');
        }
        ?>
            
    </body>
</html>