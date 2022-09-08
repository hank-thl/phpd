<?php
    $i = 1;
    $p = array(1=>0,0,0,0,0,0);
    var_dump($p);
    
    while($i++<=10000){
        $point = rand(1,9);
        $p[$point>6?$point-3:$point]++;
        
    }

    // for($i = 1;$i<=6 ;$i++){
    //     echo "<br>{$i}點出現{$p[$i]}次";
    // }

    foreach($p as $k => $v){
        echo "<br>{$k}點出現{$v}次";
    }


    ?>
    
