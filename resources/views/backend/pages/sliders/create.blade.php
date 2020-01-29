@extends('backend.layouts.master')
@section('title','Slider-Create')
@section('content')
<!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          {{-- card add product--}}
          {{-- card add product--}}
          <div class="card">
            <div class="card-header text-center">
              Add Product 
            </div>
            {{-- card-body --}}
            <div class="card-body">
              <form method="POST" action="{{ route('admin.division.store') }}" enctype="multipart/form-data">
              @csrf

                {{-- name feild--}}
                <div class="form-group row">
                  <label for="title" class="col-md-4 col-form-label  text-md-right">{{"Name"}}</label>
                  <div class="col-md-6">
                    <input name="name" id="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="Enter brand name" autocomplete="name">
                    <span id="name_error"></span>
                    @error('name')
                    <div class="alert alert-danger ">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                
                {{-- priority feild --}}
                <div class="form-group row">
                  <label for="priority" class="col-md-4 col-form-label text-md-right">{{ "priority" }}</label>
                  <div class="col-md-6">
                    <input name="priority" id="priority" placeholder="Enter brand priority">
                    <span id="priority_error"></span> 
                    @error('priority')
                    <div class="alert alert-danger ">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
            

                {{-- submit  --}}
                <div class="form-group row mb-0">
                  <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-block btn-primary">
                    {{ "Add Brand"}}
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>>
      </div>
      <!-- main-panel ends -->
@endsection     