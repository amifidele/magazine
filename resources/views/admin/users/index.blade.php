@extends('layouts.master')
@section('content')
    <div class="w-80 mx-auto">

        <div class="text-center py-4">
            <h1 class="text-3xl">All Users</h1>
        </div>
                        @if(session()->has('message'))
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>{{ session()->get('message') }}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            
                        @endif
                        
        <table class="table table-hover table-dark">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Roles</th>
                <th scope="col">Option</th>
              </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                  <th scope="row">{{ $user->id }}</th>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->email }}</td>
                  <td><p class="" style="color: orange; font-weight: bold;">
                        {{ implode(',',$user->roles()->get()->pluck('name')->toArray()) }}
                     </p>
                  </td>
                    <td>
                        <a href="/admin/users/{{ $user->id }}/edit">
                            <button  class="btn btn-sm btn-primary float-left">Edit</button>
                        </a>
                    <form method="POST" action="{{ Route('admin.users.destroy', $user->id) }}">
                        @csrf
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-sm btn-danger float-right">Delete</button>
                    </form>
                    {{-- <a href="/admin/users/{{ $user->id }}" class="btn btn-sm btn-danger">Delete</a> --}}
                    </td>
                
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>
@endsection