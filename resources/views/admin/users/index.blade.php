@extends('layouts.master')
@section('content')
    <div class="w-80 mx-auto">

        <div class="text-center py-4">
            <h1 class="text-3xl">All Users</h1>
        </div>
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
                        {{ $user->roles }}
                     </p>
                  </td>
                    <td>
                    <a href="/admin/users/{{ $user->id }}/edit" class="btn btn-sm btn-primary">Edit</a>
                    <a href="/admin/users/{{ $user->id }}" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>
@endsection