<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Automovil extends Model
{
    private $marca;
    
    public function __construct($marca){
        $this->marca = $marca;
    }
    
    public function getMarca(){
        return $this->marca;
    }
}
