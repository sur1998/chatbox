<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $fillable=['message'];
    
    public function user(){
        return $this->belongsTo(User::class);
    }
}
