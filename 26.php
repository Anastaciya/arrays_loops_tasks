<p>26. Вам нужно создать массив и заполнить его случайными числами от 1 до 100 (ф­я rand).
Далее, вычислить произведение тех элементов, которые больше ноля и у которых парные
индексы. После вывести на экран элементы, которые больше ноля и у которых не парный
индекс.</p>

<?php

$arr = array();
$p = 1;
$count = 10;

for($i=1; $i <= $count; $i++){
	$arr[] = rand(1,100);
}
echo '<pre>';
print_r($arr);


foreach($arr as $key => $val){
	if($val > 0 AND $key%2==0){
		$p *= $val;
	}
}
echo 'p='.$p.'<br>';
echo '<h4>элементы, которые больше ноля и у которых не парный
индекс</h4>';
foreach($arr as $key => $val){
	if($val > 0 AND $key%2 != 0){
		echo $val.'<br>';
	}
}



