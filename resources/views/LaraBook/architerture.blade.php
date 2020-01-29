@extends('LaraBook.index')
@section('title','Architecture')

@section('heading')
	<h1 class="text-center sticky-top">Architecture Concepts</h1>
@endsection

@section('content')
<h2 id="lifecycle" class="text-center"><strong>Request Lifecycle(c)</strong></h2>
<div class="row">
	<div class="col-md-2">
		<div class="list-group">
		  <a href="#lifecycle" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Request Lifecycle</a>
		  <a href="#container" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Service Container</a>
		  <a href="#provider" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Service Provider</a>
		  <a href="#facade" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Facades</a>
		  <a href="#contracts" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Contracts</a>
		</div>
	</div>
	<div class="col-md-10">
	</div>
</div><br>
{{-- table --}}
{{-- table --}}
{{-- table --}}
<table class="table table-hover" style="font-size:17px;">
		<tbody>
			{{-- Lifecycle Overview $$ #Focus On Service Providers --}}
			{{-- Lifecycle Overview $$ #Focus On Service Providers --}}
			{{-- Lifecycle Overview $$ #Focus On Service Providers --}}
			<tr class="table-active">		
				<td class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b># Lifecycle Overview $$ #Focus On Service Providers</b></td>
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/architecture/requestL1.0.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/architecture/requestL1.2.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
				</td>

				<td class="table-success" style="width: 25%">
				<img class="ml-0" src="{{ asset('images/larabook/architecture/requestL1.1.png') }} " alt="model"  style="width:550px;height: 560px;">
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
{{-- laravel --}}
{{-- laravel --}}
{{-- laravel --}}
<br><img class="ml-5" src="{{ asset('images/larabook/architecture.png') }} " alt="model"  style="width: 1000px;height: 350px;"> <br><br>
<h4 class="alert alert-warning" style="font-size: 18px;">Laravel Topic</h4>
<span style="color: #8A2BE2;font-size: 17px;" class="ml-5"><strong>#Introduction</strong></span><br>
<p class="ml-5" style="font-size: 17px;"><em><strong>Know well use well.</strong></em></p>

<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Lifecycle Overview</strong></span><br>
	<span style="color:#20B2AA;"><li class="ml-4"><strong>First Things</strong></li></span>
	<p><strong><em>Starting point and load laravel instance.</em></strong></p>
	<span style="color:#20B2AA;"><li class="ml-4"><strong>HTTP / Console Kernels</strong></li></span>
	<br><img class="ml-5" src="{{ asset('images/larabook/architecture.jpg') }} " alt="model"  style="width: 800px;height: 350px;"> <br><br>
	<p><strong><em>How request come and flow.perform other tasks that need to be done before the request is actually handled.</em></strong></p>

	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Service Providers</span><br>
	<p class="ml-4"><strong><em>Service providers are responsible for bootstrapping all of the framework's various components, </em></strong></p>

	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Dispatch Request</span>(দ্রুত সম্পাদন)<br>
</ul><br>

{{--  --}}
{{--  --}}
{{--  --}}
<span style="color: #8A2BE2;font-size: 17px;" class="ml-4"><strong>#Focus On Service Providers</strong></span><br>
<p style="font-size: 17px;" class="ml-4"><strong><em>Service providers are truly the key to bootstrapping a Laravel application. The application instance is created, the service providers are registered, and the request is handed to the bootstrapped application. It's really that simple!</em></strong></p>

<a href="#helper" class="btn btn-warning">Need Help</a>

<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">


{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
<h2 id="container" class="text-center"><strong>Service Container(c)</strong></h2>
<div class="row">
	<div class="col-md-2">
		<div class="list-group">
		  <a href="#lifecycle" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Request Lifecycle</a>
		  <a href="#container" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Service Container</a>
		  <a href="#provider" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Service Provider</a>
		  <a href="#facade" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Facades</a>
		  <a href="#contracts" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Contracts</a>
		</div>
	</div>
	<div class="col-md-10">
		<br><img class="ml-5" src="{{ asset('images/larabook/service2.jpg') }} " alt="service"  style="width: 800px;height: 350px;"> <br><br>
	</div>
</div><br>


{{-- table --}}
{{-- table --}}
{{-- table --}}
<table class="table table-hover" style="font-size:17px;">
		<tbody>
			{{-- Binding --}}
			{{-- Binding --}}
			{{-- Binding --}}
			<tr class="table-active">		
				<td class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b># Introduction</b></td>
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/architecture/serviceContainer1.0.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>

				<td class="table-success" style="width: 25%">
				<img class="ml-0" src="{{ asset('images/larabook/architecture/serviceContainer1.1.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>				
			</tr>

			{{-- Binding --}}
			{{-- Binding --}}
			{{-- Binding --}}
			<tr class="table-active">		
				<td class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b># Binding</b></td>
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/architecture/serviceContainer2.0.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/architecture/serviceContainer2.2.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/architecture/serviceContainer1.5.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
				</td>

				<td class="table-success" style="width: 25%">
				<img class="ml-0" src="{{ asset('images/larabook/architecture/serviceContainer2.1.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
				<img class="ml-0" src="{{ asset('images/larabook/architecture/serviceContainer2.3.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
				</td>				
			</tr>

			<tr>
				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>

				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>
			</tr>

			{{-- Resolving --}}
			{{-- Resolving --}}
			{{-- Resolving --}}
			<tr class="table-active">		
				<td class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b># Resolving</b></td>
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/architecture/serviceContainer3.0.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/architecture/serviceContainer4.0.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>

				<td class="table-success" style="width: 25%">
				<img class="ml-0" src="{{ asset('images/larabook/architecture/serviceContainer3.1.png') }} " alt="model"  style="width:550px;height: 560px;">
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
	
	<br><img class="ml-5" src="{{ asset('images/larabook/service1.png') }} " alt="model"  style="width: 800px;height: 350px;"> <br><br>


<span class="alert alert-primary" style="font-size: 18px;">At a galance</span><br><br>
<ul style="list-style-type:decimal;font-size: 17px;">
	<li>A <strong>Service Container (or dependency injection container)</strong> is simply a PHP object that manages the instantiation of services (i.e. objects). For example, suppose you have a simple PHP class that delivers email messages.</li>
	<li>The Service Container is a dependency injection container and a registry for application. Instead of creating objects manually the benefits of using Service Container are: It has the capacity to manage class dependencies.</li>
	<li></li>
</ul>
{{-- laravel --}}
{{-- laravel --}}
{{-- laravel --}}
<h4 class="alert alert-warning" style="font-size: 18px;">Laravel Topic</h4>
<span style="color: #8A2BE2;font-size: 17px;" class="ml-5"><strong>#Introduction</strong></span><br>
<p class="ml-5" style="font-size: 17px"><strong><em>Need data source that is injected via eloquent and then data use for other purpose.</em></strong></p>


<ul style="list-style-type:decimal;font-size: 17px;">	
	<span style="color: #8A2BE2;font-size: 17px;"><strong>#Binding</strong></span><br>
	<span style="color:#20B2AA;"><li class="ml-4"><strong>Binding Basics</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<img src="{{ asset('images/larabook/service.png') }} " alt="service"  style="width: 550px;"> <br><br>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Simple Bindings</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Binding A Singleton</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Binding Instances</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Binding Primitives</span><span class="bg-dark">(!examine)</span><br>
	{{--  --}}
	{{--  --}}
	{{--  --}}
	<span style="color:#20B2AA;"><li class="ml-4"><strong>Binding Interfaces To Implementations</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li class="ml-4"><strong>Contextual Binding</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li class="ml-4"><strong>Tagging</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li class="ml-4"><strong>Extending Bindings</strong><span class="bg-dark">(!examine)</span></li></span><br>
</ul><br>

<span style="color: #8A2BE2;font-size: 17px;" class="ml-4"><strong>#Resolving</strong></span><br>

<span style="color:#20B2AA;font-size: 17px" class="ml-4">*The make Method</span><span class="bg-dark">(!examine)</span><br>
<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Automatic Injection</span><span class="bg-dark">(!examine)</span><br><br>

{{--  --}}
{{--  --}}
{{--  --}}
<span style="color: #8A2BE2;font-size: 17px;" class="ml-4"><strong>#Container Events</strong></span><br>
<span style="color: #8A2BE2;font-size: 17px;" class="ml-4"><strong>#PSR-11</strong></span><br>
<a href="#helper" class="btn btn-warning">Need Help</a>
<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
<h2 id="provider" class="text-center"><strong>Service Provider(c)</strong></h2>
<div class="row">
	<div class="col-md-2">
		<div class="list-group">
		  <a href="#lifecycle" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Request Lifecycle</a>
		  <a href="#container" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Service Container</a>
		  <a href="#provider" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Service Provider</a>
		  <a href="#facade" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Facades</a>
		  <a href="#contracts" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Contracts</a>
		</div>
	</div>
	<div class="col-md-10">
		<br><img class="ml-5" src="{{ asset('images/larabook/service3.png') }} " alt="model"  style="width: 800px;height: 350px;"> <br><br>
	</div>
</div><br>
{{-- table --}}
{{-- table --}}
{{-- table --}}
<table class="table table-hover" style="font-size:17px;">
		<tbody>
			{{-- Writing Service Providers --}}
			{{-- Writing Service Providers --}}
			{{-- Writing Service Providers --}}
			<tr class="table-active">		
				<td class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b># Writing Service Providers</b></td>
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/architecture/serviceProvider1.0.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/architecture/serviceProvider1.2.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/architecture/serviceProvider2.4.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
				</td>

				<td class="table-success" style="width: 25%">
				<img class="ml-0" src="{{ asset('images/larabook/architecture/serviceProvider1.1.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
				<img class="ml-0" src="{{ asset('images/larabook/architecture/serviceProvider1.3.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
				</td>				
			</tr>

			<tr>
				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>

				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>
			</tr>

			{{-- Registering Providers && # Deferred Providers --}}
			{{-- Registering Providers && # Deferred Providers --}}
			{{-- Registering Providers && # Deferred Providers --}}
			<tr class="table-active">		
				<td class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b># Registering Providers && # Deferred Providers</b></td>
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/architecture/serviceContainer2.0.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>

				<td class="table-success" style="width: 25%">
				<img class="ml-0" src="{{ asset('images/larabook/architecture/serviceContainer2.1.png') }} " alt="model"  style="width:550px;height: 560px;">
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
{{-- laravel --}}
{{-- laravel --}}
{{-- laravel --}}
<h4 class="alert alert-warning" style="font-size: 18px;">Laravel Topic</h4>
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Writing Service Providers</strong></span><br>
	<span style="color:#20B2AA;"><li class="ml-4"><strong>The Register Method</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*The bindings And singletons Properties</span><span class="bg-dark">(!examine)</span><br>

	<span style="color:#20B2AA;"><li class="ml-4"><strong>The Boot Method</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Boot Method Dependency Injection</span><span class="bg-dark">(!examine)</span><br>
</ul><br>
{{--  --}}
{{--  --}}
{{--  --}}
<span style="color: #8A2BE2;font-size: 17px;" class="ml-4"><strong>#Registering Providers</strong></span><br><br>
<span style="color: #8A2BE2;font-size: 17px;" class="ml-4"><strong>#Deferred Providers</strong></span><br><br>

<a href="#helper" class="btn btn-warning">Need Help</a>
<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
<h2 id="facade" class="text-center"><strong>Facades(c)</strong></h2>
<div class="row">
	<div class="col-md-2">
		<div class="list-group">
		  <a href="#lifecycle" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Request Lifecycle</a>
		  <a href="#container" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Service Container</a>
		  <a href="#provider" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Service Provider</a>
		  <a href="#facade" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Facades</a>
		  <a href="#contracts" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Contracts</a>
		</div>
	</div>
	<div class="clo-md-10">
		<br><img class="ml-5" src="{{ asset('images/larabook/facade.jpg') }} " alt="model"  style="width: 800px;height: 350px;"> <br><br>
	</div>
</div><br>


<div class="row">
	<div class="col-md-6"><img  src="{{ asset('images/larabook/facade2.jpg') }} " alt="model"  style="width: 500px;height: 250px;"></div>

	<div class="col-md-6"><br><img src="{{ asset('images/larabook/facade1.jpg') }} " alt="model"  style="width: 500px;height: 250px;"></div>
	
</div>
  <br><br><br><br>


{{-- table --}}
{{-- table --}}
{{-- table --}}
<table class="table table-hover" style="font-size:17px;">
		<tbody>
			{{-- When To Use Facades --}}
			{{-- When To Use Facades --}}
			{{-- When To Use Facades --}}
			<tr class="table-active">		
				<td class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b># When To Use Facades</b></td>
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/architecture/facade1.0.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/architecture/facade1.2.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/architecture/facade1.4.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>

				<td class="table-success" style="width: 25%">
				<img class="ml-0" src="{{ asset('images/larabook/architecture/facade1.1.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
				<img class="ml-0" src="{{ asset('images/larabook/architecture/facade1.3.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>				
			</tr>

			<tr>
				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>

				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>
			</tr>

			{{-- How Facades Work --}}
			{{-- How Facades Work --}}
			{{-- How Facades Work --}}
			<tr class="table-active">		
				<td class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b># How Facades Work</b></td>
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/architecture/facade2.0.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>

				<td class="table-success" style="width: 25%">
				<img class="ml-0" src="{{ asset('images/larabook/architecture/facade2.1.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>				
			</tr>

			<tr>
				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>

				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>
			</tr>
			{{-- Real-Time Facades && #Facade Class Reference --}}
			{{-- Real-Time Facades && #Facade Class Reference --}}
			{{-- Real-Time Facades && #Facade Class Reference --}}
			<tr class="table-active">		
				<td class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b># Real-Time Facades && #Facade Class Reference</b></td>
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/architecture/facade3.0.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/architecture/facade3.2.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
				</td>

				<td class="table-success" style="width: 25%">
				<img class="ml-0" src="{{ asset('images/larabook/architecture/facade3.1.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
				<img class="ml-0" src="{{ asset('images/larabook/architecture/facade4.0.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
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
{{-- laravel --}}
{{-- laravel --}}
{{-- laravel --}}
<h4 class="alert alert-warning" style="font-size: 18px;">Laravel Topic</h4>
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#When To Use Facades</strong></span><br>
<br><img src="{{ asset('images/larabook/facade.png') }} " alt="facade"  style="width: 550px;"> <br><br>
	<span style="color:#20B2AA;"><li class="ml-4"><strong>Facades Vs. Dependency Injection</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li class="ml-4"><strong>Facades Vs. Helper Functions</strong><span class="bg-dark">(!examine)</span></li></span><br>
</ul><br>


<span style="color: #8A2BE2;font-size: 17px;" class="ml-4"><strong>#How Facades Work</strong></span><br><br>
<span style="color: #8A2BE2;font-size: 17px;" class="ml-4"><strong>#Real-Time Facades</strong></span><br><br>
<a href="https://laravel.com/docs/5.8/facades#facade-class-reference" target="_blank"><span style="color: #8A2BE2;font-size: 17px;" class="ml-4"><strong>#Facade Class Reference</strong></span></a><br><br>
<a href="#helper" class="btn btn-warning">Need Help</a>

<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
<h2 id="contracts" class="text-center"><strong>Contracts(c)</strong></h2>
<div class="row">
	<div class="col-md-2">
		<div class="list-group">
		  <a href="#lifecycle" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Request Lifecycle</a>
		  <a href="#container" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Service Container</a>
		  <a href="#provider" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Service Provider</a>
		  <a href="#facade" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Facades</a>
		  <a href="#contracts" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Contracts</a>
		</div>
	</div>
	<div class="col-md-10">
		<br><img class="ml-5" src="{{ asset('images/larabook/contrast1.PNG') }} " alt="model"  style="width: 800px;height: 350px;"> <br><br>
	</div>
</div><br>

{{-- table --}}
{{-- table --}}
{{-- table --}}
<table class="table table-hover" style="font-size:17px;">
		<tbody>
			{{-- When To Use Contracts --}}
			{{-- When To Use Contracts --}}
			{{-- When To Use Contracts --}}
			<tr class="table-active">		
				<td class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b># When To Use Contracts</b></td>
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/architecture/contracts1.0.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/architecture/contracts2.1.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/architecture/contracts2.3.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>

				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/architecture/contracts2.0.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/architecture/contracts2.2.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>				
			</tr>

			<tr>
				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>

				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>
			</tr>

			{{-- How To Use Contracts && # Contract Reference --}}
			{{-- How To Use Contracts && # Contract Reference --}}
			{{-- How To Use Contracts && # Contract Reference --}}
			<tr class="table-active">		
				<td class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b># How To Use Contracts && # Contract Reference</b></td>
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/architecture/contracts3.0.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>

				<td class="table-success" style="width: 25%">
				<img class="ml-0" src="{{ asset('images/larabook/architecture/contracts3.1.png') }} " alt="model"  style="width:550px;height: 560px;">
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
{{-- laravel --}}
{{-- laravel --}}
{{-- laravel --}}
<h4 class="alert alert-warning" style="font-size: 18px;">Laravel Topic</h4>
<span style="color:#20B2AA;font-size: 17px;"><li class="ml-4"><strong>1.Contracts Vs. Facades</strong><span class="bg-dark">(!examine)</span></li></span>
<br><img src="{{ asset('images/larabook/contrast.png') }} " alt="contrast"  style="width: 550px;"> <br><br>


<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#When To Use Contracts</strong></span><br>
	<span style="color:#20B2AA;"><li class="ml-4"><strong>Loose Coupling</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li class="ml-4"><strong>Simplicity
</strong><span class="bg-dark">(!examine)</span></li></span><br>
</ul><br>

<span style="color: #8A2BE2;font-size: 17px;" class="ml-4"><strong>#How To Use Contracts</strong></span><br><br>
<a href="https://laravel.com/docs/5.8/contracts#contract-reference" target="_blank"><span style="color: #8A2BE2;font-size: 17px;" class="ml-4"><strong>#Contract Reference</strong></span></a><br><br>

<a href="#helper" class="btn btn-warning">Need Help</a>
<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- Defination --}}
{{-- Defination --}}
{{-- Defination --}}
<h2 id="helper" class="text-center"><strong>Helper</strong></h2>
<br><br><span style="background-color:green;color: white">Definations</span><br>
<ul style="list-style-type:decimal;font-size: 17px;">
	<li><span class="bg-secondary" style="font-size: 18px;color: white">Library</span><br>
	In programming, a library is a collection of precompiled routines that a program can use. The routines, sometimes called modules, are stored in object format.
	</li><br>

	<li><span class="bg-secondary" style="font-size: 18px;color: white">Dependency Manager</span><br>A 	<strong>Dependency Manager</strong> like composer for PHP, among others, is a tool that allows you to manage all of your libraries in a meaningful and logical manner. <br>By <strong>dependencies</strong> it means the libraries required to make this page work. It helps when your dealing with complex projects and in a team environment.
	</li><br>

	<li><span class="bg-secondary" style="font-size: 18px;color:white;">COMPOSER</span><br>A 	<strong>COMPOSER</strong> is a dependency manager for PHP. Composer will allow you 		to manage your libraries, classes, and functions throughout your applications. 		These 	libraries and classes that you create for Composer are referred to as 		Packages.
	</li>
	<p>If you had a better way of managing all of your code or dependencies, some kind of dependency manager, then re-using your code on new projects would be so much easier.</p>

	<li><span class="bg-secondary" style="font-size: 18px;color:white;">HTTP Kernel & Console Kernel</span><br>The <strong>HTTP Kernel</strong> is used to process requests that come in through the web (HTTP). Website requests, AJAX, that kind of stuff. <br> The <strong>Console Kernel</strong> is used when you interact with your application from the command line.
	</li><br>

	<li><span class="bg-secondary" style="font-size: 18px;color:white;">Boot</span><br>
		To <strong>boot up</strong> is to start up a computer system by providing it with the required electrical power and loading the startup services until the operating system is loaded. It refers to the process of starting a computer from a dead or offline state, thus making it available to perform any computing operation. <br>
		<strong>Booting</strong> is what happens when a computer starts. ... When you boot a computer, your processor looks for instructions in system ROM (the BIOS) and executes them. They normally 'wake up' peripheral equipment and search for the boot device. The boot device either loads the operating system or gets it from someplace else <br>
	</li><br>

	<li><span class="bg-secondary" style="font-size: 18px;color:white;">Bootstrapping  or bootstrap </span><br><strong>Bootstraping</strong> is a self-starting process that is supposed to proceed without external input. <br><br>
	<strong>Bootstrap (front-end framework)</strong> a free collection of tools for creating websites and web applications. <br><br>
	In computing, a bootstrap loader is the first piece of code that runs when a machine starts, and is responsible for loading the rest of the operating system.
	</li><br>

	<li><span class="bg-secondary" style="font-size: 18px;color:white;">Interfaces </span><br>A boundary across which two independent systems meet and act on or communicate with each other. In computer technology, there are several types of interfaces. user interface - the keyboard, mouse, menus of a computer system. The user interface allows the user to communicate with the operating system. Also see GUI.</li><br>

</ul>
{{-- Dictionary --}}
{{-- Dictionary --}}
{{-- Dictionary --}}
{{-- Dictionary --}}
{{-- Dictionary --}}
<span style="background-color:green;color: white">Dictionary(last a sob gula nea data table a inser korbo)</span><br>
<ul style="font-size: 17px;">
	<li> <strong>handed off:হস্তান্তরিত</strong></li>
	<li> <strong>Dispatch:দ্রুত সম্পাদন</strong></li>
	<li> <strong>inject:উদ্বুদ্ধ করা / অনুপ্রাণিত করা</strong></li>
	<li><strong>mock:উপহাস</strong></li>
	<li><strong>dummy:পুতুল</strong></li>
	<li><strong>demonstrate:প্রদর্শন/Exhibit</strong></li>
	<li><strong>module:অত্যল্প পরিমাণ</strong></li>
</ul>

{{-- php reference--}}
{{-- php reference--}}
{{-- php reference--}}
<span style="background-color:blue;color: white">Php reference</span><br><br>
<ul style="list-style-type:decimal;font-size: 17px;">
	<li><a href="#" target="_blank">HTTP</a></li>
</ul>
@endsection
