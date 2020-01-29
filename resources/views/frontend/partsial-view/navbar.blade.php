{{-- push css --}}
{{-- push css --}}
@push('css')
<link rel="stylesheet" href="{{ asset('css/custome_css/nav_popover.css') }}">
@endpush
{{-- master navbar --}}
{{-- master navbar --}}
<nav class="navbar navbar-expand-md navbar-dark sticky-top" style="background-color: #232f3e;">
    {{-- navbar logo --}}
    {{-- navbar logo --}}
    <a class="navbar-brand" href="#"><img src="{{asset('images/logo.png')}}" alt="logo image" width="60px;"></a>
    {{-- Toggler/collapsibe Button --}}
    {{-- Toggler/collapsibe Button --}}
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    {{-- Navbar iteam --}}
    {{-- Navbar iteam --}}
    <div class="navbar-collapse collapse" id="navbarCollapse" style="">
        <ul class="navbar-nav mr-auto">
            <a class="nav-item nav-link active" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link active" href="{{ route('products') }}">Products <span class="sr-only">(current)</span></a>
            {{-- target for popup content --}}
            {{-- target for popup content men--}}
            <a class="nav-item nav-link active" id="men_popover" data-toggle="popover" href="#">Men</a>
            {{-- target for popup content women--}}
            <a class="nav-item nav-link active" id="women_popover" data-toggle="popover" data-container="#popover-content_women"  href="#">Women</a>
            {{-- target for popup content child--}}
            <a class="nav-item nav-link active" id="child_popover" data-toggle="popover" data-container="#popover-content_child"   href="#">child</a>
        </ul>
        {{--form search field and button--}}
        {{--form search field and button--}}
        {{-- methd look --}}
        <form class="form-inline mb-4 my-sm-1" action="{{ route('search') }}" method="get">
            <input class="form-control mr-sm-1 textbox" type="search" name="search" placeholder="" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
{{-- loaded popup content --}}
{{-- loaded popup content men--}}
{{-- loaded popup content men--}}
<div id="popover-content_men" class="d-none clearfix">
    <div class="d-inline-block float-left">
        <span class="font-weight-bold">Men's collection</span> <br>
        <a href="#" class="text-dark">Shirt</a><br>
        <a href="#" class="text-dark">T-shirt</a><br>
    </div>
    <div class="d-inline-block float-left">
        <a class="navbar-brand" href="#"><img src="{{asset('images/products/men/shirt/1.jpg')}}" alt="men shirt" width="150px" height="130px;"></a> <br>
        <span>shirt</span>
    </div>
    <div class="d-inline-block float-left" >
        <a class="navbar-brand" href="#"><img src="{{asset('images/products/men/t-shirt/1.jpg')}}" alt="men tshirt" width="150px" height="130px;"></a> <br>
        <span>T-shirt</span>
    </div>
</div>
{{-- loaded popup content women--}}
{{-- loaded popup content women--}}
<div id="popover-content_women" class="d-none clearfix">
    <div class="d-inline-block float-left" >
        <span class="font-weight-bold">Wen's collection</span> <br>
        <a href="#" class="text-dark">Sari</a><br>
        <a href="#" class="text-dark">Top's</a><br>
    </div>
    <div class="d-inline-block float-left">
        <a class="navbar-brand" href="#"><img src="{{asset('images/products/women/sari/0.jpg')}}" alt="women sari" width="150px" height="130px;"></a> <br>
        <span>Sari</span>
    </div>
    <div class="d-inline-block float-left" >
        <a class="navbar-brand" href="#"><img src="{{asset('images/products/women/top/3.jpg')}}" alt="women top" width="150px" height="130px;"></a> <br>
        <span>Top's</span>
    </div>
</div>
{{-- loaded popup content child--}}
{{-- loaded popup content child--}}
<div id="popover-content_child" class="d-none clearfix">
    <div class="d-inline-block float-left">
        <span class="font-weight-bold">Child's collection</span> <br>
        <a href="#" class="text-dark">Shirt</a><br>
        <a href="#" class="text-dark">T-shirt</a><br>
    </div>
    <div class="d-inline-block float-left" >
        <a class="navbar-brand" href="#"><img src="{{asset('images/products/child/shirt/1.jpg')}}" alt="child shirt" width="150px" height="130px;"></a> <br>
        <span>shirt</span>
    </div>
    <div class="d-inline-block float-left" >
        <a class="navbar-brand" href="#"><img src="{{asset('images/products/child/t-shirt/1.jpg')}}" alt="child tshirt" width="150px" height="130px;"></a> <br>
        <span>T-shirt</span>
    </div>
</div>
{{-- push js --}}
{{-- push js --}}
@push('js')
<script src="{{ asset('js/custom_js/nav_popover.js') }}"></script>
@endpush
{{-- key ponit at a galance--}}
{{-- key ponit at a galance--}}
{{--
collapse(পতন) >>>   To control (show/hide) the collapsible content
arial-controls >>>  The aria-controls attribute is a 'relationship attribute' which denotes which elements has control over and affects.
arial-expand >>>    true means a section that this element denotes is currently expanded (visible), false means the expandable section or items is/are currently collapsed (invisible)
arial lebel >>> Use it in cases where a text label is not visible on the screen. ... This attribute can be used with any typical HTML element; it is not limited to elements that have 
popover>>>  data-container on <a> is not responsible for show the loaded content .The loaded content shown by jquery return:...
    --}}
{{-- next to do after work done--}}
{{-- next to do after work done--}}
{{-- 
 1.effect underline when hove menu
2.custom the menu on xs device --}}
