<?php

    function login(){
        
        $user = $_REQUEST["username"];
        $passwort = $_REQUEST["password"];

        if(file_exists("userdata/$user.txt")){

            
            $datei = fopen("userdata/$user.txt", "r");
            $search = fgets($datei);
            
            
            if ($search == $passwort){
                header("location: https://google.com");
            }
            else
            {
                "<h1>Passwort leider falsch!</h1>";
            }
            
            
            fclose($datei);
        }else{
            echo "Gibts nicht";
        }

    }

    function register(){
        
        

        $user = $_REQUEST["username"];
        $passwort = $_REQUEST["password"];
        $datei = fopen("userdata/$user.txt","w+");


        fwrite($datei,$passwort);

        fclose($datei);

        header("location: https://google.com");

    }

?>