@extends('backend.layouts.master')
@section('title','Products-Edit')
@section('content')
<!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          {{-- card add product--}}
          {{-- card add product--}}
          <div class="card">
            <div class="card-header text-center">
              Edit Product 
            </div>
            {{-- card-body --}}
            <div class="card-body">
              <form method="POST" action="{{ route('admin.product.update',$product -> id) }}" enctype="multipart/form-data">
              @csrf

                {{-- title feild--}}
                <div class="form-group row">
                  <label for="title" class="col-md-4 col-form-label  text-md-right">Product Title</label>
                  <div class="col-md-6">
                    <input name="title" id="title" type="text" class="form-control @error('title') is-invalid @enderror" value="{{ $product -> title }}">
                    <span id="title_error"></span>
                    @error('title')
                    <div class="alert alert-danger ">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                
                {{-- description feild --}}
                <div class="form-group row">
                  <label for="description" class="col-md-4 col-form-label text-md-right">{{ "description" }}</label>
                  <div class="col-md-6">
                    <textarea name="description" id="description" cols="53" rows="5">{{ $product -> description }}</textarea>
                    <span id="description_error"></span> 
                    @error('description')
                    <div class="alert alert-danger ">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                {{-- price field --}}
                <div class="form-group row">
                  <label for="price" class="col-md-4 col-form-label  text-md-right">{{"price"}}</label>
                  <div class="col-md-6">
                    <input name="price" id="price" type="number" class="form-control @error('price') is-invalid @enderror" value="{{ $product -> price }}">
                    <span id="price_error"></span>
                    @error('price')
                    <div class="alert alert-danger ">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                {{-- quantity field --}}
                <div class="form-group row">
                  <label for="quantity" class="col-md-4 col-form-label  text-md-right">{{"Quantity"}}</label>
                  <div class="col-md-6">
                    <input name="quantity" id="quantity" type="number" class="form-control @error('quantity') is-invalid @enderror" value="{{ $product -> quantity }}">
                    <span id="quantity_error"></span>
                    @error('quantity')
                    <div class="alert alert-danger ">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                {{-- image field    --}}
                <div class="form-group">
                  <div class="row">
                  <label for="oldimage" class="col-md-4 col-form-label  text-md-right">Category Old Image</label> <br>
                  <img src="{{ asset('images/products/'.$products -> image)}}" alt="image" width="100px" height="60px"> 
                </div>

                <div class="form-group row">
                  <label for="product_image" class="col-md-4 col-form-label  text-md-right">Product Image</label>
                    <div class="col-md-6">
                      <input type="file" class="form-control" name="product_image[]" id="product_image" >
                    </div>
                </div>

                {{-- submit  --}}
                <div class="form-group row mb-0">
                  <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-block btn-primary">
                    {{ "Update"}}
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
image name[] ???

 --}}