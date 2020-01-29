{{-- message for session --}}
{{-- has aca kina & get show that --}}
@if (Session::has('success'))
	<div class="alert alert-success  alert-dismissible text-center">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<p style="color: #00008B">{{ Session::get('success') }}</p>
	</div>						
@endif
	
@if (Session::has('sticky_error'))
	<div class="alert alert-danger  alert-dismissible">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<p>{{ Session::get('sticky_error') }}</p>
	</div>						
@endif	

{{-- 
custome >> the flash msg window with externel style sheet | internal without alert

 --}}