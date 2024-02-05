<?php
echo "<table border=1>";
    //一番上の行を作成
    echo "<tr bgcolor='lightgray'>";
        echo "<td bgcolor='white'>X</td>";
        for ($i = 9; $i >= 1 ; $i--) { 
            echo "<td>$i</td>";
        }
    echo "</tr>";

    //行ごと計算結果を表示
    for ($j = 1; $j <= 9; $j++) {
        echo "<tr>"; 
        echo "<td bgcolor='lightgray'>$j</td>";
        for ($i = 9; $i >= 1; $i--) { 
            $p = $i * $j;
            echo "<td>$p</td>";
        }
        echo "</tr>";
    }
echo "</table>";
?>