<?php
     if (isset($_GET["chatusername"]))
     {
       $chatuser = $_GET["chatusername"]; // variable die ich vom vorherigen script bekomme
?>
<form action="chatspeichern.php?chatusername=<?php echo $chatuser; ?>" method="post">
Chatnachricht: <input type="text" name="chattext" value="">
<button type="submit">Senden</button>
</form>
<?php
     }
     else
     {
       // eigentlich fehlermeldung anzeigen. brauch ich hier nicht weil das schon in chat.php steht
     }
?>