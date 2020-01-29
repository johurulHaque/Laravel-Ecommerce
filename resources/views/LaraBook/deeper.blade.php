@extends('LaraBook.index')
@section('title','Digging Deeper')
@section('content')
<h2 id="artisan" class="text-center"><strong>Artisan Console(c)</strong></h2>
<div class="row">
	<div class="col-md-2">
		<div class="list-group">
		  <a href="#artisan" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Artisan Console</a>
		  <a href="#broadcasting" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Broadcasting</a>
		  <a href="#cache" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Cache</a>
		  <a href="#collections" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Collections</a>
		  <a href="#events" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Events</a>
		  <a href="#file" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">File Storage</a>
		  <a href="#helpers" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Helpers</a>
		  <a href="#mail" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Mail</a>
		  <a href="#notifications" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Notifications</a>
		  <a href="#package" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Package Development</a>
		  <a href="#queues" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Queues</a>
		  <a href="#task" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Task Scheduling</a>
		</div>
	</div>
</div><br>
{{-- laravel --}}
{{-- laravel --}}
{{-- laravel --}}
<h4 class="alert alert-warning" style="font-size: 18px;">Laravel Topic</h4>
<span style="color:#20B2AA;"><li><strong>Tinker (REPL)</strong><span class="bg-dark">(!examine)</span></li></span><br>
{{--  --}}
{{--  --}}
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Writing Commands</strong></span><br>
	<span style="color:#20B2AA;"><li><strong>Generating Commands</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Command Structure</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Closure Commands</strong><span class="bg-dark">(!examine)</span></li></span><br>
</ul><br>
{{--  --}}
{{--  --}}
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Defining Input Expectations</strong></span><br>
	<span style="color:#20B2AA;"><li><strong>Arguments</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Options</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Input Arrays</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Input Descriptions</strong><span class="bg-dark">(!examine)</span></li></span><br>
</ul><br>

{{--  --}}
{{--  --}}
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Command I/O</strong></span><br>
	<span style="color:#20B2AA;"><li><strong>Retrieving Input</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Prompting For Input</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Writing Output</strong><span class="bg-dark">(!examine)</span></li></span><br>
</ul><br>

<span style="color: #8A2BE2;font-size: 17px;" class="ml-5"><strong>#Registering Commands</strong></span><br><br>
{{--  --}}
<span style="color: #8A2BE2;font-size: 17px;" class="ml-5"><strong>#Programmatically Executing Commands</strong></span><br>
<span style="color:#20B2AA;"><li><strong>1.Calling Commands From Other Commands</strong><span class="bg-dark">(!examine)</span></li></span><br>
<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}


<h2 id="broadcasting" class="text-center"><strong>Broadcasting(c)</strong></h2>
<div class="row">
	<div class="col-md-2">
		<div class="list-group">
		  <a href="#artisan" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Artisan Console</a>
		  <a href="#broadcasting" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Broadcasting</a>
		  <a href="#cache" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Cache</a>
		  <a href="#collections" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Collections</a>
		  <a href="#events" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Events</a>
		  <a href="#file" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">File Storage</a>
		  <a href="#helpers" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Helpers</a>
		  <a href="#mail" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Mail</a>
		  <a href="#notifications" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Notifications</a>
		  <a href="#package" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Package Development</a>
		  <a href="#queues" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Queues</a>
		  <a href="#task" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Task Scheduling</a>
		</div>
	</div>
</div><br>
{{-- laravel --}}
{{-- laravel --}}
{{-- laravel --}}
<h4 class="alert alert-warning" style="font-size: 18px;">Laravel Topic</h4>
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#</strong></span><br>
	<span style="color:#20B2AA;"><li><strong>Configuration</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Driver Prerequisites</strong><span class="bg-dark">(!examine)</span></li></span><br>
</ul><br>
{{--  --}}
{{--  --}}
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Concept Overview</strong></span><br>
	<span style="color:#20B2AA;"><li><strong>Using An Example Application</strong><span class="bg-dark">(!examine)</span></li></span><br>
</ul><br>
{{--  --}}
{{--  --}}
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Defining Broadcast Events</strong></span><br>
	<span style="color:#20B2AA;"><li><strong>Broadcast Name</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Broadcast Data</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Broadcast Queue</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Broadcast Conditions</strong><span class="bg-dark">(!examine)</span></li></span><br>
</ul><br>
{{--  --}}
{{--  --}}
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#</strong></span><br>
	<span style="color:#20B2AA;"><li><strong></strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong></strong><span class="bg-dark">(!examine)</span></li></span><br>
</ul><br>{{--  --}}
{{--  --}}
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Authorizing Channels</strong></span><br>
	<span style="color:#20B2AA;"><li><strong>Defining Authorization Routes</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Defining Authorization Callbacks</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Defining Channel Classes</strong><span class="bg-dark">(!examine)</span></li></span><br>
</ul><br>
{{--  --}}
{{--  --}}
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Broadcasting Events</strong></span><br>
	<span style="color:#20B2AA;"><li><strong>Only To Others</strong><span class="bg-dark">(!examine)</span></li></span><br>
</ul><br>
{{--  --}}
{{--  --}}
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Receiving Broadcasts</strong></span><br>
	<span style="color:#20B2AA;"><li><strong>Installing Laravel Echo</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Listening For Events</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Leaving A Channel</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Namespaces</strong><span class="bg-dark">(!examine)</span></li></span><br>
</ul><br>
{{--  --}}
{{--  --}}
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Presence Channels</strong></span><br>
	<span style="color:#20B2AA;"><li><strong>Authorizing Presence Channels</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Joining Presence Channels</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Broadcasting To Presence Channels</strong><span class="bg-dark">(!examine)</span></li></span><br>
</ul><br>
{{--  --}}
<span style="color: #8A2BE2;font-size: 17px;" class="ml-5"><strong>#Client Events</strong></span><br><br>
{{--  --}}
<span style="color: #8A2BE2;font-size: 17px;" class="ml-5"><strong>#Notifications</strong></span><br><br>
<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}

<h2 id="cache" class="text-center"><strong>Cache(c)</strong></h2>
<div class="row">
	<div class="col-md-2">
		<div class="list-group">
		  <a href="#artisan" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Artisan Console</a>
		  <a href="#broadcasting" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Broadcasting</a>
		  <a href="#cache" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Cache</a>
		  <a href="#collections" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Collections</a>
		  <a href="#events" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Events</a>
		  <a href="#file" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">File Storage</a>
		  <a href="#helpers" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Helpers</a>
		  <a href="#mail" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Mail</a>
		  <a href="#notifications" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Notifications</a>
		  <a href="#package" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Package Development</a>
		  <a href="#queues" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Queues</a>
		  <a href="#task" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Task Scheduling</a>
		</div>
	</div>
</div><br>
{{-- laravel --}}
{{-- laravel --}}
{{-- laravel --}}
<h4 class="alert alert-warning" style="font-size: 18px;">Laravel Topic</h4>
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Configuration</strong></span><br>
	<span style="color:#20B2AA;"><li><strong>Driver Prerequisites</strong><span class="bg-dark">(!examine)</span></li></span><br>
</ul><br>
{{--  --}}
{{--  --}}
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Cache Usage</strong></span><br>
	<span style="color:#20B2AA;"><li><strong>Obtaining A Cache Instance</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Retrieving Items From The Cache</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Storing Items In The Cache</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Removing Items From The Cache</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Atomic Locks</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>The Cache Helper</strong><span class="bg-dark">(!examine)</span></li></span><br>
</ul><br>
{{--  --}}
{{--  --}}
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Cache Tags</strong></span><br>
	<span style="color:#20B2AA;"><li><strong>Storing Tagged Cache Items</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Accessing Tagged Cache Items</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Removing Tagged Cache Items</strong><span class="bg-dark">(!examine)</span></li></span><br>
</ul><br>
{{--  --}}
{{--  --}}
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Adding Custom Cache Drivers</strong></span><br>
	<span style="color:#20B2AA;"><li><strong>Writing The Driver</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Writing The Driver</strong><span class="bg-dark">(!examine)</span></li></span><br>
</ul><br>
{{--  --}}
{{--  --}}
{{--  --}}

<span style="color: #8A2BE2;font-size: 17px;" class="ml-5"><strong>#Events</strong></span><br><br>

<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}


<h2 id="collections" class="text-center"><strong>Collections(c)</strong></h2>
<div class="row">
	<div class="col-md-2">
		<div class="list-group">
		  <a href="#artisan" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Artisan Console</a>
		  <a href="#broadcasting" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Broadcasting</a>
		  <a href="#cache" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Cache</a>
		  <a href="#collections" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Collections</a>
		  <a href="#events" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Events</a>
		  <a href="#file" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">File Storage</a>
		  <a href="#helpers" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Helpers</a>
		  <a href="#mail" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Mail</a>
		  <a href="#notifications" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Notifications</a>
		  <a href="#package" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Package Development</a>
		  <a href="#queues" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Queues</a>
		  <a href="#task" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Task Scheduling</a>
		</div>
	</div>
</div><br>
{{-- laravel --}}
{{-- laravel --}}
{{-- laravel --}}
<h4 class="alert alert-warning" style="font-size: 18px;">Laravel Topic</h4>
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#</strong></span><br>
	<span style="color:#20B2AA;"><li><strong>Creating Collections</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Extending Collections</strong><span class="bg-dark">(!examine)</span></li></span><br>
</ul><br>
{{--  --}}
<span style="color: #8A2BE2;font-size: 17px;" class="ml-5"><strong>#Available Methods</strong></span><br><br>
{{--  --}}
<span style="color: #8A2BE2;font-size: 17px;" class="ml-5"><strong>#Higher Order Messages</strong></span><br><br>

<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}



<h2 id="events" class="text-center"><strong>Events(c)</strong></h2>
<div class="row">
	<div class="col-md-2">
		<div class="list-group">
		  <a href="#artisan" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Artisan Console</a>
		  <a href="#broadcasting" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Broadcasting</a>
		  <a href="#cache" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Cache</a>
		  <a href="#collections" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Collections</a>
		  <a href="#events" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Events</a>
		  <a href="#file" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">File Storage</a>
		  <a href="#helpers" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Helpers</a>
		  <a href="#mail" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Mail</a>
		  <a href="#notifications" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Notifications</a>
		  <a href="#package" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Package Development</a>
		  <a href="#queues" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Queues</a>
		  <a href="#task" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Task Scheduling</a>
		</div>
	</div>
</div><br>
{{-- laravel --}}
{{-- laravel --}}
{{-- laravel --}}
<h4 class="alert alert-warning" style="font-size: 18px;">Laravel Topic</h4>
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Registering Events & Listeners</strong></span><br>
	<span style="color:#20B2AA;"><li><strong>Generating Events & Listeners</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Manually Registering Events</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Event Discovery</strong><span class="bg-dark">(!examine)</span></li></span><br>
</ul><br>
{{--  --}}
<span style="color: #8A2BE2;font-size: 17px;" class="ml-5"><strong>#Defining Events</strong></span><br><br>
{{--  --}}
<span style="color: #8A2BE2;font-size: 17px;" class="ml-5"><strong>#Defining Listeners</strong></span><br><br>
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Queued Event Listeners</strong></span><br>
	<span style="color:#20B2AA;"><li><strong>Manually Accessing The Queue</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Handling Failed Jobs</strong><span class="bg-dark">(!examine)</span></li></span><br>
</ul><br>
{{--  --}}
<span style="color: #8A2BE2;font-size: 17px;" class="ml-5"><strong>#Dispatching Events</strong></span><br><br>
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Event Subscribers</strong></span><br>
	<span style="color:#20B2AA;"><li><strong>Writing Event Subscribers</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Registering Event Subscribers</strong><span class="bg-dark">(!examine)</span></li></span><br>
</ul><br>
<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}



<h2 id="file" class="text-center"><strong>File Storage(c)</strong></h2>
<div class="row">
	<div class="col-md-2">
		<div class="list-group">
		  <a href="#artisan" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Artisan Console</a>
		  <a href="#broadcasting" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Broadcasting</a>
		  <a href="#cache" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Cache</a>
		  <a href="#collections" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Collections</a>
		  <a href="#events" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Events</a>
		  <a href="#file" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">File Storage</a>
		  <a href="#helpers" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Helpers</a>
		  <a href="#mail" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Mail</a>
		  <a href="#notifications" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Notifications</a>
		  <a href="#package" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Package Development</a>
		  <a href="#queues" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Queues</a>
		  <a href="#task" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Task Scheduling</a>
		</div>
	</div>
</div><br>
{{-- laravel --}}
{{-- laravel --}}
{{-- laravel --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Configuration</strong></span><br>
	<span style="color:#20B2AA;"><li><strong>The Public Disk</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>The Local Driver</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Driver Prerequisites</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Caching</strong><span class="bg-dark">(!examine)</span></li></span><br>
</ul><br>
{{--  --}}
<span style="color: #8A2BE2;font-size: 17px;" class="ml-5"><strong>#Obtaining Disk Instances</strong></span><br><br>

{{--  --}}
{{--  --}}
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Retrieving Files</strong></span><br>
	<span style="color:#20B2AA;"><li><strong>Downloading Files</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>File URLs</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>File Metadata</strong><span class="bg-dark">(!examine)</span></li></span><br>
</ul><br>
{{--  --}}
{{--  --}}
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Storing Files</strong></span><br>
	<span style="color:#20B2AA;"><li><strong>File Uploads</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>File Visibility</strong><span class="bg-dark">(!examine)</span></li></span><br>
</ul><br>
{{--  --}}
{{--  --}}
{{--  --}}
<span style="color: #8A2BE2;font-size: 17px;" class="ml-5"><strong>#Deleting Files</strong></span><br><br>
<span style="color: #8A2BE2;font-size: 17px;" class="ml-5"><strong>#Directories</strong></span><br><br>
<span style="color: #8A2BE2;font-size: 17px;" class="ml-5"><strong>#Custom Filesystems</strong></span><br><br>
<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}



<h2 id="helpers" class="text-center"><strong>Helpers(c)</strong></h2>
<div class="row">
	<div class="col-md-2">
		<div class="list-group">
		  <a href="#artisan" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Artisan Console</a>
		  <a href="#broadcasting" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Broadcasting</a>
		  <a href="#cache" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Cache</a>
		  <a href="#collections" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Collections</a>
		  <a href="#events" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Events</a>
		  <a href="#file" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">File Storage</a>
		  <a href="#helpers" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Helpers</a>
		  <a href="#mail" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Mail</a>
		  <a href="#notifications" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Notifications</a>
		  <a href="#package" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Package Development</a>
		  <a href="#queues" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Queues</a>
		  <a href="#task" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Task Scheduling</a>
		</div>
	</div>
</div><br>
{{-- laravel --}}
{{-- laravel --}}
{{-- laravel --}}
<span style="color: #8A2BE2;font-size: 17px;" class="ml-5"><strong>#Available Methods</strong></span><br><br>
<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}

<h2 id="mail" class="text-center"><strong>Mail(c)</strong></h2>
<div class="row">
	<div class="col-md-2">
		<div class="list-group">
		  <a href="#artisan" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Artisan Console</a>
		  <a href="#broadcasting" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Broadcasting</a>
		  <a href="#cache" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Cache</a>
		  <a href="#collections" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Collections</a>
		  <a href="#events" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Events</a>
		  <a href="#file" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">File Storage</a>
		  <a href="#helpers" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Helpers</a>
		  <a href="#mail" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Mail</a>
		  <a href="#notifications" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Notifications</a>
		  <a href="#package" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Package Development</a>
		  <a href="#queues" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Queues</a>
		  <a href="#task" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Task Scheduling</a>
		</div>
	</div>
</div><br>
{{-- laravel --}}
{{-- laravel --}}
{{-- laravel --}}
<h4 class="alert alert-warning" style="font-size: 18px;">Laravel Topic</h4>

<span style="color:#20B2AA;">1.Driver Prerequisites</span><span class="bg-dark">(!examine)</span><br><br>
{{--  --}}
<span style="color: #8A2BE2;font-size: 17px;" class="ml-5"><strong>#Generating Mailables</strong></span><br><br>

<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Writing Mailables</strong></span><br>
	<span style="color:#20B2AA;"><li><strong>Configuring The Sender</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Configuring The View</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>View Data</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Attachments</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Inline Attachments</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Customizing The SwiftMailer Message</strong><span class="bg-dark">(!examine)</span></li></span><br>
</ul><br>
{{--  --}}
{{--  --}}
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Markdown Mailables</strong></span><br>
	<span style="color:#20B2AA;"><li><strong>Generating Markdown Mailables</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Writing Markdown Messages</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Customizing The Components</strong><span class="bg-dark">(!examine)</span></li></span><br>
</ul><br>
{{--  --}}
{{--  --}}
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Sending Mail</strong></span><br>
	<span style="color:#20B2AA;"><li><strong>Queueing Mail</strong><span class="bg-dark">(!examine)</span></li></span><br>
</ul><br>
{{--  --}}
{{--  --}}
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Rendering Mailables</strong></span><br>
	<span style="color:#20B2AA;"><li><strong>Previewing Mailables In The Browser</strong><span class="bg-dark">(!examine)</span></li></span><br>
</ul><br>


{{--  --}}
{{--  --}}
{{--  --}}
<span style="color: #8A2BE2;font-size: 17px;" class="ml-5"><strong>#Localizing Mailables</strong></span><br><br>
<span style="color: #8A2BE2;font-size: 17px;" class="ml-5"><strong>#Mail & Local Development</strong></span><br><br>
<span style="color: #8A2BE2;font-size: 17px;" class="ml-5"><strong>#Events</strong></span><br><br>
<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}



<h2 id="notifications" class="text-center"><strong>Notifications(c)</strong></h2>
<div class="row">
	<div class="col-md-2">
		<div class="list-group">
		  <a href="#artisan" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Artisan Console</a>
		  <a href="#broadcasting" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Broadcasting</a>
		  <a href="#cache" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Cache</a>
		  <a href="#collections" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Collections</a>
		  <a href="#events" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Events</a>
		  <a href="#file" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">File Storage</a>
		  <a href="#helpers" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Helpers</a>
		  <a href="#mail" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Mail</a>
		  <a href="#notifications" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Notifications</a>
		  <a href="#package" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Package Development</a>
		  <a href="#queues" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Queues</a>
		  <a href="#task" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Task Scheduling</a>
		</div>
	</div>
</div><br>
{{-- laravel --}}
{{-- laravel --}}
{{-- laravel --}}
<span style="color: #8A2BE2;font-size: 17px;" class="ml-5"><strong>#Creating Notifications</strong></span><br><br>
{{--  --}}
{{--  --}}
{{--  --}}
<h4 class="alert alert-warning" style="font-size: 18px;">Laravel Topic</h4>
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Sending Notifications</strong></span><br>
	<span style="color:#20B2AA;"><li><strong>Using The Notifiable Trait</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Using The Notification Facade</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Specifying Delivery Channels</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Queueing Notifications</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>On-Demand Notifications</strong><span class="bg-dark">(!examine)</span></li></span><br>
</ul><br>
{{--  --}}
{{--  --}}
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Mail Notifications</strong></span><br>
	<span style="color:#20B2AA;"><li><strong>Formatting Mail Messages</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Customizing The Sender</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Customizing The Recipient</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Customizing The Subject</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Customizing The Templates</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Previewing Mail Notifications</strong><span class="bg-dark">(!examine)</span></li></span><br>
</ul><br>
{{--  --}}
{{--  --}}
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Markdown Mail Notifications</strong></span><br>
	<span style="color:#20B2AA;"><li><strong>Generating The Message</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Writing The Message</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Customizing The Components</strong><span class="bg-dark">(!examine)</span></li></span><br>
</ul><br>
{{--  --}}
{{--  --}}
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Database Notifications
</strong></span><br>
	<span style="color:#20B2AA;"><li><strong>Prerequisites</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Formatting Database Notifications</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Accessing The Notifications</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Marking Notifications As Read</strong><span class="bg-dark">(!examine)</span></li></span><br>
</ul><br>
{{--  --}}
{{--  --}}
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Broadcast Notifications</strong></span><br>
	<span style="color:#20B2AA;"><li><strong>Prerequisites</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Formatting Broadcast Notifications</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Listening For Notifications</strong><span class="bg-dark">(!examine)</span></li></span><br>
</ul><br>
{{--  --}}
{{--  --}}
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#SMS Notifications</strong></span><br>
	<span style="color:#20B2AA;"><li><strong>Prerequisites</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Formatting SMS Notifications</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Customizing The "From" Number</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Routing SMS Notifications</strong><span class="bg-dark">(!examine)</span></li></span><br>
</ul><br>
{{--  --}}
{{--  --}}
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Slack Notifications</strong></span><br>
	<span style="color:#20B2AA;"><li><strong>Prerequisites</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Formatting Slack Notifications</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Slack Attachments</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Routing Slack Notifications</strong><span class="bg-dark">(!examine)</span></li></span><br>
</ul><br>
{{--  --}}
{{--  --}}
<span style="color: #8A2BE2;font-size: 17px;" class="ml-5"><strong>#Localizing Notifications</strong></span><br><br>
<span style="color: #8A2BE2;font-size: 17px;" class="ml-5"><strong>#Notification Events</strong></span><br><br>
<span style="color: #8A2BE2;font-size: 17px;" class="ml-5"><strong>#Custom Channels</strong></span><br><br>
<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}

<h2 id="package" class="text-center"><strong>Package Development(c)</strong></h2>
<div class="row">
	<div class="col-md-2">
		<div class="list-group">
		  <a href="#artisan" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Artisan Console</a>
		  <a href="#broadcasting" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Broadcasting</a>
		  <a href="#cache" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Cache</a>
		  <a href="#collections" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Collections</a>
		  <a href="#events" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Events</a>
		  <a href="#file" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">File Storage</a>
		  <a href="#helpers" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Helpers</a>
		  <a href="#mail" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Mail</a>
		  <a href="#notifications" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Notifications</a>
		  <a href="#package" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Package Development</a>
		  <a href="#queues" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Queues</a>
		  <a href="#task" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Task Scheduling</a>
		</div>
	</div>
</div><br>
{{-- laravel --}}
{{-- laravel --}}
{{-- laravel --}}
<h4 class="alert alert-warning" style="font-size: 18px;">Laravel Topic</h4>
A Note On Facades	 <br>	
<span style="color: #8A2BE2;font-size: 17px;" class="ml-5"><strong>#Package Discovery</strong></span><br><br>
<span style="color: #8A2BE2;font-size: 17px;" class="ml-5"><strong>#Service Providers</strong></span><br><br>

{{--  --}}
{{--  --}}
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Resources</strong></span><br>
	<span style="color:#20B2AA;"><li><strong>Configuration</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Migrations</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Routes</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Translations</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Views</strong><span class="bg-dark">(!examine)</span></li></span><br>
</ul><br>

{{--  --}}
{{--  --}}
{{--  --}}
<span style="color: #8A2BE2;font-size: 17px;" class="ml-5"><strong>#Commands</strong></span><br><br>
<span style="color: #8A2BE2;font-size: 17px;" class="ml-5"><strong>#Public Assets</strong></span><br><br>
<span style="color: #8A2BE2;font-size: 17px;" class="ml-5"><strong>#Publishing File Groups</strong></span><br><br>
<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}


<h2 id="queues" class="text-center"><strong>Queues(c)</strong></h2>
<div class="row">
	<div class="col-md-2">
		<div class="list-group">
		  <a href="#artisan" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Artisan Console</a>
		  <a href="#broadcasting" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Broadcasting</a>
		  <a href="#cache" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Cache</a>
		  <a href="#collections" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Collections</a>
		  <a href="#events" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Events</a>
		  <a href="#file" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">File Storage</a>
		  <a href="#helpers" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Helpers</a>
		  <a href="#mail" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Mail</a>
		  <a href="#notifications" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Notifications</a>
		  <a href="#package" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Package Development</a>
		  <a href="#queues" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Queues</a>
		  <a href="#task" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Task Scheduling</a>
		</div>
	</div>
</div><br>
{{-- laravel --}}
{{-- laravel --}}
{{-- laravel --}}
<h4 class="alert alert-warning" style="font-size: 18px;">Laravel Topic</h4>
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Introduction</strong></span><br>
	<span style="color:#20B2AA;"><li><strong>Connections Vs. Queues</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Driver Notes & Prerequisites</strong><span class="bg-dark">(!examine)</span></li></span><br>
</ul><br>
{{--  --}}
{{--  --}}
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Creating Jobs</strong></span><br>
	<span style="color:#20B2AA;"><li><strong>Generating Job Classes</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Class Structure</strong><span class="bg-dark">(!examine)</span></li></span><br>
</ul><br>
{{--  --}}
{{--  --}}
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Dispatching Jobs</strong></span><br>
	<span style="color:#20B2AA;"><li><strong>Delayed Dispatching</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Synchronous Dispatching</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Job Chaining</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Customizing The Queue & Connection</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Specifying Max Job Attempts / Timeout Values</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Rate Limiting</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Error Handling</strong><span class="bg-dark">(!examine)</span></li></span><br>
</ul><br>
{{--  --}}
{{--  --}}
<span style="color: #8A2BE2;font-size: 17px;" class="ml-5"><strong>#Queueing Closures</strong></span><br><br>
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Running The Queue Worker</strong></span><br>
	<span style="color:#20B2AA;"><li><strong>Queue Priorities</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Queue Workers & Deployment</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Job Expirations & Timeouts</strong><span class="bg-dark">(!examine)</span></li></span><br>
</ul><br>
{{--  --}}
{{--  --}}
{{--  --}}
<span style="color: #8A2BE2;font-size: 17px;" class="ml-5"><strong>#Supervisor Configuration</strong></span><br><br>
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Dealing With Failed Jobs</strong></span><br>
	<span style="color:#20B2AA;"><li><strong>Cleaning Up After Failed Jobs</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Failed Job Events</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Retrying Failed Jobs</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Ignoring Missing Models</strong><span class="bg-dark">(!examine)</span></li></span><br>
</ul><br>
{{--  --}}
{{--  --}}
{{--  --}}
<span style="color: #8A2BE2;font-size: 17px;" class="ml-5"><strong>#Job Events</strong></span><br><br>

<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}


<h2 id="task" class="text-center"><strong>Task Scheduling(c)</strong></h2>
<div class="row">
	<div class="col-md-2">
		<div class="list-group">
		  <a href="#artisan" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Artisan Console</a>
		  <a href="#broadcasting" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Broadcasting</a>
		  <a href="#cache" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Cache</a>
		  <a href="#collections" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Collections</a>
		  <a href="#events" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Events</a>
		  <a href="#file" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">File Storage</a>
		  <a href="#helpers" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Helpers</a>
		  <a href="#mail" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Mail</a>
		  <a href="#notifications" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Notifications</a>
		  <a href="#package" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Package Development</a>
		  <a href="#queues" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Queues</a>
		  <a href="#task" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Task Scheduling</a>
		</div>
	</div>
</div><br>
{{-- laravel --}}
{{-- laravel --}}
{{-- laravel --}}
<h4 class="alert alert-warning" style="font-size: 18px;">Laravel Topic</h4>
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Defining Schedules</strong></span><br>
	<span style="color:#20B2AA;"><li><strong>Scheduling Artisan Commands</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Scheduling Queued Jobs</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Scheduling Shell Commands</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Schedule Frequency Options</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Timezones</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Preventing Task Overlaps</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Running Tasks On One Server</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Background Tasks</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li><strong>Maintenance Mode</strong><span class="bg-dark">(!examine)</span></li></span><br>
</ul><br>


<span style="color: #8A2BE2;font-size: 17px;" class="ml-5"><strong>#Task Output</strong></span><br><br>
<span style="color: #8A2BE2;font-size: 17px;" class="ml-5"><strong>#Task Hooks</strong></span><br><br>
<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
@endsection
