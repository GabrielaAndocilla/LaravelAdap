<?php

namespace App;

use App\Personaje;

class Guerrero extends Personaje
{
    
     public function caminar(){
        echo "Guerrero camina";
        echo "<br>";
     }
     public function saltar(){
        echo "Guerrero salta";
        echo "<br>";

     }
     public function atacar(){
        echo "Guerrero ataca";
        echo "<br>";
     }
     
}
