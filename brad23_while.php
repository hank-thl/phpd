<?php
    if(isset($_GET['n']) && $_GET['n'] !== ''){
        $n = $_GET['n'];
        $i =1;
        $sum = 0;
        while($i <= $n){
            $sum += $i++;
            
        }
        // echo "{$sum}";
    }
    
?>
<form >
    1 + 2 + ..... +
    <input type="number" name="n" value="<?php echo $n?>">
    <input type="submit">
    <?php echo $sum; ?>
</form>

