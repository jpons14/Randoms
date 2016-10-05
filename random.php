<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
$groups = array(
        'A' => "Ludo Josep Neus",
        'B' => "jaume_llopis jaume_florit xavi_reus",
        'C' => "Jaume_pons erik joel",
        'D' => "jesus sergi xavi_raga"
);
$groupsInt = [
        'A',
        'B',
        'C',
        'D',
];

function randomGroups($groupsInt){
    $numGroups = count($groupsInt);
    $rand = array();
    for($i = 0; count($rand) < $numGroups; $i++){
        $tmp = rand(0, $numGroups - 1);
        /*if (!in_array($tmp, array_keys($rand))){
            $rand[] = $groupsInt[$tmp];
        }*/
    }
   // return array_rand($groupsInt, 4);
}
function randomNames($groups, $groupsInt){
    $result = array();
    echo '<pre>$groups' . print_r($groups, true) . '</pre>';
    foreach ($groups as $key => $group) {
        $foo = explode(" ", $groupsInt[$group]);
        $rand = rand(0, count($foo) - 1);
        $result[] = $foo[$rand];
    }
    return $result;
}

//echo '<pre>randomGroups($groupsInt)' . print_r(randomGroups($groupsInt), true) . '</pre>';
//$results = randomNames(randomGroups($groupsInt), $groups);
//echo '<pre>$results' . print_r($results, true) . '</pre>';
echo '<pre>array_rand($groupsInt, 4)' . print_r(array_rand($groupsInt, 4), true) . '</pre>';

?>
</body>
</html>