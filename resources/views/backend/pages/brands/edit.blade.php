@extends('backend.layouts.master')
@section('title','Brand-Edit')
@section('content')
<!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          {{-- card add product--}}
          {{-- card add product--}}
          <div class="card">
            <div class="card-header text-center">
              Edit brand 
            </div>
            {{-- card-body --}}
            <div class="card-body">
               <form method="POST" action="{{ route('admin.brand.update',$brand -> id) }}" enctype="multipart/form-data">
              @csrf

                {{-- name feild--}}
                <div class="form-group row">
                  <label for="title" class="col-md-4 col-form-label  text-md-right">Brand name</label>
                  <div class="col-md-6">
                    <input name="name" id="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{ $brand -> name }}" autocomplete="name">
                    <span id="name_error"></span>
                    @error('name')
                    <div class="alert alert-danger ">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                
                {{-- description feild --}}
                <div class="form-group row">
                  <label for="description" class="col-md-4 col-form-label text-md-right">Description (optional)</label>
                  <div class="col-md-6">
                    <textarea name="description" id="description" cols="53" rows="5" >{{ $brand -> description }}</textarea>
                    <span id="description_error"></span> 
                    @error('description')
                    <div class="alert alert-danger ">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                

                {{-- if upper have as brand then ovveride below and  then no get image .so becare ful--}}
                {{--single image field    --}}
                <div class="form-group">
                  <div class="row">
                    <label for="oldimage" class="col-md-4 col-form-label  text-md-right">Brand Old Image</label>
                    <img src="{{ asset('images/brands/'.$brand -> image)}}" alt="image" width="100px" height="60px"> <br>  
                  </div>
                  
                  <div class="row">
                    <label for="image" class="col-md-4 col-form-label  text-md-right">Brand New Image (optional)</label>
                    <div class="col-md-6">
                      <input type="file" class="form-control" name="image" id="image" >    
                    </div>
                    
                  </div>
                  
                </div>

                {{-- submit  --}}
                <div class="form-group row mb-0">
                  <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-block btn-info">
                    {{ "Update Brand"}}
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
input field and text area same >>font,size etc
  --}}