<?php
    // Info -> Notice -> Warning -> Error
    $a = null; // 0, "", " ", "0", null, undefine 
    if($a){
        echo 'OK' .rand(0,100);
    }else{
        echo 'XX' .rand(0,100);
    }
?>