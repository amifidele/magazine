<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class PagesController extends Controller
{
    public function index() {
        $articles = Article::orderBy('created_at', 'desc')->paginate('6');
        return view('pages.index')->with('articles', $articles);
    }
}
