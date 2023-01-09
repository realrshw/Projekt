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
 function like($user,$post){

    $data = fopen ("assets/data/$user/post/$post/likes.txt","r+");
    $likes = fgets ($data);
    $likes++;
    rewind($data); 
    fwrite($data,$likes);
    fclose($data);
}

#neuen Kommentar hinzufügen
function comment_hinzu($user,$comment,$creator,$post){

    $data = fopen("assets/data/$creator/post/$post/Kommentare/$user.txt","w+");

    fwrite("$data","$comment");

    fclose($data);

    $datei = fopen("assets/data/$creator/post/$post/comment-user.txt","w+");

    fwrite("$datei","$user.txt");

    fclose("$datei");

}

function ausgeben(){

    $user_gesamt = user_gesamt();   
    $userID = random_custom($user_gesamt);

    $post_anzahl = post_gesamt($userID);
    $postID = random_custom($post_anzahl);
        
    $data = fopen("assets/data/$userID/post/$postID/PostText.txt","r+");
        
    $text = fgets($data);

    $user = user_ID_zu_Name($userID);

    $post_text = "<b>$user</b><p>$text</p>";
        
    fclose($data);

    #Likes

    $like_datei = fopen("assets/data/$userID/post/$postID/likes.txt","r+");
    
    $Like_anzahl = fgets($like_datei);

    fclose($like_datei);
    
    $array["a"] = "$post_text";
    $array["b"] = "$userID";
    $array["c"] = "$postID";
    $array["d"] = "$Like_anzahl";
    return $array;
}

function random_custom($max){
    $zufall = rand(1,$max);
    return($zufall);
}
        
function user_gesamt (){
        
    $c=-2;

    $pfad="assets/data/";
    $verz=opendir ($pfad);
    while ($file=readdir($verz))
    {
        if (filetype($pfad.$file)=="dir")
        {
            $c++;
        }
    }
    closedir($verz);
    return($c);

}
function post_gesamt($user){
        
    $c=0;

    $pfad="assets/data/$user/";
    $verz=opendir ($pfad);
    while ($file=readdir($verz))
    {
        if (filetype($pfad.$file)=="dir")
        {
            $c++;
        }
    }
    closedir($verz);
    return($c);
}

    function user_ID_zu_Name($userID){

        $dateii = fopen("assets/data/$userID/benutzerdaten/username.txt","r");
        $userName = fgets($dateii);
        fclose($dateii);
        return($userName);
    }

?>