@extends('LaraBook.index')
@section('title','Basic2')
@section('content')
{{-- @include('LaraBook.partsial.dropdown') --}}

<h2 id="route" class="text-center"><strong>Route(c)</strong></h2>     
<div class="row">
	<div class="col-md-2">
		<div class="list-group">
		  <a href="#route" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Route</a>
		  <a href="#middleware" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Middleware</a>
		  <a href="#csrf" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Csrf</a>
		  <a href="#controller" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Controller</a>
		  <a href="#request" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Request</a>
		  <a href="#response" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Response</a>
		  <a href="#view" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Views</a>
		  
		</div>
	</div>

	<div class="col-md-10">
	{{-- methode & helpers table --}}
	{{-- methode & helpers table --}}
	{{-- methode & helpers table --}}	
	{{-- methode & helpers table --}}	
	{{-- methode & helpers table --}}	
	<table class="table table-hover" style="font-size:17px">
		<tbody>
			<tr>
				<td class="table-dark" style="color:white;width: 25%"></td>		
				<td class="table-dark" colspan="3" style="color:white;">Method that larave provide in Route Facade && <span style="color: #DC143C;">Helper method</span></td>
			</tr>
			<tr>			
				<td class="table-dark" style="color:white;width: 25%">Http method</td>
				<td class="table-dark" style="color:white;width: 25%">Redirect & View</td>
				<td class="table-dark" style="color:white;width: 25%">Parameter Constrant</td>
				<td class="table-dark" style="color:white;width: 25%">Route name</td>
			</tr>

			<tr>
				<td>
					<span style="color:#0000CD;"><b>Route::match(['get', 'post'], '/',)</b></span><br>Respose to multiple verb/method <br><br>

					<span style="color:	#0000CD	;"><b>Route::any('/',)</b></span><br>Response to all http verb
				</td>

				<td>
					<span style="color:	#0000CD	;"><b>Route::redirect/permanentRedirect('/here', '/there')</b></span><br>For redirect <br><span style="color: #DC143C;">return <b>redirect()->route('route name');</b><br>return <b>Redirect::to($id,301);</b></span>for dynamic redirect<br><br>

					<span style="color:	#0000CD	;"><b>Route::view('/welcome', 'welcome')</b></span><br>For view <br><span style="color: #DC143C;">return <b>view('view name')</b>;</span><br><span style="color: #DC143C;">return <b>View::make('view name')</b>;</span>
				</td>

				<td>
					<span style="color:#0000CD;"><b>Route::verb()->where()</b></span><br>Local Reg constrant <br><br><br>

					<span style="color:#0000CD;"><b>Route::pattern()</b></span><br>Global Reg constrant<br>
					<span style="color: #DC143C;"><b>app(//$router)</b></span><br>The app function returns the service container instance //($router instance)</td>

				<td>
					<span style="color:#0000CD	;"><b>Route::verb()->name()</b></span><br>For naming the route ((url)) <br><br><span style="color:#0000CD;"><b>if($request-><span style="color: #DC143C;">route()->named('routename')</span>)</b></span><br>Inspection current route 
				</td>
			</tr>
			<tr>			
				<td class="table-dark" colspan="2" style="color:white;width: 25%">Rout group & Route attribute</td>
				
				<td class="table-dark" style="color:white;width: 25%">Model binding</td>
				<td class="table-dark" style="color:white;width: 25%">Fallback & acces the route</td>
			</tr>
			<tr>
				<td>
					<span style="color:#0000CD	;"><b>Route::group()</b></span><br>For apply certain thing<br><br>
					<span style="color:#0000CD;"><b>Route::prefix('admin')</b></span><br>prefix each route in the group with a given URI<br><br>

					<span style="color:#0000CD;"><b>Route::name('admin.')</b></span><br>
					route naming prefix 
				</td>

				<td>
					<span style="color:#0000CD;"><b>Route::middleware(['first', 'second'])</b></span><br><br>
					<span style="color:#0000CD;"><b>Route::namespace('Admin')</b></span><br>
					for controller location that apply <br><br>
					<span style="color:#0000CD;"><b>Route::domain()</b></span><br>used to handle sub-domain routing
				</td>

				<td>
					<span style="color:#0000CD;"><b>function (App\User $user)</b><br>public function getRouteKeyName(){}</span>//customize the key (id)<br>Implict binding <br><br><span style="color:#0000CD;"><b>Route::model('user', App\User::class);</b></span><br>Explite binding</td>

				<td>
					<span style="color:#0000CD;"><b>Route::fallback(function () {})</b></span><br>executed when no other route matches the incoming request <br><br>
				<span style="color:#0000CD;"><b>Route::current(); <br><span style="color: #DC143C;">$curent = <b>url()->current();</b></span><br><br>Route::currentRouteName(); <br>Route::currentRouteAction();</b></span> <br><br>
				
				<span style="color: #DC143C;"><b>$full = url()->full();</b><br>
				<span style="color: #DC143C;"><b>$previous = url()->previous();</b>
				</td>
			</tr>

			<tr>
				<td class="table-dark" style="color:white"></td>
				<td class="table-dark" style="color:white"></td>
				<td class="table-dark" style="color:white"></td>
				<td class="table-dark" style="color:white"></td>
			</tr>
		</tbody>
	</table>

	</div>
</div><br><br>


<hr style="border-top:2px dashed gray;">
<hr style="border-top:2px dashed gray;">
{{-- ****************************************************************************** --}}
{{-- ****************************************************************************** --}}
{{-- ****************************************************************************** --}}





{{-- intro & at a galance of routing --}}
{{-- intro & at a galance of routing --}}
{{-- intro & at a galance of routing --}}
{{-- intro & at a galance of routing --}}
{{-- intro & at a galance of routing --}}
<div class="row">
	<div class="col-md-4">
			<img class="ml-0" src="{{ asset('images/larabook/basic/route0.07.png') }} " alt="model"  style="width:380px;height: 350px;">
	</div>

	<div class="col-md-4">
		<img class="ml-0" src="{{ asset('images/larabook/basic/route0.1.png') }} " alt="model"  style="width:380px;height: 350px;">
	</div>

	<div class="col-md-4">
		<img class="ml-0" src="{{ asset('images/larabook/basic/route0.2.png') }} " alt="model"  style="width:380px;height: 350px;">
	</div>
</div><br><br>

<span class="alert alert-success" style="font-size: 18px;">Route at a galance</span><br><br>

<div class="row">
	<div class="col-md-6">
		<img class="ml-0" src="{{ asset('images/larabook/basic/route0.3.png') }} " alt="model"  style="width:600px;height: 250px;"></div>

	<div class="col-md-6">
		<img class="ml-0" src="{{ asset('images/larabook/basic/route0.4.png') }} " alt="model"  style="width:600px;height:400px;">
	</div>
</div><br><br>




<hr style="border-top:2px dashed gray;">
<hr style="border-top:2px dashed gray;">
{{-- ****************************************************************************** --}}
{{-- ****************************************************************************** --}}
{{-- ****************************************************************************** --}}
{{-- laravel topic --}}
{{-- laravel topic --}}
{{-- laravel topic --}}


<a class="btn btn-warning ml-4">Laravel Topic</a><br><br>
<div class="row">
	<div class="col-md-6">
		<ul style="list-style-type:decimal;font-size: 17px;">
			<span style="color: #8A2BE2;font-size: 17px;"><strong><a href="#routing">#Basic Routing</a></strong></span><span style="font-size: 14px;"><br><b>The Default Route Files<br>Available Router Methods <br>CSRF Protection <br># Redirect Routes <br># View Routes</b></span><br><br>


			<span style="color: #8A2BE2;font-size: 17px;"><strong><a href="#Parameters">#Route Parameters</a></strong></span><span style="font-size: 14px;"><br><b># Required Parameters<br># Optional Parameters <br># Regular Expression Constraints <br>Global Constraints <br>Encoded Forward Slashes</b></span><br><br>

			<span style="color: #8A2BE2;font-size: 17px;"><strong><a href="#Route">#Named Routes</a></strong></span><span style="font-size: 14px;"><br>
			<b>Generating URLs To Named Routes</b><br>
			<b>Inspecting The Current Route</b></span>
		</ul>
	</div>


	<div class="col-md-6">
		<ul style="list-style-type:decimal;font-size: 17px;">
			<span style="color: #8A2BE2;font-size: 17px;"><strong><a href="#Groups">#Route Groups</a></strong></span><span style="font-size: 14px;"><br><b># Middleware <br># Namespaces <br> # Sub-Domain Routing <b><span class="text-success">	(1-Tnext)</span></b> <br># Route Prefixes <br># Route Name Prefixes </b></span><br><br>

			<span style="color: #8A2BE2;font-size: 17px;"><strong><a href="#Binding">#Route Model Binding</a></strong></span><br>
			<span style="font-size: 14px;"><b># Implicit Binding <br>Customizing The Key Name <b><span class="text-success">(!solved)</span></b><br># Explicit Binding<b><span class="text-success">(1-Trecent)</span></b><br>Customizing The Resolution Logic</b></span><br><br>

			<span style="color: #8A2BE2;font-size: 17px;"><strong><a href="#Routes">#Fallback Routes </a></strong></span><br><span style="font-size: 14px;"><b>Dynamic Rate Limiting <br>Distinct Guest & Authenticated User Rate Limits</b></span>

			<br><br>

			<span style="color: #8A2BE2;font-size: 17px;"><strong><a href="#Limiting">#Rate Limiting </a></strong></span><b><span class="text-success">	(1-!solved)</span></b><br><br>

			<span style="color: #8A2BE2;font-size: 17px;"><strong><a href="#Spoofing">#Form Method Spoofing </a></strong></span><br><br>

			<span style="color: #8A2BE2;font-size: 17px;"><strong><a href="#Spoofing">#Accessing The Current Route </a></strong></span>
		</ul>
	</div>
</div><br><br>



{{-- ****************************************************************************** --}}
{{-- ****************************************************************************** --}}
{{-- ****************************************************************************** --}}
{{-- table of routing --}}
{{-- table of routing --}}
{{-- table of routing --}}
<table class="table table-hover" style="font-size:17px;">
		<tbody>
			{{-- route basic --}}
			{{-- route basic --}}
			{{-- route basic --}}
			<tr class="table-active">		
				<td id="routing" class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD	;color: white; font-size: 18px;"><b>#Basic Routing</b></td>
			</tr>
			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/route1.0.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>

				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/route1.1.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>				
			</tr>
			<tr>
				<td class="table-dark" style="width: 25%;color: white">
					<img class="ml-0" src="{{ asset('images/larabook/basic/route0.7.png') }} " alt="model"  style="width:500px;height: 280px;">
				</td>

				<td class="table-dark" style="width: 25%;color: white">
					<img class="ml-0" src="{{ asset('images/larabook/basic/route1.4.png') }} " alt="model"  style="width:500px;height: 200px;">
				</td>
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/route1.2.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>

				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/route1.3.png') }} " alt="model"  style="width:560px;height: 400px;"><br>
					<img class="ml-0" src="{{ asset('images/larabook/basic/route0.05.png') }} " alt="model"  style="width:560px;height: 250px;">
				</td>				
			</tr>
			<tr>
				<td class="table-dark" style="width: 25%;color: white">
					
				</td>

				<td class="table-dark" style="width: 25%;color: white">
					<img class="ml-0" src="{{ asset('images/larabook/basic/route0.03.png') }} " alt="model"  style="width:560px;height: 300px;">
				</td>
			</tr>
			{{-- Route parameter --}}
			{{-- Route parameter --}}
			{{-- Route parameter --}}
			<tr class="table-active">		
				<td id="Parameters" class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b>#Route Parameters</b></td>
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/route2.0.png') }} " alt="model"  style="width:550px;height:560px;">
				</td>

				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/route2.1.png') }} " alt="model"  style="width:550px;height:560px;">
				</td>				
			</tr>
			<tr>
				<td class="table-dark" style="width: 25%;color: white">
					
				</td>

				<td class="table-dark" style="width: 25%;color: white">
					<img class="ml-0" src="{{ asset('images/larabook/basic/route0.04.png') }} " alt="model"  style="width:560px;height: 350px;">
				</td>
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/route2.2.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>

				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/route2.3.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>				
			</tr>
			<tr>
				<td class="table-dark" style="color: white">
					<img class="ml-0" src="{{ asset('images/larabook/basic/route0.5.png') }} " alt="model"  style="width:550px;height: 200px;">
				</td>

				<td class="table-dark">
					<img class="ml-0" src="{{ asset('images/larabook/basic/route2.4.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>
			</tr>
			
			{{-- named route --}}
			{{-- named route --}}
			{{-- named route --}}
			<tr class="table-active">		
				<td id="Route" class="text-center" colspan="4"  scope="col" style="background-color:#6A5ACD;color: white; font-size: 18px;"><b>#Named Route</b></td>
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/route3.0.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>

				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/route3.1.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>				
			</tr>

			<tr>
				<td class="table-dark" style="width: 25%">
					 <img class="ml-0" src="{{ asset('images/larabook/basic/route0.8.png') }} " alt="model"  style="width:550px;height: 400px;">
				</td>

				<td class="table-dark" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/route0.9.png') }} " alt="model"  style="width:550px;height: 510px;">
				</td>
			</tr>


			{{-- route group --}}
			{{-- route group --}}
			{{-- route group --}}
			<tr class="table-active">		
				<td id="Groups" class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b>#Route Groups</b></td>
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/route4.0.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>

				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/route4.1.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>				
			</tr>
			
			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/route4.2.png') }} " alt="model"  style="width:550px;height:560px;">
				</td>

				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/route0.01.png') }} " alt="model"  style="width:400px;height: 300px;">
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
				<td id="Binding" class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b>#Route Model Binding</b></td>
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/route5.0.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
				</td>

				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/route5.1.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/basic/route0.02.png') }} " alt="model"  style="width:550px;height: 300px;">
				</td>				
			</tr>

			<tr>
				<td class="table-dark" style="color;white;width: 25%">
					
				</td>

				<td class="table-dark" style="color;white;width: 25%">
				</td>
			</tr>
			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/route5.2.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>

				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/route5.3.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>				
			</tr>

			<tr>
				<td class="table-dark" style="color;white;width: 25%">
				
				</td>

				<td class="table-dark" style="color;white;width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/route0.6.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>
			</tr>
			{{-- fallback route --}}
			{{-- fallback route --}}
			{{-- fallback route --}}
			<tr class="table-active">		
				<td id="Routes" class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b>#Fallback Routes</b></td>
			</tr>
			<tr>
				<td class="table-success">
					<img class="ml-0" src="{{ asset('images/larabook/basic/route6.0.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>
				<td class="table-success"></td>
			</tr>
			<tr>
				<td class="table-dark" style="width: 25%;color: white;">
				</td>

				<td class="table-dark" style="width: 25%;color: white;"> 
				</td>
			</tr>

			{{-- rate limiting --}}
			{{-- rate limiting --}}
			{{-- rate limiting --}}
			<tr class="table-active">		
				<td id="Limiting" class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b>#Rate Limiting</b></td>
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/route7.0.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
				</td>

				<td class="table-success" style="width: 25%">
				<img class="ml-0" src="{{ asset('images/larabook/basic/route7.1.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>				
			</tr>
			
			<tr>
				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>

				<td class="table-dark" style="width: 25%;color: white;">
					 
				</td>
			</tr>
			
			{{-- methode spoofing --}}
			{{-- methode spoofing --}}
			{{-- methode spoofing --}}
			<tr class="table-active">		
				<td id="Spoofing" class="text-center" colspan="4"  scope="col" scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b>#Form Method Spoofing & #Accessing The Current Route</b></td>
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/route8.0.png') }} " alt="model"  style="width:550px;height: 560px;">
					
				</td>

				<td class="table-success" style="width: 25%">
				<img class="ml-0" src="{{ asset('images/larabook/basic/route9.0.png') }} " alt="model"  style="width:550px;height: 560px;">
				
				</td>				
			</tr>

			<tr>
				<td class="table-dark">
					
				</td>

				<td class="table-dark">	
					
				</td>
			</tr>

			



			<tr>
				<td class="table-dark" style="width: 25%;color: white">
					<span style="color: white;" class="bg-success">Points of key </span><br>
					1. A route defines an entry point into your application. <br>can include some extra configuration – like a name, middleware group, and <span class="text-warning">parameters to extract.</span> <br><br>
					2. The web middleware group is automatically applied to your default routes.php file <span style="color: #DC143C;">by the RouteServiceProvider.</span><br><br>
					3. Search engines sense the different types of redirects, and handle them differently. <br><br>
					4. <span class="text-warning">301, "Moved Permanently"—recommended for SEO </span><br>which passes between 90-99% of link equity (ranking power) to the redirected page. <br><br>
					5.Note that the route name and the URI is not the same. <br><br>
					6. Route attribute return obj thats why <b>use -> operator</b>for chaining <br><br>
					7. route model binding helps us get rid of extra keystrokes by simplifying the instance. <br><br><br><br><br>


					<span style="color: white;" class="bg-info">Usage & Practise</span>
					<span style="color:#87CEEB;font-size: 22px"><br><b>----->>>>>>>(#Basic Routing)</b></span><br>
					1. Routing... <br>
					2. Only use web.php file <br>

					<span style="color:#87CEEB;font-size: 22px"><br><b>----->>>>>>>(# Redirect & view)</b></span><br>
					1. redirect both web & controller (\Route::)  <br>
					2. Route::view only web file 
				</td>

				<td class="table-dark" style="width: 25%;color: white">
					<span style="color: white;" class="bg-danger">Exception</span>
					<span style="color:#87CEEB;font-size: 22px"><br><b>----->>>>>>>(#Basic Routing)</b></span><br>
					<span class="text-warning" style="font-size: 18px;color: black"> IF we need same URI as multiple HTTp verbs then</span><br><br>
					<span class="alert alert-info">Route::get('/admin', '...controller@edit'); <br><br>	Route::post('/admin','..controller@show');</span><br><br>
					
					<span style="color:#87CEEB;font-size: 22px"><br><b>----->>>>>>>(# Redirect)</b></span><br>
					For url redirect <br>return Redirect::to('<span class="text-warning">http://heera.it</span>'); <br><br>



					<span style="color: white;" class="bg-danger">Exception (Route & Request)</span><br>
					use Illuminate\Http\Request;  only handle the form request (controller) <br><br>
					
					
					
					<span style="color: white;" class="bg-success">Use Route Facade way</span><br>use Illuminate\Support\Facades\Route; <br>echo Route::currentRouteName(); <br>
					<br><span class="text-warning">vvi <br>
						not use the facade <br>
						echo \Route::currentRouteName();  </span><br><br>
					blade view : <br><b>{'{ Route::currentRouteName() }}</b><br><br><br>

					<span style="color: white;" class="bg-success">Use Request Facade way</span><br>
					use Illuminate\Support\Facades\Request; <br>echo Request::route()->getName(); <br><br>
					<span class="text-warning">vvi <br>	not use the facade <br>
					\Request::route()->getName(); </span> <br><br><br>
					

					<span style="color: white;" class="bg-success">Default way</span><br>
					use Illuminate\Http\Request; <br>
					<span style="color: white;" class="bg-success">Helper way</span><br>
					request()->route()->getName();<br><br>
					Your can use Route::current()->uri() to get current URL <b>(part after localhost)</b>. 
				</td>
			</tr>
		

			<tr>
				<td class="table-dark" style="width: 25%;color: white">
						<span style="color: white;" class="bg-secondary">Dictionary</span><br><span style="color:#ADFF2F">Forgery </span>(জালিয়াতি) <br>
					<span style="color:#ADFF2F">stateless </span>(আড়ম্বরহীন/শাসনহীন) <br>
					<span style="color:#ADFF2F">Redirect </span> পুনর্নির্দেশ <br>
					<span style="color:#ADFF2F">Cache </span>গুপ্ত ভাণ্ডারে লুকাইয়া রাখা <br>
					<span style="color:#ADFF2F">Parameter </span>স্থিতিমাপ <br>
					<span style="color:#ADFF2F">Regular Expression Constraints </span>(নিয়মিত মত প্রকাশের সীমাবদ্ধতা) <br>
					<span style="color:#ADFF2F">Encode</span>সঙ্কেতাক্ষরে লিখা<br>
					<span style="color:#ADFF2F">Decode</span>পাঠোদ্ধার করা<br>
					<span style="color:#ADFF2F">instance </span>দৃষ্টান্ত <br>
					<span style="color:#ADFF2F">prefix </span>(উপসর্গ) <br>
					<span style="color:#ADFF2F">fallback </span>পিছু হট <br>
					<span style="color:#ADFF2F">Rate limite </span>হারের সীমা<br>
					<span style="color:#ADFF2F">Throttle</span> শ্বাসনালী <br>
					<span style="color:#ADFF2F">Spoofing</span> প্রতারণা করা <br><br><br><br>



					<span style="color: white;" class="bg-secondary">Explanation</span>
					<br>
					<b><span style="color:#ADFF2F">Closure</span></b><br>A Closure is an anonymous function. Closures are often used as callback methods and can be used as a parameter in a function.<br><br>
					<b><span style="color:#ADFF2F">callback</span></b><br>A callback function is a function passed into another function as an argument, which is then invoked inside the outer function to complete some kind of routine or action. <br><br>					
					<b><span style="color:#ADFF2F">API</span></b><br>API stands for Application Programming Interface. An API is a software intermediary that allows two applications to talk to each other. <br> In other words, an API is the messenger that delivers your request to the provider that you're requesting it from and then delivers the response back to you.<br><br>
				</td>

				<td class="table-dark" style="width: 25%;color: white">
					<b><span style="color:#ADFF2F">Routing</span></b><br>Routing in Laravel allows you to route all your application requests to its appropriate controller. <br><br>
					<b><span style="color:#ADFF2F">Directory</span></b><br>
					The term directory refers to the way a structured list of document files and folders is stored on the computer. <br><br>
					<b><span style="color:#ADFF2F">Cache</span></b><br>which stores recently used information so that it can be quickly accessed at a later time. <br><br>
					<b><span style="color:#ADFF2F">Callback</span></b><br>A callback function is a function passed into another function as an argument, which is then invoked inside the outer function to complete some kind of routine or action. <br><br>
					<b><span style="color:#ADFF2F">Global constrain</span></b><br>
					Basically, you can add all your router patterns in there and they will be made available to your routes. They're all in one place so it's easy to remember where they are should you need update them and you can reuse the same pattern for multiple parameters. <br><br>

					<b><span style="color:#ADFF2F">Boot /Bootstrap</span></b><br>
					a technique of loading a program into a computer by means of a few initial instructions which enable the introduction of the rest of the program from an input device.<br><br>The boot() method is used to override the default behavior of eloquent model. <br><br>
					
					<b><span style="color:#ADFF2F">IDE</span></b><br>
					An integrated development environment (IDE) is a software application that provides comprehensive facilities to computer programmers for software development. An IDE normally consists of a source code editor, build automation tools and a debugger. 

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
{{-- Middleware --}}
{{-- Middleware --}}
{{-- Middleware --}}
<h2 class="text-center" id="middleware"><strong>Middleware(c)</strong></h2>
<div class="row">
	<div class="col-md-2">
		<div class="list-group">
		  <a href="#route" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Route</a>
		  <a href="#middleware" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Middleware</a>
		  <a href="#csrf" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Csrf</a>
		  <a href="#controller" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Controller</a>
		  <a href="#request" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Request</a>
		  <a href="#response" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Response</a>
		  <a href="#view" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Views</a>
		  
		</div>
	</div>
</div><br>
<div class="row">
	<div class="col-md-4"><br><img class="ml-0" src="{{ asset('images/larabook/basic/middleware0.3.png') }} " alt="model"  style="width: 350px;height: 300px;"> <br><br></div>
	<div class="col-md-4"><br><img class="ml-1" src="{{ asset('images/larabook/basic/middleware0.2.png') }} " alt="model"  style="width: 350px;height: 300px;"> <br><br></div>
	<div class="col-md-4"><br><img class="ml-0" src="{{ asset('images/larabook/basic/middleware0.1.png') }} " alt="model"  style="width: 350px;height: 300px;"> <br><br></div>
</div>
{{-- laraveltopic --}}
{{-- laraveltopic --}}
{{-- laraveltopic --}}
<a class="btn btn-warning">Laravel Topic</a>
<ul style="list-style-type:decimal;font-size: 17px;">
	<span style="color: #8A2BE2;font-size: 17px;"><strong><a href="#DefMid">#Defining Middleware</a></strong></span><br>
	<span style="color: #8A2BE2;font-size: 17px;"><strong><a href="#RegMid">#Registering Middleware</a></strong></span><br>
	<span style="color: #8A2BE2;font-size: 17px;"><strong><a href="#MidPara">#Middleware Parameters</a></strong></span><br>
	<span style="color: #8A2BE2;font-size: 17px;"><strong><a href="#TerMid">#Terminable Middleware</a></strong></span><br>
</ul>

<table class="table table-hover" style="font-size:17px;">
		<tbody>
			{{-- define middleware --}}
			{{-- define middleware --}}
			{{-- define middleware --}}
			<tr class="table-active">		
				<td id="DefMid" class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b>#Defining Middleware</b></td>
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/middleware1.0.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/basic/middleware1.2.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>

				<td class="table-success" style="width: 25%">
				<img class="ml-0" src="{{ asset('images/larabook/basic/middleware1.1.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
				<img class="ml-0" src="{{ asset('images/larabook/basic/middleware0.0.png') }} " alt="model"  style="width:400px;height: 300px;">
				</td>				
			</tr>

			<tr>
				<td class="table-dark" style="width: 25%;color: white;">
					<span style="color: white;" class="bg-success">Points of key</span><br>
				    1. Before using any middleware, you have to create , register & then use it . <br><br>
					2. It's sometimes called plumbing, as it connects two applications together so data and databases can be easily passed between the “pipe.” <br><br>
					3. Middleware acts as <strong>a bridge or middle-man or interface acting in coordination between a request and a response</strong>. It is a type of filtering mechanism. <br><br>

					<span style="color: white;" class="bg-danger">Exception</span>
					<span class="text-warning"></span><br>
					((1. Most of the time it is used for Redirect to another page .)) <br><br> 

					<span style="color: white;" class="bg-secondary">Dictionary</span><br><span style="color:#ADFF2F">Envision </span>কল্পনা করা <br>
					<span style="color:#ADFF2F">Kernel </span>কেন্দ্রস্থল <br>
					<span style="color:#ADFF2F">Convenient </span>সুবিধাজনক 
				</td>
				<td class="table-dark" style="width: 25%;color: white;">
					<span style="color: white;" class="bg-secondary">Explanation</span>
					<br>
					<b><span style="color:#ADFF2F">Laravel CORS Middleware</span><br></b>CORS stands for Cross-Origin Resource Sharing an is a specification that allow modern browsers to request (and receive) data from a domain other than the one serving the page that made the request. <br><br>

					<b><span style="color:#ADFF2F">Domain name</span><br></b>Domain names are used to identify one or more IP addresses. <br><br>

					<b><span style="color:#ADFF2F">Hosting</span><br></b>Websites are hosted, or stored, on special computers called servers that provides the technologies and services needed for the website or webpage to be viewed in the Internet.

				</td>
			</tr>
			{{-- Registering Middleware --}}
			{{-- Registering Middleware --}}
			{{-- Registering Middleware --}}
			<tr class="table-active">		
				<td id="RegMid" class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b>#Registering Middleware</b></td>
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/middleware2.0.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/basic/middleware2.2.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/basic/middleware2.4.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>

				<td class="table-success" style="width: 25%">
				<img class="ml-0" src="{{ asset('images/larabook/basic/middleware2.1.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
				<img class="ml-0" src="{{ asset('images/larabook/basic/middleware2.3.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>				
			</tr>

			<tr>
				<td class="table-dark" style="width: 25%">
					<span style="color: white;" class="bg-danger">Exception</span>
					<p>Laravel provides two types of Middlewares.</p>
					<span class="text-secondary">1. Global Middleware</span><br>
					<span class="text-secondary">2. Route Middleware</span><br>
				</td>

				<td class="table-dark" style="width: 25%">
					
					<span style="color: white;" class="bg-success">Points of key</span><br>
					stage 1: <br>'middleware' => 'throttle' <br>The default throttle limits it to 60 attempts per minute. <br><br>
					stage 2: <br>'middleware' => 'throttle:5' <br>limit it to 5 attempts per minute. <br><br>
					stage 3: <br>'middleware' => 'throttle:5,10' <br>limit it to 5 attempts per 10 minute.
				</td>
			</tr>
			{{-- Middleware Parameters --}}
			{{-- Middleware Parameters --}}
			{{-- Middleware Parameters --}}
			<tr class="table-active">		
				<td id="MidPara" class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b>#Middleware Parameters</b></td>
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/middleware3.0.png') }} " alt="model"  style="width:550px;height:560px;">
				</td>

				<td class="table-success" style="width: 25%">
				<img class="ml-0" src="{{ asset('images/larabook/basic/middleware3.1.png') }} " alt="model"  style="width:500px;height: 400px;">
				</td>				
			</tr>

			<tr>
				<td class="table-dark" style="width: 25%">
					
				</td>

				<td class="table-dark" style="width: 25%">
					
				</td>
			</tr>
			{{-- Terminable Middleware --}}
			{{-- Terminable Middleware --}}
			{{-- Terminable Middleware --}}
			<tr class="table-active">		
				<td id="TerMid" class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b>#Terminable Middleware</b></td>
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/middleware4.0.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>

				<td class="table-success" style="width: 25%">
				<img class="ml-0" src="{{ asset('images/larabook/basic/middleware4.1.png') }} " alt="model"  style="width:500px;height: 200px;">
				</td>				
			</tr>

			<tr>
				<td class="table-dark" style="width: 25%">
					<span style="color: white;" class="bg-secondary">Dictionary</span><br><span style="color:#ADFF2F">Terminate </span>শেষ করা <br>
					<span style="color:#ADFF2F">Singleton </span>একক বস্তু <br><br>
					<span style="color: white;" class="bg-secondary">Explanation</span><br>
					<b><span style="color:#ADFF2F">Singleton</span></b><br> The singleton pattern is when a class has a single instance of itself. Meaning that whenver I want to use an instance of the class, I'm using the same instance.
				</td>

				<td class="table-dark" style="width: 25%">
					<b><span style="color:#ADFF2F">CGI</span></b><br>CGI (Common Gateway Interface) is a web technology and protocol that defines a way for a web server (HTTP server) to interact with external applications, e.g. PHP. CGI enhances the web server capabilities to enable dynamic content generation and processing. <br>
					<b><span style="color:#ADFF2F">FastCGI</span></b><br>FastCGI – a high performance version of the CGI technology with enhanced capabilities.
				</td>
			</tr>
		</tbody>
</table>


<hr style="border-top: 2px dashed orange;">
<hr style="border-top:2px dashed orange;">
<hr style="border-top:2px dashed orange;">
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- csrf --}}
{{-- csrf --}}
{{-- csrf --}}
<h2 id="csrf" class="text-center"><strong>CSRF Protection(c)</strong></h2>
<div class="row">
	<div class="col-md-2">
		<div class="list-group">
		  <a href="#route" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Route</a>
		  <a href="#middleware" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Middleware</a>
		  <a href="#csrf" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Csrf</a>
		  <a href="#controller" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Controller</a>
		  <a href="#request" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Request</a>
		  <a href="#response" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Response</a>
		  <a href="#view" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Views</a>
		  
		</div>
	</div>

	<div class="col-md-10">
		<div class="row">
			<div class="col-md-5"><br><img class="ml-1" src="{{ asset('images/larabook/basic/csrf0.2.png') }} " alt="model"  style="width: 400px;height: 300px;"></div>
			<div class="col-md-5"><br><img class="ml-1" src="{{ asset('images/larabook/basic/csrf0.3.png') }} " alt="model"  style="width: 400px;height: 300px;"></div>
		</div>
	</div>
</div><br><br>
{{-- table --}}
{{-- table --}}
{{-- table --}}
<table class="table table-hover" style="font-size:17px;">
		<tbody>
			{{-- ponit --}}
			{{-- ponit --}}
			{{-- ponit --}}
			<tr class="table-active">		
				<td class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b>#Excluding URIs From CSRF Protection</b></td>
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/csrf1.0.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
				</td>

				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/csrf2.0.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
				</td>				
			</tr>

			<tr>			
				<td class="table-dark" style="width: 25%">
					<span style="color: white;" class="bg-secondary">Dictionary</span><br><span style="color:#ADFF2F">imply</span> পরোক্ষভাবে প্রকাশ করা <br>
					<span style="color:#ADFF2F">cayman</span> কুম্ভীর <br>
					<span style="color:#ADFF2F">payload </span>পরোক্ষভাবে প্রকাশ করা
				</td>
				<td class="table-dark" style="width: 25%">
					<span style="color: white;" class="bg-danger">Exception</span><br>
					1. A csrf token is generated for the forms and Must be tied to the user's sessions. It is used to send requests to the server, in which the token validates them. <span class="text-primary">This is one way of protecting against csrf, another would be checking the referrer header.</span><br><br>
					2. Anytime you define an HTML form in your application, you should include a hidden CSRF token field in the form so that the CSRF protection middleware can validate the request.
				</td>
			</tr>
			
			<tr class="table-active">		
				<td class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b># X-CSRF-TOKEN & #X-XSRF-TOKEN</b></td>
			</tr>				
			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/csrf3.0.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>

				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/csrf4.0.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>				
			</tr>
			<tr>
				<td class="table-dark" style="width: 25%">
					<span style="color: white;" class="bg-secondary">Explanation</span><br>
					<b><span style="color:#ADFF2F">User session</span></b><br>
					a user session (sometime referred to as a visit) is the presence of a user with a specific IP address who has not visited the site recently (typically, anytime within the past 30 minutes). <br><br>
					<b><span style="color:#ADFF2F">Malicious Attack</span></b><br>
					A <strong>malicious attack</strong> is an attempt to forcefully abuse or take advantage of someone's computer, whether through computer viruses, social engineering, phishing, or other types of social engineering. <br><br>
					<b><span style="color:#ADFF2F">Web hook</span></b><br>A <strong>webhook (also called a web callback or HTTP push API)</strong> is a way for an app to provide other applications with real-time information. A webhook delivers data to other applications as it happens, meaning you get data immediately. <br><br>
					<b><span style="color:#ADFF2F">.swf file extension</span></b><br>SWF (/ˈswɪf/ SWIF) is an Adobe Flash file format used for multimedia, vector graphics and ActionScript. SWF files can contain animations or applets of varying degrees of interactivity and function.
				</td>

				<td class="table-dark" style="width: 25%">
					<span style="background-color:gray;color: white">X-CSRF-TOKEN vs X-XSRF-TOKEN</span><br>
					The difference between the X-CSRF-TOKEN and X-XSRF-TOKEN is that the first uses a plain text value and the latter uses an encrypted value, <strong><span class="text-danger">because cookies in Laravel are always encrypted.</span></strong><br><br> If you use the csrf_token() function to supply the token value, you probably want to use the X-CSRF-TOKEN header.
					</p>
					<img src="{{ asset('images/larabook/basic/csrf0.0.png') }}" style="width:550px;height: 400px" alt="csrf">
				</td>
			</tr>
		</tbody>
</table>
<span style="background-color:blue;color: white">Php reference...</span><br><br>
<ul style="list-style-type:decimal;font-size: 17px;">
	<li><a href="{{ route('php') }}" target="_blank">Session Vs Cookie</a> </li>
</ul><br><br><br>

<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- form details --}}
{{-- form details --}}
{{-- form details --}}
<table class="table table-hover" style="font-size:17px">
    <tbody>
      <tr>
        <td class="table-secondary" style="width: 33%;"><span style="font-size: 18px;color:#008080"><strong>Migration</strong></span></td>
        <td class="table-secondary" style="width: 33%;">
          <span style="font-size: 18px;color:#008080"><strong>Model</strong></span>
        </td>
        <td class="table-secondary" style="width: 33%;">
          <span style="font-size: 18px;color:#008080"><strong>Controller</strong></span>
        </td>
      </tr>


      <tr>
        <td>
        	<b>Migration :</b><br>
            # migration always use lowercase . Not use (UCase ,_ ,-) . <br><br>
            # make model and with migration <br><br>
            # route name a use '.'  | name('product.view') <br><br>
       
        </td>

        <td class="table-primary">
        	 # data insert in DB through model & retrive through method <br><br>
        	 # <b>model fat and controller thin </b><br><br>
             # laravel take another plural table id foreign key as table singular name with  _id (user_id from users table)<br><br>
            # model fillable for restriction form data to direct insert into DB(form a inspect element  kora data insert kora jay php a )<br><br>
            # jagula insert korta parba sagula fillable a ar jagula dont touch/insert protected $guarded=[fild_name] and can $guarded=[empty]<br><br>
          # best case jata kom sata use fillable/gaurad<br><br>
          # timespan false in model to hide time in DB<br><br>
          # make model and with migration <br><br>
          # primary key by default modelName_id(user_id) and can chage to other column as primary<br><br>
          # a table can be intigrate with different model<br><br>




          
          
          
        </td>
        <td class="table-warning">

		<b>Controller :</b><br>
        # controller a not use (- , _) sign <br><br>
        # without namespace \App\User::get(); both controller and view(monir vai) <br><br>
        # \ means that is out side of the controller (like model)  <br><br>
        # <b>view a usequery builder not eloquent</b><br><br><br>
        </td>        
      </tr>

      <tr>
        <td class="table-secondary" style="width: 33%;"><span style="font-size: 18px;color:#008080"><strong>Form</strong></span></td>
        <td class="table-secondary" style="width: 33%;">
          <span style="font-size: 18px;color:#008080"><strong>Request</strong></span>
        </td>
        <td class="table-secondary" style="width: 33%;">
          <span style="font-size: 18px;color:#008080"><strong>Validation</strong></span>
        </td>
      </tr>
      <tr>
      	<td>
      		# edit/delete data a action or route helper method <br><br>
          # apply edit and create in same view .old value if else logic <br><br>
          # refrence value pass to route 1. get & 2.post <br><br>      
          edit table a need ref token/id for get certain things <br>
          step1:paramete/value route a pass korla controller paba othewise no <br>
          step2:route a /{id} capture value <br><br>
          but <br>
          step1:route('name',[key=>value]) as token
          browser url ?key =val <br><br>
          step2:not via controller .not via royte capture access by global variable <br><br>
      		# migration >> model >>controller >> view >> form <br><br>
                    # file image preserve not for security & also dont know location <br><br>
                    # file large hola php.ini edit kora server restart korla kaj korba <br><br>
      		# try not to configure database.php try to configure .env<br><br>
      		# .env APP_DEBUG=true for show if any error occur but not use in production enviornment <br><br>
      		# action means which url. <br><br>
      		# csrf use na korta chaila verity token a pathe add korta hoba but that not good <br><br>
      	</td>
      	<td>
      		# request() helper to get request object
      		# $user(model)->total()  show in pagination top better<br><br>
            # login user name instead of email<br><br>
            # timespan() >> mouse right click go defination .Its create two field<br><br>
      		# field name array akara inject hoy request class a <br><br>
      		# $request->get('name','default value')<br><br>


      	</td>
      	<td>
      		# global custome validation msg for  in resource >>lang>>en>>validation.php apply admin  panel structure add <br><br>
      		# request class a global validation msg can like (required) and also can (text1.required) customize for same validation <br><br>
      	</td>
      </tr>


      <tr>
        <td class="table-dark" style="color:white"></td>
        <td class="table-dark" style="color:white"></td>
        <td class="table-dark" style="color:white"></td>
      </tr>
    </tbody>
</table>






<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- Controller --}}
{{-- Controller --}}
{{-- Controller --}}
<h2 id="controller" class="text-center"><strong>Controller(c)</strong></h2>
<div class="row">
	<div class="col-md-2">
		<div class="list-group">
		  <a href="#route" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Route</a>
		  <a href="#middleware" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Middleware</a>
		  <a href="#csrf" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Csrf</a>
		  <a href="#controller" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Controller</a>
		  <a href="#request" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Request</a>
		  <a href="#response" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Response</a>
		  <a href="#view" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Views</a>
		  
		</div>
	</div>
</div><br>
{{-- laravel Topic --}}
{{-- laravel Topic --}}
{{-- laravel Topic --}}
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Basic Controllers:</strong></span><br>
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Controller Middleware:</strong></span><br>
	<p>
		Using the middleware method from your controller's constructor, you may easily assign middleware to the controller's action.(Controllers also allow you to register middleware using a Closure.) <br>
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Resource Controllers:</strong></span><br>

<span style="color: #8A2BE2;font-size: 17px;"><strong>#Dependency Injection & Controllers</strong></span><br>
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Route Caching</strong></span><br><br><br>
{{-- table --}}
{{-- table --}}
{{-- table --}}
<table class="table table-hover" style="font-size:17px;">
		<tbody>
			{{-- Basic Controllers --}}
			{{-- Basic Controllers --}}
			{{-- Basic Controllers --}}
			<tr class="table-active">		
				<td class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b>#Basic Controllers</b></td>
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/controller1.0.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/basic/controller1.2.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>

				<td class="table-success" style="width: 25%">
				<img class="ml-0" src="{{ asset('images/larabook/basic/controller1.1.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>				
			</tr>

			<tr>
				<td class="table-dark" style="width: 25%;color:white;">
					<span style="color: white;" class="bg-success">Points of key</span><br>1. Controllers act as directing traffic (চলাচল/operation
					) among the Views and the Models. <br><br>

					<span style="color: white;" class="bg-info">Usage</span><br>
					<span class="text-secondary">Accessing The Request:(injector)</span>To obtain an instance of the current HTTP request via dependency injection, you should type-hint the <span class="text-danger" style="font-size: 18px;">Illuminate\Http\Request</span> class on your controller constructor or method. The current request instance will automatically be injected by the service container: <br><br>

					<span style="color: white;" class="bg-danger">Exception</span><br>
					<span class="text-warning">1. (( First controller action  then  define route ))</span>
				</td>

				<td class="table-dark" style="width: 25%;color:white;">
					<span style="color: white;" class="bg-secondary">Dictionary</span><br><span style="color:#ADFF2F">flatten </span>সমতল<br>
					<span style="color:#ADFF2F">dipatch</span> প্রেরণ<br>
					<span style="color:#ADFF2F">invoke</span> ডাকা<br><br>

					<span style="color: white;" class="bg-secondary">Explanation</span><br>
					<b><span style="color:#ADFF2F">Plain / Flatten array</span></b><br>Returns a new array that is a one-dimensional flattening of self (recursively). That is, for every element that is an array, extract its elements into the new array.
				</td>
			</tr>
			{{-- Controller Middleware --}}
			{{-- Controller Middleware --}}
			{{-- Controller Middleware --}}
			<tr class="table-active">		
				<td class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b>#Controller Middleware</b></td>
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/controller2.0.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>

				<td class="table-success" style="width: 25%">
				<img class="ml-0" src="{{ asset('images/larabook/basic/controller2.1.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>				
			</tr>

			<tr>
				<td class="table-dark" style="width: 25%;color:white;">
					directing traffic (চলাচল/operation)
				</td>

				<td class="table-dark" style="width: 25%;color:white;">
					
				</td>
			</tr>
			{{-- Resource Controllers --}}
			{{-- Resource Controllers --}}
			{{-- Resource Controllers --}}
			<tr class="table-active">		
				<td class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b>#Resource Controllers</b></td>
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/controller3.0.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>

				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/controller3.1.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>				
			</tr>

			<tr>
				<td class="table-dark" style="width: 25%;color:white;">
					<span style="color: white;" class="bg-secondary">Dictionary</span><br><span style="color:#ADFF2F">stub</span>অসম্পূর্ণ <br>
					<span style="color:#ADFF2F">Unintentional</span>অনিচ্ছাকৃত <br>
					<span style="color:#ADFF2F">Suplimental</span>সম্পূরক <br>
				</td>
				<td class="table-dark" style="width: 25%;color:white;">
					<img src="{{ asset('images/larabook/controller.png') }}" style="width:450px;height:460px;" alt="controller">
				</td>
			</tr>
			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/controller3.2.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>

				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/controller3.3.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>				
			</tr>

			<tr>
				<td class="table-dark" style="width: 25%;color:white;">
					
				</td>

				<td class="table-dark" style="width: 25%;color:white;">
					
				</td>
			</tr>
			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/controller3.4.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>

				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/controller3.5.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>				
			</tr>

			<tr>
				<td class="table-dark" style="width: 25%;color:white;">
					
				</td>

				<td class="table-dark" style="width: 25%;color:white;">
					
				</td>
			</tr>
			{{-- Dependency Injection & Controllers --}}
			{{-- Dependency Injection & Controllers --}}
			{{-- Dependency Injection & Controllers --}}
			<tr class="table-active">		
				<td class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b>#Dependency Injection & Controllers</b></td>
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/controller4.0.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/basic/controller4.2.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>

				<td class="table-success" style="width: 25%">
				<img class="ml-0" src="{{ asset('images/larabook/basic/controller4.1.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>				
			</tr>

			<tr>
				<td class="table-dark" style="width: 25%;color:white;">
					
				</td>

				<td class="table-dark" style="width: 25%;color:white;">
					
				</td>
			</tr>

			{{-- Route Caching --}}
			{{-- Route Caching --}}
			{{-- Route Caching --}}
			<tr class="table-active">		
				<td class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b>#Route Caching</b></td>
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/controller5.0.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>

				<td class="table-success" style="width: 25%">
				
				</td>				
			</tr>

			<tr>
				<td class="table-dark" style="width: 25%;color:white;">
					
				</td>

				<td class="table-dark" style="width: 25%;color:white;">
					
				</td>
			</tr>
		</tbody>
</table><br>	
{{-- php ref --}}
{{-- php ref --}}
<span style="background-color:blue;color: white">Php reference...</span><br><br>
<ul style="list-style-type:decimal;font-size: 17px;">
	<li>Trait</li>
</ul> <br><br><br>







<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- request --}}
{{-- request --}}
{{-- request --}}
<h2 id="request" class="text-center"><strong>HTTP Requests(c)</strong></h2>
<div class="row">
	<div class="col-md-2">
<div class="list-group">
		  <a href="#route" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Route</a>
		  <a href="#middleware" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Middleware</a>
		  <a href="#csrf" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Csrf</a>
		  <a href="#controller" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Controller</a>
		  <a href="#request" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Request</a>
		  <a href="#response" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Response</a>
		  <a href="#view" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Views</a>

		</div>
	</div>
</div>
{{--  --}}
  <img src="{{ asset('images/larabook/HTTP-Request-Response.jpg') }} " alt="csrf3" class="ml-5"> <br><br>
<table class="table table-hover" style="font-size:17px;">
		<tbody>
			{{-- #Accessing The Request --}}
			{{-- #Accessing The Request --}}
			{{-- #Accessing The Request --}}
			<tr class="table-active">		
				<td class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b>#Accessing The Request</b></td>
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/request1.0.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/basic/request1.2.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/basic/request1.4.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>

				<td class="table-success" style="width: 25%">
				<img class="ml-0" src="{{ asset('images/larabook/basic/request1.1.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
				<img class="ml-0" src="{{ asset('images/larabook/basic/request1.3.png') }} " alt="model"  style="width:550px;height: 560px;"> <br><br>
				<img class="ml-0" src="{{ asset('images/larabook/basic/request2.0.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>				
			</tr>

			<tr>
				<td class="table-dark" style="width: 25%">
					<span style="color: white;" class="bg-secondary">Dictionary</span><br><span style="color:#ADFF2F">Inspect</span>পরিদর্শন করা <br><br>

					<span style="color: white;" class="bg-secondary">Explanation</span><br>
					<b><span style="color:#ADFF2F">PSR-7</span></b><br>PSR-7 is a set of common interfaces defined by PHP Framework Interop Group(FIG). These interfaces are representing HTTP messages, and URIs for use when communicating trough HTTP. Any web application using this set of interfaces is a PSR-7 application.
				</td> 
				<td class="table-dark" style="width: 25%">
					<b><span style="color:#ADFF2F">Service Container</span></b><br>
					The Laravel service container is a powerful tool for managing class dependencies and performing dependency injection. <br><br><span class="text-warning">The Service Container is a dependency injection container</span> and a registry for application. Instead of creating objects manually the benefits of using Service Container are: It has the capacity to manage class dependencies. <br><br> Dependency injection is a fancy phrase that essentially means this: class dependencies are "injected" into the class <span class="text-warning">via the constructor or, in some cases, "setter" methods.</span>
					<br><br>
					<b><span style="color:#ADFF2F">Dependency Injection</span></b><br>
					When you try to inject an object into your class, Container uses <span class="text-warning">Reflection API to inspect your constructor method </span> and retrieves what you have defined as a dependency
				</td>
			</tr>
			{{-- Retrieving Input --}}
			{{-- Retrieving Input --}}
			{{-- Retrieving Input --}}
			<tr class="table-active">		
				<td class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b>#Retrieving Input</b></td>
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/request3.0.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/basic/request3.2.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/basic/request3.4.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/basic/request3.6.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>

				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/request3.1.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/basic/request3.3.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/basic/request3.5.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/basic/request3.7.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>				
			</tr>

			<tr>
				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>

				<td class="table-dark" style="width: 25%;color: white;">
					<span style="color: white;" class="bg-secondary">Dictionary</span><br><span style="color:#ADFF2F">Inspect</span>পরিদর্শন করা

				</td>
			</tr>
			{{-- Files --}}
			{{-- Files --}}
			{{-- Files --}}
			
			<tr class="table-active">		
				<td class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b># File</b></td>
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/request4.0.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/basic/request4.2.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>

				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/request4.1.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>				
			</tr>

			<tr>
				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>

				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>
			</tr>
			{{-- Configuring Trusted Proxies --}}
			{{-- Configuring Trusted Proxies --}}
			{{-- Configuring Trusted Proxies --}}
			
			<tr class="table-active">		
				<td class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b># Configuring Trusted Proxies</b></td>
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/request5.0.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>

				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/request5.1.png') }} " alt="model"  style="width:550px;height: 560px;">
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


<p>modify as per </p>

<h1>before API Resource Routes</h1>
<hr style="border-top: 2px dashed gray;">
<hr style="border-top: 2px dashed gray;">
{{-- ###############################################################################--}}
{{-- ###############################################################################--}}
{{-- ###############################################################################--}}
<h2 class="text-center">Controller (Insert value to DB)</h2>
<span class="alert alert-primary" style="font-size: 18px;">Insert into DB</span><br><br>
<ul style="list-style-type:decimal;font-size: 17px;">
	<li>Use the related model when insert in that model related table.</li>
	<li>Then make the Model object to insert into DB.</li>
</ul>
<span style="background-color:green;color: white">How it works...</span><br><br>
<ul style="list-style-type:decimal;font-size: 17px;">
	<li>First way:
		<pre>
			$input =new Model;
			$input->name = request ->name;
			$input->save();
		</pre>
	</li>
	<li><strong>Best way:(input method)</strong>
		<pre>
			$input->name = input('name');
			$input->save();
		</pre>
		<pre>
			->response any HTTP verb.
			->A default value can be set.
			->(.)notation can use to access forms that have names that are arrays.
		</pre>
	</li>
	<li></li>
</ul>
<hr style="border-top: 2px dotted gray;">
<hr style="border-top: 2px dotted gray;">
{{-- ******************************************************************************* --}}
{{-- ******************************************************************************* --}}
{{-- ******************************************************************************* --}}
<h2 class="text-center">Controller (Retrive value and pass to view)</h2>
{{-- JSON object --}}
{{-- JSON object --}}
<span class="alert alert-primary" style="font-size: 18px;">JSON object data access and assign</span><br><br>
<ul style="list-style-type:decimal;font-size: 17px;">
	<li>JavaScript objects are containers for named values, called properties and methods.Ex: var person = {firstName:"John", lastName:"Doe", age:50, eyeColor:"blue"};</li>
	<li><span class="text-secondary" style="font-size: 18px;">Access: </span>person.firstName;person.lastName;person.age;person.eyeColor(JS)</li>
	<li><span class="text-secondary" style="font-size: 18px;">Initialize(JS): </span> myObj['name']=value (Quotes are required)</li>
	<li class="text-success"></li>
</ul>
<a href="http://mrbool.com/how-to-insert-retrieve-json-data-to-from-database-using-php/36810"target="_blank">
	How to Insert/Retrieve JSON Data to/from Database using PHP
</a> <br> <br>
{{-- PHP object access value and assign  --}}
{{-- PHP object access value and assign  --}}
<span class="alert alert-danger" style="font-size: 18px;">PHP object data access and assign</span><br><br>
<ul style="list-style-type:decimal;font-size: 17px;">
	<li><h6># Access via property name as array index</h6>
	<p>We can also access properties using associative array syntax. The simplest form of this uses the property name as the array index.</p>
	<p>Ex: $company['name'] = 'UltraCorp';</p>
	</li>

	<li><h6> # Access many-valued(single also) property by name</h6>
	<p>Many-valued data object properties can also be accessed using the object property name syntax.</p>
	<p>Ex: $departments = $company->departments;</p>
	</li>

	<li><h6> # Many-valued element access</h6>
	<p>We can access individual elements of many-valued properties using array syntax.</p>
	<p>Ex: $ad_tech_dept = $company->departments[0];</p>
	</li>

	<li><h6># Many-valued property iteration</h6>
	<p>Many-valued properties can also be iterated over using foreach. The following iterates over the company's departments.</p>
	<pre>Ex:  foreach ($company->departments as $department) {
    // ...Each iteration will assign the next department in the list to the variable $department
  }</pre>
	</li>
	<li><h6># Access via property index</h6>
	<p>Data object properties can be accessed via their property index using array syntax. The property index is the position at which the property's definition appears in the model</p>
	<pre>Ex:   $company[1] = 'Acme';</pre>
	</li>
	
	<li><img src="{{asset('images/larabook/php-obj.png')}} " alt="rule 7"></li>
	<a href="{{ asset('https://www.php.net/manual/en/sdo.sample.getset.php')}}" target="_blank">Php official Reference</a>
</ul>
<a href="https://stackoverflow.com/questions/36287072/how-to-assign-a-value-to-an-associative-array" target="_blank">How to assign a value to an associative array</a>
<hr style="border-top: 2px dotted gray;">
{{-- index/number  array --}}
{{-- index/number  array --}}
<h1 class="alert alert-warning">Pass value to view ---Index Array</h1><br>
<h4>Example:  &nbsp; $iteam = [""fish,"meat","egg"];</h4>
<h4 class="alert alert-info">Array ( [0] => fish [1] => meat [2] => egg )</h4><br>
{{-- step1 --}}
<span class="alert alert-danger">STEP1:</span><br> <br>
<h4>how it works: <br><b>foreach($iteam as $value)</b>>//In php &nbsp; 
	for($x = 0; $x < count($iteam); $x++) {echo $iteam[i];}
<br>
<h4>Output:<br> <b>(($value))</b>: fish meat egg</h4>
<h4> <b>single echo (($item[0]))</b>: fish</h4>
<br>

<h3>Explanation:</h3>
<ul>
	<li>where<b>= $item = $iteam[index] </b> where index++ in every iretation. <b>key (take) = index </b></li>
	<li>$value (take)= $item[index] </li>
</ul>
{{-- step2 --}}
<span class="alert alert-danger">STEP2:</span><br> <br>
<h4>how it works:   &nbsp; <b>foreach($iteam as $key => $value)</b></h4>
<ul>Output:
	<li><h4><b>(($value))</b>: fish meat egg</h4></li>
	<li><h4><b>(($key))</b>: 0  1  2</h4></li>
	<li><h4><b>(($key))(($value))</b>: 0fish 1meat 2egg</h4></li>
</ul><hr><hr><hr>

{{-- Associative array --}}
{{-- Associative array --}}
<h1 class="alert alert-warning">Associative Array</h1><br>
<h4>Example:  &nbsp; $iteam = ["name" => "fish","color" =>"red", "age" =>"10"];</h4>
<h4 class="alert alert-info">Array ( [name] => fish [color] => red [age] => 10 )</h4><br>
<span class="alert alert-danger">STEP1: same as 1st but not recommended.</span><br> <br>
<h4> <b>single echo (($item['name']))</b>: fish</h4><br>
{{-- step2 --}}
<span class="alert alert-danger">STEP2:</span><br> <br>
<h4>how it works:<br><b>foreach($iteam as $key => $value)</b>//In php same </h4>
<ul>Output:
	<li><h4><b>(($value))</b>: fish red 10</h4></li>
	<li><h4><b>(($key))</b>: name  color age</h4></li>
	<li><h4><b>(($key))(($value))</b>: name:fish color:red age:10</h4></li><br><br><hr><hr><hr>
</ul>
{{-- Multidimentional array   --}}
{{-- Multidimentional array   --}}
<h1 class="alert alert-warning">Multidimentional Array</h1>
<h4><span class="alert alert-danger">Example1:</span>  &nbsp; $iteam =["name" =>["fish","meat","egg"] ];</h4>
<h4 class="alert alert-info">Array ( [name] => Array ( [0] => fish [1] => meat [2] => egg ) )</h4><br>
{{-- step1 --}}
<span class="alert alert-danger">STEP1 :</span><br> <br>
<h4>how it works:<br> <b>foreach($iteam['name'] as $value)</b>
<br>

<h3>Explanation:</h3>
<ul>
	<li>In the foreach loop the <b>$item works as(for loop) $iteam['index of name']</b> where index of name++ every iretation. </li>
	<li>$value take what is has been given</li>
</ul>
<h4>Output <br> <b>(($value))</b>: fish meat egg</h4>
<h4> <b>single echo (( $iteam['name'][0] ))</b>: parrot</h4><br>
{{-- step2 --}}
<span class="alert alert-danger">
STEP2:</span><br> <br> 
<h4>how it works: <b>foreach($iteam['name'] as $key => $value)</b></h4>
<ul>Output
	<li><h4><b>(($value))</b>: fish meat egg</h4></li>
	<li><h4><b>(($key))</b>: 0  1  2</h4></li>
	<li><h4><b>(($key))(($value))</b>: 0fish 1meat 2egg</h4></li>
</ul><br><br>
{{-- example 2 --}}
<h4><span class="alert alert-danger">Example2:</span>  &nbsp;  $data =["name" => ["parrot","hen"],"color" => ["red","blue"] ];</h4>
<h4 class="alert alert-info">Array ( [name] => Array ( [0] => parrot [1] => hen ) [color] => Array ( [0] => red [1] => blue ) )</h4><br>

<span class="alert alert-danger">STEP1 :</span><br> <br>
<h4>how it works:   &nbsp; <b>foreach($iteam['name'] as $key =>  $value)</b>
<br>
<ul>Output
	<li><h4><b>(($value))</b>: parrot hen</h4></li>
	<li><h4><b>(($key))</b>: 0  1 </h4></li>
	<li><h4><b>$iteam['color'][$key]</b>: red blue(inside loop)</h4></li>
	<h4> <b>single echo (( $iteam['color'][0] ))</b>: red</h4><br>
</ul><br><br>

 {{-- example2 hidden--}}
<h4><span class="alert alert-danger">Example2:</span>  &nbsp; $data =["name" =>[ "data" =>["dove","parrot","hen"] ]]; one inside one same rule</h4>

<h4 class="alert alert-info">Array ( [name] => Array ( [data] => Array ( [0] => dove [1] => parrot [2] => hen ) ) )</h4><br>

<span class="alert alert-danger">STEP1 :</span><br> <br>
<h4>how it works:   &nbsp; <b>foreach($iteam['name']['data'] as  $value)</b>
<br>
<h4>Output <b>(($value))</b>: dove parrot hen</h4><br>

<h3>Explanation:</h3>
<ul>
	<li>In the foreach loop the <b>$item works as(for loop) $iteam['index of name']</b> where index of name++ every iretation. </li>
	<li>$value take what is has been given</li>
</ul><br>

<span class="alert alert-danger">STEP2:</span><br> <br>
<h4>how it works:   &nbsp; <b>foreach($iteam['name']['data'] as $key => $value)</b></h4>
<ul>Output
	<li><h4><b>(($value))</b>: dove parrot hen</h4></li>
	<li><h4><b>(($key))</b>: 0  1  2</h4></li>
	<li><h4><b>(($key))(($value))</b>: 0dove 1parot 2hen</h4></li>
</ul>

 {{-- Request class --}}
<span class="alert alert-primary" style="font-size: 18px;">Accessing The Request
 --Request $request(obj) class --- how it works</span><br><br>
<ul style="list-style-type:decimal;font-size: 17px;">
	<li> The incoming request instance will automatically be injected by the service container.(obj is injected data from HTTP request)</li>
	<li>Value stay in the obj in JSON formate</li>
	<li>JSON access >>> $obj -> property (Ex;$request -> field_name)</li>
</ul>

{{-- access the obj --}}
<span class="alert alert-primary" style="font-size: 18px;">Accessing The Request object -- Direct</span><br><br>
<h5>There are several way access value stored in the instance of Request class</h5>
<ul style="list-style-type:decimal;font-size: 17px;">
	<li>$name = $request-> name;</li>
	<li class="text-danger">Best way: $name = $request-> input('name'); <span class="text-success" style="font-size: 18px;">only for request data(my)</span> </li>
	<li></li>
</ul>

{{--access to store in DB --}}
<span class="alert alert-primary" style="font-size: 18px;">Accessing The Request object -- Store in DB</span><br><br>

{{-- More detail.... --}}
<span style="background-color:green;color: white">More Detail...</span><br><br>
<h5>Access the request data through input() have sereral advantage</h5>



<hr style="border-top: 2px dotted gray;">
<hr style="border-top: 2px dotted gray;">

{{-- Laravel Aithentication --}}
{{-- Laravel Aithentication --}}
{{-- Laravel Aithentication --}}
<h3 class="alert alert-danger text-center" style="font-size: 18px;">Laravel --Authentication</h3>
<p>	At its core, Laravel's authentication facilities are made up of "guards" and "providers". Guards define how users are authenticated for each request. For example, Laravel ships with a session guard which maintains state using session storage and cookies.</p>
{{-- More detail session .cookie etc above --}}
{{-- More detail session .cookie etc above --}}
<span style="background-color:green;color: white">More Detail...</span><br><br>
	<ul style="list-style-type:decimal;font-size: 17px;">
		<li><b>Guards:</b> A guard is a way of supplying the logic that is used to identify authenticated users. Laravel provides different guards like sessions and tokens</li>
	</ul>

	{{-- signup form handling manual --}}
	{{-- signup form handling manual --}}
	<span class="alert alert-success" style="font-size: 18px;">Manually Authenticating Users (Sign up form handaling)</span><br><br>
	<ul style="list-style-type:decimal;font-size: 17px;">
		<li class="text-danger"><b>byrypt-password</b>If password store as plain text then laravel can not retrive it--such as log in( It requires encrypt text)
		<p>Ex: $request['password'] = Hash::make($request -> password); </p>
		</li>
		<li>Above is required config >> auth.php hash => true and use namespace</li>
	
	<li><b>create new (user manual)</b>Create a row in DB table and insert that row get from request obj
	<p>$user = User::create($request -> all());</p>
	</li>
	
	<li><b>Logging In:(through signup)</b>auth()->login($user); (log in after registration //imediate login)<b>But we use verification login upto next..</b><br>
	<p> get authentication power #auth work</p>
	<p>to manually log an existing user in to your application.</p>
	</li>
	
	<li><b>Logging Out:</b>Auth::logout(); <br>
		To log users out of your application, you may use the logout method on the Auth facade. This will clear the authentication information in the user's session:

	</li>
	<li>Note: use timestamp('email_verified_at') on the user migration (maybe include for manual email verification)</li>
</ul>


<h5 class="alert alert-secondary">encrypt VS bycrypt</h5>
<h6> <b>Encrypt :</b>convert (information or data) into a code, especially to prevent unauthorized access.
</h6>
<h6><b>The bcrypt :</b> hash function is just that, a hash function. It does not perform encryption, it hashes.</h6>

{{-- login form handaling  manual--}}
{{-- login form handaling  manual--}}
<br><span class="alert alert-success" style="font-size: 18px;">Sign in form handaling( Manual)</span><br><br>
<ul style="list-style-type:decimal;font-size: 17px;">
	<li><b>Logging In:(through input)</b>Auth::attempt() accepts an array of key / value pairs as its first argument. The values in the array will be used to find the user in your database table.</li>
	<li><pre>
		public function authenticate(Request $request){<span class="text-success" style="font-size: 18px;">
	        if (Auth::attempt(['email' => $email, 'password' => $password]){
 		   // The user is active, not suspended, and exists.
			}
        </pre>
	<p> <b>The attempt method </b>accepts an array of key / value pairs as its first argument. The values in the array will be used to find the user in your database table. So, in the example above, the user will be retrieved by the value of the email column. If the user is found, the hashed password stored in the database will be compared with the password value passed to the method via the array. You should not hash the password specified as the password value, since the framework will automatically hash the value before comparing it to the hashed password in the database. If the two hashed passwords match an authenticated session will be started for the user. <br> <br>

	The attempt method will return true if authentication was successful. Otherwise, false will be returned. <br> <br>

	<span class="text-info">The intended method on the redirector will redirect the user to the URL they were attempting to access before being intercepted by the authentication middleware. A fallback URI may be </span>given to this method in case the intended destination is not available.</p>
	</li>
	<li></li>
</ul>
<p class="text-primary">Note: create custome signin/signup use use Illuminate\Support\Facades\Auth; and for buildin use Auth;  </p>
<hr style="border-top: 2px dotted blue;">

{{-- Laravel Aithentication Built-in --}}
{{-- Laravel Aithentication Built-in --}}
{{-- Laravel Aithentication Built-in --}}
<h4 class="alert alert-danger">Laravel Aithentication Built-in</h4>





<p>modify as per </p>
  {{-- at a galance --}}
  {{-- at a galance --}}
<span class="alert alert-primary" style="font-size: 18px;">At a galance</span><br><br>
<ul style="list-style-type:decimal;font-size: 17px;">
	<li>HTTP Request is a packet of Information that one computer sends to another computer to communicate something. <span class="text-danger">To its core, HTTP Request is a packet of binary data sent by the Client to server.</span></li>
	<li class="text-danger">In $request obj the data are in JSON format .That can retrive obj operator(->) [Ex:$car1 -> color ]</li>
</ul>
<img src="{{ asset('images/larabook/HTTP-Request-Response1.jpg') }} " alt="csrf3" class="ml-5"> <br><br>
{{-- Laravel  --}}
{{-- Laravel  --}}
<h4 class="alert alert-warning" style="font-size: 18px;">Laravel Topic</h4>
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
	<span style="color: #8A2BE2;font-size: 17px;"><strong>#Accessing The Request</strong></span><br>

	<span style="color:#20B2AA;">*Dependency Injection & Route Parameter<span class="bg-dark">(!examine)</span></span><br>
	<span style="color:#20B2AA;">*Dependency Injection & Route Parameters<span class="bg-dark">(!examine)</span></span><br>
	If your controller method is also expecting input from a route parameter you should list your route parameters after your other dependencies.
	<span style="color:#20B2AA;">*Accessing The Request Via Route Closure<span class="bg-dark">(!examine)</span></span><br>
	
	<span style="color:#20B2AA;"><li><strong>Request Path & Method</strong><span class="bg-dark">(!examine)</span></li></span>	
	<span style="color:#20B2AA;">*Retrieving The Request Path<span class="bg-dark">(!examine)</span></span><br>
	<span style="color:#20B2AA;">*Retrieving The Request Method<span class="bg-dark">(!examine)</span></span><br>

	<span style="color:#20B2AA;">*Retrieving The Request URL<span class="bg-dark">(!examine)</span></span><br>
	<span style="color:#20B2AA;"><li><strong>PSR-7 Requests</strong><span class="bg-dark">(!examine)</span></li></span>	
</ul>
<span style="color: #8A2BE2;font-size: 17px;" class="ml-5"><strong>#Input Trimming & Normalization</strong></span><br>
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Retrieving Input</strong></span><br>
	<span style="color:#20B2AA;">*Retrieving All Input Data</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;">*Retrieving Input From The Query String</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;">*Retrieving Input Via Dynamic Properties</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;">*Retrieving JSON Input Values</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;">*Retrieving A Portion Of The Input Data</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;">*Determining If An Input Value Is Present</span><span class="bg-dark">(!examine)</span><br>
	
	<span style="color:#20B2AA;"><li><strong>Old Input</strong></span><span class="bg-dark">(!examine)</li></span>
	<span style="color:#20B2AA;">*Flashing Input To The Session</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;">*Flashing Input Then Redirecting</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;">*Retrieving Old Input</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;"><li><strong>Cookies</strong></span><span class="bg-dark">(!examine)</li></span>
	<span style="color:#20B2AA;">*Retrieving Cookies From Requests</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;">*Attaching Cookies To Responses</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;">*Generating Cookie Instances</span><span class="bg-dark">(!examine)</span><br>
</ul>
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#File</strong></span>
	<span style="color:#20B2AA;"><li><strong>Retrieving Uploaded Files</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;">*Validating Successful Uploads</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;">*File Paths & Extensions</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;">*Other File Methods</span><span class="bg-dark">(!examine)</span><br>

	<span style="color:#20B2AA;"><li><strong>Storing Uploaded Files</strong></span><span class="bg-dark">(!examine)</li></span><br>
</ul>
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Configuring Trusted Proxies</strong></span><br>
	<span style="color:#20B2AA;">*Trusting All Proxies</span><span class="bg-dark">(!examine)</span><br>
</ul>



<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- response --}}
{{-- response --}}
{{-- response --}}
<h2 id="response" class="text-center"><strong>HTTP Responses(c)</strong></h2>
<div class="row">
	<div class="col-md-2">
		<div class="list-group">
		  <a href="#route" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Route</a>
		  <a href="#middleware" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Middleware</a>
		  <a href="#csrf" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Csrf</a>
		  <a href="#controller" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Controller</a>
		  <a href="#request" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Request</a>
		  <a href="#response" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Response</a>
		  <a href="#view" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Views</a>

		</div>
	</div>
</div><br>
{{--  --}}
<img src="{{ asset('images/larabook/HTTP-Request-Response2.jpg') }} " alt="csrf3" class="ml-5"> <br><br>
{{-- laravel Topics	--}}
{{-- laravel Topics --}}

<table class="table table-hover" style="font-size:17px;">
		<tbody>
			{{-- Creating Responses --}}
			{{-- Creating Responses --}}
			{{-- Creating Responses --}}
			<tr class="table-active">		
				<td class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b>#Creating Responses</b></td>
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/response1.0.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/basic/response1.2.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>

				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/response1.1.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/basic/response1.3.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>				
			</tr>

			<tr>
				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>

				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>
			</tr>
			{{-- Redirects --}}
			{{-- Redirects --}}
			{{-- Redirects --}}
			<tr class="table-active">		
				<td class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b>#Redirects</b></td>
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/response2.0.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/basic/response2.2.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>

				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/response2.1.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/basic/response2.3.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>				
			</tr>

			<tr>
				<td class="table-dark" style="width: 25%;color:white;">
					
				</td>

				<td class="table-dark" style="width: 25%;color:white;">
					
				</td>
			</tr>			
			{{-- Other Response Types --}}
			{{-- Other Response Types --}}
			{{-- Other Response Types --}}
			<tr class="table-active">		
				<td class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b>#Other Response Types && #Response Macros</b></td>
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/response3.0.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/basic/response3.2.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>

				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/response3.1.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/basic/response4.0.png') }} " alt="model"  style="width:550px;height: 560px;">
					
				</td>				
			</tr>

			<tr>
				<td class="table-dark" style="width: 25%;color:white;">
					
				</td>

				<td class="table-dark" style="width: 25%;color:white;">
					
				</td>
			</tr>
		</tbody>
</table>

<h4 class="alert alert-warning" style="font-size: 18px;">Laravel Topic</h4>
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Creating Responses</strong></span><br>
	<span style="color:#20B2AA;">*Strings & Arrays</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;">*Response Objects</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;">*Attaching Headers To Responses</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;">*Cache Control Middleware</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;">*Attaching Cookies To Responses</span><span class="bg-dark">(!examine)</span><br>
</ul><br>
{{--  --}}
{{--  --}}
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Redirects</strong></span><br>
	<span style="color:#20B2AA;"><li><strong>Redirecting To Named Routes</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;">*Populating Parameters Via Eloquent Models</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;"><li><strong>Redirecting To Controller Actions</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;"><li><strong>Redirecting To External Domains</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;"><li><strong>Redirecting With Flashed Session Data</strong><span class="bg-dark">(!examine)</span></li></span>
</ul><br>
{{--  --}}
{{--  --}}
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Other Response Types</strong></span><br>
	<span style="color:#20B2AA;"><li><strong>View Responses</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;"><li><strong>JSON Responses</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;"><li><strong>File Downloads</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;">*Streamed Downloads</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;"><li><strong>File Responses</strong><span class="bg-dark">(!examine)</span></li></span>
</ul><br>
{{--  --}}
<span class="ml-4" style="color: #8A2BE2;font-size: 17px;"><strong>#Response Macros</strong></span><br>
<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- view --}}
{{-- view --}}
{{-- view --}}
<h2 class="text-center" id="view"><strong>Views(c)</strong></h2>
<div class="row">
	<div class="col-md-2">
		<div class="list-group">
		  <a href="#route" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Route</a>
		  <a href="#middleware" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Middleware</a>
		  <a href="#csrf" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Csrf</a>
		  <a href="#controller" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Controller</a>
		  <a href="#request" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Request</a>
		  <a href="#response" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Response</a>
		  <a href="#view" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Views</a>
		  
		</div>
	</div>
</div><br>
{{-- view --}}
{{-- view --}}
{{-- view --}}

<table class="table table-hover" style="font-size:17px;">
		<tbody>
			{{-- creating view --}}
			{{-- creating view --}}
			{{-- creating view --}}
			<tr class="table-active">		
				<td class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b>#Creating Views</b></td>
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/view1.0.png') }} " alt="model"  style="width:550px;height: 600px;">
				</td>

				<td class="table-success" style="width: 25%">
				<img class="ml-0" src="{{ asset('images/larabook/basic/view1.1.png') }} " alt="model"  style="width:550px;height: 600px;">
				</td>				
			</tr>

			<tr>
				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>

				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>
			</tr>
			
			{{-- passing data to view --}}
			{{-- passing data to view --}}
			{{-- passing data to view --}}
			<tr class="table-active">		
				<td class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b>#Passing Data To Views</b></td>
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/view2.0.png') }} " alt="model"  style="width:550px;height: 600px;">
				</td>

				<td class="table-success" style="width: 25%">
				<img class="ml-0" src="{{ asset('images/larabook/basic/view2.1.png') }} " alt="model"  style="width:550px;height: 600px;">
				</td>				
			</tr>

			<tr>
				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>

				<td class="table-dark" style="width: 25%;color: white;">
					
				</td>
			</tr>

			{{-- View Composers --}}
			{{-- View Composers --}}
			{{-- View Composers --}}
			<tr class="table-active">		
				<td class="text-center" colspan="4"  scope="col" style="background-color:	#6A5ACD;color: white; font-size: 18px;"><b>#View Composers</b></td>
			</tr>

			<tr>
				<td class="table-success" style="width: 25%">
					<img class="ml-0" src="{{ asset('images/larabook/basic/view3.0.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/basic/view3.2.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
					<img class="ml-0" src="{{ asset('images/larabook/basic/view3.4.png') }} " alt="model"  style="width:550px;height: 560px;">
				</td>

				<td class="table-success" style="width: 25%">
				<img class="ml-0" src="{{ asset('images/larabook/basic/view3.1.png') }} " alt="model"  style="width:550px;height: 560px;"><br><br>
				<img class="ml-0" src="{{ asset('images/larabook/basic/view3.3.png') }} " alt="model"  style="width:550px;height: 560px;">
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
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Creating Views</strong></span><br>
	<span style="color:#20B2AA;">*Creating Views</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;">*Creating The First Available View</span><span class="bg-dark">(!examine)</span><br>
</ul><br>
{{--  --}}
{{--  --}}
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Passing Data To Views</strong></span><br>
	<span style="color:#20B2AA;">*Sharing Data With All Views</span><span class="bg-dark">(!examine)</span><br>
</ul><br>
{{--  --}}
{{--  --}}
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#View Composers</strong></span><br>
	<span style="color:#20B2AA;">*Attaching A Composer To Multiple Views</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;">*View Creators</span><span class="bg-dark">(!examine)</span><br>
</ul><br>

@endsection
