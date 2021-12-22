<?php

namespace App\Http\Controllers;

use App\Models\proizvodjac;
use Illuminate\Http\Request;

class ProizvodjacController extends Controller
{
    public function index()
    {
        
      
        $proizvodjaci=proizvodjac::all();
     
        return $proizvodjaci;
    }
}
