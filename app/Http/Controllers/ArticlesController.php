<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function articles() {
        return view('articles');
    
    }
    public function add_articles() {
        $articles = DB::insert('INSERT INTO articles');
        $article->name = request('name');
        $article->texte = request('texte');
        $article->save();
    }
}
