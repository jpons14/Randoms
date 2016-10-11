<?php
$a = array("Ludo", "Josep", "Neus");
$b = array("jaume llopis", "jaume florit", "xavi_reus");
$c = array("jaume pons", "erik ", "joel");
$d = array("jesus", "sergi", "xavi raga");

$groups = array("a", "b", "c", "d");

foreach ($groups as $group) {
    $rand = ${$group};
    shuffle($rand);
    echo "Group $group => ". $rand[0] . "<br />";
}