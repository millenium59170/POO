<?php

require_once 'cat.php';

$bianca = new Cat();
$mina = new Cat();
//on peut affecter une valeur
$bianca->name = 'Bianca';
$bianca->type = 'Chat de gouttiere';
$bianca->fur = 'Blanc';

// on peut afficher la valeur
echo 'Mon chat s\'appelle ' . $bianca->name . ' et il fait' . 
$bianca->cry();

$mina->name = 'Mina';

echo 'Mon autre chat s\'appelle ' . $mina->name . ' et il fait '
. $mina->cry() . ' aussi. ';

// var_dump($bianca);
// var_dump($mina);


//utilisation de $this 
echo $bianca->eat();
echo $mina->eat();