{{-- sing and register  --}}
{{-- sing and register  --}}
{{-- sing and register  --}}
<div class="container-fluid nogutter">
    <div class="text-right">
        {{--if user is signin or authencited user --}}
        {{--if user is signin or authencited user --}}
        @auth
        <a class="text-secondary font-weight-normal"> <img src="{{ App\Helpers\ImageHelper::getUserImage(Auth::user()->id) }}" alt="" class="img rounded-circle" style="width: 26px"></a>
        <a class="text-secondary font-weight-normal" href="#"> {{ Auth::user()->username }}</a>
        <span class="text-secondary font-weight-normal">|</span>
        <a href="{{ route('cart') }}" class="text-secondary font-weight-normal">
                    <button class="btn btn-success">
                    <span>Cart</span>
                    <span class="badge badge-danger" id="totalItems">{{ App\Models\Cart::totalItems() }}</span>
                    </button>
                </a>
        <span class="text-secondary font-weight-normal">|</span>
        
        {{-- signout functionality <a> target the form down--}}
            {{-- signout functionality <a> target the form down--}}
                <a class="text-secondary font-weight-normal" href="" onclick="event.preventDefault();
                    document.getElementById('signout-form').submit();">{{ __('Signout') }}
                </a>
                {{-- signout form --}}
                <form id="signout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                
                {{-- if guest or not signin--}}
                {{-- if guest or not signin--}}
                @else
                <a href="{{ route('cart') }}" class="text-secondary font-weight-normal">
                    <button class="btn btn-success">
                    <span>Cart</span>
                    <span class="badge badge-danger">{{ App\Models\Cart::totalItems() }}</span>
                    </button>
                </a>
                <span class="text-secondary font-weight-normal">|</span>

                <a href="{{ route('login') }}" class="text-secondary font-weight-normal">Login</a>
                <span class="text-secondary font-weight-normal">|</span>
                <a href="{{ route('register') }}" class="text-secondary font-weight-normal">Register</a>
                @endauth
            </div>
        </div>