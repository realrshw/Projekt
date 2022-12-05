<html>
    <head>
          <link href="https://fonts.googleapis.com/css2?family=Gowun+Dodum&display=swap" rel="stylesheet">

        <title>Instagram</title>


        <style>

      .body {
            text-align: center;
      }



       .headline  {
       width: 100%;
       height: 50px;
       border-width: 4px;
       border-style: solid;
       border-color: white;
       position: absolute;
       background-color: white;
       top: 0px;
       left: 0px;
        }

       .beitrag  {
       width: 900px;
       height: 1000px;
       border-width: 4px;
       border-style: solid;
       border-color: white;
       position: absolute;
       background-color: white;
       top: 100px;
       left: 16%;
        }

       .logo
        {
         top:;
         left:15%;
         position: absolute;
        }

        form
        {
         top:15;
         left:43%;
         position: absolute;
        }

        .haus
        {
        top:12;
        left:78%;
        position: absolute;
        }

        .teilen
        {
        top:12;
        left:80%;
        position: absolute;
        }

        .kompass
        {
        top:12;
        left:82%;
        position: absolute;
        }

        .herz
        {
        top:9;
        left:84%;
        position: absolute;
        }

        .beitrag1
        {
        top:45;
        left:0px;
        position: absolute;
        }

        .herzbeitrag
        {
        top: 950;
        left:1px;
        position: absolute;
        }

        .dreipunkte
         {
        top: 5;
        left:860px;
        position: absolute;
        }

        .komentar
         {
        top: 957;
        left:46px;
        position: absolute;
        }

        .teilenbeitrag
         {
        top: 954;
        left:83px;
        position: absolute;
        }

        .lesezeichen
         {
        top: 954;
        left:860px;
        position: absolute;
        }


        </style


    </head>

           <body bgcolor="#EFEFEF">

<div class="headline">

<div class="logo">
      <a href="projekt.php"><img src="instagramlogo.jpg" width="130" height="50"></a>
</div>
      <form>
            <input type="Text" name="" value="" size="40" placeholder="Suchen">
      </form>

      <div class="haus">
            <a href="projekt.php"><img src="haus.jpg" width="25" height="25""></a>
      </div>

      <div class="teilen">
            <a href=""><img src="teilen.jpg" width="25" height="25"</a>
      </div>

      <div class="kompass">
            <a href=""><img src="kompass.jpg" width="25" height="25"></a>
      </div>

      <div class="herz">
            <a href=""><img src="herz.jpg" width="30" height="30"></a>
      </div>
        <div class="beitrag">

            Nassenstein.Insta

      <div class="beitrag1">
            <img src="beitrag1.png" width="900" height="900" border="0" alt="">
      </div>

      <div class="herzbeitrag">
            <img id="heart" src="herz.jpg" width="40" height="40" onClick="heart()">
      </div>

      <div class="dreipunkte">
            <a href=""><img src="dreipunkte.jpg" width="30" height="30"></a>
      </div>

      <div class="komentar">
            <a href=""><img src="komentar.png" width="25" height="25"></a>
      </div>

      <div class="teilenbeitrag">
            <a href=""><img src="teilen.jpg" width="30" height="30"></a>
      </div>

      <div class="lesezeichen">
            <a href=""><img src="lesezeichen-removebg-preview.png" width="35" height="27"></a>
      </div>



      </div>

      </div>

       <script>
           var herz = document.getElementById("heart");

        function heart(){
            document.getElementById("heart").src="herzrot.jpg";
            document.getElementById("heart").style.width="40px";
            document.getElementById("heart").style.height="40px";
        }

    </script>
</body>
</html>