<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8" http-equiv="refresh" content="">
    <title>Instagram</title>
    <link rel="stylesheet" href="../assets/css/login.css">
</head>
<body>

<?php

    include("/functions.php");

    if(isset($_POST["login"])){
        login();
    }elseif(isset($_POST["register"])){
        register();
    }


?>
    
    <div class="container">
        
        <div class="box box1">
            <div id="weg1" class="input input1">
                <div>
                    <h1>Login</h1>
                    <form action="" method="POST">
                        <input placeholder="E-Mail" type="email" name="email" id="" required><br>
                        <input placeholder="Passwort" type="password" name="password" id="" required><br>
                        <input type="submit" name="login" value="Einloggen">
                    </form>
                    <p onclick="register()">Du hast noch keinen Account?</p>
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
                    <input placeholder="Vorname" type="text" name="vorname" id="" required><br>
                    <input placeholder="Nachname" type="text" name="nachname" id="" required><br>
                    <input placeholder="Benutzername" type="text" name="username" id="" required><br>
                    <input placeholder="E-Mail" type="email" name="email" id="" required><br>
                    <input placeholder="Passwort" type="password" name="password" id="" required><br>
                    <input type="submit" name="register" value="Registrieren">
                </form>
                <p onclick="register()">Hast du schon einen Account?</p>
            </div>
            </div>
            <div id="weg2" class="image2">
                <img src="../assets/img/key-g77bf31366_1920.jpg" alt="">
            </div>
        </div>

    </div>

    <script src="../assets/js/start.js"></script>
    
</body>
</html>