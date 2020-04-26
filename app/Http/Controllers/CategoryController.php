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
        //
    }
    public function show($id)
    {
        $category = Category::find($id);
        
        return view('category.index')->with('category', $category);
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
