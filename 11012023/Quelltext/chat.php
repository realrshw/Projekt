<?php
     if (isset($_GET["chatusername"]))
     {
       $chatuser = $_GET["chatusername"]; // variable die ich vom vorherigen script bekomme
       $chatdir = "../Chatnachrichten/$chatuser.txt"; // verzeichnis wo die chats gespeichert werden

       if ( is_file ($chatdir)) // prüfen ob es einen chat gibt
       {
         $chats = file_get_contents($chatdir); // wenn ja dann anzeigen
         echo nl2br($chats); // chats einzeln je zeile anzeigen lassen
       }
     }
     else
     {
       echo "Bitte einen Chatpartner suchen oder einen bestehenden Chat weitermachen.";
     }  
     include('chatsenden.php'); // eingabeformular anzeigen
?>