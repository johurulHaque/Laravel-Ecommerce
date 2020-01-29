@extends('backend.layouts.master')
@section('title','Brand-Create')
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
              <form method="POST" action="{{ route('admin.brand.store') }}" enctype="multipart/form-data">
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
                
                {{-- description feild --}}
                <div class="form-group row">
                  <label for="description" class="col-md-4 col-form-label text-md-right">{{ "Description" }}</label>
                  <div class="col-md-6">
                    <textarea name="description" id="description" cols="58" rows="5" placeholder="Enter brand description"></textarea>
                    <span id="description_error"></span> 
                    @error('description')
                    <div class="alert alert-danger ">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
            


                {{--single image field    --}}
                <div class="form-group row">
                  <label for="image" class="col-md-4 col-form-label  text-md-right">Brand Image(optional)</label>
                  <div class="col-md-6">
                      <input type="file" class="form-control" name="image" id="image" >

                    <span id="image"></span> 
                    @error('image')
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
        </div>
      </div>
      <!-- main-panel ends -->
@endsection
{{--
different brands in differet type >>like sari ,tops etc different insertion seperate path

>>> if product iteam is 0 than show empty  msg and also a option for add product there

text area >>> description filed not preseerve the old name ??

brand image >>not store in DB but retrive is ok when manual inserts
  --}}