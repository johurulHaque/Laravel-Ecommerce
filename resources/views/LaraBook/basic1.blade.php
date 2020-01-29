@extends('LaraBook.index')
@section('title','Basic1')
@section('heading')
	<h1 class="text-center">The Basics</h1>
@endsection
@section('content')
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- url --}}
{{-- url --}}
{{-- url --}}
<h2 id="session" class="text-center"><strong>URL Generation</strong></h2>
<div class="row">
	<div class="col-md-2">
		<div class="list-group">
		  <a href="#url" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">URL Generation</a>
		  <a href="#session" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Session</a>
		  <a href="#validation" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Validation</a>
		  <a href="#error" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Error Handling</a>
		  <a href="#loggin" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Loggin Handling</a>

		  <a href="#form" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Form</a>
		</div>
	</div>
</div><br>

<table class="table table-hover" style="font-size:17px;">
		<tbody>
			{{-- ponit of view --}}
			{{-- ponit of view --}}
			{{-- ponit of view --}}
			<tr class="table-active">		
				<td class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b>#The Basics</b></td>
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/url1.0.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>

				<td class="table-success" style="width: 25%">
				<img class="ml-0" src="{{ asset('images/larabook/basic/url1.1.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>				
			</tr>

			<tr>
				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>

				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>
			</tr>
			{{-- URLs For Named Routes --}}
			{{-- URLs For Named Routes --}}
			{{-- URLs For Named Routes --}}
			<tr class="table-active">		
				<td class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b>#URLs For Named Routes</b></td>
			</tr>
			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/url2.0.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/basic/url2.2.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>

				<td class="table-success" style="width: 25%">
				<img class="ml-0" src="{{ asset('images/larabook/basic/url2.1.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
				<img class="ml-0" src="{{ asset('images/larabook/basic/url2.3.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>				
			</tr>

			<tr>
				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>

				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>
			</tr>

			{{-- URLs For Controller Actions --}}
			{{-- URLs For Controller Actions --}}
			{{-- URLs For Controller Actions --}}
			<tr class="table-active">		
				<td class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b>#URLs For Controller Actions && #Default Values</b></td>
			</tr>
			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/url3.0.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>

				<td class="table-success" style="width: 25%">
				<img class="ml-0" src="{{ asset('images/larabook/basic/url4.0.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>				
			</tr>

			<tr>
				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>

				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>
			</tr>
		</tbody>
</table><br><br><br>


<hr style="border-top:2px dashed orange;">
<hr style="border-top:2px dashed orange;">
<hr style="border-top:2px dashed orange;">		
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- session --}}
{{-- session --}}
{{-- session --}}
<h2 id="session" class="text-center"><strong>HTTP Session(c)</strong></h2>
<div class="row">
	<div class="col-md-2">
		<div class="list-group">
		  <a href="#url" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">URL Generation</a>
		  <a href="#session" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Session</a>
		  <a href="#validation" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Validation</a>
		  <a href="#error" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Error Handling</a>
		  <a href="#loggin" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Loggin Handling</a>

		  <a href="#form" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Form</a>
		  
		</div>
	</div>
</div><br>

<table class="table table-hover" style="font-size:17px;">
		<tbody>
			{{-- ponit of view --}}
			{{-- ponit of view --}}
			{{-- ponit of view --}}
			<tr class="table-active">		
				<td class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b>#Basic Routing</b></td>
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/session1.0.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>

				<td class="table-success" style="width: 25%">
				<img class="ml-0" src="{{ asset('images/larabook/basic/session1.1.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>				
			</tr>

			<tr>
				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>

				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>
			</tr>

			{{-- Introduction --}}
			{{-- Introduction --}}
			{{-- Introduction --}}
			<tr class="table-active">		
				<td class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b>#Introduction</b></td>
			</tr>
			

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/session2.0.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>

				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/session2.1.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>				
			</tr>
			
			{{-- Using The Session --}}
			{{-- Using The Session --}}
			{{-- Using The Session --}}
			<tr class="table-active">		
				<td class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b>#Using The Session</b></td>
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/session2.2.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/basic/session2.4.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/basic/session2.6.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>

				<td class="table-success" style="width: 25%">
				<img class="ml-0" src="{{ asset('images/larabook/basic/session2.3.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
				<img class="ml-0" src="{{ asset('images/larabook/basic/session2.5.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>				
			</tr>

			<tr>
				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>

				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>
			</tr>

			{{-- Adding Custom Session Drivers --}}
			{{-- Adding Custom Session Drivers --}}
			{{-- Adding Custom Session Drivers --}}
			<tr class="table-active">		
				<td class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b>#Adding Custom Session Drivers</b></td>
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/session3.0.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/basic/session3.2.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>

				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/session3.1.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>				
			</tr>

			<tr>
				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>

				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>
			</tr>
		</tbody>
</table>
{{-- laravel Topics	--}}
{{-- laravel Topics --}}
<h4 class="alert alert-warning" style="font-size: 18px;">Laravel Topic</h4>
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#</strong></span><br>
	<span style="color:#20B2AA;"><li><strong>Configuration</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;"><li><strong>Driver Prerequisites</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;">*Database</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;">*Redis</span><span class="bg-dark">(!examine)</span><br>
</ul><br>
{{--  --}}
{{--  --}}
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Using The Session</strong></span><br>
	<span style="color:#20B2AA;"><li><strong>Retrieving Data</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;">*The Global Session Helper</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;">*Retrieving All Session Data</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;">*Determining If An Item Exists In The Session</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;"><li><strong>Storing Data</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;">*Pushing To Array Session Values</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;">*Retrieving & Deleting An Item</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;"><li><strong>Flash Data</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;"><li><strong>Deleting Data</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;"><li><strong>Regenerating The Session ID</strong><span class="bg-dark">(!examine)</span></li></span>
	
</ul><br>
{{--  --}}
{{--  --}}
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Adding Custom Session Drivers</strong></span><br>
	<span style="color:#20B2AA;">*Implementing The Driver</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;">*Registering The Driver</span><span class="bg-dark">(!examine)</span><br>
</ul><br>


<hr style="border-top:2px dashed orange;">
<hr style="border-top:2px dashed orange;">
<hr style="border-top:2px dashed orange;">
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- validation --}}
{{-- validation --}}
{{-- validation --}}
<h2 id="validation" class="text-center"><strong>Validation(c)</strong></h2>
<div class="row">
	<div class="col-md-2">
		<div class="list-group">
		  <a href="#url" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">URL Generation</a>
		  <a href="#session" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Session</a>
		  <a href="#validation" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Validation</a>
		  <a href="#error" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Error Handling</a>
		  <a href="#loggin" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Loggin Handling</a>

		  <a href="#form" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Form</a>
		  
		</div>
	</div>
</div><br><br>
{{-- table --}}
{{-- table --}}
{{-- table --}}
<table class="table table-hover" style="font-size:17px;">
		<tbody>
			{{-- Validation Quickstart --}}
			{{-- Validation Quickstart --}}
			{{-- Validation Quickstart --}}
			<tr class="table-active">		
				<td id="routing" class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD	;color: white; font-size: 18px;"><b>#Validation Quickstart</b></td>
			</tr>
			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/validation1.0.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/basic/validation1.2.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/basic/validation1.4.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/basic/validation1.6.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
				</td>

				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/validation1.1.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/basic/validation1.3.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/basic/validation1.5.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
				</td>				
			</tr>
			<tr>
				<td class="table-dark" style="width: 25%;color: white">
					
				</td>

				<td class="table-dark" style="width: 25%;color: white">
				</td>
			</tr>
			{{-- Form Request Validation --}}
			{{-- Form Request Validation --}}
			{{-- Form Request Validation --}}
			<tr class="table-active">		
				<td id="Parameters" class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b>#Form Request Validation</b></td>
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/validation2.0.png') }} " alt="model"  style="width:550px;height:560px;">
					<img class="ml-0" src="{{ asset('images/larabook/basic/validation2.2.png') }} " alt="model"  style="width:550px;height:560px;">
					<img class="ml-0" src="{{ asset('images/larabook/basic/validation2.4.png') }} " alt="model"  style="width:550px;height:560px;">
				</td>

				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/validation2.1.png') }} " alt="model"  style="width:550px;height:560px;">
					<img class="ml-0" src="{{ asset('images/larabook/basic/validation2.3.png') }} " alt="model"  style="width:550px;height:560px;">
				</td>				
			</tr>
			<tr>
				<td class="table-dark" style="width: 25%;color: white">

				</td>

				<td class="table-dark" style="width: 25%;color: white">
				
				</td>
			</tr>
			
			{{-- Manually Creating Validators --}}
			{{-- Manually Creating Validators --}}
			{{-- Manually Creating Validators --}}
			<tr class="table-active">		
				<td id="Route" class="text-center" colspan="4"  scope="col" style="background-color:#6A5ACD;color: white; font-size: 18px;"><b>#Manually Creating Validators</b></td>
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/validation3.0.png') }} " alt="model"  style="width:550px;height: 560px;">
					<img class="ml-0" src="{{ asset('images/larabook/basic/validation3.2.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>

				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/validation3.1.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>				
			</tr>

			<tr>
				<td class="table-dark" style="width: 25%;color: white;">
				</td>

				<td class="table-dark" style="width: 25%;color: white;">
				</td>
			</tr>


			{{-- Working With Error Messages --}}
			{{-- Working With Error Messages --}}
			{{-- Working With Error Messages --}}
			<tr class="table-active">		
				<td id="Groups" class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b>#Working With Error Messages</b></td>
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/validation4.0.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/basic/validation4.2.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
				</td>

				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/validation4.1.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/basic/validation4.3.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>				
			</tr>

			<tr>
				<td class="table-dark" style="color;white;width: 25%">
					
				</td>

				<td class="table-dark" style="color;white;width: 25%">
					
				</td>
			</tr>

			{{-- model binding --}}
			{{-- model binding --}}
			{{-- model binding --}}
			<tr class="table-active">		
				<td id="Binding" class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b>##</b></td>
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/validation5.0.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/basic/validation6.0.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
				</td>

				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/validation6.1.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/basic/validation7.0.png') }} " alt="model"  style="width:550px;height: 300px;">
				</td>				
			</tr>

			<tr>
				<td class="table-dark" style="color;white;width: 25%">
				</td>

				<td class="table-dark" style="color;white;width: 25%">
				</td>
			</tr>

			{{-- Custom Validation Rules --}}
			{{-- Custom Validation Rules --}}
			{{-- Custom Validation Rules --}}
			<tr class="table-active">		
				<td id="Groups" class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b>#Custom Validation Rules</b></td>
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/validation8.0.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/basic/validation8.2.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/basic/validation8.4.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/basic/validation8.6.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/basic/validation8.8.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
				</td>

				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/validation8.1.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/basic/validation8.3.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/basic/validation8.5.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/basic/validation8.7.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
				</td>				
			</tr>

			<tr>
				<td class="table-dark" style="color;white;width: 25%">
				
				</td>

				<td class="table-dark" style="color;white;width: 25%">
					
				</td>
			</tr>
			

		</tbody>
</table><br><br><br>
{{--  --}}
{{--  --}}
<li><span class="text-secondary" style="font-size: 18px;">Define validation: </span>Laravel's base controller class uses a ValidatesRequests trait which provides a convenient method to validate incoming HTTP request with a variety of powerful validation rules.</li>
	
	
	<li><span class="text-secondary">Custome Validation: </span> Laravel provides custom form requests to validate the request data before they arrived into the controller.Done by:<span class="text-danger" style="font-size: 18px;">App\Http\Requests</span> </li>
	<li><span class="text-secondary" style="font-size: 18px;">Use of Authentication: </span>use Auth; for authentication servise purpose.</li>
	<li><span class="text-secondary" style="font-size: 18px;">Use of Model: </span>use App/model(with location); for DB opration through model.</li>
	<li><span class="text-secondary" style="font-size: 18px;">Use of Pakege/Library: </span>use Name of that(with location if have); for DB opration through model.</li>
{{-- how it work --}}
{{-- how it work --}}
<span style="background-color:green;color: white">How header works...</span><br><br>
<ul style="list-style-type:decimal;font-size: 17px;">
	<li><span class="text-danger" style="font-size: 18px;">Illuminate\Http\Request.</span> extends by >>> <span class="text-danger" style="font-size: 18px;">Illuminate\Foundation\Http\FormRequest</span></li>
	<li><span class="text-danger" style="font-size: 18px;">Illuminate\Foundation\Http\FormRequest</span> >>> exteds by <span class="text-danger" style="font-size: 18px;">App\Http\Requests</span>is a namespace with one default class Request that extends </li>
</ul>

{{-- more about --}}
{{-- more about --}}
<span style="background-color:green;color: white">More Detail...</span><br><br>
<ul style="list-style-type:decimal;font-size: 17px;">
	<li></li>
	<li></li>
	<li>App\Http\Requests >>By default, there are two functions in the request class. In authorize() function we can authenticate the user whether he can perform the action or not and the other rule() function will just return the array of rules that needs to be implemented.</li>
	<li><strong>Dispatcher</strong> is a Laravel artisan command scheduling tool used to schedule artisan commands within your project so you don't need to touch the crontab. This sounds brilliant for shared hosts and on-premise apps.</li>
</ul>
<p>++++++++++++++++++++++++++++req or validation upper  part</p>
<span class="alert alert-primary" style="font-size: 18px;">At a galance</span><br><br>
<ul style="list-style-type:decimal;font-size: 17px;">
	<li>Laravel's base controller class uses a ValidatesRequests trait which provides a convenient method to validate incoming HTTP request with a variety of powerful validation rules.</li>
	<li class="alert alert-danger">another stay  app>>http>>Request>>(make:request[name]) .
		<ul>How to use 
			<li>type hint the name of request instead of Request </li>
			<li>It check validate before go inside the function (hit the url)</li>
		</ul>
	</li>
	<li> we will use the validate method provided by the Illuminate\Http\Request object. </li>
	<li><strong> If the validation fails :</strong>
	 In the case of a traditional HTTP request, a redirect response will be generated, while a JSON response will be sent for AJAX requests & the user back to their previous location..Otherwise the controller continue the execution.
	</li>
	<li>Since all form requests extend the base Laravel request class, we may use the user method to access the currently authenticated user.</li>
</ul>
{{-- validation msg --}}
<span class="alert alert-primary" style="font-size: 18px;">laravel validation & custome msg display.</span><br><br>
	<ul style="list-style-type:decimal;font-size: 17px;">
		<li class="text-danger">Note: When using the regex / not_regex patterns, it may be necessary to specify rules in an array instead of using pipe delimiters, </li>
		<li class="text-danger">used confirmed after regex on rule.</li>
		<li class="text-danger">The regex rules share an error message by default—i.e. four failing regex rules result in one error message.</li>
		<li>email and email.email same.</li>
		<li class="text-danger">unique which table related (Ex:unique:users)</li>
		<li class="text-danger">:attribute to grab the field name in custome msg.</li>
		<li class="text-danger">If a field would null then must be ensure  otherwise null value take as error (both in migration as)</li>
		<li>bail sacn by serial --if aone error then dont check other</li>
		<li>pass & cpass .msg gram cpass from pass(donot use rule 'same:password' in cpass)</li>
	</ul><br><br>

	{{-- form some rule --}}
	{{-- form some rule --}}
	{{-- form some rule --}}
	{{-- form some rule --}}
	{{-- form some rule --}}
	<hr style="border-top: 2px dashed gray;">
	<hr style="border-top: 2px dashed gray;">
	<h2 class="alert alert-primary" id="form" style="font-size: 18px;">Form ins and out</h2>
	<ul style="list-style-type:decimal;font-size: 17px;">
		<li>((old('field_name'))) preserve the existing value if form is not submit</li>
		<li>If a field would null then must be ensure otherwise null value take as error (Ex:textarea)</li>
	</ul>
	<hr style="border-top: 2px dashed gray;">
	<hr style="border-top: 2px dashed gray;">
{{-- laravel --}}
{{-- laravel --}}
<h4 class="alert alert-warning" style="font-size: 18px;">Laravel Topic</h4>
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2"><strong>#Validation Quickstart</strong></span>
	<span style="color:#20B2AA;"><li><strong>Defining The Routes</strong></li></span>
	<span style="color:#20B2AA;"><li><strong>Creating The Controller</strong></li></span>
	<span style="color:#20B2AA;"><li><strong>Writing The Validation Logic</strong></li></span>
	<pre class="alert alert-secondary">$this->validate($request, [
    	// Your rules], [ // messages]);
    </pre>	
	<pre class="alert alert-secondary">$validate = Validate::make($request->all(), [
    	// your rules], [// messages])->validate(); //automatic redirect
    </pre>
    <p>This is manually>>Also can do with variable : $validator = Validator::make($input, $rules, $messages);</p>	
   	<pre class="alert alert-secondary"> $request->validate(, [
    // Your rules], [// messages]);}
	</pre>

	<span style="color:#20B2AA;">*Stopping On First Validation Failure</span><br>
	<span style="color:#20B2AA;">*A Note On Nested Attributes:</span><br>
	<span class="text-danger">If your HTTP request contains "nested" parameters, you may specify them in your validation rules using "dot" syntax:</span>
	
	<span style="color:#20B2AA;"><li><strong>Displaying The Validation Errors:</strong></li></span>
	Again, notice that we did not have to explicitly bind the error messages to the view in our GET route. This is because Laravel will check for errors in the session data, and automatically bind them to the view if they are available. <br>
	<p> The errors will also be flashed to the session so they are available for display. <strong>Which is store the $errors variable(my)</strong></p>

	<span class="text-danger" style="font-size: 18px;">Note:</span><br>
	<p>you will often need to mark your "optional" request fields as nullable if you do not want the validator to consider null values as invalid.</p>
	
	<br><img src="{{ asset('images/larabook/validation.png') }} " alt="validation"  style="width: 550px;"> <br><br>
	<span style="color:#20B2AA;">*A Note On Optional Fields</span><br>
	<span style="color:#20B2AA;">*AJAX Requests & Validation</span><br>
	<p>Laravel will not generate a redirect response. Instead, Laravel generates a JSON response containing all of the validation errors. This JSON response will be sent with a 422 HTTP status code.</p>
	</li>
</ul>
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2"><strong>#Form Request Validation</strong></span>
	<span style="color:#20B2AA;"><li><strong>Creating Form Requests</strong></li></span>
	<br><img src="{{ asset('images/larabook/validation1.png') }} " alt="validation"  style="width: 550px;"> <br><br>
	<p>The incoming form request is validated before the controller method is called, meaning you do not need to clutter your controller with any validation logic:</p>
	</li>
	<span style="color:#20B2AA;">*Adding After Hooks To Form Requests<span class="bg-dark"><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;"><li><strong>Authorizing Form Requests<span class="bg-dark">(!examine)</strong></li></span>
	<span style="color:#20B2AA;"><li><strong>Customizing The Error Messages</strong></li></span>
	<br><img src="{{ asset('images/larabook/validation2.png') }} " alt="validation"  style="width: 550px;"> <br><br>

	<span style="color:#20B2AA;"><li><strong>Customizing The Validation Attributes</strong><span class="bg-dark">(!examine)</span></li></span>
</ul>
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2"><strong>#Manually Creating Validators</strong></span>
<p>If you do not want to use the validate method on the request, you may create a <strong>validator instance</strong> manually</p>
	<span style="color:#20B2AA;"><li><strong>Automatic Redirection</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;"><li><strong>Named Error Bags</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;"><li><strong>After Validation Hook<span class="bg-dark">(!examine)</span></strong></li></span>
</ul>
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2"><strong>#Working With Error Messages</strong></span><br>
	<span style="color:#20B2AA;">*Retrieving The First Error Message For A Field <strong><span class="bg-dark">(!examine)</span></strong></span><br>
	
	<span style="color:#20B2AA;">*Retrieving All Error Messages For A Field <strong><span class="bg-dark">(!examine)</span></strong></span><br>
	
	<span style="color:#20B2AA;">*Retrieving All Error Messages For All Fields <strong><span class="bg-dark">(!examine)</span></strong></span><br>

	<span style="color:#20B2AA;">*Determining If Messages Exist For A Field <strong><span class="bg-dark">(!examine)</span></strong></span><br>
	
	<span style="color:#20B2AA;"><li><strong>Custom Error Messages</strong></li></span>
	<p>
	In this example, the <strong>:attribute</strong> placeholder will be replaced by the actual name of the field under validation. 
	</p>
	
	<span style="color:#20B2AA;">*Specifying A Custom Message For A Given Attribute <strong><span class="bg-dark">(!examine)</span></strong></span><br>

	<span style="color:#20B2AA;">*Specifying Custom Messages In Language Files <strong><span class="bg-dark">(!examine)</span></strong></span><br>

	<span style="color:#20B2AA;">*Specifying Custom Attributes In Language Files<strong><span class="bg-dark">(!examine)</span></strong></span><br>

	<span style="color:#20B2AA;">*Specifying Custom Values In Language Files<strong><span class="bg-dark">(!examine)</span></strong></span><br>

</ul>
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<a href="https://laravel.com/docs/5.8/validation#available-validation-rules" target="_blank"><span style="color: #8A2BE2"><strong>#Available Validation Rules</strong></span></a><br>
<br><img src="{{ asset('images/larabook/validation3.png') }} " alt="validation"  style="width: 550px;"> <br><br>
	<span style="color:#20B2AA;">*Specifying A Custom Column Name:<span class="bg-dark">(!examine)</span></span><br>
	
	<span style="color:#20B2AA;">*Custom Database Connection<span class="bg-dark">(!examine)</span></span><br>
	
	<span style="color:#20B2AA;">*Forcing A Unique Rule To Ignore A Given ID:<span class="bg-dark">(!examine)</span></span><br>
	<br><img src="{{ asset('images/larabook/validation4.png') }} " alt="validation"  style="width: 550px;"> <br><br>
	
	<span style="color:#20B2AA;">*Adding Additional Where Clauses:<span class="bg-dark">(!examine)</span></span><br>
	
</ul>
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2"><strong>#Conditionally Adding Rules</strong></span><br>
	<span style="color:#20B2AA;">*Validating When Present<span class="bg-dark">(!examine)</span></span><br>
	<br><img src="{{ asset('images/larabook/validation5.png') }} " alt="validation5"  style="width: 550px;"> <br><br>

	<span style="color:#20B2AA;">*Complex Conditional Validation<span class="bg-dark">(!examine)</span></span><br>
	<br><img src="{{ asset('images/larabook/validation6.png') }} " alt="validation5"  style="width: 550px;"> <br><br>
</ul>
{{--  --}}
<span style="color: #8A2BE2;font-size: 17px;" class="ml-5"><strong>#Validating Arrays</strong><span class="bg-dark">(!examine)</span></span><br><br>
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2"><strong>#Custom Validation Rules</strong></span>
	<span style="color:#20B2AA;"><li><strong>Using Rule Objects</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;"><li><strong>Using Closures</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;"><li><strong>Using Extensions</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;">*Defining The Error Message</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;"><li><strong>Implicit Extensions</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;">*Implicit Rule Objects</span><span class="bg-dark">(!examine)</span><br>
	
</ul>
{{-- question laravel --}}
{{-- question laravel --}}
<span class="alert alert-warning" style="font-size: 18px;">Question section laravel</span><br><br>
<ul style="list-style-type:decimal;font-size: 17px;">
	<li>Regex custom msg how</li>
</ul>
<hr style="border-top: 2px dashed gray;">
{{-- ###############################################################################--}}
{{-- ###############################################################################--}}
{{-- related topic --}}
{{-- related topic --}}

{{-- Js validation --}}
{{-- Js validation --}}
<span class="alert alert-primary" style="font-size: 18px;">js validation -Project(UU)</span><br><br>
<ul style="list-style-type:decimal;font-size: 17px;">
<li>Showing  error msg by span/div such as id = "name_error".</li>
<li class="text-success">The condition inside if statement should if statement for dynamic check option.</li>
<p>Ex: color of under password field green,blue,orange etc check.if we apply if-else inside if then the result will be static (just try to skip if possible)</p>
<li class="text-danger">In a block of code (such as if(if....)) property inherite .take care about it.</li>
<p>Ex: in the block of code display property is none then it will be inherited by the other block of the master block.Use diplay:property other block such that position</p>
<li class="text-danger">Use the regular Ex onekeyup method is not work perfectly.Try it with onsubmit {Ex:!regex.test(fieldvalue) } method.</li>
<p>Note:regex.test(fieldvalue) to check the certain regex</p>
</ul>
{{--  --}}
<span class="alert alert-primary" style="font-size: 18px;">Important link</span><br><br>
<ul style="list-style-type:decimal;font-size: 17px;">
<li><a href="https://www.geeksforgeeks.org/write-regular-expressions/" target="_blank">Regex website.</a></li>
<li><a href="https://regex101.com/" target="_blank">Regex online check.</a></li>
<li><a href="https://www.youtube.com/watch?v=K0Lzrytqt0U" target="_blank">Regex youtube.</a></li>
</ul><br><br>
{{--  --}}
<span class="alert alert-warning" style="font-size: 18px;">Question section</span><br><br>
<p>2 3 4 number</p>
<hr style="border-top: 2px dashed gray;">
{{-- J-qeruy validation --}}
{{-- J-qeruy validation --}}
<span class="alert alert-primary" style="font-size: 18px;">j-query validation -Project(UU)</span><br><br>
	<ul style="list-style-type:decimal;font-size: 17px;">
		<li></li>
		<li></li>
		<li></li>
	</ul><br><br>
<hr style="border-top: 2px dashed gray;">
{{--  --}}
<span style="background-color:green;color: white">Dictionary</span><br><br>
<ul style="list-style-type:decimal;font-size: 17px;">
	<li>flash :spray</li>
	<li>convenient :সুবিধাজনক</li>
	<li></li>
</ul>
{{--  --}}
<span style="background-color:red;color: white">Points of Remember</span><br><br>
<ul style="list-style-type:decimal;font-size: 17px;">
	<li>you will often need to mark your "optional" request fields as nullable if you do not want the validator to consider null values as invalid.</li>
	<li>These middleware will automatically trim all incoming string fields on the request, as well as convert any empty string fields to null</li>
	<li>If you would like to disable this behavior, you may remove the two middleware from your application's middleware stack by removing them from the $middleware property of your  App\Http\Kernel class.</li>
</ul>

{{-- php reference--}}
{{-- php reference--}}
<span style="background-color:blue;color: white">Php reference</span><br><br>
<ul style="list-style-type:decimal;font-size: 17px;">
	<li><a href="{{ route('php') }}" target="_blank">Trait</a></li>
	<li></li>
	<li></li>
</ul>

<hr style="border-top:2px dashed orange;">
<hr style="border-top:2px dashed orange;">
<hr style="border-top:2px dashed orange;">

{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- Controller --}}
{{-- Controller --}}
{{-- Controller --}}
<h2 id="error" class="text-center"><strong>Error Handling(c)</strong></h2>
<div class="row">
	<div class="col-md-2">
		<div class="list-group">
		  <a href="#url" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">URL Generation</a>
		  <a href="#session" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Session</a>
		  <a href="#validation" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Validation</a>
		  <a href="#error" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Error Handling</a>
		  <a href="#loggin" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Loggin Handling</a>

		  <a href="#form" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Form</a>
		  
		</div>
	</div>
</div><br>
<table class="table table-hover" style="font-size:17px;">
		<tbody>
			{{-- The Exception Handler --}}
			{{-- The Exception Handler --}}
			{{-- The Exception Handler --}}
			<tr class="table-active">		
				<td class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b>#The Exception Handler</b></td>
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/error1.0.png') }} " alt="model"  style="width:580px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/basic/error1.2.png') }} " alt="model"  style="width:580px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/basic/error1.4.png') }} " alt="model"  style="width:580px;height: 560px;">
				</td>

				<td class="table-success" style="width: 25%">
				<img class="ml-0" src="{{ asset('images/larabook/basic/error1.1.png') }} " alt="model"  style="width:580px;height: 560px;"><br><br>
				<img class="ml-0" src="{{ asset('images/larabook/basic/error1.3.png') }} " alt="model"  style="width:580px;height: 560px;"><br><br>
				<img class="ml-0" src="{{ asset('images/larabook/basic/error5.5.png') }} " alt="model"  style="width:580px;height: 560px;">
				</td>				
			</tr>

			<tr>
				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>

				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>
			</tr>

			{{-- HTTP Exceptions --}}
			{{-- HTTP Exceptions --}}
			{{-- HTTP Exceptions --}}
			<tr class="table-active">		
				<td class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b>#HTTP Exceptions</b></td>
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/error2.0.png') }} " alt="model"  style="width:580px;height: 560px;">
				</td>

				<td class="table-success" style="width: 25%">
				</td>				
			</tr>

			<tr>
				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>

				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>
			</tr>
		</tbody>
</table>
<h4 class="alert alert-warning" style="font-size: 18px;">Laravel Topic</h4>

<span style="color: #8A2BE2;font-size: 17px;"><strong>#Configuration</strong></span><br>

<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#The Exception Handler</strong></span><br>
	<span style="color:#20B2AA;"><li><strong>The Report Method</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;">*Global Log Context</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;">*The report Helper</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;">*Ignoring Exceptions By Type</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;"><li><strong>Render Method</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;"><li><strong>Reportable & Renderable Exceptions</strong><span class="bg-dark">(!examine)</span></li></span>
</ul><br>
{{--  --}}
{{--  --}}
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#HTTP Exceptions
</strong></span><br>
	<span style="color:#20B2AA;"><li><strong>Custom HTTP Error Pages</strong><span class="bg-dark">(!examine)</span></li></span>
</ul><br>

<hr style="border-top:2px dashed orange;">
<hr style="border-top:2px dashed orange;">
<hr style="border-top:2px dashed orange;">
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
<h2 id="loggin" class="text-center"><strong>Logging(c)</strong></h2>
<div class="row">
	<div class="col-md-2">
		<div class="list-group">
		  <a href="#url" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">URL Generation</a>
		  <a href="#session" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Session</a>
		  <a href="#validation" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Validation</a>
		  <a href="#error" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Error Handling</a>
		  <a href="#loggin" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Loggin Handling</a>

		  <a href="#form" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Form</a>
		  
		</div>
	</div>
</div><br>
<table class="table table-hover" style="font-size:17px;">
		<tbody>
			{{-- Configuration --}}
			{{-- Configuration --}}
			{{-- Configuration --}}
			
			<tr class="table-active">		
				<td class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b>#Configuration</b></td>
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/logging1.0.png') }} " alt="model"  style="width:580px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/basic/logging1.2.png') }} " alt="model"  style="width:580px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/basic/logging1.4.png') }} " alt="model"  style="width:580px;height: 560px;">
				</td>

				<td class="table-success" style="width: 25%">
				<img class="ml-0" src="{{ asset('images/larabook/basic/logging1.1.png') }} " alt="model"  style="width:580px;height: 560px;"><br><br>
				<img class="ml-0" src="{{ asset('images/larabook/basic/logging1.3.png') }} " alt="model"  style="width:580px;height: 560px;">
				</td>				
			</tr>

			<tr>
				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>

				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>
			</tr>
			{{-- Writing Log Messages --}}
			{{-- Writing Log Messages --}}
			{{-- Writing Log Messages --}}
			<tr class="table-active">		
				<td class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b>#Writing Log Messages</b></td>
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/logging2.0.png') }} " alt="model"  style="width:580px;height: 560px;">
				</td>

				<td class="table-success" style="width: 25%">
				<img class="ml-0" src="{{ asset('images/larabook/basic/logging2.1.png') }} " alt="model"  style="width:580px;height: 560px;">
				</td>				
			</tr>

			<tr>
				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>

				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>
			</tr>
			{{-- Advanced Monolog Channel Customization --}}
			{{-- Advanced Monolog Channel Customization --}}
			{{-- Advanced Monolog Channel Customization --}}

			<tr class="table-active">		
				<td class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b>#Advanced Monolog Channel Customization</b></td>
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/logging3.0.png') }} " alt="model"  style="width:580px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/basic/logging2.2.png') }} " alt="model"  style="width:580px;height: 560px;">
				</td>

				<td class="table-success" style="width: 25%">
				<img class="ml-0" src="{{ asset('images/larabook/basic/logging3.1.png') }} " alt="model"  style="width:580px;height: 560px;"><br><br>
				<img class="ml-0" src="{{ asset('images/larabook/basic/logging3.3.png') }} " alt="model"  style="width:580px;height: 560px;">
				</td>				
			</tr>

			<tr>
				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>

				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>
			</tr>
		</tbody>
</table>
<h4 class="alert alert-warning" style="font-size: 18px;">Laravel Topic</h4>
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Configuration</strong></span><br>
	<span style="color:#20B2AA;">*Configuring The Channel Name</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;">*Available Channel Drivers</span><span class="bg-dark">(!examine)</span><br>

	<span style="color:#20B2AA;">*Configuring The Single and Daily Channels</span><span class="bg-dark">(!examine)</span><br>

	<span style="color:#20B2AA;">*Configuring The Papertrail Channel</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;">*Configuring The Slack Channel</span><span class="bg-dark">(!examine)</span><br>


	<span style="color:#20B2AA;"><li><strong>Building Log Stacks</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;">*Log Levels</span><span class="bg-dark">(!examine)</span><br>
</ul><br>
{{--  --}}
{{--  --}}
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Writing Log Messages</strong></span><br>
	<span style="color:#20B2AA;">*Contextual Information</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;"><li><strong>Writing To Specific Channels</strong><span class="bg-dark">(!examine)</span></li></span>
</ul><br>
{{--  --}}
{{--  --}}
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Advanced Monolog Channel Customization</strong></span><br>
	<span style="color:#20B2AA;"><li><strong>Customizing Monolog For Channels</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;"><li><strong>Creating Monolog Handler Channels </strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;">*Monolog Formatters</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;"><li><strong>Creating Channels Via Factories</strong><span class="bg-dark">(!examine)</span></li></span>
</ul><br>

<hr style="border-top:2px dashed orange;">
<hr style="border-top:2px dashed orange;">
<hr style="border-top:2px dashed orange;">
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- Defination --}}
{{-- Defination --}}
{{-- Defination --}}
<h2 id="helper" class="text-center"><strong>Helper</strong></h2>
<br><br><span style="background-color:green;color: white">Definations</span><br>
<ul style="list-style-type:decimal;font-size: 17px;">
	<li><span class="bg-secondary" style="font-size: 18px;color: white">Stateless</span><br>By stateless it means that the server does not store any state about the client session on the server side. The client session is stored on the client. The server is stateless means that <b> every server can service any client at any time, there is no session affinity or sticky sessions.</b><br> <br>Stateless <b>means there is no record of previous interactions </b> and each interaction request has to be handled based entirely on information that comes with it. 
	</li><br>

	
</ul>
{{-- Dictionary --}}
{{-- Dictionary --}}
{{-- Dictionary --}}
{{-- Dictionary --}}
{{-- Dictionary --}}
<span style="background-color:green;color: white">Dictionary(last a sob gula nea data table a inser korbo)</span><br>
<ul style="font-size: 17px;">
	<li> <strong>handed off : হস্তান্তরিত</strong></li>
	<li> <strong><strong> stateless : আড়ম্বরহীন</strong></strong></li>
</ul>


<span style="background-color:blue;color: white">Php reference...</span><br><br>
<ul style="list-style-type:decimal;font-size: 17px;">
	<li>Clouser (Ananomousambigous vs,callback etc):</li>
	<li></li>
	<li></li>
</ul>
{{-- php reference--}}
{{-- php reference--}}
{{-- php reference--}}
<span style="background-color:blue;color: white">Php reference</span><br><br>
<ul style="list-style-type:decimal;font-size: 17px;">
	<li><a href="#" target="_blank">HTTP</a></li>
</ul>
@endsection