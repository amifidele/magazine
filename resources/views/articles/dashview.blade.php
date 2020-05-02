@extends('layouts.master')
@section('content')
    <div class="w-100 py-4">
        <div class="w-90 mx-auto">
                <div class="text-center py-3">
                    <h1 class="text-3xl">All articles in Blog</h1>
                </div>
                <table class="table table-hover">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">#id</th>
                        <th scope="col">Title</th>
                        <th scope="col">Author</th>
                        <th scope="col">Added_at</th>
                        <th scope="col">option</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($articles as $article)    
                        <tr>
                        <th scope="row">{{ $article->id }}</th>
                        <td class="text-sm">{{ $article->title }}</td>
                        <td class="text-sm">{{ $article->user->name }}</td>
                        <td class="text-sm">{{ $article->created_at }}</td>
                        <td><a target="_blank" class="btn btn-sm btn-secondary text-white" href="/article/{{ $article->id }}">View</a></td>
                        </tr>
                    @endforeach 
                    
                    </tbody>
              </table>
              
        </div>
    </div>
@endsection