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
        {{-- sing and register  --}}
        {{-- sing and register  --}}
        @include('frontend.partsial-view.signbar')
        
        {{-- nav bar top sticky not work with container--}}
        {{-- nav bar top sticky not work with container--}}
        @include('frontend.partsial-view.navbar')
        @stack('css')
        
        {{--carosoul slider --}}
        {{--carosoul slider --}}
        @include('frontend.partsial-view.slider')
        
        @yield('content')
        <footer>
            
        </footer>
        {{-- script file --}}
        @include('frontend.partsial-link.script')
        @stack('js')
    </body>
</html>