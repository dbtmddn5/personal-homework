<?php
for($i = 0; $i <= 100; $i++){
    if($i == 0) {
        echo $i. ", ";
    }
    elseif($i % 3 == 0 && $i % 5 == 0){
        echo "Fizz Buzz, ";
    }
    elseif ($i % 3 == 0) {
        echo "Fizz, ";
    }
    elseif($i % 5 == 0) {
        echo "Buzz, ";
    }
    else {
        echo $i. ", ";
    }
    
}
?>