<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coordonnee;
class Testctr extends Controller
{
    public function Coordonnee()
    {
        $all_coordonnees = Coordonnee::all()

        return redirect()->route('dashboard',['
            all_coordonnees'=> $Coordonne]);
            
    }

    
