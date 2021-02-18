<?php

//      array_callback      //

//      array_filter        //


$arr = [0,1,2,33,'','text'];
$data = array_filter($arr);

/*
$arr = [0,1,2,33,'','text'];
$data = array_filter($arr,function($element){
    return $element > 1;
});
*/

//      array_map       //

/*
$number = 4;
$arr = [0,1,2,33,'','3text2'];
$data = array_map(function($el) use ($number) {
    return $el + $number;
},$arr);
*/

/*
$arr = ['тест','text'];
$data = array_map('mb_strtoupper',$arr);
*/

//      array_walk      //

/*
$arr = [0,1,2,33,'','3text2'];
$data = array_walk($arr,function($el){
    echo $el;
});
*/

?>
<pre>
<?php var_dump($data); ?>
<pre>