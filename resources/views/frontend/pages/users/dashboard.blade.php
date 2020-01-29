@extends('frontend.pages.users.master')
@section('sub-content')

<h4 class="text-center text-success">welcome {{ $user->first_name . $user->last_name }} to the Dashboard</h1>
	<p>You can change your information here.</p>
			
@endsection