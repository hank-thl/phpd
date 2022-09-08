<?php
    $i = 1;
    $one=$two=$three=$four=$five=$six=0;
    
    while($i++<=100){
        $point = rand(1,6);
        switch($point){
            case 1: $one++; break;
            case 2: $two++; break;
            case 3: $three++; break;
            case 4: $four++; break;
            case 5: $five++; break;
            case 6: $six++; break;
        }
        
    }
    echo "{$one},{$two},{$three},{$four},{$five},{$six}";
