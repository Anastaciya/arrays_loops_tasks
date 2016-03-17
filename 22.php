<p>22. Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.<br><br>
xx<br>
xxxx<br>
xxxxxx<br>
xxxxxxxx<br>
xxxxxxxxxx</p>

<?php

$rows =5;
$row = " ";

for($i=1; $i<=$rows; $i++){
	$row .= 'xx';
	echo $row.'<br>';
}