<p>11. Выведите столбец четных чисел в промежутке от нуля до 100.</p>


<?php

define("MAX_VAL",100);

for($i=0; $i<=MAX_VAL; $i++){
    if( 0 == $i%2){
        echo $i."<br>";
    }
}

