<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('front.layout.partials.styles')
</head>

<body>

    @include('front.layout.partials.header')

    <main>
        
        @yield('content')

    </main>

    @include('front.layout.partials.footer')

    @include('front.layout.partials.js')
    
</body>
</html>

