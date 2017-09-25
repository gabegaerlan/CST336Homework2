<!DOCTYPE html>
<html>
    <head>
        <title> Rock Paper Scissors</title>
        <style>
            @import url("styles.css");
        </style>
    </head>
    <div id="main">
    <body>
        <header>ROCK! PAPER! SCISSORS!</header>
        <?php
        include'functions.php';
        play();
        
        ?>
         <form>
            <input type="submit" value="PLAY!"/>
        </form>       

        
    </body>
    </div>
</html>