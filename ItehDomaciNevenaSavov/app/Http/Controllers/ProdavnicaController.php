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
    public function getProdavnica($prodavnicaId){
        $prodavnica=  prodavnica::find($prodavnicaId);
        if($prodavnica==null) abort(404);
        return $prodavnica;
    }
    public function insert()
    {
        
     
       $prodavnica =new prodavnica();
       
        $naziv='TestNaziv';
        $ocena=5;
        $starost=10;
        $grad='TestGrad';
        $prodavnica->grad=$grad;
        $prodavnica->naziv=$naziv;
        $prodavnica->starost=$starost;
        $prodavnica->ocena=$ocena;
        $prodavnica->proizvodjac_id=4;
        $result=$prodavnica->save();
        return $result;
    }
}
