@extends('frontend.layouts.master')
@section('content')
<hr>	
<hr>
<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="list-group">
					<a href="" class="list-group-item text-center"><img src="{{ App\Helpers\ImageHelper::getUserImage(Auth::user()->id) }}" alt="" class="img rounded-circle" style="width: 150px"></a>
					<a href="{{ route('user.dashboard') }}" class="list-group-item {{ route::is('user.dashboard') ? 'active' : ''}}">Dashboard</a>
					
					<a href="{{ route('user.profile') }}" class="list-group-item {{ route::is('user.profile') ? 'active' : ''}}">Update profile</a>
					
				</div>
			</div>
			<div class="col-md-8">
				<div class="card card-body">
					@yield('sub-content')	
				</div>
				
			</div>
		</div>
	</div>	
@endsection