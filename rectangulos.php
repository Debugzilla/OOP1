<?php
// Subclase Rectangle que hereda de Shape

class Rectangle extends Shape {

    // Sobrescribe el método area para calcular el área de un rectángulo
    public function area() {
        return $this->Altura * $this->Amplada;
    }
}
?>