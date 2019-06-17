<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		@include('partsial-link.style')
		@include('partsial-link.script')
	</head>
	<body>
		<div class="container">
			<h2 class="text-center text-white bg-secondary">Welcome to register with us</h2>
			<h4 class="text-right"><em>Its free and always will be</em></h4>
			{{-- user registration form --}}
			{{-- user registration form --}}
			<form method="POST" onkeyup="return reg_validation()" action="{{ route('storeRegistration') }}">
				@csrf
				{{-- name feild --}}
				<div class="form-group row">
					<label for="name" class="col-md-4 col-form-label text-md-right">{{"Name"}}</label>
					{{-- tooltip that is jquery stay in partsial-link>>script.link   --}}
					<div class="col-md-6" data-toggle="tooltip"  data-placement="right"  title="Alpha numeric preceding alphabate">
						<input id="name"  type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>
						{{-- js validation --}}
						<span id="name_error"></span>				
						{{-- show the error message target by id --}}
						@error('name')
						<div class="alert alert-danger ">{{ $message }}</div>
						@enderror
					</div>
				</div>
				{{-- email feild	 --}}
				<div class="form-group row">
					<label for="email" class="col-md-4 col-form-label  text-md-right">{{"E-mail Address"}}</label>
					<div class="col-md-6">
						<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email">
						<span id="email_error"></span>
						@error('email')
						<div class="alert alert-danger ">{{ $message }}</div>
						@enderror
					</div>
				</div>
				{{-- password feild --}}
				<div class="form-group row">
					<label for="password" class="col-md-4 col-form-label text-md-right">{{ "Password" }}</label>
					<div class="col-md-6">
						<input id="password" type="password" class="form-control  @error('password') is-invalid @enderror" name="password" data-toggle="tooltip"  data-placement="right"  title="Alpha numeric character"  autocomplete="new-password">
						<span id="pass_error"></span>	
						@error('password')
						<div class="alert alert-danger ">{{ $message }}</div>
						@enderror
					</div>
				</div>
				{{-- confirm password feild --}}
				<div class="form-group row">
					<label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ "Confirm Password"}}</label>
					<div class="col-md-6">
						<input id="password-confirm" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password">
					<span id="cpass_error"></span>
					@error('password')
						<div class="alert alert-danger ">{{ $message }}</div>
					@enderror
					
					</div>	
				</div>

				<div class="form-group row mb-0">
					<div class="col-md-6 offset-md-4">
						<button type="submit" class="btn btn-block btn-primary">
						{{ "Register"}}
						</button>
					</div>
				</div>

			</form>
		</div>
		
	</body>
</html>