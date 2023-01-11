<?php
//login
    function login(){
        
        $email = $_POST["email"];
        $password = $_POST["password"];

        
        $i = 1;
        $j = 100;
        
        while($i < $j){

        $datei_mail = fopen("../assets/userdata/$i/email.txt","r+");
        $mail_check = fgets($datei_mail);
        fclose($datei_mail);
        
        $datei_pass = fopen("../assets/userdata/$i/passwort.txt","r+");
        $pass_check = fgets($datei_pass);
        fclose($datei_pass);

        
        #Cookie anlegen
        setcookie('userid', '$i', time()+3600000); 

        if($mail_check == $email && $pass_check == $password){

            header("location: unterseiten/start.php");break;
            
        }else{
            // header("location: /fertig");
            $i++;
        }
        if($mail_check != $email || $pass_check != $password){
            // header("location: ../unterseiten");
            // echo "hallo das war falsch";
        }
    }

    }

//registratiom
    function register(){

   
    $sicher = $_POST["username"];

if(
    $sicher != "Hurensohn"     || $sicher != "Neger"         ||$sicher != "Wichser"      || $sicher != "Nigger"		||$sicher != "Spast" 	   || $sicher != "Nutte"     || $sicher != "Penis"      || $sicher != "Arschloch" 
    || $sicher != "Arsch" 	   || $sicher != "Hoden"         || $sicher != "Hodenkobolt" || $sicher != "Schwanz" 	|| $sicher != "Schwul" 	   || $sicher != "Nuttensohn"|| $sicher != "Fotze"      || $sicher != "Jude"
    || $sicher != "Hitler"     || $sicher != "LGBTQ"         || $sicher != "Huhrensohn"  || $sicher != "Pimmelkopf" || $sicher != "kanacke"    || $sicher != "Bastard"   || $sicher != "Hure"       || $sicher != "schwuchtel"
    || $sicher != "H0nd"       || $sicher != "Nuttentochter" || $sicher != "Hurentochter"|| $sicher != "Nerd" 		|| $sicher != "Pisser" 	   || $sicher != "Ficke"     || $sicher != "Trottel"    || $sicher != "fick dich"
    || $sicher != "Vollidiot"  || $sicher != "Wixxer"        || $sicher != "Dulli"       || $sicher != "Misststück" || $sicher != "Penner"	   || $sicher != "Schlange"  || $sicher != "Hund"       || $sicher != "Nazi"
    || $sicher != "cook"       || $sicher != "fettsack"      || $sicher != "Schlampe"    || $sicher != "HS"			|| $sicher != "Hässlich"   || $sicher != "gay"       || $sicher != "knecht"     || $sicher != "sklave"
    || $sicher != "ficken"     || $sicher != "scheiß"        || $sicher != "opfer"       || $sicher != "Abfall"		|| $sicher != "Hosenknecht"|| $sicher != "Idiot"     || $sicher != "depp"       || $sicher != "Heil"
    || $sicher != "rechte hand"|| $sicher != "hatzer"        || $sicher != "pussy"       || $sicher != "ALkohol"	|| $sicher != "bastard"	   || $sicher != "Sau"       || $sicher != "Arschficker"|| $sicher != "miststück"
    || $sicher != "Hundesohn"  || $sicher != "Nerds"		 || $sicher != "schwarzer"   || $sicher != "Yarak"      || $sicher != "Tusse"      || $sicher != "tussi"     || $sicher != "Transe"     || $sicher != "Streber"
    || $sicher != "Schnepfe"
){

        
        $i = 1;
        $j = 100;

        while($i < $j){
            if(!file_exists("../assets/data/$i")){
                mkdir("../assets/data/$i",0777,true);
                mkdir("../assets/data/$i/benutzerdaten",0777,true);
                mkdir("../assets/data/$i/POST",0777,true);break;
            }else{
                $i++;
            }
        }

        $zahl = $i;

            $user = $_POST["username"];
            $email = $_POST["email"];
            $passowrd = $_POST["password"];
            $vorname = $_POST["vorname"];
            $nachname = $_POST["nachname"];
        
        $user_id = $zahl;

        

        $datei_pass = fopen("../assets/data/$zahl/benutzerdaten/passwort.txt","w+");
        fwrite($datei_pass,$passowrd);
        fclose($datei_pass);
        
        $datei_email = fopen("../assets/data/$zahl/benutzerdaten/email.txt","w+");
        fwrite($datei_email,$email);
        fclose($datei_email);

        $datei_vorname = fopen("../assets/data/$zahl/benutzerdaten/vorname.txt","w+");
        fwrite($datei_vorname,$vorname);
        fclose($datei_vorname);
        
        $datei_nachname = fopen("../assets/data/$zahl/benutzerdaten/nachname.txt","w+");
        fwrite($datei_nachname,$nachname);
        fclose($datei_nachname);

        $datei_user = fopen("../assets/data/$zahl/benutzerdaten/user.txt","w+");
        fwrite($datei_user,$user);
        fclose($datei_user);

        $datei_user_id = fopen("../assets/data/$zahl/benutzerdaten/user_id.txt","w+");
        fwrite($datei_user_id,$user_id);
        fclose($datei_user_id);

        // header("location: /home");

    }else{
        echo "du darfst keine bösen wörter benutzen!";
    }
    }

    function cookielesen(){
        #Kontrollieren ob User Angemeldet ist
        $cookiewert = $_COOKIE['userid']; // Inhalt des Cookies in anderer Variable speichern
        if(is_numeric($cookiewert)){
            header('Location: http://jamie.ml/unterseiten/start.php');
        }else{
            header('Location: http://jamie.ml/unterseiten/login.php');
        }
}

//Startseite
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

    $data = fopen ("../assets/data/$user/post/$post/likes.txt","r+");
    $likes = fgets ($data);
    $likes++;
    rewind($data); 
    fwrite($data,$likes);
    fclose($data);
}

#neuen Kommentar hinzufügen
function comment_hinzu($user,$comment,$creator,$post){

    $data = fopen("../assets/data/$creator/post/$post/Kommentare/$user.txt","w+");

    fwrite("$data","$comment");

    fclose($data);

    $datei = fopen("../assets/data/$creator/post/$post/comment-user.txt","w+");

    fwrite("$datei","$user.txt");

    fclose("$datei");

}

function ausgeben(){

    $user_gesamt = user_gesamt();   
    $userID = random_custom($user_gesamt);

    $post_anzahl = post_gesamt($userID);
    $postID = random_custom($post_anzahl);
        
    $data = fopen("../assets/data/$userID/post/$postID/PostText.txt","r+");
        
    $text = fgets($data);

    $user = user_ID_zu_Name($userID);

    $post_text = "<b>$user</b><p>$text</p>";
        
    fclose($data);

    #Likes

    $like_datei = fopen("../assets/data/$userID/post/$postID/likes.txt","r+");
    
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

    $pfad="../assets/data/";
    $verz = opendir($pfad);
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

    $pfad="../assets/data/$user/";
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

        $dateii = fopen("../assets/data/$userID/benutzerdaten/username.txt","r");
        $userName = fgets($dateii);
        fclose($dateii);
        return($userName);
    }

?>
?>
