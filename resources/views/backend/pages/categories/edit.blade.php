@extends('backend.layouts.master')
@section('title','Category-Edit')
@section('content')
<!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          {{-- card add product--}}
          {{-- card add product--}}
          <div class="card">
            <div class="card-header text-center">
              Edit Category 
            </div>
            {{-- card-body --}}
            <div class="card-body">
               <form method="POST" action="{{ route('admin.category.update',$category -> id) }}" enctype="multipart/form-data">
              @csrf

                {{-- name feild--}}
                <div class="form-group row">
                  <label for="title" class="col-md-4 col-form-label  text-md-right">{{"Name"}}</label>
                  <div class="col-md-6">
                    <input name="name" id="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{ $category -> name }}" autocomplete="name">
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
                    <textarea name="description" id="description" cols="53" rows="5" >{{ $category -> description }}</textarea>
                    <span id="description_error"></span> 
                    @error('description')
                    <div class="alert alert-danger ">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                
                {{-- Parent category feild --}}
                <div class="form-group row">
                  <label for="Parent category" class="col-md-4 col-form-label text-md-right">{{ "Parent category (optional)" }}</label>
                  <div class="col-md-6">
                    <select class="form-control" name="parent_id">
                      <option value="">Please select a Primary category.</option>
                      @foreach ($main_categories as $cat)
                        <option value="{{ $cat -> id }}"{{ $cat -> id == $category -> parent_id ? 'selected' : ''}}>{{ $cat -> name }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>

                {{-- if upper have as category then ovveride below and  then no get image .so becare ful--}}
                {{--single image field    --}}

                <div class="form-group">
                  <div class="row">
                  <label for="oldimage" class="col-md-4 col-form-label  text-md-right">Category Old Image</label> <br>
                  <img src="{{ asset('images/categories/'.$category -> image)}}" alt="image" width="100px" height="60px"> 
                </div>

                <div class="row">
                  <label for="image" class="col-md-4 col-form-label  text-md-right">Category New Image</label>
                    <div class="col-md-6">
                      <input type="file" class="form-control" name="image" id="image">
                    </div>
                </div>
                </div>

                {{-- submit  --}}
                <div class="form-group row mb-0">
                  <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-block btn-primary">
                    {{ "Update category"}}
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

{{-- image show direct not type>>
name[]>>      --}}