<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function index()
    {
        
    }

    public function create()
    {
        //
    }
    
    public function store(Request $request)
    {
        $data = request()->validate([
            'name' => 'required'
        ]);

        $category = new Category;
        $category->name = $request->input('name');

        return redirect()->back()->with('success', '');
    }
    public function show($id)
    {
        $category = Category::find($id);
        
        return view('category.index')->with('category', $category);
    }
    public function main_article(){

       $category = Category::find(5);
       return view('pages.index')->with('category', $category); 
       
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
