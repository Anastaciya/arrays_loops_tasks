<p>17.Сосктавьте массив месяцев. С помощью цикла foreach выведите все месяцы, а текущий
месяц выведите жирным. Текущий месяц должен храниться в переменной $month.</p>

<?php

$arr_mmonthes = array('January', 'February','March','April','May','June','July','August','September','October','November','December');
$month = 'March';

foreach($arr_mmonthes as $val){

	if($val == $month){
		echo '<b>'.$val.'</b><br>';
	}else{
		echo $val.'<br>';
	}	
}