<?php
    $result = $x = $y = '';
    if(isset($_GET['x']) && isset($_GET['y'])){
        $x = $_GET['x'];$y = $_GET['y'];
        // echo gettype($x);
        $result = $x + $y;
        // echo "{$x} + {$y} = {$result}";
    }
    
?>
<form>
    <input name="x" value="<?php echo $x ?>" type="text">
    +
    <input name="y" value="<?php echo $y ?>" type="text">
    <input type="submit" value="=">
    <?php
        echo $result;
    ?>
</form>