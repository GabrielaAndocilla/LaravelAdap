<?php

namespace App;


class PistoleroAdapter 
{
    
    public $pistolero ;

    function __construct()
    {
        $this->pistolero = new Pistolero();
    }
    
    public function caminar() {
        $this->pistolero->caminar();
        echo "<br>";

    }

    public function saltar() {
        $this->pistolero->saltar();
        echo "<br>";

    }

    public function atacar() {
        echo("Pistolero ataca");
        echo "<br>";
        $this->pistolero->sacarArma();
        echo "<br>";
        $this->pistolero->disparar();
        echo "<br>";
        $this->pistolero->guardarArma();
        echo "<br>";
    }
}
