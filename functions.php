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
?>
