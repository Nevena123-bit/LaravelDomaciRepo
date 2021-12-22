<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\user_prodavnica;
use Illuminate\Http\Request;

class ProdavnicaUserController extends Controller
{
    public function index($userid)
    {
        $user=User::find($userid);
        if($user==null) abort(404);
    
        return $user->prodavnicas;

    }
    public function getAllInfo(){
        return user_prodavnica::all();
    }
}
