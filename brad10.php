<?php
    $result = $x = $y = $op = '';
    if(isset($_GET['x']) && isset($_GET['y'])){
        $x = $_GET['x'];$y = $_GET['y'];
        $op = $_GET['op'];
        switch ($op){
            case '1';
                $result = $x + $y;
                break;
            case '2';
                $result = $x - $y;
                break;
            case '3';
                $result = $x * $y;
                break;
            case '4';
                $result = $x / $y;
                break;    
        }

        // echo gettype($x);
        
        // echo "{$x} + {$y} = {$result}";
    }
    
?>
<form>
    <input name="x" value="<?php echo $x ?>" type="text">
    <select name="op" >
        <option value="1" <?php echo $op=='1'?'selected':''; ?>>+</option>
        <option value="2" <?php echo $op=='2'?'selected':''; ?>>-</option>
        <option value="3" <?php echo $op=='3'?'selected':''; ?>>x</option>
        <option value="4" <?php echo $op=='4'?'selected':''; ?>>/</option>
    </select>
    <input name="y" value="<?php echo $y ?>" type="text">
    <input type="submit" value="=">
    <?php
        echo $result;
    ?>
</form>