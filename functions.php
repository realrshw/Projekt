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

   }
}


function uservorhanden ($username){

    if (file_exists("userdater/$username.txt")) {

        echo "$username Dieser Nutzername ist vergeben";

    } else {

        echo "  ";

    }
}

function usernamegut(){
    if(empty(trim($_POST["username"]))){
           $username_err = "Please enter username.";
       } else{
           $username = trim($_POST["username"]);
       }
   }


?>