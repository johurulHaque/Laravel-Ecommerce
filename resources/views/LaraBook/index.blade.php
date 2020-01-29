<!DOCTYPE html>
<html lang="en">
<head>
  <title>LaraBook- @yield('title','index')</title>
  @include('Larabook.partsial.link')
</head>


<body>
    {{-- START all inside here --}}
    {{-- START all inside here --}}
    {{-- START all inside here --}}
    <div class="container-fluid">
      @section('heading')
        <h1 class="text-center ">Welcome to My Lara-Book</h1>
      @show
      
      
      {{-- include dropdown && yield table --}}
      {{-- include dropdown && yield table --}}
      {{-- include dropdown && yield table --}}
      <div class="row">
        <div class="col-md-2">
            @include('LaraBook.partsial.dropdown')
        </div>

        <div class="col-md-9">
          @yield('table')
        </div>
      </div><br>
      
      
      <div class="row">
        <div class="col-md-12">
          {{-- content section@show that will be overwrite by child --}}
          {{-- content section@show that will be overwrite by child --}}
          {{-- content section@show that will be overwrite by child --}}
          @section('content')
          <div class="row">
            <div class="col-md-6">
              <img class="ml-0" src="{{ asset('images/larabook/architecture/framwork.PNG') }} " alt="model"  style="width:550px;height: 280px;"><br>
              <img class="ml-0" src="{{ asset('images/larabook/architecture/mvc.PNG') }} " alt="model"  style="width:550px;height: 280px;">
            </div>

            <div class="col-md-6">
              <img src="{{asset('images/laravel.jpg')}}" height="280px" width="550px"alt="">
              <img class="ml-0" src="{{ asset('images/larabook/architecture/validation.PNG') }} " alt="model"  style="width:550px;height: 480px;">
            </div>
          </div>


          <h3>By Taylor Otwell</h3>
          <h4> Laravel's first beta release was made available on June 9, 2011, followed by the Laravel 1 release later in the same month.</h4>
          <p>
          Laravel. Laravel is a free, open-source PHP web framework, created by   Taylor Otwell and intended for the development of web applications following the model–view–controller (MVC) architectural pattern and based on Symfony.
          </p><br><br><br>
          <h1>sweet alert global key use korta hoboa <br><br>traversey media 12 ar logic to store in original and resize folder src & add to finish list</h1>

          
          @include('LaraBook.partsial_view.git')<br><br><br><br><br><br>
          {{-- START framwork structure table --}}
          {{-- START framwork structure table --}}
          {{-- START framwork structure table --}}
          @include('LaraBook.partsial_view.framwork')<br><br><br><br><br><br>
          {{-- END framwork structure table --}}
          {{-- END framwork structure table --}}
          {{-- END framwork structure table --}}




          {{-- START good practice & remember table --}}
          {{-- START good practice & remember table --}}
          {{-- START good practice & remember table --}}
          
          @include('LaraBook.partsial_view.information')<br><br><br><br><br><br>
          {{-- END good practice & remember table --}}
          {{-- END good practice & remember table --}}
          {{-- END good practice & remember table --}}


        
          {{-- START Q/A && future project work table --}}
          {{-- START Q/A && future project work table --}}
          {{-- START Q/A && future project work table --}}
          
          @include('LaraBook.partsial_view.project')<br><br><br><br><br><br>
          {{-- END Q/A && future project work table --}}
          {{-- END Q/A && future project work table --}}
          {{-- END Q/A && future project work table --}}


          {{-- START command table --}}
          {{-- START command table --}}
          {{-- START command table --}}
          @include('LaraBook.partsial_view.command')  <br><br><br><br><br>
          {{-- EDN command table --}}
          {{-- EDN command table --}}
          {{-- EDN command table --}}





          {{-- START explanation table --}}
          {{-- START explanation table --}}
          {{-- START explanation table --}}
          @include('LaraBook.partsial_view.explanation')
          {{-- END explanation table --}}
          {{-- END explanation table --}}
          {{-- END explanation table --}}




          {{-- START pakege table --}}
          {{-- START pakege table --}}
          {{-- START pakege table --}}
          @include('LaraBook.partsial_view.pakege and tutorial')
          {{-- END pakege table --}}
          {{-- END pakege table --}}
          {{-- END pakege table --}}




      

          @show
        </div>  
      </div>






      {{-- yield table --}}
      {{-- yield table --}}
      {{-- yield table --}}
      <div class="row ">
        <div class="col-md-8 offset-md-2">
          @yield('table2')
        </div>
      </div>

      <div class="row ">
        <div class="col-md-8 offset-md-2">
          @yield('table3')
        </div>
      </div>


    </div>
   {{-- END all inside here --}}
   {{-- END all inside here --}}
   {{-- END all inside here --}}
</body>
</html>
