<?php

namespace App\Http\Controllers;

use App\Models\prodavnica;
use App\Models\proizvodjac;
use Illuminate\Http\Request;

class ProdavnicaController extends Controller
{
    public function index()
    {
        
      
        $prodavnicas=prodavnica::all();
     
        return $prodavnicas;
    }
}
