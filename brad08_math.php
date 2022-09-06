<?php
    $a = '12brad3'; $b = '3';
    $c = $a + $b;
    echo $c . '<br>';

    $a = true; $b = false;
    $c = $a + $b;
    
    echo $c . '<br>';

    $a = 10; $b = 0;
    $c = $a / $b;
    // INF 無限大  0=接近0
    echo $c . '<br>';
    echo gettype($c) . '<br>';

    $a = 0; $b = 0;
    $c = $a / $b;
    // 
    echo $c . '<br>';
    echo gettype($c) . '<br>';
?>