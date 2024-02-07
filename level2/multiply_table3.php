<?php
//素数を判別する関数
function isPrime($num) {
    if($num == 1) {
        return true;
    }
    if($num == 2) {
        return true;
    }
    for($i = 2; $i <= sqrt($num); $i++) {
        if($num % $i == 0) {
            return false;
        }
    }
    return true;
}

echo "<table border=1>";
    //一番上の行を作成
    echo "<tr bgcolor='lightgray'>";
        echo "<td bgcolor='white'>X</td>";
        for ($i = 1; $i <= 19 ; $i++) {
            if(isPrime($i)){
                echo "<td>$i</td>";
            } 
        }
    echo "</tr>";

    //行ごと計算結果を表示
    for ($j = 1; $j <= 19; $j++) {
        if(isPrime($j)) {
            echo "<tr>";
            echo "<td bgcolor = 'lightgray'>$j</td>";
            for ($i = 1; $i <= 19; $i++) {
                if(isPrime($i)) {
                    $p = $i * $j;
                    echo "<td>$p</td>";
                }
            }
            echo "</tr>";
        }
    }
echo "</table>";
?>