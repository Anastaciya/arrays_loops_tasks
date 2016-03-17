<p>25. Ваше задание создать массив, наполнить его случайными значениями (функция rand),
найти максимальное и минимальное значение и поменять их местами.</p>

<?php

$arr = array();

$count = 10;

for($i=1; $i <= $count; $i++){
	$arr[] = rand(1,100);
}
echo '<pre>';
print_r($arr);


$max = 0;

foreach($arr as $key => $val){
	if($val > $max){
		$max = $val;
		$max_key = $key;
	}
}
$min = $max;
foreach($arr as $key => $val){
	if($val < $min){
		$min = $val;
		$min_key = $key;
	}
}
$arr[$max_key] = $min;
$arr[$min_key] = $max;
echo '<br>';
print_r($arr);
echo 'min ='.$min.' max ='.$max;


