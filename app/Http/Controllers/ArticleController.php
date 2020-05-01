<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Category;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = App\Article::orderBy('created_at', 'asc')->paginate(3);
        return view('pages.index')->with('articles', $articles);
    }
    
    public function create()
    {
        $categories = Category::all();
        return view('articles.create')->with('categories', $categories);
    }
    public function store(Request $request)
    {
        $data = request()->validate([
            'title' => 'required',
            'introduction' => 'required',
            'description' => 'required',
            'category_id' => 'required',
        ]);

        $article = new Article;
        $article->title = $request->input('title');
        $article->introduction = $request->input('introduction');  
        $article->description = $request->input('description');
        $article->category_id = $request->input('category_id');
        $article->user_id = Auth::user()->id;
        $article->save();

        return redirect('/')->with('success', 'New Article added successfuly ');

    }
    public function show($id)
    {
        $article = Article::find($id);
        // dd($article->comments);
        return view('articles.show')->with('article', $article);
    }

    // public function comment_row($id){
    //     $comments = Article::find($id)->comment;
    //     return view('articles.show')->with('comments', $comments);
    // }

    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }
}
