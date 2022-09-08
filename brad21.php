<table border="1" width="100%">
    <tr>

        <?php
        for ($k = 2; $k <= 6; $k += 4) {
            echo '<tr>';
            for ($j = $k; $j <= ($k+3); $j++) {
                echo '<td>';
                for ($i = 1; $i < 10; $i++) {
                    $result = $i * $j;
                    echo "{$j} x {$i} = {$result}<br>";
                }
                echo '</td>';
            }
            echo '</tr>';
        }

        ?>


    </tr>
    
</table>