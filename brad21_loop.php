<table border="1" width="100%">
    <tr>

        <?php
        $start = 1;
        $rows = 3;
        $cols = 3;

        for ($k = 0; $k < $rows; $k ++) {
            echo '<tr>';
            for ($j = $start; $j < $start+$cols; $j++) {
                $newj = $j + $k * $cols;
                echo '<td>';
                for ($i = 1; $i < 10; $i++) {
                    $result = $i * $newj;
                    echo "{$newj} x {$i} = {$result}<br>";
                }
                echo '</td>';
            }
            echo '</tr>';
        }

        ?>


    </tr>
    
</table>