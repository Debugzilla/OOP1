<?php
//Exercici1
include 'clientes.php';

$employee = new Employee();
$employee->initialize("Jose", 7000);
echo $employee->print();

echo "<br/><br/>";





//include "trigonometria.php";
include "triangulos.php";
include "rectangulos.php";
$triangle = new Triangle(15, 20);
echo "Área del triángulo: " . $triangle->area() . "<br/>";

$rectangle = new Rectangle(19, 20);
echo "Área del rectángulo: " . $rectangle->area();




?>
