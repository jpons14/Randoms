<?php
$enter = "lorem ipsum  dolor siet   ";
$enter = trim($enter);
$foo = explode(" ", $enter);
$last = $foo[count($foo) - 1];

echo strlen($last);
$test = array();
