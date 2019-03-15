<?php

require_once 'Character.php';
require_once 'Warrior.php';
require_once 'Hunter.php';
require_once 'Magus.php';
require_once 'Game.php';

$game = new Game();


$aragorn = new Warrior('Aragorn');
$legolas = new Hunter('Legolas');
$gandalf = new Magus('Gandalf');

$game
    ->addPlayer($aragorn)
    ->addPlayer($legolas)
    ->addPlayer($gandalf);
 var_dump($game)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Final Fantasy 18</title>
</head>
<body>
<?php
$aragorn->attack($legolas); // Enlève X points de vie en fonction de la force
$legolas->rangedAttack($gandalf); // Enlève X points de vie
$gandalf->castSpell($aragorn); // Enlève X points de vie en fonction du mana
$legolas->attack($gandalf);
var_dump($game)
?>
</body>
</html>


