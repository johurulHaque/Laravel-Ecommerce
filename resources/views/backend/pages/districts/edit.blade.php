@extends('backend.layouts.master')
@section('title','District-Edit')
@section('content')
<!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          {{-- card add product--}}
          {{-- card add product--}}
          <div class="card">
            <div class="card-header text-center">
              Edit District 
            </div>
            {{-- card-body --}}
            <div class="card-body">
              <form method="POST" action="{{ route('admin.district.update',$district -> id) }}" enctype="multipart/form-data">
              @csrf

                {{-- name feild--}}
                <div class="form-group row">
                  <label for="title" class="col-md-4 col-form-label  text-md-right">{{"District Name"}}</label>
                  <div class="col-md-6">
                    <input name="name" id="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{ $district -> name }}" autocomplete="name">
                    <span id="name_error"></span>
                    @error('name')
                    <div class="alert alert-danger ">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                
                {{-- division_id feild --}}
                <div class="form-group row">
                  <label for="division_id" class="col-md-4 col-form-label text-md-right">Division Name</label>
                  <div class="col-md-6">
                    <select name="division_id" id="division_id" class="form-control">
                      @foreach ($divisions as $divi)
                      {{-- access non objective property --}}
                        <option value="{{ $divi ->id }}"{{ $divi -> id == $district->id ? 'selected' : ''}}>{{ $divi ->name }}</option>
                      @endforeach
                    </select>
                    <span id="priority_error"></span> 
                    @error('division_id')
                    <div class="alert alert-danger ">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
            

                {{-- submit  --}}
                <div class="form-group row mb-0">
                  <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-block btn-primary">
                    {{ "Update District"}}
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