<!DOCTYPE html>
<html lang="de">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <title>Insta | Home</title>

      <link href="https://fonts.googleapis.com/css2?family=Gowun+Dodum&display=swap" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="../assets/css/start.css">
</head>

<body>

<div class="headline">

      <div class="logo">
            <a href="projekt.php"><img src="../assets/img/icon/instagramlogo.jpg" width="130" height="50"></a>
      </div>

      <div class="haus">
            <a href="start.php"><img src="../assets/img/icon/haus.jpg" width="25" height="25"></a>
      </div>

      <div class="teilen">
            <a href="upload.php"><img src="../assets/img/icon/upload.png" width="25" height="25"></a>
      </div>


        

            <?php

                  function minus_eins(){
                        
                  }

                  function ausgeben(){

                        $user_gesamt = user_gesamt();   
                        $userID = random_custom($user_gesamt);
                  
                        $post_anzahl = post_gesamt($userID);
                        $postID = random_custom($post_anzahl);
                        
                        if (file_exists("../assets/data/$userID/post/$postID/PostText.txt")) {
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

                          } else {
                              $postID = $postID-1;
                              if (file_exists("../assets/data/$userID/post/$postID/PostText.txt")) {
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
      
                                } else {
                                    $postID = $postID-1;
                                    if (file_exists("../assets/data/$userID/post/$postID/PostText.txt")) {
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
            
                                      } else {
                                          $postID = $postID-1;
                                          if (file_exists("../assets/data/$userID/post/$postID/PostText.txt")) {
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
                  
                                            } else {
                  
                                            }
                                      }
                                }
                          }

                        
                  }
                  
                  function random_custom($max){
                        $zufall = rand(1,$max);
                        return($zufall);
                  }
                        
                  
                  
                  function user_ID_zu_Name($userID){
                  
                        $dateii = fopen("../assets/data/$userID/benutzerdaten/username.txt","r");
                        $userName = fgets($dateii);
                        fclose($dateii);
                        return($userName);
                  }
  


            include("../functions.php");


            echo "<script language=\"javascript\" type=\"text/javascript\" src=\"../assets/js/home.js\"></script>";

            for($i=1;$i<500;$i++){
            

            $ausgabe = ausgeben();


            $post_text = $ausgabe["a"];
            $userID = $ausgabe["b"];
            $postID = $ausgabe["c"];
            $Like_anzahl = $ausgabe["d"];

            echo "
            <div class=\"beitrag\">
                  <div class=\"Text_des_Beitrags\">
                        $post_text
                  </div>
                  
                  <div id=\"\">
                        <div class=\"Like_anzahl\">
                              <span>$Like_anzahl</span>
                        </div>

                        <div id=\"Herz\">
                              <a href=\"like.php?userID=$userID&postID=$postID\">
                                    <img class=\"heart\" id=\"heart$i\" src=\"../assets/img/icon/herz.png\" width=\"40\" height=\"40\" onClick=\"heart($i)\">
                              </a>
                        </div>


                        
                        
                  </div>
            </div>
            ";

            
            }
            #<a href="comment-save.php?user=$user&comment=$comment&creator=$creator&post=$post"></a>
            ?>
            


      
<!--
      <div class="dreipunkte">
            <a href=""><img src="assets/img/icon/dreipunkte.jpg" width="30" height="30"></a>
      </div>



      <div class="teilenbeitrag">
            <a href=""><img src="assets/img/icon/teilen.jpg" width="30" height="30"></a>
      </div>

      <div class="lesezeichen">
            <a href=""><img src="assets/img/icon/lesezeichen-removebg-preview.png" width="35" height="27"></a>
      </div>


      -->
      </div>

      </div>


</body>
</html>