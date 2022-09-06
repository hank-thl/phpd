<h1>I am brad11.php</h1>
<?php
    $x = $_GET['x'];$y = $_GET['y'];
    // echo gettype($x);
    $result = $x + $y;
    echo "{$x} + {$y} = {$result}";
?>