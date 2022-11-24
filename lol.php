<?php

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

