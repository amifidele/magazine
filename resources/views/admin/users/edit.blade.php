@extends('layouts.master')
@section('content')
    <div class="w-80 mx-auto">

        <div class="text-center py-4">
            <h1 class="text-3xl">Edit user  {{ $user->name }} </h1>
        </div>
        <div class="card-body">
        <form action="{{ route('admin.users.update', $user) }}" method="POST" > 
               @csrf
               {{ method_field('PUT') }} 
               @foreach ($roles as $role)
               <div class="form-check">
                    <input type="checkbox" name="roles[]" value="{{ $role->id }}"
                    @if($user->roles->pluck('id')->contains($role->id)) checked @endif>
                    <label> {{ $role->name }} </label>
               </div> 
               @endforeach

               <button class="btn btn-primary btn-sm" type="submit">update</button>

               
        </form>
        </div>
        
    </div>
@endsection