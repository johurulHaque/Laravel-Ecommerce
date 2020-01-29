@extends('LaraBook.index')
@section('title','frontend')
@section('content')
{{-- blade template --}}
{{-- blade template --}}
{{-- blade template --}}
<h2 id="blade" class="text-center"><strong>Blade Template(c)</strong></h2>
<div class="row">
	<div class="col-md-2">
		<div class="list-group">
		  <a href="#blade" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Blade Template</a>
		  <a href="#localization" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Localization</a>
		  <a href="#frontend" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Frontend Scafolding</a>
		  <a href="#asset" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Compling Asset</a>
		</div>
	</div>
</div>



<table class="table table-hover" style="font-size:17px;">
		<tbody>
			{{-- Template Inheritance --}}
			{{-- Template Inheritance --}}
			{{-- Template Inheritance --}}
			<tr class="table-active">		
				<td class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b>#Template Inheritance</b></td>
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/frontend/blade1.0.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/frontend/blade1.2.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
				</td>

				<td class="table-success" style="width: 25%">
				<img class="ml-0" src="{{ asset('images/larabook/frontend/blade1.1.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>				
			</tr>

			<tr>
				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>

				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>
			</tr>
			{{-- Components & Slots --}}
			{{-- Components & Slots --}}
			{{-- Components & Slots --}}
			<tr class="table-active">		
				<td class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b>#Components & Slots</b></td>
			</tr>
			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/frontend/blade2.0.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/frontend/blade2.2.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>

				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/frontend/blade2.1.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>				
			</tr>

			<tr>
				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>

				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>
			</tr>

			{{-- Displaying Data --}}
			{{-- Displaying Data --}}
			{{-- Displaying Data --}}
			<tr class="table-active">		
				<td class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b>#Displaying Data && #Default Values</b></td>
			</tr>
			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/frontend/blade3.0.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/frontend/blade3.2.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/frontend/blade3.4.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
				</td>

				<td class="table-success" style="width: 25%">
				<img class="ml-0" src="{{ asset('images/larabook/frontend/blade3.1.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
				<img class="ml-0" src="{{ asset('images/larabook/frontend/blade3.3.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
				</td>				
			</tr>

			<tr>
				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>

				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>
			</tr>
			{{-- Control Structures --}}
			{{-- Control Structures --}}
			{{-- Control Structures --}}
			<tr class="table-active">		
				<td class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b>#Control Structures</b></td>
			</tr>
			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/frontend/blade4.0.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/frontend/blade4.2.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/frontend/blade4.4.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/frontend/blade4.6.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
				</td>

				<td class="table-success" style="width: 25%">
				<img class="ml-0" src="{{ asset('images/larabook/frontend/blade4.1.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
				<img class="ml-0" src="{{ asset('images/larabook/frontend/blade4.3.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
				<img class="ml-0" src="{{ asset('images/larabook/frontend/blade4.5.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
				<img class="ml-0" src="{{ asset('images/larabook/frontend/blade4.7.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
				</td>				
			</tr>

			<tr>
				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>

				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>
			</tr>
			{{-- Forms --}}
			{{-- Forms --}}
			{{-- Forms --}}
			<tr class="table-active">		
				<td class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b>#Forms</b></td>
			</tr>
			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/frontend/blade5.0.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
				</td>

				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/frontend/blade5.1.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
				</td>				
			</tr>

			<tr>
				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>

				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>
			</tr>
			{{-- Including Sub-Views && # Slots --}}
			{{-- Including Sub-Views && # Slots --}}
			{{-- Including Sub-Views && # Slots --}}
			<tr class="table-active">		
				<td class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b>#Including Sub-Views && # Slots</b></td>
			</tr>
			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/frontend/blade6.0.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/frontend/blade6.2.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
				</td>

				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/frontend/blade6.1.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/frontend/blade7.0.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
				</td>				
			</tr>

			<tr>
				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>

				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>
			</tr>

			{{-- Including Sub-Views && # Stacks --}}
			{{-- Including Sub-Views && # Stacks --}}
			{{-- Including Sub-Views && # Stacks --}}
			<tr class="table-active">		
				<td class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b>#Including Sub-Views && # Stacks</b></td>
			</tr>
			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/frontend/blade6.0.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/frontend/blade6.2.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
				</td>

				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/frontend/blade6.1.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/frontend/blade7.0.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
				</td>				
			</tr>

			<tr>
				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>

				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>
			</tr>
			{{-- Service Injection --}}
			{{-- Service Injection --}}
			{{-- Service Injection --}}
			<tr class="table-active">		
				<td class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b>#Service Injection</b></td>
			</tr>
			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/frontend/blade8.0.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/frontend/blade8.2.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
				</td>

				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/frontend/blade8.1.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
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

{{--  --}}
{{--  --}}
{{--  --}}
{{-- laravel Topics	--}}
{{-- laravel Topics --}}
{{-- laravel Topics --}}
<h4 class="alert alert-warning" style="font-size: 18px;">Laravel Topic</h4>
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Template Inheritance</strong></span><br>
	<img src="{{ asset('images/larabook/front0.jpg') }} " alt="front0"  style="width: 550px;"> <br><br>
	<span style="color:#20B2AA;"><li><strong>Defining A Layout</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;"><li><strong>Extending A Layout</strong><span class="bg-dark">(!examine)</span></li></span>
</ul>
{{--  --}}
{{--  --}}
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Components & Slots</strong></span><br>
	<span style="color:#20B2AA;">*Passing Additional Data To Components</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;">*Aliasing Components</span><span class="bg-dark">(!examine)</span><br>
</ul>
{{--  --}}
{{--  --}}
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Displaying Data</strong></span><br>
	<span style="color:#20B2AA;">*Displaying Unescaped Data</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;">*Rendering JSON</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;">*HTML Entity Encoding</span><span class="bg-dark">(!examine)</span><br>

	<span style="color:#20B2AA;"><li><strong>Blade & JavaScript Frameworks</strong><span class="bg-dark">(!examine)</span></li></span>
	
</ul>
{{--  --}}
{{--  --}}
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Control Structures</strong></span><br>
	<span style="color:#20B2AA;">*Passing Additional Data To Components</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;">*Aliasing Components</span><span class="bg-dark">(!examine)</span><br>

	<span style="color:#20B2AA;"><li><strong>If Statements</strong><span class="bg-dark">(!examine)</span></li></span>

	<span style="color:#20B2AA;">*Authentication Directives</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;">*Section Directives</span><span class="bg-dark">(!examine)</span><br>

	<span style="color:#20B2AA;"><li><strong>Switch Statements</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;"><li><strong>Loops</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;"><li><strong>The Loop Variable</strong><span class="bg-dark">(!examine)</span></li></span>
	<img src="{{ asset('images/larabook/template.png') }} " alt="template"  style="width: 550px;"> <br><br>
	<span style="color:#20B2AA;"><li><strong>Commenst</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;"><li><strong>PHP</strong><span class="bg-dark">(!examine)</span></li></span>
</ul>
{{--  --}}
{{--  --}}
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Forms</strong></span><br>
	<span style="color:#20B2AA;"><li><strong>CSRF Field</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;"><li><strong>Method Field</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;"><li><strong>Validation Errors</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;">*</span><span class="bg-dark">(!examine)</span><br>
</ul>
{{--  --}}
{{--  --}}
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Including Sub-Views</strong></span><br>
	<img src="{{ asset('images/larabook/front2.jpg') }} " alt="front2"  style="width: 550px;"> <br><br>
	<span style="color:#20B2AA;">*Aliasing Includes</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;"><li><strong>Rendering Views For Collections</strong><span class="bg-dark">(!examine)</span></li></span>
	<img src="{{ asset('images/larabook/fron6.jpg') }} " alt="fron6"  style="width: 550px;"> <br><br>	
</ul>
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Stacks</strong></span><br><br>
<img src="{{ asset('images/larabook/front1.jpg') }} " alt="front1"  style="width: 550px;"> <br><br>
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Service Injection</strong></span><br><br>
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Extending Blade</strong></span><br>
<span style="color: #8A2BE2;font-size: 17px;"><strong>1.Custom If Statements</strong></span><br><br>
<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
<h2 id="localization" class="text-center"><strong>Localization(c)</strong></h2>
{{--  --}}
<div class="row">
	<div class="col-md-2">
		<div class="list-group">
		  <a href="#blade" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Blade Template</a>
		  <a href="#localization" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Localization</a>
		  <a href="#frontend" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Frontend Scafolding</a>
		  <a href="#asset" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Compling Asset</a>
		</div>
	</div>
</div>

<table class="table table-hover" style="font-size:17px;">
		<tbody>
			{{-- Defining Translation Strings --}}
			{{-- Defining Translation Strings --}}
			{{-- Defining Translation Strings --}}
			<tr class="table-active">		
				<td class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b>#Defining Translation Strings</b></td>
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/frontend/localization1.0.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/frontend/localization2.0.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
				</td>

				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/frontend/localization1.1.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/frontend/localization2.1.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
				</td>				
			</tr>

			<tr>
				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>

				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>
			</tr>
			{{-- Retrieving Translation Strings &&Overriding Package Language Files --}}
			{{-- Retrieving Translation Strings &&Overriding Package Language Files --}}
			{{-- Retrieving Translation Strings &&Overriding Package Language Files --}}
			<tr class="table-active">		
				<td class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b>#Retrieving Translation Strings && Overriding Package Language Files</b></td>
			</tr>
			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/frontend/localization3.0.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/frontend/localization3.2.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>

				<td class="table-success" style="width: 25%">
				<img class="ml-0" src="{{ asset('images/larabook/frontend/localization3.1.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
				<img class="ml-0" src="{{ asset('images/larabook/frontend/localization4.0.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
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



{{--  --}}
{{--  --}}
{{--  --}}
{{-- laravel Topics	--}}
{{-- laravel Topics --}}
<h4 class="alert alert-warning" style="font-size: 18px;">Laravel Topic</h4>
{{--  --}}
{{--  --}}
{{--  --}}
<span class="ml-4" style="color: #8A2BE2;font-size: 17px;"><strong>#Configuring The Locale</strong></span><br>
<span style="color:#20B2AA;">*Determining The Current Locale</span><span class="bg-dark">(!examine)</span><br><br>
{{--  --}}
{{--  --}}
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Defining Translation Strings</strong></span><br>
	<span style="color:#20B2AA;"><li><strong>Using Short Keys</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;"><li><strong>Using Translation Strings As Keys</strong><span class="bg-dark">(!examine)</span></li></span>
</ul><br>
{{--  --}}
{{--  --}}
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Retrieving Translation Strings</strong></span><br>
	<span style="color:#20B2AA;"><li><strong>Replacing Parameters In Translation Strings</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;"><li><strong>Pluralization</strong><span class="bg-dark">(!examine)</span></li></span>
</ul><br>
{{--  --}}
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Overriding Package Language Files</strong></span><br>

<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}


<h2 id="frontend" class="text-center"><strong>JavaScript & CSS Scaffolding(c)</strong></h2>
{{--  --}}
<div class="row">
	<div class="col-md-2">
		<div class="list-group">
		  <a href="#blade" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Blade Template</a>
		  <a href="#localization" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Localization</a>
		  <a href="#frontend" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Frontend Scafolding</a>
		  <a href="#asset" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Compling Asset</a>
		</div>
	</div>
</div>
<table class="table table-hover" style="font-size:17px;">
		<tbody>
			{{-- Writing CSS --}}
			{{-- Writing CSS --}}
			{{-- Writing CSS --}}
			<tr class="table-active">		
				<td class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b>#Writing CSS</b></td>
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/frontend/frontendScafolding1.0.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>

				<td class="table-success" style="width: 25%">
				<img class="ml-0" src="{{ asset('images/larabook/frontend/frontendScafolding2.0.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>				
			</tr>

			<tr>
				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>

				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>
			</tr>
			{{-- Writing JavaScript --}}
			{{-- Writing JavaScript --}}
			{{-- Writing JavaScript --}}
			<tr class="table-active">		
				<td class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b>#Writing JavaScript</b></td>
			</tr>
			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/frontend/frontendScafolding3.0.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/frontend/frontendScafolding3.2.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>

				<td class="table-success" style="width: 25%">
				<img class="ml-0" src="{{ asset('images/larabook/frontend/frontendScafolding3.1.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
				<img class="ml-0" src="{{ asset('images/larabook/frontend/frontendScafolding3.3.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
				<img class="ml-0" src="{{ asset('images/larabook/frontend/frontendScafolding4.0.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
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
{{--  --}}
{{--  --}}
{{--  --}}
<h4 class="alert alert-warning" style="font-size: 18px;">Laravel Topic</h4>
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#</strong></span><br>
	<span style="color:#20B2AA;">*CSS</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;">*JavaScript</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;">*Removing The Frontend Scaffolding</span><span class="bg-dark">(!examine)</span><br>
</ul><br>
{{--  --}}
{{--  --}}
{{--  --}}

<span style="color: #8A2BE2;font-size: 17px;"><strong>#Writing CSS</strong></span><br><br>
{{--  --}}
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Writing JavaScript</strong></span><br>
	<span style="color:#20B2AA;font-size: 17px;"><li><strong>1.Writing Vue Components</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;font-size: 17px;"><li><strong>2.Using React</strong><span class="bg-dark">(!examine)</span></li></span>

<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
<h2 id="asset" class="text-center"><strong>Compiling Assets (Mix)(c)</strong></h2>
{{--  --}}
<div class="row">
	<div class="col-md-2">
		<div class="list-group">
		  <a href="#blade" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Blade Template</a>
		  <a href="#localization" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Localization</a>
		  <a href="#frontend" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Frontend Scafolding</a>
		  <a href="#asset" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Compling Asset</a>
		</div>
	</div>
</div>
<table class="table table-hover" style="font-size:17px;">
		<tbody>
			{{-- Running Mix --}}
			{{-- Running Mix --}}
			{{-- Running Mix --}}
			<tr class="table-active">		
				<td class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b># Running Mix</b></td>
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/frontend/compillingAsset1.0.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/frontend/compillingAsset2.0.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
				</td>

				<td class="table-success" style="width: 25%">
				<img class="ml-0" src="{{ asset('images/larabook/frontend/compillingAsset1.2.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>				
			</tr>

			<tr>
				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>

				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>
			</tr>
			{{-- Working With Stylesheets --}}
			{{-- Working With Stylesheets --}}
			{{-- Working With Stylesheets --}}
			<tr class="table-active">		
				<td class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b>#Working With Stylesheets</b></td>
			</tr>
			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/frontend/compillingAsset3.0.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/frontend/compillingAsset3.2.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/frontend/compillingAsset3.4.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
				</td>

				<td class="table-success" style="width: 25%">
				<img class="ml-0" src="{{ asset('images/larabook/frontend/compillingAsset3.1.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
				<img class="ml-0" src="{{ asset('images/larabook/frontend/compillingAsset3.3.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
				<img class="ml-0" src="{{ asset('images/larabook/frontend/compillingAsset3.5.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
				</td>				
			</tr>

			<tr>
				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>

				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>
			</tr>

			{{-- Working With JavaScript --}}
			{{-- Working With JavaScript --}}
			{{-- Working With JavaScript --}}
			<tr class="table-active">		
				<td class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b>#Working With JavaScript</b></td>
			</tr>
			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/frontend/compillingAsset4.0.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/frontend/compillingAsset4.2.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
				</td>

				<td class="table-success" style="width: 25%">
				<img class="ml-0" src="{{ asset('images/larabook/frontend/compillingAsset4.1.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
				<img class="ml-0" src="{{ asset('images/larabook/frontend/compillingAsset4.3.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
				</td>				
			</tr>

			<tr>
				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>

				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>
			</tr>

			{{-- 3333333333 --}}
			{{-- 3333333333 --}}
			{{-- 3333333333 --}}
			<tr class="table-active">		
				<td class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b>#3333333333</b></td>
			</tr>
			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/frontend/compillingAsset5.0.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/frontend/compillingAsset6.0.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
				</td>

				<td class="table-success" style="width: 25%">
				<img class="ml-0" src="{{ asset('images/larabook/frontend/compillingAsset7.0.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
				<img class="ml-0" src="{{ asset('images/larabook/frontend/compillingAsset8.0.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
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
{{--  --}}
{{--  --}}
<h4 class="alert alert-warning" style="font-size: 18px;">Laravel Topic</h4>
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Installation & Setup</strong></span><br>
	<span style="color:#20B2AA;">*Installing Node</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;">*Laravel Mix</span><span class="bg-dark">(!examine)</span><br>
</ul><br>
{{--  --}}
{{--  --}}
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Running Mix</strong></span><br>
	<span style="color:#20B2AA;">*Watching Assets For Changes</span><span class="bg-dark">(!examine)</span><br>
</ul><br>
{{--  --}}
{{--  --}}
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Working With Stylesheets</strong></span><br>
	<span style="color:#20B2AA;"><li><strong>Less</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;"><li><strong>Sass</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;"><li><strong>Stylus</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;"><li><strong>Post CSS</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;"><li><strong>Plain CSS</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;"><li><strong>URL Processing</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;"><li><strong>Source Maps</strong><span class="bg-dark">(!examine)</span></li></span>
</ul><br>
{{--  --}}
{{--  --}}
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Working With JavaScript</strong></span><br>
	<span style="color:#20B2AA;"><li><strong>Vendor Extraction</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;"><li><strong>React</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;"><li><strong>Vanilla JS</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;"><li><strong>Custom Webpack Configuration</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;">*Merging Custom Configuration</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;">*Custom Configuration Files</span><span class="bg-dark">(!examine)</span><br>
</ul><br>
{{--  --}}
<span  class="ml-4" style="color: #8A2BE2;font-size: 17px;"><strong>#Copying Files & Directories</strong></span><br>
{{--  --}}
<span  class="ml-4" style="color: #8A2BE2;font-size: 17px;"><strong>#Versioning / Cache Busting</strong></span><br>
{{--  --}}
<span  class="ml-4" style="color: #8A2BE2;font-size: 17px;"><strong>#Browsersync Reloading</strong></span><br>
{{--  --}}
<span  class="ml-4" style="color: #8A2BE2;font-size: 17px;"><strong>#Environment Variables</strong></span><br>
{{--  --}}
<span  class="ml-4" style="color: #8A2BE2;font-size: 17px;"><strong>#Notifications
</strong></span><br>
@endsection
