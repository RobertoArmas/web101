<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Automovil extends Model
{

    public function getMarca(){
        return $this->marca;
    }

    public function getPrecio(){
    	return $this->precio;
    }
    public function calcularIVA(){
    	return $this->precio*1.12;
    }
}
