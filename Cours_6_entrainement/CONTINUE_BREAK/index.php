<?php



$valeurs = [
    "dylan",
    "michel",
    "bertrand",
    "morice",
    "camille"
];

$i = 0;

while ($i < count($valeurs)) {
    if ($valeurs[$i] === "dylan") {
        $i++;
        continue;
    }

    if ($valeurs[$i] === "morice") {
        break;
    }

    echo $valeurs[$i] . "-";
    $i++;
}



?>