<?php

namespace App;


abstract class Personaje 
{
    abstract public function caminar();
    abstract public function saltar();
    abstract public function atacar();
}
