@extends('layouts.app')
@section('content')
<div class="w-60 mx-auto py-5">
        <div class="text-center py-3">
            <h1 class="text-4xl">Add a new Article Here!</h1>
        </div>
        <div class="">
            <form action="/article" method="post" enctype="multipart/form-data">
                @csrf
                <div>
                    <label>Title </label>
                    <input class="form-input" name="title">
                </div><br>
                <div>
                    <label>Category </label>
                    <select class="form-input" name="category_id">
                        <option disabled selected value> -- select any Category -- </option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div><br>
                <div>
                    <label>Introduction</label>
                    <textarea class="form-input" name="introduction"></textarea>
                </div>
                <div>
                    <label>Description</label>
                    <textarea class="form-input" name="description"></textarea>
                </div>
    
                <div class="text-center mt-4">
                    <button class="btn btn-success text-center w-30" type="submit">Save</button>
                </div>
            </form>
        </div>
</div>
@endsection