<?php
// Arbusto: Ancho de arbusto, es doméstico, variedad de arbusto, color de hojas, se poda o no. 

require_once 'Planta.php';

class Arbusto extends Planta{
    private $Ancho_de_arbusto;
    private $domestico;
    private $variedad_de_arbusto;
    private $colorHojas;
    private $sePoda;

    public function __construct (string $nombre, float $altura_de_tallo, bool $tiene_hojas, string $clima_ideal, string $Ancho_de_arbusto, bool $domestico, string $variedad_de_arbusto, string $colorHojas, bool $sePoda) {
        parent ::__construct($nombre, $altura_de_tallo, $tiene_hojas, $clima_ideal);
        $this->Ancho_de_arbusto = $Ancho_de_arbusto;
        $this->domestico = $domestico;
        $this->variedad_de_arbusto = $variedad_de_arbusto;
        $this->colorHojas = $colorHojas;
        $this->sePoda = $sePoda;
    }
}

function mostrarMensajeArbusto(){
     echo "Soy un arbusto";
}