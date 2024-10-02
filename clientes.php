<?php

class Employee {

    public string $nombre;
    public int $Salario;


   
    public function initialize(string $nombre, int $Salario) {
        $this->nombre = $nombre;
        $this->Salario = $Salario;
    }


    public function print() {
        if ($this->Salario > 6000) {
            $texto = $this->nombre . " tiene que pagar impuestos";
        } else {
            $texto = $this->nombre . " NO tiene que pagar impuestos";
        }

        return $texto;
    }
}

?>