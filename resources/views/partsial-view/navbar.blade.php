<nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color: #232f3e;">
    <!-- Brand -->
    <a class="navbar-brand" href="#"><img src="{{asset('images/logo.png')}}" alt="logo image" width="60px;"></a>
    {{-- Toggler/collapsibe Button --}}
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    {{-- Navbar links --}}
    <div class="navbar-collapse collapse" id="navbarColor01" style="">
        <ul class="navbar-nav mr-auto">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>  
            <a class="nav-link" href="#">Pricing</a>
            <a class="nav-link" href="#">About</a>
        </ul>

        {{-- search --}}
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2 span10" type="text" placeholder="Prduct,Brand and more.....">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>