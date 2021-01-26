<?php

$glob = 'Kate';

$foo = function ($str) use ($glob) {

    echo '<br>' . $str . ' ' . $glob . '<br>';
 
};

$foo('Hello');