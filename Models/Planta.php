<?php
//Crear una clase Planta con los atributos: nombre, altura de tallo, tiene hojas, clima ideal (Con sus métodos y constructores correspondientes).
class Planta {
    protected $nombre;
    protected $altura_de_tallo;
    protected $tiene_hojas;
    protected $clima_ideal;

    public function __construct(string $nombre, float $altura_de_tallo, bool $tiene_hojas, string $clima_ideal) {
        $this->nombre = $nombre;
        $this->altura_de_tallo = $altura_de_tallo;
        $this->tiene_hojas = $tiene_hojas;
        $this->clima_ideal = $clima_ideal;

    }

     // GETTERS
        public function getNombre(){
            return $this->nombre;
        }

        public function getAlturaDeTallo(){
            return $this->altura_de_tallo;
        }

        public function getTieneHojas(){
            return $this->tiene_hojas;
        }

        public function getClimaIdeal(){
            return $this->clima_ideal;
        }
}



