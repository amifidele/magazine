@extends('layout.page')
@section('content')
    <div class="w-100 mx-auto mt-5">
        <div class="text-center pb-4">
            <h1 class="text-3xl">All Articles Here!</h1>
        </div>
        <div class="row row-cols-1 row-cols-md-6 w-95 mx-auto">
            @foreach($articles as $article)
                <div class="col mb-4">
                    <div class="card h-100">
                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                    <div class="card-body">
                        <h5 class="card-title text-sm">{{ $article->title }}</h5>
                        <!-- <p class="card-text">{{ $article->description }}</p> -->
                        <!-- <p class="text-sm">{{ $article->created_at }}</p> -->
                    </div>
                    <a href="/article/{{ $article->id }}/" class="btn btn-sm btn-success">read more</a>
                    </div>
                </div>
            @endforeach   
            
        </div>
    </div>
        <div class="w-95 pr-3 mx-auto py-4">
            <nav aria-label="Page navigation example justify-content-center">
                {!! $articles->links() !!}
            </nav>
        </div>    
            
@endsection