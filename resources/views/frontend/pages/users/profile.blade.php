@extends('frontend.pages.users.master')
@section('sub-content')
<div class="container">
	<div class="card-body  bg-secondary">
		<h4 class="text-center">Your profile information</h4>
                    {{-- register route that put data on DB --}}
                    {{-- register route that put data on DB --}}
                    <form method="POST" action="{{ route('user.profile.update') }}">
                        @csrf
                        @include('backend.partsials.message')
                        <div class="form-group row">
                            <label for="first_name" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ $user->first_name }}" required autocomplete="first_name" autofocus>

                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="last_name" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ $user->last_name }}" required autocomplete="last_name">
                                @error('fast_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ $user->username }}" required autocomplete="username">
                                @error('fast_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- should implement as division or district below mention  selected--}}
                         <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

                            <div class="col-md-2">
                              <select class="form_control" name="gender">
                                <option value="1">Male</option>
                                <option value="2">Female</option>
                              </select>

                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
						{{-- implement if user change email then verify                             --}}
                        <div class="form-group row">
                            <label for="eamil" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email}}" required >

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone_no" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                            <div class="col-md-6">
                                <input id="phone_no" type="number" class="form-control @error('phone_no') is-invalid @enderror" name="phone_no" value="{{ $user->phone_no }}" required >

                                @error('phone_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
						{{-- vvi selected user division --}}
						{{-- vvi selected user division --}}
						{{-- vvi selected user division --}}
						{{-- if deao kora jay --}}
                        <div class="form-group row">
                            <label for="division_id" class="col-md-4 col-form-label text-md-right">{{ __('Division') }}</label>
                            <div class="col-md-6">
                                <select  class="form-control" name="division_id" id="">
                                    {{-- <option value="">Please selecte your Division</option> --}}
                                    @foreach ($divisions as $division)
                                        <option value="{{ $division ->id }}" {{ $user ->division_id == $division->id ?'selected' : ''}}>{{ $division ->name }}</option>
                                    @endforeach
                                </select>
                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="district_id" class="col-md-4 col-form-label text-md-right">{{ __('District') }}</label>
                            <div class="col-md-6">
                                <select  class="form-control" name="district_id" id="">
                                    {{-- <option value="">Please selecte your District</option> --}}
                                    @foreach ($districts as $district)
                                    <option value="{{ $district ->id }}" {{ $user ->district_id == $district->id ?'selected' : ''}}>{{ $district ->name }}</option>
                                    @endforeach
                                </select>
                                
                            </div>
                        </div>
                            <div class="form-group row">
                                <label for="street_address" class="col-md-4 col-form-label text-md-right">{{ __('Street Address') }}</label>
                                <div class="col-md-6">
                                    <input id="street_address" type="text" class="form-control @error('street_address') is-invalid @enderror" name="street_address" value="{{ $user ->street_address}}" required >
                                    @error('street_address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="shipping_address" class="col-md-4 col-form-label text-md-right">{{ __('Shipping Address') }}</label>
                                <div class="col-md-6">
                                    <textarea id="shipping_address" type="text" class="form-control @error('shipping_address') is-invalid @enderror" name="shipping_address" rows="4" > 										{{ $user ->shipping_address}}
                                     </textarea>
                                    @error('shipping_address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        
                       
						{{-- also implement confirm pass later --}}
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('New Password(optional)') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                       

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Update Profile') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>	
</div>

			
@endsection