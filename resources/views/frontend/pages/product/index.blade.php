{{-- all products --}}
{{-- all products --}}
@extends('frontend.layouts.master')
@section('content')
<!--   2nd part-->
<!--   2nd part-->
<!--   2nd part-->
<div class="container">
    <h3>All Product</h3>
    <div class="row">
        
        
        @foreach ($products as $product)
        {{-- expr --}}
        {{-- inlude product>>partsial>>allproduct --}}
        <div class="col-md-3">
            <div class="card">
                @php $i=1; @endphp
                @foreach ($product ->images as $image)
                @if ($i>0)
                    <img class="card-img-top feature-img" src="{{asset('images/products/'. $image -> image)}}" alt="Card image">
                @endif
                
                @php $i--; @endphp
                @endforeach
                
                <div class="card-body">
                    <h4 class="card-title">{{ $product -> title }}</h4>
                    <p class="card-text">{{ $product -> price  }}BDT. </p>
                    <a href="#" class="btn btn-outline-warning ">Add to cart</a>
                </div>
            </div>
        </div>
        
        @endforeach
    </div>
</div>
<div class="pagination">
    {{ $products ->links() }}
</div>
@endsection