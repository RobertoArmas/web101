<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Message extends Model
{
    protected $fillable = ['text','user_id','to_user_id'];
    public function user(){
        return $this->belongsTo(User::class);
        
    }
    public function to(){
        return $this->belongsTo(User::class,'to_user_id');
        
    } 
    
}
