@extends('layout.app')

@section('title')
    Home
@endsection
@section('content')
    {{-- <h2>welcome to home page</h2>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis quaerat sed, dolore ipsum ex fuga, nulla vero atque at, a voluptas ad quisquam. Voluptates eveniet modi voluptatum placeat dolore magni.</p>
    <div class="image-section">
         <img style="width: 100px; height:100px;" src="{{ asset('images/Watch.jpg') }}" alt="">
    </div> --}}
    @php
        $names = ['bananas', 'apples', 'oragne']
    @endphp

    @isset($names)
    {{-- @foreach ($names as $item )
    {{ $loop->iteration }}: {{ $item }} <br> <br>
 @endforeach --}}
   @forelse ( $names as $item )
        {{ $item }} <br> <br>
    @empty
        <h3>No data found</h3>
    @endforelse
    @endisset
    
    {{-- <br> <br>
    <h2>forelse</h2>
    <br> <br> --}}
    {{-- @forelse ( $names as $item )
        {{ $item }} <br> <br>
    @empty
        <h3>No data found</h3>
    @endforelse --}}

    @empty()
        
    @endempty
@endsection