{{-- certain category with include--}}
{{-- certain category with include--}}
@extends('frontend.layouts.master')
{{-- carousl later --}}
@section('carosoul')
<img src="{{ asset('images/products/woman_top.jpg') }}" alt="" style="width: 800px;height: 550ps;">
@endsection
@section('content')
<!--   2nd part-->
<!--   2nd part-->
<!--   2nd part-->
{{-- structure dont make in inclu file edit it col structure cut & paste here from ll product --}}
<div class="container">
    <h3 class="text-center">All Products in <span class="badge badge-success">{{ $category -> name}}</span></h3>
    {{-- vvi value pass to all_product--}}
    @php
    // eloquent ar moddha kono kicu paginate korta hola method onujaya access korta hoba
    // paginate na korla ki hoba satao identify & also check below
        $products = $category -> products()->paginate(8);
        // $product = $category -> product()->pagination(2);
    @endphp
    @if (count($products) > 0)
    	@include('frontend.pages.product.partsial.all_products')
    @else
    <div class="alert alert-warning"> No item found.</div>	
    @endif
    
</div>
<br>
<div class="pagination text-center">
    {{ $products ->links() }}
</div>
@endsection