<?php
echo "<h2>Table</h2>";

//配列
$sales = array(
    array("ID" => 1, "product_id" => 47, "money" => "5,000", "item" => 1, "deleted_at" => "0000-00-00", "deleted_flg" => "0", "created_at" => "2022/1/4", "updated_at" => "0000-00-00"),
    array("ID" => 2, "product_id" => 84, "money" => "42,000", "item" => 2, "deleted_at" => "0000-00-00", "deleted_flg" => "0", "created_at" => "2021/12/25", "updated_at" => "0000-00-00"),
    array("ID" => 3, "product_id" => 29, "money" => "1,980", "item" => 20, "deleted_at" => "0000-00-00", "deleted_flg" => "0", "created_at" => "2022/2/19", "updated_at" => "2022-2-21")
);

$product = array(
    array("ID" => 47, "maker_id" => 122, "name" => "眼鏡", "delete_flg" => 0, "deleted_at" => "0000-00-00", "created_at" => "2022/1/4", "updated_at" => "0000-00-00"),
    array("ID" => 84, "maker_id" => 146, "name" => "宝石", "delete_flg" => 0, "deleted_at" => "0000-00-00", "created_at" => "2021/12/25", "updated_at" => "0000-00-00"),
    array("ID" => 29, "maker_id" => 191, "name" => "お菓子", "delete_flg" => 0, "deleted_at" => "0000-00-00", "created_at" => "2022/2/9", "updated_at" => "2022-2-21")
    
);

$maker = array(
    array("ID" => 122, "name" => "MANMOS", "delete_flg" => 0, "deleted_at" => "0000-00-00", "created_at" => "2022/1/4", "updated_at" => "0000-00-00"),
    array("ID" => 146, "name" => "TOMAS", "delete_flg" => 0, "deleted_at" => "0000-00-00", "created_at" => "2021/12/25", "updated_at" => "0000-00-00"),
    array("ID" => 191, "name" => "REDY_DODO", "delete_flg" => 0, "deleted_at" => "0000-00-00", "created_at" => "2022/2/9", "updated_at" => "2022-2-21")
);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
</head>
<body>

<?php
echo "<table border='1'>";
echo "<tr bgcolor = 'lightgray'><th>deleted_at</th><th>created_at</th><th>updated_at</th><th>product_id</th><th>item</th><th>name</th><th>maker_name</th></tr>";

// 配列の要素をテーブルの行で出力
foreach($sales as $sl) {

    echo "<tr>";
    echo "<td>".$sl['deleted_at']."</td>";
    echo "<td>".$sl['created_at']."</td>";
    echo "<td>".$sl['updated_at']."</td>";
    echo "<td>".$sl['product_id']."</td>";
    echo "<td>".$sl['item']."</td>";

    $maker_id = null;
    
    foreach ($product as $prod) {
        if($sl['product_id'] == $prod['ID']) {
            echo "<td>".$prod['name']."</td>";
            $maker_id = $prod['maker_id'];
        }
    }

    foreach ($maker as $mk) {
        if($maker_id == $mk['ID']) {
            echo "<td>".$mk['name']."</td>";
        }
    }

    echo "</tr>";
}


echo "</table>";
?>
</body>
</html>