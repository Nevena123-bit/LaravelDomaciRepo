<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prodavnica extends Model
{
    use HasFactory;
    public function Proizvodjac()
    {
     return $this->hasOne(proizvodjac::class);
    }
    public function users()
    {
     //   return $this->belongsToMany('App\User','users','pica_id','user_id');                 
        return $this->belongsToMany(User::class);
    }
}
