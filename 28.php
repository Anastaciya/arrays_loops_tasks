<p>28. Вывести таблицу умножения с помощью двух циклов for.</p>

<?php
$nine = 9;

?>
<table>
<?
	for($i =1; $i <= $nine; $i++){
		echo '<tr>';
		for($j =1; $j <= $nine; $j++){
			if ($i == 1){
				echo "<td style='background-color: green'>{$j}</td>";
			}elseif($j == 1){
				echo "<td style='background-color: red'>{$i}</td>";
			}else{
				$sum = $i*$j;
				echo "<td style='background-color: eyllow'>{$sum}</td>";
			}
		}
		echo '</tr>';
	}
?>
</table>




