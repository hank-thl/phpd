<?php
    $poker = range(0,51);
    shuffle($poker);

    foreach($poker as $v){
         echo "{$v} <br>";
    }


    $players = [[],[],[],[]];
    var_dump($players);
    echo "<hr>";
    foreach($poker as $k => $v){
        $players[$k%4][(int)($k/4)] = $v;
   }
   foreach($players[0]as $card){
    echo"{$card}<br>";
   }

?>
<table border="1" width="100%">
    
        <?php
        foreach($players as $player){
            echo "<tr>";
            foreach($player as $card){
                echo"<td>{$card}</td>";
            }
            echo "</tr>";
        }
            
        ?>

        
    
</table>