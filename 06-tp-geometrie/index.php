<?php

require_once 'formule.php';

$rectangle = new Rectangle(5, 10);
$square = new Square(5); // Un carré étend la classe rectangle
$circle = new Circle(5); // L'argument est le rayon du cercle