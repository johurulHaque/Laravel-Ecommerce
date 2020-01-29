@extends('LaraBook.index')
@section('title','Eloquent')
@section('content')
<h2 id="eloquent" class="text-center"><strong>Eloquent Getting Started(c)</strong></h2>
<div class="row">
	<div class="col-md-2">
		<div class="list-group">
		  <a href="#eloquent" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Database:Started</a>
		  <a href="#relation" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Relationships</a>
		  <a href="#collections" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Collections</a>
		  <a href="#mutators" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Mutators</a>
		  <a href="#Resources" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">API Resources</a>
		  <a href="#serialization" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Serialization</a>
		</div>
	</div>
</div><br>

<hr style="border-top:2px dashed orange;">
<hr style="border-top:2px dashed orange;">
<hr style="border-top:2px dashed orange;">
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}

{{-- Model --}}
{{-- Model --}}
{{-- Model --}}

<h2 id="model" class="text-center"><strong>Model(c)</strong></h2>
<div class="row">
	<div class="col-md-2">
		<div class="list-group">
		  <a href="#url" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">URL Generation</a>
		  <a href="#session" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Session</a>
		  <a href="#validation" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Validation</a>
		  <a href="#error" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Error Handling</a>
		  <a href="#loggin" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Loggin Handling</a>

		  <a href="#form" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Form</a>
		  <a href="#model" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Model</a>
		</div>
	</div>
</div><br>
<img src="{{ asset('images/larabook/model.png') }} " alt="model"  style="width: 550px;"> <br><br>
<span class="alert alert-primary" style="font-size: 18px;">Model at a galance</span><br><br>    
  <ul style="list-style-type:decimal;font-size: 17px;">
    <li>Each database table has a corresponding "Model"<span class="text-danger" style="font-size: 18px;">(Singular name of model represent its plural table)</span> which is used to interact(to query for data in your tables) with that table. </li>
    <li>Eloquent is a way that make ralation between model object & DB table for interaction.(my)</li>
    <li>All Eloquent models extend Illuminate\Database\Eloquent\Model class.</li>
  </ul>
  {{-- laravel --}}
  {{-- laravel --}}
<h4 class="alert alert-warning" style="font-size: 18px;">Laravel Topic</h4>
<ul style="list-style-type:decimal;font-size: 17px;">
#Eloquent Model Conventions
	<li><strong>Table Names</strong></li>
	<li><strong>Primary Keys</strong>(non-incrementing or a non-numeric primary key)</li>
	<li><strong>Timestamps</strong>(!examine...customize the format of your timestamps,customize the name of your timestamps)</li>
	<li><strong>Database Connection</strong>(!examine...If you would like to specify a different connection for the model,)</li>
	<li><strong>Default Attribute Values</strong>(!examine...)</li>
</ul>
<ul style="list-style-type:decimal;font-size: 17px;">
#Retrieving Models
	<li><strong></strong></li>
	<li><strong></strong></li>
	<li><strong></strong></li>
</ul>
{{-- laravel --}}
{{-- laravel --}}
{{-- laravel --}}
<h4 class="alert alert-warning" style="font-size: 18px;">Laravel Topic</h4>
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Defining Models</strong></span><br>
	<span style="color:#20B2AA;"><li class="ml-4"><strong>Eloquent Model Conventions</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Table Names</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Primary Keys</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Timestamps</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Database Connection</span><span class="bg-dark">(!examine)</span><br><br>

	<span style="color:#20B2AA;"><li class="ml-4"><strong>Default Attribute Values</strong><span class="bg-dark">(!examine)</span></li></span>
</ul><br>
{{--  --}}
{{--  --}}
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Retrieving Models</strong></span><br>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Adding Additional Constraints</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Refreshing Models</span><span class="bg-dark">(!examine)</span><br>

	<span style="color:#20B2AA;"><li class="ml-4"><strong>Collections</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li class="ml-4"><strong>Chunking Results</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Using Cursors</span><span class="bg-dark">(!examine)</span><br><br>
</ul><br>
{{--  --}}
{{--  --}}
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
	<span style="color: #8A2BE2;font-size: 17px;"><strong>#Retrieving Single Models / Aggregates</strong></span><br>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Not Found Exceptions</span><span class="bg-dark">(!examine)</span><br><br>

	<span style="color:#20B2AA;"><li class="ml-4"><strong>Retrieving Aggregates</strong><span class="bg-dark">(!examine)</span></li></span><br>
</ul><br>
{{--  --}}
{{--  --}}
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Inserting & Updating Models</strong></span><br>
	<span style="color:#20B2AA;"><li class="ml-4"><strong>Inserts</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li class="ml-4"><strong>Updates</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Mass Updates</span><span class="bg-dark">(!examine)</span><br><br>

	<span style="color:#20B2AA;"><li class="ml-4"><strong>Mass Assignment</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Guarding Attributes</span><span class="bg-dark">(!examine)</span><br><br>

	<span style="color:#20B2AA;"><li class="ml-4"><strong>Other Creation Methods</strong><span class="bg-dark">(!examine)</span></li></span><br>
</ul><br>
{{--  --}}
{{--  --}}
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Deleting Models</strong></span><br>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Deleting An Existing Model By Key
</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Deleting Models By Query</span><span class="bg-dark">(!examine)</span><br><br>

	<span style="color:#20B2AA;"><li class="ml-4"><strong>Soft Deleting</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li class="ml-4"><strong>Querying Soft Deleted Models</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Including Soft Deleted Models</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Retrieving Only Soft Deleted Models</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Restoring Soft Deleted Models</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Permanently Deleting Models</span><span class="bg-dark">(!examine)</span><br>
</ul><br>
{{--  --}}
{{--  --}}
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Query Scopes</strong></span><br>
	<span style="color:#20B2AA;"><li class="ml-4"><strong>Global Scopes</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Writing Global Scopes</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Applying Global Scopes</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Anonymous Global Scopes</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Removing Global Scopes</span><span class="bg-dark">(!examine)</span><br><br>

	<span style="color:#20B2AA;"><li class="ml-4"><strong>Local Scopes</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Utilizing A Local Scope</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Dynamic Scopes</span><span class="bg-dark">(!examine)</span><br>
</ul><br>
{{--  --}}
{{--  --}}
<span style="color: #8A2BE2;font-size: 17px;" class="ml-4"><strong>#Comparing Models</strong></span><br><br>

{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Events</strong></span><br>
	<span style="color:#20B2AA;"><li class="ml-4"><strong>Observers</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Defining Observers</span><span class="bg-dark">(!examine)</span><br>
</ul><br>


<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
<h2 id="relation" class="text-center"><strong>Relationships(c)</strong></h2>
<div class="row">
	<div class="col-md-2">
		<div class="list-group">
		  <a href="#eloquent" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Database:Started</a>
		  <a href="#relation" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Relationships</a>
		  <a href="#collections" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Collections</a>
		  <a href="#mutators" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Mutators</a>
		  <a href="#Resources" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">API Resources</a>
		  <a href="#serialization" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Serialization</a>
		</div>
	</div>
</div><br>
{{-- laravel --}}
{{-- laravel --}}
{{-- laravel --}}
<h4 class="alert alert-warning" style="font-size: 18px;">Laravel Topic</h4>
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Defining Relationships</strong></span><br>
	<span style="color:#20B2AA;"><li class="ml-4"><strong>One To One</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Defining The Inverse Of The Relationship</span><span class="bg-dark">(!examine)</span><br>

	<span style="color:#20B2AA;"><li class="ml-4"><strong>One To Many</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li class="ml-4"><strong>One To Many(Inverse)</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li class="ml-4"><strong>Many To Many</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Defining The Inverse Of The Relationship</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Retrieving Intermediate Table Columns</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Customizing The pivot Attribute Name</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Filtering Relationships Via Intermediate Table Columns</span><span class="bg-dark">(!examine)</span><br>

	<span style="color:#20B2AA;"><li class="ml-4"><strong>Defining Custom Intermediate Table Models</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Custom Pivot Models And Incrementing IDs</span><span class="bg-dark">(!examine)</span><br>


	<span style="color:#20B2AA;"><li class="ml-4"><strong>Has One Through</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li class="ml-4"><strong>Has Many Through</strong><span class="bg-dark">(!examine)</span></li></span><br>
</ul><br>
{{--  --}}
{{--  --}}
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Polymorphic Relationships</strong></span><br>
	<span style="color:#20B2AA;"><li class="ml-4"><strong>One To One (Polymorphic)</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Table Structure</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Model Structure</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Retrieving The Relationship</span><span class="bg-dark">(!examine)</span><br><br>

	<span style="color:#20B2AA;"><li class="ml-4"><strong>One To Many (Polymorphic)</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Table Structure</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Model Structure</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Retrieving The Relationship</span><span class="bg-dark">(!examine)</span><br><br>

	<span style="color:#20B2AA;"><li class="ml-4"><strong>Many To Many (Polymorphic)</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Table Structure</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Model Structure</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Defining The Inverse Of The Relationship</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Retrieving The Relationship</span><span class="bg-dark">(!examine)</span><br><br>

	<span style="color:#20B2AA;"><li class="ml-4"><strong>Custom Polymorphic Types</strong><span class="bg-dark">(!examine)</span></li></span><br>
</ul><br>
{{--  --}}
{{--  --}}
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Querying Relations</strong></span><br>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Chaining orWhere Clauses After Relationships</span><span class="bg-dark">(!examine)</span><br>

	<span style="color:#20B2AA;"><li class="ml-4"><strong>Relationship Methods Vs. Dynamic Properties</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li class="ml-4"><strong>Querying Relationship Existence</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li class="ml-4"><strong>Querying Relationship Absence</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li class="ml-4"><strong>Querying Polymorphic Relationships</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li class="ml-4"><strong>Counting Related Models</strong><span class="bg-dark">(!examine)</span></li></span><br>
</ul><br>

{{--  --}}
{{--  --}}
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Eager Loading</strong></span><br>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Eager Loading Multiple Relationships
</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Nested Eager Loading</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Nested Eager Loading morphTo Relationships</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Eager Loading Specific Columns</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Eager Loading By Default</span><span class="bg-dark">(!examine)</span><br><br>
	
	<span style="color:#20B2AA;"><li class="ml-4"><strong>Constraining Eager Loads</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li class="ml-4"><strong>Lazy Eager Loading</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Nested Lazy Eager Loading & morphTo</span><span class="bg-dark">(!examine)</span><br>
</ul><br>
{{--  --}}
{{--  --}}
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Inserting & Updating Related Models</strong></span><br>
	<span style="color:#20B2AA;"><li class="ml-4"><strong>The save Method</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Recursively Saving Models & Relationships</span><span class="bg-dark">(!examine)</span><br>

	<span style="color:#20B2AA;"><li class="ml-4"><strong>The create Method</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li class="ml-4"><strong>Belongs To Relationships</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Default Models</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;"><li class="ml-4"><strong>Many To Many Relationships</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Attaching / Detaching</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Syncing Associations</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Toggling Associations</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Saving Additional Data On A Pivot Table</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Updating A Record On A Pivot Table</span><span class="bg-dark">(!examine)</span><br>

</ul><br>
{{--  --}}
{{--  --}}
{{--  --}}
<span style="color: #8A2BE2;font-size: 17px;" class="ml-4"><strong>#Touching Parent Timestamps</strong></span><br><br>


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
		  <a href="#eloquent" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Database:Started</a>
		  <a href="#relation" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Relationships</a>
		  <a href="#collections" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Collections</a>
		  <a href="#mutators" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Mutators</a>
		  <a href="#Resources" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">API Resources</a>
		  <a href="#serialization" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Serialization</a>
		</div>
	</div>
</div><br>
{{-- laravel --}}
{{-- laravel --}}
{{-- laravel --}}
<h4 class="alert alert-warning" style="font-size: 18px;">Laravel Topic</h4>
{{--  --}}
<span style="color: #8A2BE2;font-size: 17px;" class="ml-4"><strong>#Available Methods</strong></span><br><br>{{--  --}}
<span style="color: #8A2BE2;font-size: 17px;" class="ml-4"><strong>#Custom Collections</strong></span><br><br>


<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
<h2 id="mutators" class="text-center"><strong>Mutators(c)</strong></h2>
<div class="row">
	<div class="col-md-2">
		<div class="list-group">
		  <a href="#eloquent" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Database:Started</a>
		  <a href="#relation" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Relationships</a>
		  <a href="#collections" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Collections</a>
		  <a href="#mutators" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Mutators</a>
		  <a href="#Resources" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">API Resources</a>
		  <a href="#serialization" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Serialization</a>
		</div>
	</div>
</div><br>
{{-- laravel --}}
{{-- laravel --}}
{{-- laravel --}}
<h4 class="alert alert-warning" style="font-size: 18px;">Laravel Topic</h4>
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Accessors & Mutators</strong></span><br>
	<span style="color:#20B2AA;"><li class="ml-4"><strong>Defining An Accessor</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li class="ml-4"><strong>Defining A Mutator</strong><span class="bg-dark">(!examine)</span></li></span><br>
</ul><br>

{{--  --}}
<span style="color: #8A2BE2;font-size: 17px;" class="ml-4"><strong>#Date Mutators</strong></span><br>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Date Formats</span><span class="bg-dark">(!examine)</span><br>
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Attribute Casting</strong></span><br>
	<span style="color:#20B2AA;"><li class="ml-4"><strong>Array & JSON Casting</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;"><li class="ml-4"><strong>Date Formats</strong><span class="bg-dark">(!examine)</span></li></span>
</ul><br>
<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
<h2 id="Resources" class="text-center"><strong>API Resources(c)</strong></h2>
<div class="row">
	<div class="col-md-2">
		<div class="list-group">
		  <a href="#eloquent" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Database:Started</a>
		  <a href="#relation" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Relationships</a>
		  <a href="#collections" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Collections</a>
		  <a href="#mutators" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Mutators</a>
		  <a href="#Resources" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">API Resources</a>
		  <a href="#serialization" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Serialization</a>
		</div>
	</div>
</div><br>
{{-- laravel --}}
{{-- laravel --}}
{{-- laravel --}}
<h4 class="alert alert-warning" style="font-size: 18px;">Laravel Topic</h4>
{{--  --}}
<span style="color: #8A2BE2;font-size: 17px;" class="ml-4"><strong>#Generating Resources</strong></span><br>
<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Resource Collections</span><span class="bg-dark">(!examine)</span><br><br>

{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Concept Overview</strong></span><br>
	<span style="color:#20B2AA;"><li class="ml-4"><strong>Resource Collections</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Preserving Collection Keys</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Customizing The Underlying Resource Class
</span><span class="bg-dark">(!examine)</span><br>

</ul><br>
{{--  --}}
{{--  --}}
{{--  --}}
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Writing Resources</strong></span><br>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Relationships</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Resource Collections</span><span class="bg-dark">(!examine)</span><br>

	<span style="color:#20B2AA;"><li class="ml-4"><strong>Data Wrapping</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li class="ml-4"><strong>Wrapping Nested Resources</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li class="ml-4"><strong>Data Wrapping And Pagination</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li class="ml-4"><strong>Pagination</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li class="ml-4"><strong>Conditional Attributes</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Merging Conditional Attributes</span><span class="bg-dark">(!examine)</span><br>


	<span style="color:#20B2AA;"><li class="ml-4"><strong>Conditional Relationships</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Conditional Pivot Information</span><span class="bg-dark">(!examine)</span><br>

	<span style="color:#20B2AA;"><li class="ml-4"><strong>Adding Meta Data</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Top Level Meta Data</span><span class="bg-dark">(!examine)</span><br>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Adding Meta Data When Constructing Resources</span><span class="bg-dark">(!examine)</span><br>
</ul><br>
{{--  --}}
{{--  --}}
{{--  --}}
<span style="color: #8A2BE2;font-size: 17px;" class="ml-4"><strong>#Resource Responses</strong></span><br><br>
<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
<h2 id="serialization" class="text-center"><strong>serialization(c)</strong></h2>
<div class="row">
	<div class="col-md-2">
		<div class="list-group">
		  <a href="#eloquent" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Database:Started</a>
		  <a href="#relation" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Relationships</a>
		  <a href="#collections" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Collections</a>
		  <a href="#mutators" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Mutators</a>
		  <a href="#Resources" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">API Resources</a>
		  <a href="#serialization" class="list-group-item list-group-item-action btn btn-primary text-center" style="color:white;">Serialization</a>
		</div>
	</div>
</div><br>
{{-- laravel --}}
{{-- laravel --}}
{{-- laravel --}}
<h4 class="alert alert-warning" style="font-size: 18px;">Laravel Topic</h4>
<ul style="list-style-type:decimal;font-size: 17px;">
<span style="color: #8A2BE2;font-size: 17px;"><strong>#Serializing Models & Collections</strong></span><br>
	<span style="color:#20B2AA;"><li class="ml-4"><strong>Serializing To Arrays</strong><span class="bg-dark">(!examine)</span></li></span><br>
	<span style="color:#20B2AA;"><li class="ml-4"><strong>Serializing To JSON</strong><span class="bg-dark">(!examine)</span></li></span>
	<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Relationships</span><span class="bg-dark">(!examine)</span><br>
</ul><br>
{{--  --}}
{{--  --}}
{{--  --}}
<span style="color: #8A2BE2;font-size: 17px;" class="ml-4"><strong>#Hiding Attributes From JSON</strong></span><br>
<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Temporarily Modifying Attribute Visibility</span><span class="bg-dark">(!examine)</span><br><br>

<span style="color: #8A2BE2;font-size: 17px;" class="ml-4"><strong>#Appending Values To JSON</strong></span><br>
<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Appending At Run Time</span><span class="bg-dark">(!examine)</span><br><br>


<span style="color: #8A2BE2;font-size: 17px;" class="ml-4"><strong>#Date Serialization</strong></span><br>
<span style="color:#20B2AA;font-size: 17px" class="ml-4">*Customizing The Date Format Per Attribute
</span><span class="bg-dark">(!examine)</span><br><span style="color:#20B2AA;font-size: 17px" class="ml-4">*Global Customization Via Carbon</span><span class="bg-dark">(!examine)</span><br>


<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
<hr style="border-top: 2px dashed orange;">
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
{{-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
@endsection
