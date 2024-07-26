@extends('app')

@section('title')
    Home
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <div class="d-flex justify-content-between">
            <h2 class="card-title">User List</h2>
            <a href="{{ url('/add') }}" class="btn btn-success">Add</a>
        </div>
    </div>

    <div class="card-body">
      @session('status')
        <span class="alert alert-success my-2">{{ $value }}</span>
      @endsession
<table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email Address</th>
        <th scope="col">Phone</th>
        <th scope="col">city</th>
        <th scope="col">Image</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($data as $user )
      <tr>
        <th scope="row">{{ $user->id }}</th>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->phone }}</td>
        <td>{{ $user->city }}</td>
        <td>
          <img style="width: 100px; height:100px;" src="{{ asset('storage/' . $user->image)  }}" alt="">
        </td>
        <td>
          <a href="{{ url('/viewUserData/'.$user->id) }}" class="btn btn-primary btn-sm">View</a>
          <a href="{{ url('/edit/'. $user->id) }}" class="btn btn-warning btn-sm">update</a>
          <a href="{{ url('/delete/'. $user->id) }}" class="btn btn-danger btn-sm">Delete</a>
        </td>
      </tr>
      @endforeach
      
    
    </tbody>
  </table>
</div>
</div>
@endsection