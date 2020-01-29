@extends('LaraBook.index')
@section('title','Security')
@section('content')
<h2 id="authentication" class="text-center"><strong>Authentication(c)</strong></h2>
<div class="row">
	<div class="col-md-2">
		<div class="list-group">
		  <a href="#authentication" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Authentication</a>
		  <a href="#api" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">API Authentication</a>
		  <a href="#authorization" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Authorization</a>
		  <a href="#email" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Email Verification</a>
		  <a href="#encryption" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Encryption</a>
		  <a href="#hashing" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Hashing</a>
		  <a href="#password" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Password Reset</a>
		</div>
	</div>
</div><br>

{{-- table --}}
{{-- table --}}
{{-- table --}}
<table class="table table-hover" style="font-size:17px;">
		<tbody>
			{{-- Authentication Quickstart --}}
			{{-- Authentication Quickstart --}}
			{{-- Authentication Quickstart --}}
			<tr class="table-active">		
				<td class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b># Authentication Quickstart</b></td>
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/authentication/auth1.0.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/authentication/auth1.2.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/authentication/auth1.4.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/authentication/auth1.6.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/authentication/auth1.8.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/authentication/auth1.00.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/authentication/auth1.02.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>

				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/authentication/auth1.1.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/authentication/auth1.3.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/authentication/auth1.5.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/authentication/auth1.7.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/authentication/auth1.9.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/authentication/auth1.01.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
				</td>				
			</tr>

			<tr>
				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>

				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>
			</tr>

			{{-- Manually Authenticating Users --}}
			{{-- Manually Authenticating Users --}}
			{{-- Manually Authenticating Users --}}

			<tr class="table-active">		
				<td class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b># Manually Authenticating Users</b></td>
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/authentication/auth2.0.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>

				<td class="table-success" style="width: 25%">
				<img class="ml-0" src="{{ asset('images/larabook/authentication/auth2.1.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>				
			</tr>

			<tr>
				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>

				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>
			</tr>

			{{-- HTTP Basic Authentication --}}
			{{-- HTTP Basic Authentication --}}
			{{-- HTTP Basic Authentication --}}

			<tr class="table-active">		
				<td class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b># HTTP Basic Authentication</b></td>
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/authentication/auth2.0.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>

				<td class="table-success" style="width: 25%">
				<img class="ml-0" src="{{ asset('images/larabook/authentication/auth2.1.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>				
			</tr>

			<tr>
				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>

				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>
			</tr>

			{{-- Logging Out --}}
			{{-- Logging Out --}}
			{{-- Logging Out --}}
			<tr class="table-active">		
				<td class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b># Logging Out</b></td>
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/authentication/auth3.0.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>

				<td class="table-success" style="width: 25%">
				<img class="ml-0" src="{{ asset('images/larabook/authentication/auth3.1.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>				
			</tr>

			<tr>
				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>

				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>
			</tr>
			{{-- Adding Custom Guards --}}
			{{-- Adding Custom Guards --}}
			{{-- Adding Custom Guards --}}
			<tr class="table-active">		
				<td class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b># Adding Custom Guards</b></td>
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/authentication/auth4.0.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/authentication/auth3.2.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>

				<td class="table-success" style="width: 25%">
				<img class="ml-0" src="{{ asset('images/larabook/authentication/auth4.1.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>				
			</tr>

			<tr>
				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>

				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>
			</tr>

			{{-- Adding Custom User Providers && # Events --}}
			{{-- Adding Custom User Providers && # Events --}}
			{{-- Adding Custom User Providers && # Events --}}
			<tr class="table-active">		
				<td class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b># Adding Custom User Providers && # Events</b></td>
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/authentication/auth5.0.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/authentication/auth5.2.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/authentication/auth6.0.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
				</td>

				<td class="table-success" style="width: 25%">
				<img class="ml-0" src="{{ asset('images/larabook/authentication/auth5.1.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
				<img class="ml-0" src="{{ asset('images/larabook/authentication/auth5.3.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
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
<span style="color: #8A2BE2;font-size: 17px;"><strong>#</strong></span><br>
	<span style="color:#20B2AA;"><li><strong>Database Considerations</strong><span class="bg-dark">(!examine)</span></li></span>
</ul><br>
{{--  --}}
{{--  --}}
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Authentication Quickstart</strong></span><br>
	<span style="color:#20B2AA;"><li><strong>Routing</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;"><li><strong>Views</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;"><li><strong>Authenticating</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;">*Path Customization</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;">*Username Customization</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;">*Guard Customization</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;">*Validation / Storage Customization</span><span class="bg-dark">(!examine)</span><br>
	
	<span style="color:#20B2AA;"><li><strong>Retrieving The Authenticated User</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;">*Determining If The Current User Is Authenticated</span><span class="bg-dark">(!examine)</span><br>
	
	<span style="color:#20B2AA;"><li><strong>Protecting Routes</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;">*Redirecting Unauthenticated Users</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;">*Specifying A Guard</span><span class="bg-dark">(!examine)</span><br>

	<span style="color:#20B2AA;"><li><strong>Login Throttling</strong><span class="bg-dark">(!examine)</span></li></span>
</ul><br>
{{--  --}}
{{--  --}}
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Manually Authenticating Users</strong></span><br>
	<span style="color:#20B2AA;">*Specifying Additional Conditions</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;">*Accessing Specific Guard Instances</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;">*Logging Out</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;"><li><strong>Remembering Users</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;"><li><strong>Other Authentication Methods</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;">*Authenticate A User Instance</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;">*Authenticate A User By ID</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;">*Authenticate A User Once</span><span class="bg-dark">(!examine)</span><br>
</ul><br>
{{--  --}}
{{--  --}}
{{--  --}}
<span style="color: #8A2BE2;font-size: 17px;"><strong>#HTTP Basic Authentication</strong></span><br>
<span style="color:#20B2AA;">*A Note On FastCGI</span><span class="bg-dark">(!examine)</span><br>
<span style="color:#20B2AA;font-size: 17px"><li><strong>1.Stateless HTTP Basic Authentication</strong><span class="bg-dark">(!examine)</span></li></span>
{{--  --}}
{{--  --}}
{{--  --}}
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Logging Out</strong></span><br>
<span style="color:#20B2AA;font-size: 17px"><li><strong>1.Invalidating Sessions On Other Devices</strong><span class="bg-dark">(!examine)</span></li></span><br>

{{--  --}}
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Social Authentication</strong></span><br>
{{--  --}}
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Adding Custom Guards</strong></span><br>
<span style="color:#20B2AA;font-size: 17px"><li><strong>1.Closure Request Guards</strong><span class="bg-dark">(!examine)</span></li></span><br>
{{--  --}}
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Adding Custom User Providers</strong></span><br>
<span style="color:#20B2AA;font-size: 17px"><li><strong>1.The User Provider Contract</strong><span class="bg-dark">(!examine)</span></li></span>
<span style="color:#20B2AA;font-size: 17px"><li><strong>2.The Authenticatable Contract</strong><span class="bg-dark">(!examine)</span></li></span><br>
{{--  --}}
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Events</strong></span><br>



<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
<h2 id="api" class="text-center"><strong>API Authentication(c)</strong></h2>
<div class="row">
	<div class="col-md-2">
		<div class="list-group">
		  <a href="#authentication" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Authentication</a>
		  <a href="#api" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">API Authentication</a>
		  <a href="#authorization" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Authorization</a>
		  <a href="#email" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Email Verification</a>
		  <a href="#encryption" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Encryption</a>
		  <a href="#hashing" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Hashing</a>
		  <a href="#password" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Password Reset</a>
		</div>
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
					<img class="ml-0" src="{{ asset('images/larabook/authentication/apiauth1.0.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/authentication/apiauth1.2.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>

				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/authentication/apiauth1.1.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/authentication/apiauth1.3.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>				
			</tr>

			<tr>
				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>

				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>
			</tr>
			{{-- When To Use Contracts --}}
			{{-- When To Use Contracts --}}
			{{-- When To Use Contracts --}}
			<tr class="table-active">		
				<td class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b># When To Use Contracts</b></td>
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/authentication/apiauth2.0.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>

				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/authentication/apiauth2.1.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>				
			</tr>

			<tr>
				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>

				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>
			</tr>			
			{{-- When To Use Contracts --}}
			{{-- When To Use Contracts --}}
			{{-- When To Use Contracts --}}
			<tr class="table-active">		
				<td class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b># When To Use Contracts</b></td>
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/authentication/apiauth1.0.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/authentication/apiauth1.2.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>

				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/authentication/apiauth1.1.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/authentication/apiauth1.3.png') }} " alt="model"  style="width:550px;height: 560px;">
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
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Configuration</strong></span><br>
	<span style="color:#20B2AA;"><li><strong>Database Migrations</strong><span class="bg-dark">(!examine)</span></li></span>
</ul><br>
{{--  --}}
{{--  --}}
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Generating Tokens</strong></span><br>
	<span style="color:#20B2AA;"><li><strong>Hashing Tokens</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;">*Generating Hashed Tokens</span><span class="bg-dark">(!examine)</span>
</ul><br>
{{--  --}}
<span class="ml-5" style="color: #8A2BE2;font-size: 17px;"><strong>#Protecting Routes</strong></span><br><br>
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Passing Tokens In Requests</strong></span><br>
<span style="color:#20B2AA;">*Query String</span><span class="bg-dark">(!examine)</span><br>
<span style="color:#20B2AA;">*Request Payload</span><span class="bg-dark">(!examine)</span><br>
<span style="color:#20B2AA;">*Bearer Token</span><span class="bg-dark">(!examine)</span><br>
</ul>
<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
<h2 id="authorization" class="text-center"><strong>Authorization(c)</strong></h2>
<div class="row">
	<div class="col-md-2">
		<div class="list-group">
		  <a href="#authentication" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Authentication</a>
		  <a href="#api" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">API Authentication</a>
		  <a href="#authorization" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Authorization</a>
		  <a href="#email" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Email Verification</a>
		  <a href="#encryption" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Encryption</a>
		  <a href="#hashing" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Hashing</a>
		  <a href="#password" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Password Reset</a>
		</div>
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
					<img class="ml-0" src="{{ asset('images/larabook/authentication/author1.0.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/authentication/author1.2.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/authentication/author1.4.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/authentication/author1.6.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>

				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/authentication/author1.1.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/authentication/author1.3.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/authentication/author1.5.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
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
					<img class="ml-0" src="{{ asset('images/larabook/authentication/author2.0.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/authentication/author2.2.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
				</td>

				<td class="table-success" style="width: 25%">
				<img class="ml-0" src="{{ asset('images/larabook/authentication/author2.1.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>				
			</tr>

			<tr>
				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>

				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>
			</tr>

			<tr class="table-active">		
				<td class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b># How To Use Contracts && # Contract Reference</b></td>
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/authentication/author3.0.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/authentication/author3.2.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/authentication/author3.4.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
				</td>

				<td class="table-success" style="width: 25%">
				<img class="ml-0" src="{{ asset('images/larabook/authentication/author3.1.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
				<img class="ml-0" src="{{ asset('images/larabook/authentication/author3.3.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
				<img class="ml-0" src="{{ asset('images/larabook/authentication/author3.5.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
				</td>				
			</tr>

			<tr>
				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>

				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>
			</tr>


			<tr class="table-active">		
				<td class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b># How To Use Contracts && # Contract Reference</b></td>
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/authentication/author4.0.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/authentication/author4.2.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/authentication/author4.4.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/authentication/author4.6.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
				</td>

				<td class="table-success" style="width: 25%">
				<img class="ml-0" src="{{ asset('images/larabook/authentication/author4.1.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
				<img class="ml-0" src="{{ asset('images/larabook/authentication/author4.3.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
				<img class="ml-0" src="{{ asset('images/larabook/authentication/author4.5.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
				<img class="ml-0" src="{{ asset('images/larabook/authentication/author4.7.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
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
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Gates</strong></span><br>
	<span style="color:#20B2AA;"><li><strong>Writing Gates</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;"><li><strong>Authorizing Actions</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;">*Intercepting Gate Checks</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;"><li><strong>Intercepting </strong><span class="bg-dark">(!examine)</span></li></span>
</ul><br>
{{--  --}}
{{--  --}}
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Creating Policies</strong></span><br>
	<span style="color:#20B2AA;"><li><strong>Generating Policies</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;"><li><strong>Registering Policies</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;">*Policy Auto-Discovery</span><span class="bg-dark">(!examine)</span><br>
</ul><br>
{{--  --}}
{{--  --}}
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Writing Policies</strong></span><br>
	<span style="color:#20B2AA;"><li><strong>Policy Methods</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;"><li><strong>Methods Without Models</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;"><li><strong>Guest Users</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;"><li><strong>Policy Filters</strong><span class="bg-dark">(!examine)</span></li></span>
</ul><br>
{{--  --}}
{{--  --}}
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Authorizing Actions Using Policies
</strong></span><br>
	<span style="color:#20B2AA;"><li><strong>Via The User Model</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;">*Actions That Don't Require Models</span><span class="bg-dark">(!examine)</span><br>

	<span style="color:#20B2AA;"><li><strong>Via Middleware</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;">*Actions That Don't Require Models</span><span class="bg-dark">(!examine)</span><br>

	<span style="color:#20B2AA;"><li><strong>Via Controller Helpers</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;">*Actions That Don't Require Models</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;">*Authorizing Resource Controllers</span><span class="bg-dark">(!examine)</span><br>

	<span style="color:#20B2AA;"><li><strong>Via Blade Templates</strong><span class="bg-dark">(!examine)</span></li></span>
</ul><br>

<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
<h2 id="email" class="text-center"><strong>Email Verification(c)</strong></h2>
<div class="row">
	<div class="col-md-2">
		<div class="list-group">
		  <a href="#authentication" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Authentication</a>
		  <a href="#api" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">API Authentication</a>
		  <a href="#authorization" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Authorization</a>
		  <a href="#email" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Email Verification</a>
		  <a href="#encryption" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Encryption</a>
		  <a href="#hashing" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Hashing</a>
		  <a href="#password" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Password Reset</a>
		</div>
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
					<img class="ml-0" src="{{ asset('images/larabook/authentication/emaiV1.0.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/authentication/emaiV3.0.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>

				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/authentication/emaiV2.0.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/authentication/emaiV4.0.png') }} " alt="model"  style="width:550px;height: 560px;">
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
					<img class="ml-0" src="{{ asset('images/larabook/authentication/contracts3.0.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>

				<td class="table-success" style="width: 25%">
				<img class="ml-0" src="{{ asset('images/larabook/authentication/contracts3.1.png') }} " alt="model"  style="width:550px;height: 560px;">
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
<h4 class="alert alert-warning" style="font-size: 18px;">Laravel Topic</h4>
<span style="color:#20B2AA;font-size: 17px;"><li>1.Model Preparation<span class="bg-dark">(!examine)</span></li></span><br>


<span style="color: #8A2BE2;font-size: 17px;"><strong>#Database Considerations</strong></span><br>
<span style="color:#20B2AA;">*The Email Verification Column</span><span class="bg-dark">(!examine)</span><br><br>

<span style="color: #8A2BE2;font-size: 17px;"><strong>#Routing</strong></span><br>
<span style="color:#20B2AA;font-size: 17px;"><li>1.Protecting Routes<span class="bg-dark">(!examine)</span></li></span><br>

<span style="color: #8A2BE2;font-size: 17px;"><strong>#Views</strong></span><br><br>
<span style="color: #8A2BE2;font-size: 17px;"><strong>#After Verifying Emails</strong></span><br><br>
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Events</strong></span><br><br>
<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
<h2 id="encryption" class="text-center"><strong>Encryption(c)</strong></h2>
<div class="row">
	<div class="col-md-2">
		<div class="list-group">
		  <a href="#authentication" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Authentication</a>
		  <a href="#api" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">API Authentication</a>
		  <a href="#authorization" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Authorization</a>
		  <a href="#email" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Email Verification</a>
		  <a href="#encryption" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Encryption</a>
		  <a href="#hashing" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Hashing</a>
		  <a href="#password" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Password Reset</a>
		</div>
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
					<img class="ml-0" src="{{ asset('images/larabook/authentication/encryption1.0.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/authentication/encryption2.0.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>

				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/authentication/encryption2.1.png') }} " alt="model"  style="width:550px;height: 560px;">
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
<span style="color: #8A2BE2;font-size: 17px;" class="ml-5"><strong>#Configuration</strong></span><br><br>
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Using The Encrypter</strong></span><br>
	<span style="color:#20B2AA;">*Encrypting A Value</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;">*Encrypting Without Serialization</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;">*Decrypting A Value</span><span class="bg-dark">(!examine)</span><br>
</ul><br>


<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
<h2 id="hashing" class="text-center"><strong>Hashing(c)</strong></h2>
<div class="row">
	<div class="col-md-2">
		<div class="list-group">
		  <a href="#authentication" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Authentication</a>
		  <a href="#api" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">API Authentication</a>
		  <a href="#authorization" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Authorization</a>
		  <a href="#email" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Email Verification</a>
		  <a href="#encryption" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Encryption</a>
		  <a href="#hashing" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Hashing</a>
		  <a href="#password" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Password Reset</a>
		</div>
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
					<img class="ml-0" src="{{ asset('images/larabook/authentication/hashing1.0.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/authentication/hashing2.0.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>

				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/authentication/hashing2.1.png') }} " alt="model"  style="width:550px;height: 560px;">
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
<span class="ml-5" style="color: #8A2BE2;font-size: 17px;"><strong>#Configuration</strong></span><br><br>

<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Basic Usage</strong></span><br><br>
	<span style="color:#20B2AA;">*Adjusting The Bcrypt Work Factor</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;">*Adjusting The Argon2 Work Factor</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;">*Verifying A Password Against A Hash</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;">*Checking If A Password Needs To Be Rehashed</span><span class="bg-dark">(!examine)</span><br>
</ul><br>

<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
<h2 id="password" class="text-center"><strong>Resetting Passwords(c)</strong></h2>
<div class="row">
	<div class="col-md-2">
		<div class="list-group">
		  <a href="#authentication" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Authentication</a>
		  <a href="#api" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">API Authentication</a>
		  <a href="#authorization" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Authorization</a>
		  <a href="#email" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Email Verification</a>
		  <a href="#encryption" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Encryption</a>
		  <a href="#hashing" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Hashing</a>
		  <a href="#password" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Password Reset</a>
		</div>
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
					<img class="ml-0" src="{{ asset('images/larabook/authentication/password1.0.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/authentication/password3.0.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>

				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/authentication/password2.0.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>				
			</tr>

			<tr>
				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>

				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>
			</tr>
			<tr class="table-active">		
				<td class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b># When To Use Contracts</b></td>
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/authentication/password4.0.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>

				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/authentication/password4.1.png') }} " alt="model"  style="width:550px;height: 560px;">
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
<span class="ml-5" style="color: #8A2BE2;font-size: 17px;"><strong>#Database Considerations</strong></span><br>
<span class="ml-5" style="color:#20B2AA;">*Generating The Reset Token Table Migration</span><span class="bg-dark">(!examine)</span><br><br>

<span class="ml-5" style="color: #8A2BE2;font-size: 17px;"><strong>#Routing</strong></span><br><br>
<span class="ml-5" style="color: #8A2BE2;font-size: 17px;"><strong>#Views</strong></span><br><br>
<span class="ml-5" style="color: #8A2BE2;font-size: 17px;"><strong>#After Resetting Passwords</strong></span><br><br>


{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Customization</strong></span><br><br>
	<span style="color:#20B2AA;">*Authentication Guard Customization</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;">*Password Broker Customization</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;">*Reset Email Customization</span><span class="bg-dark">(!examine)</span><br>
</ul><br>
<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
@endsection
