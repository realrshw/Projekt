<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" http-equiv="refresh" content="">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<?php

    include("../functions.php");

    
    if(isset($_POST["register"]) &&
        isset($_POST["username"]) && $_POST["username"] != "" && 
        isset($_POST["email"]) && $_POST["email"] != "" && 
        isset($_POST["password"]) && $_POST["password"] != "" && 
        isset($_POST["vorname"]) && $_POST["vorname"] != "" && 
        isset($_POST["nachname"]) && $_POST["nachname"] != ""
    ){
        register();
        echo "register";
    }
    if(isset($_POST["login"])){
        login();
        echo "login";
    }else{
        // echo "etwas hast du falsch gemacht!?";
    }

?>
    
    <div class="container">
        
        <div class="box box1">
            <div id="weg1" class="input input1">
                <div>
                    <h1>Login</h1>
                    <form action="" method="POST">
                        <input placeholder="E-Mail" type="email" name="email" id=""><br>
                        <input placeholder="Passwort" type="password" name="password" id=""><br>
                        <input type="submit" name="login" value="Einloggen">
                    </form>
                    <p onclick="register()">Du hast noch keinen Account</p>
                </div>
            </div>
            <div id="hin1" class="image1">
                <img src="../assets/img/key-g696c2c212_1920.jpg" alt="">
            </div>
        </div>
        

        <div class="box box2">
            <div id="hin2" class="input input2">
                <div>
                <h1>Registrierung</h1>
                <form action="" method="POST">
                    <input placeholder="Vorname" type="text" name="vorname" id=""><br>
                    <input placeholder="Nachname" type="text" name="nachname" id=""><br>
                    <input placeholder="Benutzername" type="text" name="username" id=""><br>
                    <input placeholder="E-Mail" type="email" name="email" id=""><br>
                    <input placeholder="Passwort" type="password" name="password" id=""><br>
                    <input type="submit" name="register" value="Registrieren">
                </form>
                <p onclick="register()">Du hast noch keinen Account</p>
            </div>
            </div>
            <div id="weg2" class="image2">
                <img src="../assets/img/key-g77bf31366_1920.jpg" alt="">
            </div>
        </div>

    </div>

    <script src="../assets/script/script.js"></script>
    
</body>
</html>