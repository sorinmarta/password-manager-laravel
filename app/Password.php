<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Password extends Model
{
    protected $fillable = [
        'password', 'used_at'
    ];

    public function users(){
        return $this->belongsTo('\App\User');
    }
}
