<?php

require_once 'Models/Planta.php';
require_once 'Models/Arbol.php';
require_once 'Models/Flor.php';
require_once 'Models/Arbusto.php';


$arbol = new arbol("Sauce LLorón", 2, true, "tropical", "pequeño", "Con textura", "2.50", "verde medio oscuro", "pequeña");

$arbusto = new arbusto ("Hade", 15, true, "tropical", "pequeño", true, "pequeña", "Verde oscuro", true );

$flor = new flor("Tulipan", 2, true, "templado", "grandes", "5", 5, "rosado", true, "tulipan", "primavera" );

echo mostrarMensajeArbol()." " ."<br>";
"<br>";
// echo "" . $arbol->getNombre() . $arbol->getAlturaDeTallo() . ".";
echo mostrarMensajeArbusto()." " ."<br>";
"<br>";
echo mostrarMensajeFlor()." " ."<br>";
