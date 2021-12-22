<?php

namespace App\Http\Controllers;

use App\Models\prodavnica;
use App\Models\proizvodjac;
use Illuminate\Http\Request;

class ProizvodjacController extends Controller
{
    public function index()
    {
        
      
        $proizvodjaci=proizvodjac::all();
     
        return $proizvodjaci;
    }
    public function getProizvodjac($proizvodjacId)
    {
        $proizvodjac=  proizvodjac::find($proizvodjacId);
        if($proizvodjac==null) abort(404);
            return $proizvodjac;
    }
    public function insert()
    {
        
     
       $proizvodjac =new proizvodjac();
       
        $naziv='TestNaziv';
        $grad='TestGrad';
        $proizvodjac->naziv=$naziv;
        $proizvodjac->grad=$grad;

        $result=$proizvodjac->save();
        return $result;
    }
}
