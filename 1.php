<p>1. Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'. С помощью цикла foreach выведите эти слова 
в столбик.</p>

<?php

$array = array('html', 'css', 'php', 'js', 'jq');

foreach($array as $val){
	echo $val.'<br>';
}