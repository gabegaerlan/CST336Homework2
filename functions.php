<!DOCTYPE html>
<html>
    <body>
        <div id="main">
        <?php
        
        function displayUserHand($user)
        {
           
            //USER
            echo"USER: ";
            $user = array(Rock,Paper,Scissors);
            for($i =0;$i<2;$i++)
            {
                $user = rand(0,2);
            }
            switch($user)
            {
                case 0: $userHand = "rock";
                    echo"ROCK!";
                    break;
                case 1: $userHand = "paper";
                    echo"PAPER!";
                    break;
                case 2: $userHand = "scissor";
                    echo"SCISSORS!";
                    break;
            }
           echo"<img src='/img/$userHand.jpg' alt='$userHand' title='$userHand' width='150' />";
        }
        
        function displayCpuHand($cpu)
        {
            
            //CPU
            echo"CPU: ";
            $cpu = array(Rock,Paper,Scissors);
            for($i =0;$i<2;$i++)
            {
                $cpu = rand(0,2);
            }
            switch($cpu)
            {
                case 0: $cpuHand = "rock";
                    echo"ROCK!";
                    break;
                case 1: $cpuHand = "paper";
                    echo"PAPER!";
                    break;
                case 2: $cpuHand = "scissor";
                    echo"SCISSORS!";
                    break;
            }
            
           echo"<img src='/img/$cpuHand.jpg' alt='$cpuHand' title='$cpuHand' width='150' />";
        }
        
        
        
        function displayWin($user, $cpu)
        {
            echo"<div id='points'>";
            
            
            echo"</div>";
        }
        echo"<div id='play'>";
        function play()
        {
            displayUserHand($user);
            displayCpuHand($cpu);
            displayWin($user, $cpu);
        }
        echo"</div>";
    
        ?>
        </div>
    </body>
</html>