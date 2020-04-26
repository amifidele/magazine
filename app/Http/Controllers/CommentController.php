<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Article;

class CommentController extends Controller
{
    public function index()
    {
        
    }

    public function create()
    {
        return view('articles.show');
    }
    
    public function store(Request $request)
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required',
            'comment' => 'required',
            'article_id' => 'required'
        ]);

        $comment = new Comment;
        $comment->name = $request->input('name');
        $comment->email = $request->input('email');  
        $comment->comment = $request->input('comment');
        $comment->article_id = $request->input('article_id');
        $comment->save();

        return redirect()->back()->with('success', 'Comment added succesfully');

    }
    public function show($id)
    {
        //
    }
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
