<table border="1" width="100%">
    <tr>

        <?php
        for ($k = 0; $k < 2; $k ++) {
            echo '<tr>';
            for ($j = 1; $j < 5; $j++) {
                $newj = $j + $k * 4;
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