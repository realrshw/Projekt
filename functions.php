<?php

function passwort_sicher($passwort){

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
function user_exist($username){

    if (file_exists("userdater/$username.txt")) {

        $text = "$username: Dieser Nutzername ist leider vergeben.";

    } else {

        $text =  "Dein Nutzername ist noch frei.";

    }

    return($text);
}

#Like hinzufügen
function like_hinzu($user,$post){

    $button = fponit (Bildleer)
        
    if ($button) { oncliked than

        $data = fopen ("likes.txt","r+");
        $likes = fgets ("$data");
        $likes = $likes + 1;
        fwrite("$data","$likes");
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
function username_gut($username){

    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
}

function ausgeben(){

    for ($i=0;$i<10;$i++){
        
        $datei_fahrt = post_anzeigen();
        
        $data = fopen ("$datei_fahrt","r");
        
        $text = fgets($data);
        
        fclose($data);
        
        echo "$text";
        
    }
        
}
        
function post_anzeigen (){
        
    $user_gesamt = user_gesamt();
        
    $zufall = rand(1,$user_gesamt);
        
    $post_anzahl = post_gesamt($zufall);
        
    $zufall2 = rand(1,$post_gesamt);
        
    return("assets/data/$zufall/$zufall2");
        
}
        
function user_gesamt (){
        
    $useranzahl = 1;
        for($j=0;$j<$useranzahl;$j++){ 
        
            $filename = "/assets/data/$j";
        
            if (file_exists($filename)) {
                $useranzahl=$useranzahl+1;
            } 
            else { 
                return ($j-1); 
            }
        }
}
function psot_gesamt ($user){
        
    $useranzahl = 1;
    for($j=0;$j<$useranzahl;$j++){ 
        
        $filename = "/assets/data/$user/post/$j";
        
        if (file_exists($filename)) {  
                $useranzahl=$useranzahl+1;
        } 
        else { 
            return ($j-1); 
        }
    }
}

?>