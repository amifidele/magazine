@extends('layouts.master')
@section('content')
    <div class="w-80 mx-auto">
        <div class="text-center pt-3">
            <h1 class="text-3xl">Add new Category</h1>
        </div>
        <div class="w-50 mx-auto">
            <form action="/category" method="POST">
                @csrf
                <label>Category Name :</label>
                <input class="form-input" type="text" name="name">
                <div class="text-center">
                    <input class="btn btn-success my-2" type="submit" value="Add">
                </div>
            </form>
        </div>

        <div class="text-center py-4">
            <h1 class="text-3xl">All Categories</h1>
        </div>
        <table class="table table-hover table-dark">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Category Name</th>
                <th scope="col">N. Articles</th>
                <th scope="col">Option</th>
              </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr>
                  <th scope="row">{{ $category->id }}</th>
                  <td>{{ $category->name }}</td>
                  <td><p class="" style="color: red; font-weight: bold;">
                        {{ $category->articles->count() }}
                     </p>
                  </td>
                    <td><a target="_blank" class="btn btn-sm btn-success" href="/category/{{ $category->id }}" >Visit</a></td>
                
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>
@endsection