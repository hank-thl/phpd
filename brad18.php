<?php
    $a = '10';
    switch($a){
        case 1:
            echo 'A';
            break;
        case '9' + 1:
            echo 'B1';
            break;
        case '10':
            echo 'B2';
            break;
        default:
            echo 'D';
            break;
    }
    echo '<hr>' .rand(0,100)


?>
