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
        $suits = ["&spades;","&hearts;","&diams;","&clubs;"];
        $value = ['A',2,3,4,5,6,7,8,9,10,'J','Q','K'];
        foreach($players as $player){
            echo "<tr>";
            foreach($player as $card){

                echo"<td>{$suits[(int)($card/13)]}{$value[$card%13]}</td>";
            }
            echo "</tr>";
        }
            
        ?>

        
    
</table>

