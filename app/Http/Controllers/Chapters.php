<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chapter;
class Chapters extends Controller
{
    public function Chapter_album($id)
    {
        $the_chapter = Chapter::find($id);
        if ($the_chapter) {
           return view('layouts.chapter_page',['the_chapter' => $the_chapter]);  
        }else{
        return redirect()->route('layouts.Mangas_page');
        }
    }

    public function Chapter_album_Ar($id)
    {
        $the_chapter = Chapter::find($id);
        if ($the_chapter) {
           return view('layouts.chapter_Ar',['the_chapter' => $the_chapter]);  
        }else{
        return redirect()->route('layouts.Mangas_page');
        }
    }
}
