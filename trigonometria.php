<?php

//Exercici2
//Escriu un programa que defineixi una classe Shape amb un constructor que rebi com a paràmetres l'ample i alt.
//Defineix dues subclasses; Triangle i Rectangle que heretin de Shape i que calculin respectivament l'àrea de la forma area().
// Clase base Shape
class Shape {
    public $Altura;
    public $Amplada;

    // Constructor que inicializa las propiedades de altura y anchura
    public function __construct($Altura, $Amplada) {
        $this->Altura = $Altura;
        $this->Amplada = $Amplada;
    }

    // Método que será sobrescrito en las subclases
    public function area() {
        return 0;
    }
}