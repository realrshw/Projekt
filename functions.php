<?php

function passwortgut(){

#Passwort Anforderungen
if (empty($passwort)){

    $falsch = true;

    $passwortFalsch = "Bitte Passwort eingeben.";

   } else if (preg_match("/[a-z]/", $passwort)

       && preg_match("/[A-Z]/", $passwort)

       && preg_match("/[0-9]/", $passwort)) {

    $falsch = true;

    $passwortFalsch = "Das Passwort muss Kleinbuchstaben, Großbuchstaben und Zahlen enthalten.";

   } else if (strlen($passwort) <8) {

    $falsch = true;

    $passwortFalsch= "Das Passwort muss mindestens 8 Zeichen lang sein.";

    return($passwortFalsch);

   }
}

#überprüft ob der User vorhanden ist
function uservorhanden ($username){

    if (file_exists("userdater/$username.txt")) {

        $text = "$username: Dieser Nutzername ist vergeben";

    } else {

        $text =  "Nutzername OK";


    }

    return($text);
}

#überprüft ob der User keine flaschen namen enthält
function usernamegut(){
    if(empty(trim($_POST["username"]))){
           $username_err = "Please enter username.";
       } else{
           $username = trim($_POST["username"]);
       }
   }


?>