<div class="dropdown dropright sticky-top">
  {{-- triger for dropdown --}}
  <button class="dropdown-toggle  btn btn-success" data-toggle="dropdown">Work next 
  <span style="font-size: 1em; color: Tomato;"><i class="fas fa-angle-double-right"></i></span>
  </button>

  {{-- what item will be dropdown--}}
  <div class="dropdown-menu">
    <a class="dropdown-item btn btn-primary" href="{{ route('laravel') }}" style="color:white;">Home</a>
    <a class="dropdown-item btn btn-info" href="{{ route('archi') }}" style="color:white;">Architecture Concepts(SerCon|SerPro|Faca|Cont)</a>

    <a class="dropdown-item btn btn-info" href="{{ route('route&request') }}"  style="color:white;">The Basic1 (Csrf|Vali|Form|Req|Res)</a>
    <a class="dropdown-item btn btn-info" href="{{ route('controller') }}"  style="color:white;">The Basic2</a>

    <a class="dropdown-item btn btn-info" href="{{ route('blade') }}" style="color:white;">Frontend</a>
    
    <a class="dropdown-item btn btn-info" href="{{ route('security') }}"  style="color:white;">Security</a>
    
    <a class="dropdown-item btn btn-info" href="{{ route('deeper') }}"  style="color:white;">Digging Deeper</a>
    
    
    <a class="dropdown-item btn btn-info" href="{{ route('database') }}"  style="color:white;">Database</a>
    <a class="dropdown-item btn btn-info" href="{{ route('eloquent') }}"  style="color:white;">Eloquent</a>
    

    <a class="dropdown-item btn btn-info" href="{{ route('testing') }}"  style="color:white;"e>Testing</a>
    {{-- command --}}
    {{-- command --}}
    <a class="dropdown-item btn btn-primary" href="{{ route('command') }}"  style="color:white;"e>Command</a>

    {{-- other --}}
    {{-- other --}}
    <a class="dropdown-item btn btn-warning" href="{{ route('php') }}" style="color:white;">Php</a>
    <a class="dropdown-item btn btn-warning" href="{{ route('mysql') }}" style="color:white;">Mysql</a>
    <a class="dropdown-item btn btn-warning" href="{{ route('javascript') }}" style="color:white;">Javascript</a>

  </div>
</div>

