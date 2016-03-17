<?php
for($i=2; $i<= 9; $i++){

    for($j=1; $j<= 9; $j++){
        $sum = $i*$j;
        if( 0 == $i%2){
            echo "<pre>";
            echo '<span style="color:green">'.$i.'*'.$j.'='.$sum."</span>".PHP_EOL;
        }else{
            echo "<pre>";
            echo  '<span style="color:midnightblue">'.$i.'*'.$j.'='.$sum."</span>".PHP_EOL;
        }

    }
    echo "<br>";
}