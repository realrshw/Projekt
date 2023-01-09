<!DOCTYPE html>
<html lang="de">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <title>Document</title>

      <link href="https://fonts.googleapis.com/css2?family=Gowun+Dodum&display=swap" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="assets/css/home.css">
</head>

<body>

<div class="headline">

      <div class="logo">
            <a href="projekt.php"><img src="assets/img/icon/instagramlogo.jpg" width="130" height="50"></a>
      </div>
      <form>
            <input type="Text" name="" value="" size="40" placeholder="Suchen">
      </form>

      <div class="haus">
            <a href="projekt.php"><img src="assets/img/icon/haus.jpg" width="25" height="25"></a>
      </div>

      <div class="teilen">
            <a href=""><img src="assets/img/icon/teilen.jpg" width="25" height="25"></a>
      </div>

      <div class="kompass">
            <a href=""><img src="assets/img/icon/kompass.jpg" width="25" height="25"></a>
      </div>

      <div class="herz">
            <a href=""><img src="assets/img/icon/herz.jpg" width="30" height="30"></a>
      </div>
        

            <?php
            
            include("functions.php");
            echo "<script language=\"javascript\" type=\"text/javascript\" src=\"assets/js/home.js\"></script>";
            for($i=1;$i<100;$i++){

            $ausgabe = ausgeben();


            $post_text = $ausgabe["a"];
            $userID = $ausgabe["b"];
            $postID = $ausgabe["c"];
            $Like_anzahl = $ausgabe["d"];

            echo "
            <div class=\"beitrag\">
                  <div class=\"Text_des_Beitrags\">
                        $post_text
                  </div>
                  
                  <div id=\"\">
                        <div class=\"Like_anzahl\">
                              <span>$Like_anzahl</span>
                        </div>

                        <div id=\"Herz\">
                              <a href=\"like.php?userID=$userID&postID=$postID\">
                                    <img class=\"heart\" id=\"heart$i\" src=\"assets/img/icon/herz.png\" width=\"40\" height=\"40\" onClick=\"heart($i)\">
                              </a>
                        </div>

                        <div class=\"comment\">
                              <img src=\"assets/img/icon/komentar.png\" class=\"comment\" onClick=\"comment($i)\">
                        </div>
                        
                        
                  </div>
            </div>
            ";
            }
            #<a href="comment-save.php?user=$user&comment=$comment&creator=$creator&post=$post"></a>
            ?>
            


      
<!--
      <div class="dreipunkte">
            <a href=""><img src="assets/img/icon/dreipunkte.jpg" width="30" height="30"></a>
      </div>



      <div class="teilenbeitrag">
            <a href=""><img src="assets/img/icon/teilen.jpg" width="30" height="30"></a>
      </div>

      <div class="lesezeichen">
            <a href=""><img src="assets/img/icon/lesezeichen-removebg-preview.png" width="35" height="27"></a>
      </div>


      -->
      </div>

      </div>


</body>
</html>
