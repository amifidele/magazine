<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function articles(){
        $articles = Article::orderBy('created_at', 'desc')->paginate(20);
        return view('articles.dashview')->with('articles', $articles);
    }
}
