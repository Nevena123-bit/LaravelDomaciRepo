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
        if($user->prodavnicas==null){
            return $user;
        }else 
        return $user->prodavnicas;

    }
    public function getAllInfo(){
        return user_prodavnica::all();
    }
}
