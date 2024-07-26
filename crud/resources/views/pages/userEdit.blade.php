@extends('app')

@section('title')
    User Update
@endsection

@section('content')
<div class="card">
    <div class="card-header">

        <h2 class="card-title">Update User</h2>

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
                <form action="{{ url('/update/'. $user->id) }}" method="post" enctype="multipart/form-data">
                    @csrf 
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" value="{{ $user->name }}"
                            class="form-control @error('name') is-invalid @enderror">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" value="{{ $user->email }}" class="form-control @error('email') is-invalid @enderror">
                        @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">phone</label>
                        <input type="text" name="phone" value="{{ $user->phone }}" class="form-control @error('phone') is-invalid @enderror">
                        @error('phone')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">city</label>
                        <input type="text" name="city" value="{{ $user->city }}" class="form-control @error('city') is-invalid @enderror">
                        @error('city')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Image</label>
                        <input type="file"
                            onchange="document.querySelector('#output').src= window.URL.createObjectURL(this.files[0])"
                            class="form-control" name="image">
                            @error('image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    {{-- <div class="mb-3">
                      <label class="form-label">password</label>
                      <input type="text" name="password" value="{{ $user->password }}" class="form-control @error('password') is-invalid @enderror">
                      @error('password')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
                  </div> --}}

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-6">
                <img src="{{ asset('storage/'. $user->image) }}" class="img-thumbnail" style="width: 50%; height:200px;" id="output"
                    alt="">
            </div>
        </div>

    </div>
</div>
@endsection