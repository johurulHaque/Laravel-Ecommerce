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
			<h2 class="text-center text-white bg-secondary">Welcome to connect with us</h2>
			<h4 class="text-right"><em>Its free and always will be</em></h4>
			{{-- user registration form --}}
			{{-- user registration form --}}
			<form method="POST" action="{{ route('checkLogedin') }}">
				@csrf
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

				<div class="form-group row mb-0">
					<div class="col-md-6 offset-md-4">
						<button type="submit" class="btn btn-block btn-primary">
						{{ "Login"}}
						</button>
					</div>
				</div>

			</form>
		</div>
		
	</body>
</html>