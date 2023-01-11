<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Insta</title>
    </head>
    
    <body>

        <?php
        include "functions.php";
        
        cookielesen();


        #Kann die functions.php nicht öffnen.
        function cookielesen(){
            #Kontrollieren ob User Angemeldet ist
            $cookiewert = $_COOKIE['userid']; // Inhalt des Cookies in anderer Variable speichern
            if(is_numeric($cookiewert)){
                header('Location: unterseiten/start.php');
            }else{
                header('Location: unterseiten/login.php');
            }
        }
        ?>
            
    </body>
</html>
