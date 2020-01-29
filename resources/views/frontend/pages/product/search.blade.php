@extends('frontend.layouts.master')

<!--   2nd part-->
<!--   2nd part-->
<!--   2nd part-->
@section('carosoul')
<div class="container">
    <h3>Search Product For <span class="badge badge-info">{{ $search }}</span></h3>
    <div class="row">
        @foreach ($product as $product)
        {{-- expr --}}
        
        <div class="col-md-3">
            <div class="card">
                @foreach ($product ->images as $image)
                <img class="card-img-top feature-img" src="{{asset('images/products/'. $image -> image)}}" alt="Card image">
                @endforeach
                
                <div class="card-body">
                    <h4 class="card-title">{{ $product -> title }}</h4>
                    <p class="card-text">{{ $product -> price  }}</p>
                    <a href="#" class="btn btn-outline-warning ">Add to cart</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
{{-- <div class="pagination">
    {{ $product ->links() }}
</div> --}}
@endsection

