 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Document</title>
    @include('frontend.partsial-link.style')
    <style>
    
    .popover{
    width:1283px;
    height:250px;
    max-width:1290px !important;
    margin-left: -8px;
    }
    #popover-content {
    width:1250px;
    height:250px;
    max-width:none;    /*  // Required for popovers wider than 276px (Bootstrap's max-width for popovers) */
    }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark sticky-top" style="background-color: #232f3e;">
      {{-- Toggler/collapsibe Button --}}
      {{-- Toggler/collapsibe Button --}}
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      {{-- navbar logo --}}
      {{-- navbar logo --}}
      <a class="navbar-brand" href="#"><img src="{{asset('images/logo.png')}}" alt="logo image" width="60px;"></a>
      
      {{-- Navbar iteam --}}
      {{-- Navbar iteam --}}
      <div class="navbar-collapse collapse" id="navbarColor01" style="">
        <ul class="navbar-nav mr-auto">
          <a class="nav-item nav-link active" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link active" href="{{ route('products') }}">Products <span class="sr-only">(current)</span></a>
          {{-- target for popup content --}}
          {{-- target for popup content men--}}
          <a class="nav-item nav-link active" data-toggle="popover" id="men"  href="#">Men</a>

              <div id="popover-content_men" class="d-none clearfix">
      <div class="d-inline-block float-left" style="width:40px;height: 250px">
        <span class="font-weight-bold">Men's collection</span> <br>
        <a href="#" class="text-dark">Shirt</a><br>
        <a href="#" class="text-dark">T-shirt</a><br>
      </div>
      <div class="d-inline-block float-left" style="width:400px">
        <a class="navbar-brand" href="#"><img src="{{asset('images/products/men/shirt/1.png')}}" alt="men image" height="120px;"></a> <br>
        <span>shirt</span>
      </div>
      <div class="d-inline-block float-left" style="width:400px">
        <a class="navbar-brand" href="#"><img src="{{asset('images/products/men/t-shirt/1.png')}}" alt="men image" height="120px;"></a> <br>
        <span>T-shirt</span>
      </div>
    </div>

          {{-- target for popup content women--}}
          <a class="nav-item nav-link active" data-toggle="popover" data-container="#popover-content_women" id="women"  href="#">Women</a>
          {{-- target for popup content child--}}
          <a class="nav-item nav-link active" data-toggle="popover" data-container="#popover-content_child"   href="#">child</a>
        </ul>
        {{--form search field and button--}}
        {{--form search field and button--}}
        <form class="form-inline mb-4 my-sm-1">
          <input class="form-control mr-sm-1 textbox" type="search" placeholder="" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
    {{-- loaded popup content --}}
    {{-- loaded popup content --}}
    {{-- loaded popup content men--}}
    <div id="popover-content_men" class="d-none clearfix">
      <div class="d-inline-block float-left" style="width:40px;height: 250px">
        <span class="font-weight-bold">Men's collection</span> <br>
        <a href="#" class="text-dark">Shirt</a><br>
        <a href="#" class="text-dark">T-shirt</a><br>
      </div>
      <div class="d-inline-block float-left" style="width:400px">
        <a class="navbar-brand" href="#"><img src="{{asset('images/products/men/shirt/1.png')}}" alt="men image" height="120px;"></a> <br>
        <span>shirt</span>
      </div>
      <div class="d-inline-block float-left" style="width:400px">
        <a class="navbar-brand" href="#"><img src="{{asset('images/products/men/t-shirt/1.png')}}" alt="men image" height="120px;"></a> <br>
        <span>T-shirt</span>
      </div>
    </div>
    {{-- loaded popup content women--}}
    {{-- loaded popup content women--}}
    <div id="popover-content_women" class="d-none clearfix">
      <div class="d-inline-block float-left" style="width:40px;height: 250px">
        <span class="font-weight-bold">Wen's collection</span> <br>
        <a href="#" class="text-dark">Sari</a><br>
        <a href="#" class="text-dark">Top's</a><br>
      </div>
      <div class="d-inline-block float-left" style="width:400px">
        <a class="navbar-brand" href="#"><img src="{{asset('images/products/men/shirt/1.png')}}" alt="men image" height="120px;"></a> <br>
        <span>shirt</span>
      </div>
      <div class="d-inline-block float-left" style="width:400px">
        <a class="navbar-brand" href="#"><img src="{{asset('images/products/men/t-shirt/1.png')}}" alt="men image" height="120px;"></a> <br>
        <span>T-shirt</span>
      </div>
    </div>
    {{-- loaded popup content child--}}
    {{-- loaded popup content child--}}
    <div id="popover-content_child" class="d-none clearfix">
      <div class="d-inline-block float-left" style="width:40px;height: 250px">
        <span class="font-weight-bold">Child's collection</span> <br>
        <a href="#" class="text-dark">Shirt</a><br>
        <a href="#" class="text-dark">T-shirt</a><br>
      </div>
      <div class="d-inline-block float-left" style="width:400px">
        <a class="navbar-brand" href="#"><img src="{{asset('images/products/men/shirt/1.png')}}" alt="men image" height="120px;"></a> <br>
        <span>shirt</span>
      </div>
      <div class="d-inline-block float-left" style="width:400px">
        <a class="navbar-brand" href="#"><img src="{{asset('images/products/men/t-shirt/1.png')}}" alt="men image" height="120px;"></a> <br>
        <span>T-shirt</span>
      </div>
    </div>

{{--  --}}
    @include('frontend.partsial-link.script')
    <script>
    
    // $('[data-toggle="popover"]').popover({
    //  trigger: "manual",
    
    //   html: true,
    //   animation: false,
    //  content: function() {
    //              return $('#popover-content').html();
    //          }
    // }).on("mouseenter", function () {
    //         var _this = this;
    //         $(this).popover("show");
    //         $(".popover").on("mouseleave", function () {
    //             $(_this).popover('hide');
    //         });
    //     }).on("mouseleave", function () {
    //         var _this = this;
    //         setTimeout(function () {
    //             if (!$(".popover:hover").length) {
    //                 $(_this).popover("hide");
    //             }
    //         }, 300);
    // });
    // $(document).ready(function() {
    // $('[data-toggle="popover"]').popover({
    //    container: 'body',//take the body size
    //       html: true,
    //       trigger : 'hover',
    //       content: function() {
    //           return $('#popover-content').html();
    //       }
    // });
    
    $(document).ready(function() {
    $('#men').popover({
    container: 'body',//take the body size that is width
    placement: 'bottom',
    html: true,
    trigger : 'manual',
    animation:false,
    content: function() {
    return $('#popover-content_men').html();
    }
    }).on('mouseenter', function () {
    var _this = this;
    $(this).popover('show');
    $('.popover').on('mouseleave', function () {
    $(_this).popover('hide');
    });
    }).on('mouseleave', function () {
    var _this = this;
    setTimeout(function () {
    if (!$('.popover:hover').length) {
    $(_this).popover('hide');
    }
    }, 50);
    });
    
    $('#women').popover({
    container: 'body',//take the body size that is width
    placement: 'bottom',
    html: true,
    trigger : 'manual',
    animation:false,
    content: function() {
    return $('#popover-content_women').html();
    }
    }).on('mouseenter', function () {
    var _this = this;
    $(this).popover('show');
    $('.popover').on('mouseleave', function () {
    $(_this).popover('hide');
    });
    }).on('mouseleave', function () {
    var _this = this;
    setTimeout(function () {
    if (!$('.popover:hover').length) {
    $(_this).popover('hide');
    }
    }, 50);
    });
    var textbox = $('.textbox'),//get the class
    valueLength,
    value = '',
    id = setTimeout(ReadyTyping, 600); //the function starts work  or evaluates an expression after a specified number of ms(where 1s = 1000ms) //To execute a function only once, after a specified number of milliseconds, use the setTimeout() method.
    //Get ready for typing in the placeholder start
    //Get ready for typing in the placeholder start
    function ReadyTyping() {
    clearTimeout(id);//The clearTimeout() method clears a timer set with the setTimeout() method. //clear first clearTimeout(ReadyTyping, 600) call
    
    var options = ["Example1","ex2"]; //search for optiont that can be multiple .if single value no need array just a single value
    
    value = options[Math.floor((Math.random() * options.length ))]; //take array value for the field with random index
    valueLength = 1; //start  at 0//1 then substring (0 to 1)
    id = setInterval(type, 100); //The setInterval() method calls a function or evaluates an expression at specified intervals (in milliseconds)  //The setInterval() method will continue calling the function until clearInterval() is called, or the window is closed. //call type every 50ms
    }
    // Start typing in the placeholder within 50ms
    // Start typing in the placeholder within 50ms
    function type() {
    textbox.attr("placeholder", value.substring(0, valueLength++)); //typing in the place holder untill bellow condition //First character is at index 0
    //when finshed typing clear interval and start erasing
    if (valueLength === value.length + 1) {//
    clearInterval(id);//The ID value returned by setInterval() is used as the parameter for the clearInterval() method.//Stop calling setInterval() //clear clearInterval(type, 50)
    id = setTimeout(ReadyErasing, 600); //start ReadyErasing call once after delay 1000ms
    }
    }
    // Ready to eraging the placeholder value
    // Ready to eraging the placeholder value
    function ReadyErasing() {
    clearTimeout(id); //clear clearTimeout(ReadyErasing, 2000);
    valueLength = value.length; //start at end
    id = setInterval(erase, 100); //call erase every 50ms
    }
    // Start eraging in the placeholder within 50ms
    // Start eraging in the placeholder within 50ms
    function erase() {
    textbox.attr("placeholder", value.substring(0, valueLength--));
    //when finshed erasing clear interval and call type
    if (valueLength < 0) {
    clearInterval(id); //stop call from setInterval() //clear clearInterval(erase, 50)
    id = setTimeout(ReadyTyping, 100); //start over
    }
    }
    });
    </script>
  </body>
</html>