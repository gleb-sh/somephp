<?php

$str = "Kate is very beautiful.    123 I'm fall in love.";



// эквивалент explode()
//$res = preg_split('/\s+/',$str);

// возвращает первое вхождение в третий агрумент, а также количество
//$res = preg_match('/[a-z]/',$str,$ma);

// возвращает все вхождения в третий агрумент, а также количество вхождений
$res = preg_match_all('/\w/', $str, $ma);

/*

\w - латинские символы и цифры
\d - цифры
\n - перенос строки
\s - пробел
\t - таблуции
*/


?>

<pre><?php 

var_dump($res);
var_dump($ma);

?></pre>
