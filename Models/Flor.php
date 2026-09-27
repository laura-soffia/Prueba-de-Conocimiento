<?php

require_once 'Planta.php';
// Flor: Color de pétalos, cantidad promedio de pétalos, color del pistilo, variedad de la flor, estación en la que florece.

class Flor extends Planta{
    private $petalos;
    private $cantidad_promedio_de_petalos;
    private $color_del_pistilo;
    private $variedad_de_la_flor;
    private $estacion_en_la_que_florece;

    public function __construct (string $nombre, float $altura_de_tallo, bool $tiene_hojas, string $clima_ideal, string $petalos, float $cantidad_promedio_de_petalos, string $color_del_pistilo, string $variedad_de_la_flor, string $estacion_en_la_que_florece) {
    parent ::__construct($nombre, $altura_de_tallo, $tiene_hojas, $clima_ideal);
        $this->petalos = $petalos;
        $this->cantidad_promedio_de_petalos = $cantidad_promedio_de_petalos;
        $this->color_del_pistilo = $color_del_pistilo;
        $this->variedad_de_la_flor = $variedad_de_la_flor;
        $this->estacion_en_la_que_florece = $estacion_en_la_que_florece;
    }
}
function mostrarMensajeFlor(){
     echo "Soy una flor";
}