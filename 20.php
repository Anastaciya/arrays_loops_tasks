<p>20.Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 20
рядов, а не 5.<br><br>
x<br>
xx<br>
xxx<br>
xxxx<br>
xxxxx</p>

<?php

$rows =20;
$row = " ";

for($i=1; $i<=$rows; $i++){
	$row .= 'x';
	echo $row.'<br>';
}