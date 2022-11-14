<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" http-equiv="refresh" content="">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php

    include("functions.php");

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
                        <input placeholder="Benutzername" type="text" name="username" id=""><br>
                        <input placeholder="Passwort" type="text" name="password" id=""><br>
                        <input type="submit" name="login" value="Einloggen">
                    </form>
                    <p onclick="register()">Du hast noch keinen Account</p>
                </div>
            </div>
            <div id="hin1" class="image1">
                <img src="key-g696c2c212_1920.jpg" alt="">
            </div>
        </div>
        

        <div class="box box2">
            <div id="hin2" class="input input2">
                <div>
                <h1>Registrierung</h1>
                <form action="" method="POST">
                    <input placeholder="Benutzername" type="text" name="username" id=""><br>
                    <input placeholder="Passwort" type="text" name="password" id=""><br>
                    <input type="submit" name="register" value="Einloggen">
                </form>
                <p onclick="register()">Du hast noch keinen Account</p>
            </div>
            </div>
            <div id="weg2" class="image2">
                <img src="key-g77bf31366_1920.jpg" alt="">
            </div>
        </div>

    </div>

    <script src="script.js"></script>
    
</body>
</html>