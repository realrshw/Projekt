<?php
     $dir = "../Chatnachrichten/"; // verzeichnis wo die aktiven chats drin sind

if (is_dir($dir)) { // pr�fen ob es das verzeichnis �berhaupt gibt
    if ($chatpartner = opendir($dir)) { // einlesen aller vorhandenen chats
        while (($file = readdir($chatpartner)) !== false) { // solange einlesen bis es kein neues verzeichnis gibt
          if(($file==".")or($file=="..")) { } else { // nur eintr�ge auswerten die auch einen namen haben
            $file = str_replace(".txt", "", $file); // den dateinamen ohne .txt zwischenspeichern
            $benutzerdetails = "../Nutzer/$file/$file.txt"; // das nutzerverzeichnis

            if ( is_file ($benutzerdetails)) // gibt es diese datei �berhaupt
               {
		$Data = fopen("$benutzerdetails","r"); // wenn ja dann datei �ffnen
		$text = fgets($Data); // und benutzernamen einlesen

		echo $text . " <a href='chat.php?chatusername=$file' target='chat-iframe'>Chat</a><br>"; // benutzernamen ausgeben
              }
          }
        }
        closedir($chatpartner); // datei wieder schliessen
    }
}
?>