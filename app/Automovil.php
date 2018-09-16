<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Automovil extends Model
{
    private $marca;
    //wea
    public function __construct($marca){
        $this->marca = $marca;
    }
    
    public function getMarca(){
        return $this->marca;
    }
}
