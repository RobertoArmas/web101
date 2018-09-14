<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Automovil;

class HomeController extends Controller
{
    public function getHome(){
        $msg = "Hola, Mundo";
        $auto = new Automovil("Ferrari");
        //dd($auto);
        return view('welcome')->with(['mensaje' => $msg,'auto'=>$auto]);
    }
}
