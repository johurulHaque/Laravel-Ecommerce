<div class="dropdown dropright sticky-top">
  {{-- triger for dropdown --}}
  <button class="dropdown-toggle  btn btn-success" data-toggle="dropdown">Php Index 
  <span style="font-size: 1em; color: Tomato;"><i class="fas fa-angle-double-right"></i></span>
  </button>

  {{-- what item will be dropdown--}}
  <div class="dropdown-menu">
    <a class="dropdown-item btn btn-info" href="#" style="color:white;">Intro || Error</a>
    <a class="dropdown-item btn btn-info" href="#syntax" style="color:white;">Syntax || Variable</a>

    <a class="dropdown-item btn btn-info" href="#datatype"  style="color:white;">Data type || Operator</a>
    <a class="dropdown-item btn btn-info" href="#conditional"  style="color:white;">Conditional || Loop</a>

    <a class="dropdown-item btn btn-info" href="#function" style="color:white;">Array</a>

    <a class="dropdown-item btn btn-info" href="#array" style="color:white;"><b>Array</b>  -> (php || js)</a>
    
    <a class="dropdown-item btn btn-info" href="{{ route('security') }}"  style="color:white;">Security</a>
    
    <a class="dropdown-item btn btn-info" href="{{ route('deeper') }}"  style="color:white;">Digging Deeper</a>
    
    <a class="dropdown-item btn btn-info" href="{{ route('query') }}"  style="color:white;">Query</a>
    <a class="dropdown-item btn btn-info" href="{{ route('database') }}"  style="color:white;">Database</a>
    <a class="dropdown-item btn btn-info" href="{{ route('eloquent') }}"  style="color:white;">Eloquent</a>
    

    <a class="dropdown-item btn btn-info" href="{{ route('testing') }}"  style="color:white;"e>Testing</a>
    {{-- other --}}
    {{-- other --}}
    <a class="dropdown-item btn btn-warning" href="{{ route('javascript') }}" style="color:white;">Javascript</a>
    <a class="dropdown-item btn btn-warning" href="{{ route('mysql') }}" style="color:white;">Mysql</a>
    <a class="dropdown-item btn btn-warning" href="{{ route('explanation') }}" style="color:white;">Larabook</a>

  </div>
</div>

