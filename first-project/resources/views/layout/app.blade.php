<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title')
    </title>
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
</head>
<body>
    @include('layout.header')
    <main>
        <div class="contentbox">
            @include('layout.sidebar')
            <div class="content">
                
                @yield('content')
            </div>
        </div>
    </main>
    @include('layout.footer')

    @stack('scripts')
</body>
</html>