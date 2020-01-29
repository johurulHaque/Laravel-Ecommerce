@extends('backend.layouts.master')
@section('title','Category-Create')
@section('content')
<!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          {{-- card add product--}}
          {{-- card add product--}}
          <div class="card">
            <div class="card-header text-center">
              Add Category 
            </div>
            {{-- card-body --}}
            <div class="card-body">
              <form method="POST" action="{{ route('admin.category.store') }}" enctype="multipart/form-data">
              @csrf

                {{-- name feild--}}
                <div class="form-group row">
                  <label for="title" class="col-md-4 col-form-label  text-md-right">{{"Name"}}</label>
                  <div class="col-md-6">
                    <input name="name" id="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="Enter category name" autocomplete="name">
                    <span id="name_error"></span>
                    @error('name')
                    <div class="alert alert-danger ">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                
                {{-- description feild --}}
                <div class="form-group row">
                  <label for="description" class="col-md-4 col-form-label text-md-right">Description</label>
                  <div class="col-md-6">
                    <textarea name="description" id="description" cols="52" rows="5" placeholder="Enter category description"></textarea>
                    <span id="description_error"></span> 
                    @error('description')
                    <div class="alert alert-danger ">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                
                {{-- Parent category feild --}}
                <div class="form-group row">
                  <label for="Parent category" class="col-md-4 col-form-label text-md-right">{{ "Parent category(optional)" }}</label>
                  <div class="col-md-6">

                    <select class="form-control" name="parent_id">
                    <option value="">Please select a Parent category.</option>
                      @foreach ($main_categories as $category)
                        <option value="{{ $category -> id }}">{{ $category -> name }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>


                {{--single image field    --}}
                <div class="form-group row">
                  <label for="image" class="col-md-4 col-form-label  text-md-right">Product Image</label>
                    <div class="col-md-6">
                      <input type="file" class="form-control" name="image" id="image" >
                    </div>
                </div>

                {{-- submit  --}}
                <div class="form-group row mb-0">
                  <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-block btn-primary">
                    {{ "Add category"}}
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
     {{-- 

  prserve old image>>>
      --}}