<?php
//配列の作成
$customer = array(
    array("id" => 47, "name" => "山田", "delete_flg" => 0, "deleted_at" => "0000-00-00", "created_at" => "2022/1/4", "updated_at" => "0000-00-00"),
    array("id" => 84, "name" => "土門", "delete_flg" => 0, "deleted_at" => "0000-00-00", "created_at" => "2021/12/25", "updated_at" => "0000-00-00"),
    array("id" => 29, "name" => "小野", "delete_flg" => 0, "deleted_at" => "0000-00-00", "created_at" => "2022/2/19", "updated_at" => "2022-2-21")
);

$sales = array(
    array("id" => 1, "customer_id" => 47, "moeny" => 890, "product_name" => "はちみつ", "itme" => 1, "delete_flg" => 0, "deleted_at" => "0000-00-00", "created_at" => "2022/1/4", "updated_at" => "0000-00-00"),
    array("id" => 2, "customer_id" => 84, "moeny" => 100, "product_name" => "餃子", "itme" => 1, "delete_flg" => 0, "deleted_at" => "0000-00-00", "created_at" => "2021/12/25", "updated_at" => "0000-00-00"),
    array("id" => 3, "customer_id" => 29, "moeny" => 120, "product_name" => "卵", "itme" => 1, "delete_flg" => 0, "deleted_at" => "0000-00-00", "created_at" => "2022/2/19", "updated_at" => "2022/2/21"),
    array("id" => 4, "customer_id" => 29, "moeny" => 400, "product_name" => "野菜", "itme" => 1, "delete_flg" => 0, "deleted_at" => "0000-00-01", "created_at" => "2022/2/19", "updated_at" => "2022/2/21"),
    array("id" => 5, "customer_id" => 29, "moeny" => 290, "product_name" => "冷凍食品", "itme" => 1, "delete_flg" => 0, "deleted_at" => "0000-00-01", "created_at" => "2022/2/19", "updated_at" => "2022/2/21")
);

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Table1</h1>

    <?php
    //テーブルの作成
    echo "<table border='1'>";
    echo "<tr bgcolor = 'lightgray'><th>購入者</th><th>商品１</th><th>商品２</th><th>商品３</th></tr>"; //table headを表示
        
    foreach($customer as $cust) {
        echo "<tr>";
        echo "<td>".$cust['name']."</td>";

        $production = 0; //商品発見の変数を初期化

        foreach($sales as $sl) {
            if($cust['id'] == $sl['customer_id']) {
                echo "<td>".$sl['product_name']."</td>";
                $production++; //商品を発見したら１ずづ増やす
                }   
            }
        
        
        //商品の数が３未満であればNoneを表示
        for($i = $production; $i < 3; $i++){
            echo "<td>None</td>";
        }
        
        echo "</tr>";
    }

    echo "</table>";
    ?>

    <h1>Table2</h1>

    <?php
    //テーブルの表示
    echo "<table border = '1'>";
    echo "<tr bgcolor = 'lightgray'><th>No.</th><th>購入者</th><th>商品１</th><th>商品２</th><th>商品３</th></tr>";

    $i = 1; //No.の変数を初期化

    foreach($customer as $cust) {
        $production = 0; //商品発見の変数を初期化
        echo "<tr>";
        echo "<td>".$i++."</td>"; //No.の数字を表示
        echo "<td>".$cust['name']."</td>"; //購入者を表示

        foreach($sales as $sl) {
            if($cust['id'] == $sl['customer_id']) {
                echo "<td>"."[".$sl['id']."]".$sl['product_name']."</td>";
                $production++; //商品を発見したら１ずづ増やす
            }
            
        }

        for($j = $production; $j < 3; $j++){
            echo "<td>None</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
    ?>

</body>
</html>