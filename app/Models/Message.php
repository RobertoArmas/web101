<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Message extends Model
{
    //Decalrar la relación inversa de no a muchos
    public function user(){
        return $this->belongsTo(User::class);
    }
}
