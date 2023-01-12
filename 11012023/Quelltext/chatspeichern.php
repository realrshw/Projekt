<?php
     $chatuser = $_GET["chatusername"]; // variable die ich vom vorherigen script bekomme
     $chateingabe = $_POST["chattext"]; // variable die über das formular kommt
     $username = "Luca"; // muss mit dem benutzernamen des angemeldeten benutzers ersetzt werden
     $datum = date("d.m.Y"); // aktuelles datum
     $uhrzeit = date("H:i:s"); // aktuellle uhrzeit mit sekunden
     $chatdir = "../Chatnachrichten/$chatuser.txt"; // chatdatei wo die chats pro benutzer gespeichert werden

     $chatfile = fopen("$chatdir","a+"); // öffnen des chatfiles und immer ganz am ende speichern
     $schreibzeile = $username . " (" . $datum . " " . $uhrzeit . ") " . $chateingabe . PHP_EOL; // festlegen was gespeichert werden soll

     fwrite($chatfile, $schreibzeile); // schreiben in die datei
     fclose($chatfile); // schliessen der chatdatei

     $wohin = "Location: chat.php?chatusername=$chatuser"; // ziel angeben wo es nach dem speichern hin gehen soll
     header($wohin); // zurück zur chat.php datei
?>