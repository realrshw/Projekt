<?php
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
#Ordner
   function ordner(){
    $ozahl = 1
    while ($ozahl < 2){
        $ozahlcheck = 1;
        if (file_exists(assets/data/$ozahlcheck)) {
            $ozahlcheck++;
        } else {
            $ozahl = 3;
            
            
        }
    }
   }
function cookielesen(){
            #Kontrollieren ob User Angemeldet ist
            $cookiewert = $_COOKIE['userid']; // Inhalt des Cookies in anderer Variable speichern
            if(is_numeric($cookiewert)){
               
            }else{
                header('Location: http://www.google.com/');
            }
}
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


        if($mail_check == $email && $pass_check == $passwort){

            header("location: https://google.com");
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
                mkdir("assets/userdata/$i","0700", true);break;
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


        $datei_pass = fopen("assets/userdata/$zahl/passwort.txt","w+");
        fwrite($datei_pass,$passwort);
        fclose($datei_pass);

        $datei_email = fopen("assets/userdata/$zahl/email.txt","w+");
        fwrite($datei_email,$email);
        fclose($datei_email);

        $datei_vorname = fopen("assets/userdata/$zahl/vorname.txt","w+");
        fwrite($datei_vorname,$vorname);
        fclose($datei_vorname);

        $datei_nachname = fopen("assets/userdata/$zahl/nachname.txt","w+");
        fwrite($datei_nachname,$nachname);
        fclose($datei_nachname);

        $datei_user = fopen("assets/userdata/$zahl/user.txt","w+");
        fwrite($datei_user,$user);
        fclose($datei_user);

        $datei_user_id = fopen("assets/userdata/$zahl/user_id.txt","w+");
        fwrite($datei_user_id,$user_id);
        fclose($datei_user_id);

        header("location: /home");

        }else{
            echo "Ewas hast du vergessen";
        }
    }

?>
