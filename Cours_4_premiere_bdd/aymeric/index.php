<?php
//EXO 2 
    //V1


    $note_maths = 15;
    $note_francais = 12;
    $note_histoire_geo = 9;
    $moyenne = ($note_maths + $note_francais + $note_histoire_geo) / 3;
    
    echo 'La moyenne est de '.$moyenne.' / 20.';


    //V2

    echo '<br><br>';

    $tab = [
        'note_maths' => 15,
        'note_francais' => 12,
        'note_histoire_geo' => 9,
    ];

    function moyenne($leTableau)
    {

        $numberOfTab = count($leTableau);
        $number = 0;
        $moyenneFinal = 0;

        foreach($leTableau as $cle => $value)
        {
            $number+= $value;
        }

        $moyenneFinal = $number / $numberOfTab;

        echo 'La moyenne V2 est de '.$moyenneFinal.' / 20.';
    }

    moyenne($tab);
    
//EXO3
echo '<br><br>';

$prix_ht = 50;
$tva = 20;
$prix_ttc = 0;

$finalTTC = $prix_ht + ($prix_ht / $tva);

echo 'Le prix TTC du produit est de '.$finalTTC.' €.';


//EXO4

echo '<br><br>';

$test = '42';
var_dump($test);

//EXO5

echo '<br><br>';

$sexe = "femelle";

if($sexe == "femelle")
{
    echo "C'est une femelle ! ";
} else {
    echo "C'est un mal";
}

//EXO6

echo '<br><br>';

$budget = 1553.89;
$achats = 1554.76;

if($budget >= $achats) {
    echo $budget.' euros permet de payer tous les achats ('.$achats.' euros).';
} else {
    echo $budget.' euros permet pas de payer tous les achats ('.$achats.' euros).';
}

//EXO7

echo '<br><br>';

$age = 18;
$majeur = 18;
if($age >= $majeur)
{
    echo "C'est un majeur.";
} else {
    echo "C'est un mineur.";
}


//EXO8

echo '<br><br>';

$heure = 18;
$heure = 14;
if($heure < 0 || $heure > 23) {
   echo 'Je connais pas';
} elseif($heure >= 7 && $heure < 12) {
   echo 'Bonjouuuuuur ! ';
} elseif($heure >= 12 && $heure < 22) {
   echo 'Bonne après miiidiiiiii .';
} else {
   echo 'Bonne nuit je vais me coucher.';
}

//EXO9

echo '<br><br>';
$i = 77000;
$comp = 0;

while($i <= 77999) {


   echo $i.' ';
   $i++;
}



//exo10
echo '<br><br>';
$multiplicateur = 5;

for($i = 1;$i <= 10;$i++) {
    echo $multiplicateur.' x '.$i.' = '.($multiplicateur * $i).' <br>';
}



//exo11
echo '<br><br>';
for($i = 1;$i <= 5;$i++) {
    for($j = 1;$j <= $i;$j++) {
       echo $i;
    }
    echo '<br />';
 }



//exo12
echo '<br><br>';
$value=0;

while($value !== 20)
{
    if($value == 10) {
        echo '<b>' . $value .' </b><br>';
    } else {
        echo $value .'<br>';

    }

    $value+=2;
}


//exo13
echo '<br><br>';


$tableau = [
    'France' => 'Paris',
    'Allemagne' => 'Berlin',
    'Italie' => 'Rome',
];

foreach($tableau as $cle => $value)
{
    echo 'Pays : ' . $cle . '. Capital : ' . $value .'<br>';
}


//exo14
echo '<br><br>';

$leArray =[];

for($i=0;$i<10;+$i++)
{
    $leArray[] = rand(1, 100);
}

foreach($leArray as $r)
{
    if($r == 42) {
        echo $r;
        break;
    }

}

var_dump($leArray);

//exo15
echo '<br><br>';
$leArray2 =[];
$leArrayResult1 = [];
$leArrayResult2 = [];

for($i=0;$i<10;+$i++)
{
    $leArray[] = rand(1, 100);
}

foreach($leArray as $a)
{
    if ($a > 50) {
        $leArrayResult1 [] = $a;
    } else {
        $leArrayResult2 [] = $a;
    }
}

echo "Le tableau 1 :";
var_dump($leArrayResult1);
echo "Le tableau 2 :";
var_dump($leArrayResult2);

//exo16
echo '<br><br>';

$conditionValeur = 20000000;

$pays_population = [
    'France' => 67595000,
    'Suede' => 9998000,
    'Suisse' => 8417000,
    'Kosovo' => 1820631,
    'Malte' => 434403,
    'Mexique' => 122273500,
    'Allemagne' => 82800000,
];

foreach($pays_population as $cle => $valeur)
{
    if($valeur >= $conditionValeur )
    {
        echo $cle . " : " . $valeur ."<br>";
    }
}


//exo17
echo '<br><br>';

$pays_population_v2 = [
    'France' => 67595000,
    'Suede' => 9998000,
    'Suisse' => 8417000,
    'Kosovo' => 1820631,
    'Malte' => 434403,
    'Mexique' => 122273500,
    'Allemagne' => 82800000,
];

echo 'Il y a '.count($pays_population).' éléments dans le tableau !';


//exo18
echo '<br><br>';

$cocktails = ['Mojito', 'Long Island Iced Tea', 'Gin Fizz', 'Moscow mule'];
echo $cocktails[1];

//exo19
echo '<br><br>';

$personnes = array(
    'Jean' => 16,
    'Manuel' => 19,
    'André' => 66
 );

echo 'Manuel a '.$personnes['Manuel'].' ans !';
?>