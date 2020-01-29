@extends('backend.layouts.master')
@section('content')
@section('title','Products-Create')
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    {{-- card add product--}}
    {{-- card add product--}}
    <div class="card">
      <div class="card-header text-center">
        Add Products
      </div>
      {{-- card-body --}}
      <div class="card-body">
        <form method="POST" action="{{ route('admin.product.store') }}" enctype="multipart/form-data">
          @csrf
          @include('backend.partsials.message')
          {{-- title feild--}}
          <div class="form-group row">
            <label for="title" class="col-md-4 col-form-label  text-md-right">Product title</label>
            <div class="col-md-6">
              <input name="title" id="title" type="text" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" placeholder="Enter product title" autocomplete="title">
              <span id="title_error"></span>
              @error('title')
              <div class="alert alert-danger ">{{ $message }}</div>
              @enderror
            </div>
          </div>
          
          {{-- description feild --}}
          <div class="form-group row">
            <label for="description" class="col-md-4 col-form-label text-md-right">Description</label>
            <div class="col-md-6">
              <textarea name="description" id="description" cols="58" rows="5"></textarea>
              <span id="description_error"></span>
              @error('description')
              <div class="alert alert-danger ">{{ $message }}</div>
              @enderror
            </div>
          </div>
          {{-- price field --}}
          <div class="form-group row">
            <label for="price" class="col-md-4 col-form-label  text-md-right">{{"Price"}}</label>
            <div class="col-md-6">
              <input name="price" id="price" type="number" class="form-control @error('price') is-invalid @enderror" value="{{ old('price') }}" placeholder="Enter product price" autocomplete="price">
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
              <input name="quantity" id="quantity" type="number" class="form-control @error('quantity') is-invalid @enderror" value="{{ old('quantity') }}" placeholder="Enter product quantity"  autocomplete="quantity">
              <span id="quantity_error"></span>
              @error('quantity')
              <div class="alert alert-danger ">{{ $message }}</div>
              @enderror
            </div>
          </div>
          {{-- category field --}}
          {{-- value pass korar no need 12@15.28 --}}
          <div class="form-group row">
            <label for="category" class="col-md-4 col-form-label  text-md-right">Select Category</label>
            <div class="col-md-6">
              <select class="form-control" name="category_id" id="category_id">
                <option value="">Please select a category</option>
                @foreach (App\Models\Category::orderBy('name','asc') -> where('parent_id',NULL)->get() as $parent)
                <option value="{{ $parent -> id }}">{{ $parent -> name }}</option>
                
                {{-- sub category --}}
                @foreach (App\Models\Category::orderBy('name','asc') -> where('parent_id',$parent -> id)->get() as $child)
                
                <option value="{{ $child -> id }}">------>{{ $child -> name }}</option>
                @endforeach
                @endforeach
              </select>
              <span id="quantity_error"></span>
              @error('category')
              <div class="alert alert-danger ">{{ $message }}</div>
              @enderror
            </div>
          </div>
          {{-- brand  field--}}
          <div class="form-group row">
            <label for="brand" class="col-md-4 col-form-label  text-md-right">Select  Brand</label>
            <div class="col-md-6">
              <select class="form-control" name="brand_id" id="brand_id">
                <option value="">Please select Brand</option>
                @foreach (App\Models\Brand::orderBy('name','asc')->get() as $brand)
                <option value="{{ $brand -> id }}">{{ $brand -> name }}</option>
                
                @endforeach
              </select>
              <span id="quantity_error"></span>
              @error('category')
              <div class="alert alert-danger ">{{ $message }}</div>
              @enderror
            </div>
          </div>
          {{--multiple image field    --}}
          <div class="form-group">
            <label for="product_image">Product Image</label>
            
            <div class="row">
              <div class="col-md-4">
                <input type="file" class="form-control" name="product_image[]" id="product_image" >
              </div>
              {{-- <div class="col-md-4">
                <input type="file" class="form-control" name="product_image[]" id="product_image" >
              </div>
              <div class="col-md-4">
                <input type="file" class="form-control" name="product_image[]" id="product_image" >
              </div>
              <div class="col-md-4">
                <input type="file" class="form-control" name="product_image[]" id="product_image" >
              </div>
              <div class="col-md-4">
                <input type="file" class="form-control" name="product_image[]" id="product_image" >
              </div> --}}
            </div>
          </div>
          {{-- submit  --}}
          <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
              <button type="submit" class="btn btn-block btn-primary">
              {{ "Add product"}}
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
br in image>>not work

 --}}