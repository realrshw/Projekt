<?php
     $user = $_POST ["Nutzername"]; // variablen die ich vom vorherigen script bekomme
     $dir = "../Nutzer/$user/$user.txt"; // pfad zum verzeichnis f�r benutzer die online sind - wenn benutzer online dann steht dort eine txt-datei


	 if ( is_file ($dir)) // gibt es diese datei �berhaupt

		{
		$Data = fopen("$dir","r"); // wenn ja dann datei �ffnen
		$text = fgets($Data); // und benutzernamen einlesen

		echo "Treffer: $text <a href='chat.php?chatusername=$user' target='chat-iframe'>Chat</a><br>
                      <a href='suchensenden.php'> zur&uuml;ck zur Nutzersuche </a>"; // benutzernamen anzeigen und m�glichkeit geben zu chatten

		fclose($Data); // datei wieder schliessen
		}

	 else { // falls es die datei nicht gibt

		   echo "Dieser Nutzername existiert nicht <br>
				 <a href='suchensenden.php'> zur&uuml;ck zur Nutzersuche </a>"; // fehlermeldung anzeigen und link anzeigen zur�ck zur suche
		   
		 
	      } 
?>
