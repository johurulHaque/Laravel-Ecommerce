@extends('frontend.layouts.master')
@section('content')
<div class="card card-body container mt-20">
	<h2>Confirm item</h2>
	<hr>
	
	<div class="row">
		<div class="col-md-7 border-right">
			@foreach (App\Models\Cart::totalCarts() as $cart)
			<p>
				{{ $cart->product->title }}-
				<strong>{{ $cart->product->price }}</strong>Tk
				{{ $cart->product_quantity }}-iteam
			</p>
			@endforeach
		</div>
		<div class="col-md-5">
			@php
			$total_price =0;
			@endphp
			
			@foreach (App\Models\Cart::totalCarts() as $cart)
			<p>
				@php
				$total_price += $cart->product->price * $cart->product_quantity ;
				@endphp
				
			</p>
			@endforeach
			{{-- shipping_cost vvi --}}
			{{-- shipping_cost vvi --}}
			<p>Total price: <strong>{{$total_price}}</strong></p>
			<p>Total price with shipping cost: <strong>{{$total_price + App\Models\Setting::first()->shipping_cost}}</strong></p>
		</div>
	</div>
	<p>
		<a href="{{ route('cart') }}" class="btn btn-outline-info">Change the carts iteam</a>
	</p>
</div>
<div class="container">
	<div class="row">
		<div class="card card-body mt-4">
			<h3>Shipping Address</h3>
			<hr>
			<form method="POST" action="{{ route('checkouts.store') }}">
				@csrf
				@include('backend.partsials.message')
				<div class="form-group row">
					<label for="name" class="col-md-4 col-form-label text-md-right">Receiver Name</label>
					<div class="col-md-6">
						<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ Auth::check() ? Auth::user()->first_name . Auth::user()->last_name : ''}}" required autocomplete="name" autofocus>
						@error('name')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>
				</div>
				
				<div class="form-group row">
					<label for="phone_no" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>
					<div class="col-md-6">
						<input id="phone_no" type="number" class="form-control @error('phone_no') is-invalid @enderror" name="phone_no" value="{{Auth::check() ?Auth::user()->phone_no : ''}}" required >
						@error('phone_no')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>
				</div>
				
				<div class="form-group row">
					<label for="shipping_address" class="col-md-4 col-form-label text-md-right">Shipping Address</label>
					<div class="col-md-6">
						<textarea id="shipping_address" type="text" class="form-control @error('shipping_address') is-invalid @enderror" name="shipping_address" rows="4" ></textarea>
						@error('shipping_address')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>
				</div>
				<div class="form-group row">
					<label for="message" class="col-md-4 col-form-label text-md-right">Additional message (optional)</label>
					<div class="col-md-6">
						<textarea id="message" type="text" class="form-control @error('message') is-invalid @enderror" name="message" rows="4" > 										{{  Auth::check() ? Auth::user()->message : ''}}
						</textarea>
						@error('message')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>
				</div>
				<div class="form-group row">
					<label for="payment_method" class="col-md-4 col-form-label text-md-right">Payment method</label>
					<div class="col-md-6">
						<select name="payment_method_id" id="payments" required>
							<option value="">Please select a payment method</option>
							@foreach ($payments as $payment)
							<option value="{{ $payment->short_name }}">{{ $payment->name }}</option>
							@endforeach
						</select>
						@foreach ($payments as $payment)
						
							@if ($payment->short_name == "cash_in")
							<div id="payment_{{ $payment->short_name }}" class="hidden" >
								<h3>For Cashin there is nothing.Just click finish for finish order</h3><br>
								<small>You will get your product in two or three bussiness days.</small>
							</div>

							@else
							<div id="payment_{{ $payment->short_name }}" class="hidden" >
								<h3>{{ $payment->name }}:-payment</h3>
								<p>
									<strong>{{ $payment->name }}No:{{ $payment->no }}</strong><br>
									<strong>Account Type:{{ $payment->type }}</strong>

								</p>
								<div class="alert alert-success">
									Please send the money to this Bkash No and write your transaction code below there..
								</div>
								
							</div>
							@endif
							@endforeach
							{{-- inside foreach it will be duplicate --}}
							<input type="text" name="transaction_id" id="transaction_id" class="form-control hidden" placeholder="Enter transaction code">
						</div>
					</div>


					<div class="form-group row mb-0">
						<div class="col-md-6 offset-md-4">
							<button type="submit" class="btn btn-primary btn-block">
							Order now
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div> <br>
	@endsection
	{{-- master a yiels korao pathao jaba ..Verify which is better later --}}
	@push('js')
	<div class="hidden">
		<script>
			$("#payments").change(function(){
				$payment_method =$("#payments").val();
				// 22@16.55
				if($payment_method == "cash_in"){
					$("#payment_cash_in").removeClass('hidden');
					$("#payment_bkash").addClass('hidden');
					$("#payment_rocket").addClass('hidden');
				}else if($payment_method == "bkash"){
					$("#payment_bkash").removeClass('hidden');
					$("#payment_cash_in").addClass('hidden');
					$("#payment_rocket").addClass('hidden');
					$("#transaction_id").removeClass('hidden');

				}else if($payment_method == "rocket"){
					$("#payment_rocket").removeClass('hidden');
					$("#payment_bkash").addClass('hidden');
					$("#payment_cash_in").addClass('hidden');
					$("#transaction_id").removeClass('hidden');
				}
		$("#paymentDiv").removeClass('hidden');
		})
		</script>
		
	</div>
	@endpush
	@push('css')
	<style>
		.hidden{
			display:none;
			}
	</style>
	@endpush