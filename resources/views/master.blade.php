<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>e-Shop @yield('title','Home')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/png" size="16x16" href="{{asset('images/shop_online.png')}}" />
        {{-- stylesheet --}}
        @include('frontend.partsial-link.style')
        
    </head>
    <body>
        <h1>hello master</h1>
        @foreach ($user as $value)
            {{ $value->first_name }}
        @endforeach
        
        @yield('content')
        @yield('content1')
    </body>
</html>