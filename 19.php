<p>19. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а
текущий день выведите курсивом. Текущий день должен храниться в переменной $day.</p>

<?php

$arr_week = array('Monday', 'Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday');
$day = date("l");


foreach($arr_week as $val){

	if($val == $day){
		echo '<b>'.$val.'</b><br>';
	}else{
		echo $val.'<br>';
	}	
}