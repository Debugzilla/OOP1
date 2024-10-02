<?php
// Subclase Triangle que hereda de Shape
include "trigonometria.php";
class Triangle extends Shape {

    // Sobrescribe el método area para calcular el área de un triángulo
    public function area() {
        return ($this->Altura * $this->Amplada) / 2;
    }
}

?>