<p>11. Написать функцию, которая в качестве аргумента принимает строку, и форматирует ее таким образом, что 
каждое новое предложение начиняется с большой буквы.<br>
Пример:<br><br>
Входная строка: 'а васька слушает да ест. а воз и ныне там. а вы друзья как ни садитесь, все в музыканты не годитесь. 
а король-то — голый. а ларчик просто открывался.а там хоть трава не расти.';<br><br>
Строка, возвращенная функцией :  'А Васька слушает да ест. А воз и ныне там. А вы друзья как ни садитесь, все в музыканты 
не годитесь. А король-то — голый. А ларчик просто открывался.А там хоть трава не расти.';</p>

<?php

$str = 'do you like flamboyant exotic performances? Then we know how to please you. 
alcazar Cabaret Pattaya is a world-wide famous transvestite show. this theater is a landmark of Thailand just 
like matrioshka are a symbol of Russia, or coffee shops are a distinctive feature of Amsterdam.';

function strCorect($str){
	$str = substr($str);
	return $str;
}

echo strCorect($str);