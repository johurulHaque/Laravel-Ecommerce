<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partsial-link.style')
        @include('partsial-link.script')
        
        
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Styles -->
        <style>
        html, body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
        }
        .full-height {
        height: 100vh;
        }
        .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
        }
        .position-ref {
        position: relative;
        }
        .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
        }
        .content {
        text-align: center;
        }
        .title {
        font-size: 84px;
        }
        .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
        }
        .m-b-md {
        margin-bottom: 30px;
        }
        </style>
    </head>
    <body>
        {{-- sing and register  --}}
        {{-- sing and register  --}}
        <div class="container-fluid gutter">
            <div class="text-right">
                {{-- authencited user --}}
                @auth
                <a href="{{ route('login') }}" class="text-secondary font-weight-bold">Cart</a>
                <span class="text-secondary font-weight-bold">|</span>
                <a class="text-secondary font-weight-bold" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                {{-- if guest --}}
                @else
                <a href="{{ route('logedin') }}" class="text-secondary font-weight-bold">Sign in</a>
                <span class="text-secondary font-weight-bold">|</span>
                <a href="{{ route('registration') }}" class="text-secondary font-weight-bold">Register</a>
                @endauth
            </div>
        </div>
        {{-- nav bar top sticky not work with container--}}
        {{-- nav bar top sticky not work with container--}}
        @include('partsial-view.navbar')
        
        {{-- slider --}}
        {{-- slider --}}
        @include('partsial-view.slider')
        
        
        
        <div class="container">
            <div class="flex-center position-ref full-height">
                @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                    <a href="{{ url('/home') }}">Home</a>
                    @else
                    <a href="{{ route('login') }}">Login</a>
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                    @endif
                    @endauth
                </div>
                @endif
                <div class="content">
                    <div class="title m-b-md">
                        Laravel
                    </div>
                </div>
            </div>        </div>
            
        </body>
    </html>