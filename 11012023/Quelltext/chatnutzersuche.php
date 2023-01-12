<?php
     $user = $_POST ["Nutzername"]; // variablen die ich vom vorherigen script bekomme
     $dir = "../Nutzer/$user/$user.txt"; // pfad zum verzeichnis für benutzer die online sind - wenn benutzer online dann steht dort eine txt-datei


	 if ( is_file ($dir)) // gibt es diese datei überhaupt

		{
		$Data = fopen("$dir","r"); // wenn ja dann datei öffnen
		$text = fgets($Data); // und benutzernamen einlesen

		echo "Treffer: $text <a href='chat.php?chatusername=$user' target='chat-iframe'>Chat</a><br>
                      <a href='suchensenden.php'> zur&uuml;ck zur Nutzersuche </a>"; // benutzernamen anzeigen und möglichkeit geben zu chatten

		fclose($Data); // datei wieder schliessen
		}

	 else { // falls es die datei nicht gibt

		   echo "Dieser Nutzername existiert nicht <br>
				 <a href='suchensenden.php'> zur&uuml;ck zur Nutzersuche </a>"; // fehlermeldung anzeigen und link anzeigen zurück zur suche
		   
		 
	      } 
?>
