<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ArticlesController extends Controller
{
    
    public function articles() {
        return view('articles');
    
    }
    public function add_articles() {
        request()->validate([
            'name' =>['required'],
            'categorie' =>['required'],
            'texte' =>['required'],
        ]);

        $post = Articles::create([
            'name' => request('name'),
            'categorie' => request('categorie'),
            'texte' => request('texte'),
        ]);
    }
}
