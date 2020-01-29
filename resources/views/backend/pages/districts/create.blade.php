@extends('backend.layouts.master')
@section('title','District-Create')
@section('content')
<!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          {{-- card for add product--}}
          {{-- card for  add product--}}
          <div class="card">
            <div class="card-header text-center">
              Add District 
            </div>
            {{-- card-body --}}
            {{-- card-body --}}
            <div class="card-body bg-img">
              <form method="POST" action="{{ route('admin.district.store') }}" enctype="multipart/form-data">
              @csrf
                {{-- name feild--}}
                {{-- name feild--}}
                <div class="form-group row">
                  <label for="title" class="col-md-4 col-form-label  text-md-right">District Name</label>
                  <div class="col-md-6">
                    <input name="name" id="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="Enter district name" autocomplete="name">
                    <span id="name_error"></span>
                    @error('name')
                    <div class="alert alert-danger ">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                
                {{-- division_id feild --}}
                {{-- division_id feild --}}
                <div class="form-group row">
                  <label for="division_id" class="col-md-4 col-form-label text-md-right">Division Name</label>
                  <div class="col-md-6">
                    <select name="division_id" id="division_id" class="form-control" >
                      {{-- <option value="">Plese select a division</option> --}}
                      @foreach ($divisions as $division)
                        <option value="{{ $division ->id }}">{{ $division ->name }}</option>
                      @endforeach
                    </select>
                    <span id="priority_error"></span> 
                    @error('division_id')
                    <div class="alert alert-danger ">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
            

                {{-- submit button --}}
                {{-- submit button --}}
                <div class="form-group row mb-0">
                  <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-block btn-primary">
                    {{ "Add District"}}
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- main-panel ends -->
@endsection
{{--@section('css')
 <style>
  .bg-img {
  background-image: url("../images/laravel.jpg"); 
  } 
</style>

@endsection    --}}  

{{-- 
select a >>> pleease select division why reapate 

frontend validation>>>js/jquery

 --}}