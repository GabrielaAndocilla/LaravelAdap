<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ladron;
use App\Guerrero;
use App\MagoAdapter;
use App\PistoleroAdapter;




class PrimController extends Controller
{
    public function index( ) { 
        return view('Index'); 
        
    } 
    public function Vista1() { 
        return view('Vista1'); 
        
    } 

    public function Tim(Request $reqs) { 
        $i= $reqs->input('name');
        switch ($i) {
            case 1:
                $Guerr = new Guerrero();
                return view("Vista1",['personaje'=>$Guerr]);
                break;
            case 2:
                $Lad= new Ladron();
                return view("Vista1",['personaje'=>$Lad]);

                break;
            case 3:
                $Mago = new MagoAdapter();
                return view("Vista1",['personaje'=>$Mago]);

                break;
            case 4:
                $Pistol = new PistoleroAdapter();
                return view("Vista1",['personaje'=>$Pistol]);

                break;
        }

        return $a;
    } 

    
}
