<?php

namespace App;

use App\Personaje;
use App\MAgo;


class MagoAdapter extends Personaje
{
    private $mago;  

    
    function __construct()
    {
        $this->mago = new MAgo();
    }

    public function caminar() {
        $this->mago ->caminar();
    }

    public function saltar() {
        echo("Mago Salta");
        echo "<br>";
        $this->mago ->desaparecer();
        echo "<br>";
        $this->mago ->teletransportar();
        echo "<br>";
        $this->mago ->aparecer();
        echo "<br>";
    }

    public function atacar() {
        $mago = new MAgo();
        echo("Mago Ataca");
        echo "<br>";
        $this->mago ->cargarMagia();
        echo "<br>";
        $this->mago ->hechizo();
        echo "<br>";
    }
}
