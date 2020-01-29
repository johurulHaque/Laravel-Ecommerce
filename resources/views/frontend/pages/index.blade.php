@extends('frontend.layouts.master')

@section('content')
<div class="container">
	<h3>All products</h3>
	@include('frontend.pages.product.partsial.all_products')	
</div>
@endsection
{{-- dynamic --}}
{{--
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
--}}