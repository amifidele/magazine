@extends('layout.page')
@section('content')
    <div class="w-80 mx-auto pt-5 py-2">
        <a class="btn btn-sm btn-success text-white" href="/">Back Home</a>
    </div>
        <div class="w-80 mx-auto card py-5">
            
                    <div class="px-4 py-3">
                        <h1 class="text-4xl">{{ $article->title }}</h1>
                        <p>{{ $article->introduction }}</p>
                        <p>{{ $article->description }}</p>
                        <span class="text-sm">author : {{ $article->user->name }}</span><br>
                        <span class="text-sm">Article added {{ $article->created_at->diffForHumans() }}</span>
                    </div>
        </div>
    <!-- all comments -->
    <div class="w-90 mx-auto border mt-5"></div>
    <!-- comment section -->
    <div >
       
    </div>
    <div class="w-80 mx-auto mt-5">

        <div class="card my-3 p-3">
            @if(session('success'))
                <div class="alert alert-success text-center">
                    {{ session('success') }}
                </div>
            @endif
            <h1 class="text-2xl">Comment Section . </h1>
            @if(count($article->comments) > 0)
                @foreach($article->comments as $comment)
                    <div class="card bg-white-smoke pt-3 my-2">
                        <h1 class="text-xl text-grey-darker">{{ $comment->name }} . <span class="text-sm">{{ $comment->created_at->diffForHumans() }}</span></h1>
                        <p class="text-grey-darkest">Minus aliquid voluptatem ratione at pariatur. Ea sint molestias autem. Dolorem quis et quis nesciunt exercitationem quasi.</p>
                    </div>
                @endforeach
            @else
                <span class="mt-2 text-grey-darker">Be The First to comment on this article.</span>
            @endif    
        </div>
        <h1 class="text-2xl">Add Comment</h1>
        <form class="" method="post" action="/comment">
            @csrf
            <div class="card-group rounded-0">
                <div class="card border-0 rounded-0">
                <label>Name:</label>
                <input class="form-input" type="text" name="name">
                </div>
                <div class="card border-0 rounded-0">
                <label>Email:</label>
                <input class="form-input" type="email" name="email">
                </div>
            </div>
            <input type="hidden" value="{{ $article->id }}" name="article_id">
            
            <div class="card border-0">
                <label>Comment:</label>
                <textarea class="form-input" type="text" name="comment"></textarea>
                <input type="submit" class="btn btn-success mt-5">
            </div>
            
        </form>
    </div>
@endsection