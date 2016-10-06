<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
$groups = array(
        'A' => array("Ludo", "Josep", "Neus"),
        'B' => array("jaume llopis", "jaume florit", "xavi_reus"),
        'C' => array("jaume pons", "erik ", "joel"),
        'D' => array("jesus", "sergi", "xavi raga")
);

$activities = array(
    "Activity 1" => "individual",
    "Activity 2" => "individual",
    "Activity 3" => "individual",
    "Activity 4" => "individual",
    "Activity 5" => "individual",
    "Activity 6" => "individual",
    "Activity 7" => "individual",
    "Activity 8" => "individual",
    "Activity 9" => "individual",
    "Activity 10" => "individual",
    "Activity 11" => "individual",
);

function mode1 ($groups): array{
    shuffle($groups);
    $rand = array();
    foreach ($groups as $key => $group) {
        shuffle($group);
        $rand[$key] = $group[0];
    }
    return $rand;
}

function mode2 ($groups): array{
    $classMate = array();
    foreach ($groups as $group) {
        foreach ($group as $item) {
            $classMate[] = $item;
        }
    }
    shuffle($classMate);
    return $classMate;
}

function mode3 ($groups, $activities, $type) {
    $assigned = array();
    $classMates = array();
    $foo = array();
    if ($type == "individual"){
        $classMates = mode2($groups);
        foreach ($activities as $index => $activity) {
            if ($activity == "individual"){
                $assigned[] = $index;
            }
        }
        $subjects = array();
        foreach ($activities as $key => $activity) {
            $subjects[] =  $key;
        }
        $foo = array_combine($subjects, $classMates);
        echo '<pre>$foo' . print_r($foo, true) . '</pre>';

    }
    return $foo;
}

echo '<pre>mode1($groups)' . print_r(mode1($groups), true) . '</pre>';
echo '<pre>mode2($groups)' . print_r(mode2($groups), true) . '</pre>';
echo '<pre>mode3($groups, $activities, "individual")' . print_r(mode3($groups, $activities, "individual"), true) . '</pre>';

?>
</body>
</html>