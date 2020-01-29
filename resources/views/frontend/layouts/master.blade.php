<!doctype html>
<html lang="en">
    <head>
        <title>@yield('title','Home') | e-Shop </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

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
        
        <div class="container-fluid nogutter">
            <div class="row">
                {{-- sidebar --}}
                {{-- sidebar --}}
                <div class="col-md-4" >
                    @section('sidebar')
                    @include('frontend.partsial-view.sidebar')
                    @show
                 </div>   {{--carosoul slider dynamin in pages--}}
                    {{--carosoul slider change--}}
                    <div class="col-md-8">
                        @section('carosoul')
                        @include('frontend.partsial-view.carosoul')
                        @show
                    </div>
                </div>
            </div><br>
        </div>
        
        
        @yield('content')
        @stack('css')
        <footer>
            
        </footer>
        {{-- script file --}}
        @include('frontend.partsial-link.script')
        @stack('js')
    </body>
</html>