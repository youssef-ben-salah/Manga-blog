<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Manga;
use App\Chapter;
use App\Author;
class Manga_detail extends Controller
{
    public function details($id)
    {
        $the_manga = Manga::
        join('authors', 'mangas.author_id', 'authors.id')
        ->where('mangas.id', $id)
        ->select(
            'mangas.id',
            'mangas.name',
            'authors.name as author_name',
            'mangas.cover_image',
            'mangas.summary',
        )
        ->first();
        if ($the_manga) {
            $chapters = Chapter::where('manga_id', $id)->get();
            return view('layouts.Mangas_page',[
                'the_manga' => $the_manga,
                'chapters' => $chapters
            ]);  
        }else{
            return redirect()->route('Dashboard');
        }
    }

    public function details_Ar($id)
    {
        $the_manga = Manga::
        join('authors', 'mangas.author_id', 'authors.id')
        ->where('mangas.id', $id)
        ->select(
            'mangas.id',
            'mangas.name',
            'authors.name as author_name',
            'mangas.cover_image',
            'mangas.summary_ar',
        )
        ->first();
        if ($the_manga) {
            $chapters = Chapter::where('manga_id', $id)->get();
            return view('layouts.Manga_detail_Ar',[
                'the_manga' => $the_manga,
                'chapters' => $chapters
            ]);  
        }else{
            return redirect()->route('Dashboard_Ar');
        }
    }
}
