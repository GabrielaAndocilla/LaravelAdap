<?php

namespace App;

use App\Personaje;

class Ladron extends Personaje
{
    public function caminar(){
        echo "Ladron camina";
        echo "<br>";

    }
    public function saltar(){
        echo "Ladron salta";
        echo "<br>";
    }
    public function atacar(){
        echo "Ladron ataca";
        echo "<br>";
    }
    
}
