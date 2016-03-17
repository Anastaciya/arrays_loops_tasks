<p>18. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели,
выходные дни следует вывести жирным.</p>


<?php

$arr_week = array('Monday', 'Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday');
$sat= 'Saturday';
$sun= 'Sunday';

foreach($arr_week as $day){

	if($day == $sat || $day == $sun){
		echo '<b>'.$day.'</b><br>';
	}else{
		echo $day.'<br>';
	}	
}
