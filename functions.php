<?php

function passwortgut($passwort){

#Passwort Anforderungen
if (empty($passwort)){


    $text = "Bitte Passwort eingeben.";

   } else if (preg_match("/[a-z]/", $passwort)

       && preg_match("/[A-Z]/", $passwort)

       && preg_match("/[0-9]/", $passwort)) {


    $text = "Das Passwort muss Kleinbuchstaben, Großbuchstaben und Zahlen enthalten.";

   } else if (strlen($passwort) <8) {

    $text= "Das Passwort muss mindestens 8 Zeichen lang sein.";

    return($text);

   }
}

#überprüft ob der User vorhanden ist
function uservorhanden ($username){

    if (file_exists("userdater/$username.txt")) {

        $text = "$username: Dieser Nutzername ist leider vergeben.";

    } else {

        $text =  "Dein Nutzername ist noch frei.";

    }

    return($text);
}

#Like hinzufügen
function likehinzufuegen ($user,$post){

    $button = fponit (Bildleer)
        
    if ($button) { oncliked than

        $data = fopen ("likes.txt","r+");
        $likes = fgets ("$data");
        $likes = $likes + 1;
        fwrite("$data,$likes");
        $button = fponit (Bildrot)
    }
    
}

#neuen Kommentar hinzufügen
function comment_hinzu($user,$comment,$creator,$post){

    $data = fopen("assets/data/$creator/$post/kommentare/$user.txt","w");

    fwrite("$data","$comment");

    fclose($data);

}

#überprüft ob der User keine flaschen namen enthält

#nicht sicher ob das functioniert
function usernamegut($username){

    if(empty(trim($_POST["username"]))){
           $username_err = "Please enter username.";
       } else{
           $username = trim($_POST["username"]);
       }
   }

?>