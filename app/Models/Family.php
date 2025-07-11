<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    use HasFactory;


    public function guests(){

        return $this->hasMany(Guest::class);
    }

    public function responsibleMember(){
        return $this->belongsTo(Guest::class);
    }
    
}
