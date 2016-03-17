<p>14. Дан массив с элементами 4, 2, 5, 19, 13, 0, 10. С помощью цикла foreach и оператора if
проверьте есть ли в массиве элемент со значением $e, равном 2, 3 или 4. Если есть —
выведите на экран 'Есть!', иначе выведите 'Нет!'.</p>

<?php
$arr = array(4, 2, 5, 19, 13, 0, 10);
$arr2 = array(2,3,4);
$flag =false ;

foreach($arr as $val){
	foreach($arr2 as $e){
		if($val == $e){
          	$flag = false ;
			break 2;
		}else{
			$flag = true ;
		}
	}
}
if($flag == true){
	echo 'Нет';
}else{
	echo 'Есть '.$val.' !';
}
