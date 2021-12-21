<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proizvodjac extends Model
{
    use HasFactory;
  
    public function prodavnicas()
    {
        return $this->belongsToMany(prodavnicas::class);
    }
}
