@extends('frontend.layouts.master')
@section('carosoul')
<div class="container mt-20">
<h2>Your Cart Iteam</h2>
@if (App\Models\Cart::totalItems()>0)
	<table class="table table-bordered table-stripe">
	<thead>
		<tr>
			<th>No.</th>
			<th>Product title</th>
			<th>Product image</th>
			<th>Product quantity</th>
			<th>Unit price</th>
			<th>Sub total price</th>
			<th>Delete</th>
		</tr>
	</thead>
	<tbody>
		{{-- not value pass direct access --}}
		{{-- not value pass direct access --}}
		{{-- not value pass direct access --}}
		@php $total_price=0;	@endphp
		@foreach (App\Models\Cart::totalCarts() as $cart)
			<tr>
				<td>{{ $loop->index+1 }}</td>
				<td>
					<a href="{{ route('product.show',$cart->product->slug) }}">
						{{ $cart -> product->title }}
					</a>
				</td>
				<td>
					{{-- 20@11.50 vvi --}}
					@if ($cart->product->images ->count() >0)
						<img src="{{asset('images/products/'. $cart->product->images ->first()->image)}}" alt="" width="70px">
					@endif
				</td>
				<td>
					<form class="form-inline" action="{{ route('carts.update',$cart->id) }}" method="post">
						@csrf
						<input type="number" class="form-control" name="product_quantity" value="{{  $cart->product_quantity}}"><br><br>
						<button type="submit" class="btn btn-success ml-1">Update</button>
					</form>
				</td>
				<td>
					{{ $cart->product->price }}TK
				</td>
				<td>
					@php $total_price +=$cart->product->price * $cart->product_quantity;	@endphp
					{{ $cart->product->price * $cart->product_quantity}}TK
				</td>
				<td>
					<form class="form-inline" action="{{ route('carts.delete',$cart->id) }}" method="post">
						@csrf
						<input type="hidden" name="cart_id">
						<button type="submit" class="btn btn-danger">Delete</button>
					</form>
				</td>
			</tr>
		@endforeach
			<tr>
				<td colspan="4"></td>
				<td>Total ammount</td>
				<td colspan="2"><strong>{{ $total_price }}TK.</strong></td>
			</tr>
	</tbody>
</table>
<div class="float-right">
	<a href="{{ route('products') }}" class="btn btn-info btn-lg">Continue shopping.......</a>
	<a href="{{ route('checkouts') }}" class="btn btn-warning btn-lg">Chectout</a>
</div>
@else
<div class="alert alert-danger">
	<h2>There is no item in your cart </h2><br>
	<a href="{{ route('products') }}" class="btn btn-info btn-lg">Continue shopping.......</a>
</div>
	
@endif
</div>
@endsection