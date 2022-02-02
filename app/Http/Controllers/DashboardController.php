<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Manga;
use App\HeroSection;

class DashboardController extends Controller
{
    public function Home()
    {
      $all_mangas = Manga::paginate(9);
        return view('Dashboard',['mangas' => $all_mangas]);   
    }
    
    public function Home_Ar()
    {
     $all_mangas = Manga::paginate(9);
        return view('Dashboard_Ar',['mangas' => $all_mangas]);
    }
}
