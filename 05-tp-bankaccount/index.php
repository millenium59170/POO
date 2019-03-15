<?php

/**
 * Nous allons créer un système de gestion de compte en banque en POO.
 *
 * Nous aurons tout d'abord le compte en banque classique représentée par la classe BankAccount.
 * Il possédera un identifiant (int), un propriétaire (string) et une balance (float).
 * On devra définit l'identifiant et le propriétaire dans le constructeur. La balance pourra également
 * être définie dans le constructeur mais de manière optionnelle.
 */
require_once 'count.php';



// Matthieu a 0 sur son compte
$bankAccount01 = new BankAccount(123456, 'Matthieu');


// Ajouter un système de livret qui va hériter d'un compte en banque standard.
$savingAccount01 = new SavingAccount(123457, 'Matthieu');





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BankAccount</title>
</head>
<body>
    <?php
var_dump($bankAccount01);
var_dump($savingAccount01)

?>
</body>
</html>