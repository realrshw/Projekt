<?php
//login
    function login(){
        
        $email = $_POST["email"];
        $passwort = $_POST["password"];

        
        $i = 1;
        $j = 100;
        
        while($i < $j){

        $datei_mail = fopen("assets/userdata/$i/email.txt","r+");
        $mail_check = fgets($datei_mail);
        fclose($datei_mail);
        
        $datei_pass = fopen("assets/userdata/$i/passwort.txt","r+");
        $pass_check = fgets($datei_pass);
        fclose($datei_pass);
        
        #Cookie anlegen
        setcookie('userid', '$i', time()+3600000); 

        if($mail_check == $email && $pass_check == $passwort){

            header("location: https://jamie.ml/unterseiten/start.php");
            break;
            
        }else{
            header("location: /fertig");
            $i++;
        }
    }

    }

//registratiom
    function register(){

    if(isset($_POST["username"]) && $_POST["username"] != "" && isset($_POST["email"]) && $_POST["email"] != "" && isset($_POST["password"]) && $_POST["password"] != "" && isset($_POST["vorname"]) && $_POST["vorname"] != "" && isset($_POST["nachname"]) && $_POST["nachname"] != ""){

        
        $i = 1;
        $j = 1000;

        while($i < $j){
            if(!file_exists("assets/userdata/$i")){
                mkdir("/assets/userdata/$i","0700", true);break;
                mkdir("/assets/userdata/$i/benutzerdaten", "0700",true);
                mkdir("/assets/userdata/$i/post", "0700",true);
                mkdir("/assets/userdata/$i/abonnierte", "0700",true);
                mkdir("/assets/userdata/$i/messenger", "0700",true);
            }else{
                $i++;
            }
        }

        $zahl = $i;

            $user = $_POST["username"];
            $email = $_POST["email"];
            $passwort = $_POST["password"];
            $vorname = $_POST["vorname"];
            $nachname = $_POST["nachname"];
        
        $user_id = $zahl;
        

        #Cookie anlegen
        setcookie('userid', '$zahl', time()+3600000);

        $datei_pass = fopen("/assets/userdata/$zahl/benutzerdaten/passwort.txt","w+");
        fwrite($datei_pass,$passwort);
        fclose($datei_pass);
        
        $datei_email = fopen("/assets/userdata/$zahl/benutzerdaten/email.txt","w+");
        fwrite($datei_email,$email);
        fclose($datei_email);

        $datei_vorname = fopen("/assets/userdata/$zahl/benutzerdaten/vorname.txt","w+");
        fwrite($datei_vorname,$vorname);
        fclose($datei_vorname);
        
        $datei_nachname = fopen("/assets/userdata/$zahl/benutzerdaten/nachname.txt","w+");
        fwrite($datei_nachname,$nachname);
        fclose($datei_nachname);

        $datei_user = fopen("/assets/userdata/$zahl/benutzerdaten/user.txt","w+");
        fwrite($datei_user,$user);
        fclose($datei_user);

        $datei_user_id = fopen("/assets/userdata/$zahl/benutzerdaten/user_id.txt","w+");
        fwrite($datei_user_id,$user_id);
        fclose($datei_user_id);

        header("location: https://jamie.ml/unterseiten/start.php");

        }else{
            echo "Ewas hast du vergessen";
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
