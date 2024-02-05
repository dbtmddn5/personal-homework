<?php
echo "<table border =1>";
    //一番上の行を作成
    echo "<tr bgcolor='lightgrey'>";
        echo "<td bgcolor='white'>X</td>";
        for ($i = 1; $i <= 9; $i++) {
            echo "<td>$i</td>";
        }
    echo "</tr>";
    
    //行ごと計算結果を表示
    for ($j = 1; $j <= 9; $j++) {
        echo "<tr>";
        echo "<td bgcolor='lightgrey'>$j</td>";
        for ($i = 1; $i <= 9; $i++) {
            $p = $i * $j; 
            echo "<td>$p</td>";
        }
        echo "</tr>";
    }
echo "</table>";
?>