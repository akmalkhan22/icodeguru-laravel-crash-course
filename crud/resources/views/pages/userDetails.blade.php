@extends('app')

@section('title')
    Home
@endsection

@section('content')
    <div class="card">
        <div class="card-header">

            <h2 class="card-title">User Data</h2>

        </div>
        <div class="card-body">
            {{-- @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li style="color: red;">{{ $error }}</li>
                    @endforeach
                </ul>
            @endif --}}
            <div class="row">

                <div class="col-6">
                  <div>
                    Name: {{ $user->name }}
                  </div>
                  <div>
                    Phone: {{ $user->phone }}
                  </div>
                  <div>
                    email: {{ $user->email }}
                  </div>
                  <div>
                    city: {{ $user->city }}
                  </div>
                </div>
                <div class="col-6">
                    <img src="{{ asset('storage/' . $user->image)  }}" class="img-thumbnail" style="width: 50%; height:200px;" id="output"
                        alt="">
                </div>
            </div>

        </div>
    </div>
@endsection
