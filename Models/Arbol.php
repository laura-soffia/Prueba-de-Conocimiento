<?php

require_once 'Planta.php';
// Crear sus clases hijas que compartan sus atributos y métodos:
// Árbol: Variedad, tipo de tronco, radio de tronco, color, tipo de hojas.

class Arbol extends Planta{
    private $variedad;
    private $tipo_de_tronco;
    private $radio_de_tronco;
    private $color;
    private $tipo_de_hojas;

    public function __construct (string $nombre, float $altura_de_tallo, bool $tiene_hojas, string $clima_ideal, string $variedad, string $tipo_de_tronco, string $radio_de_tronco, string $color, string $tipo_de_hojas){
        parent ::__construct($nombre, $altura_de_tallo, $tiene_hojas, $clima_ideal);
        $this->variedad = $variedad;
        $this->tipo_de_tronco = $tipo_de_tronco;
        $this->radio_de_tronco = $radio_de_tronco;
        $this->color = $color;
        $this->tipo_de_hojas = $tipo_de_hojas;

    }


}

function mostrarMensajeArbol(){
     echo "Soy un arbol";
}
